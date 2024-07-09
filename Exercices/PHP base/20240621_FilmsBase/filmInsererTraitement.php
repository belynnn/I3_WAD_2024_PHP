<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chips'Flix • Données du film insérées</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
        include "./nav.php";
    ?>
    
    <h1>Les informations ont bien été ajoutées à la base de données.</h1>
    <h2>Merci !</h2>

    <?php
        var_dump($_POST);
        var_dump($_FILES);
        
        // DEBUT Upload du fichier
        // 1. Créer un nom unique unique pour le fichier
        $dossier = "./uploads";
        $nomFichier = uniqid() . date("h-i-s") . $_FILES['image']['name'];
        $cheminComplet = $dossier ."/". $nomFichier;

        // 2. Déplacer le fichier temporaire et lui donner le nom choisi
        move_uploaded_file($_FILES['image']['tmp_name'], $cheminComplet);

        print ($cheminComplet);
        // FIN Upload du fichier

        // 1. Obtenir les données du formulaire 
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $duree = $_POST['duree'];

        // Attention une fois envoyé, il devient FILES et non plus POST !!!!!
        $image = $_FILES['image'];
        
        // 2. Connecter à la BD (PDO)
        include "./db/config.php";

        try{ 
            // essayer de connecter
            $cnx = new PDO (DSN, USERNAME, PASSWORD);
        }
        catch (Exception $e){
            // problème de connexion!!
            // instructions à suivre en cas de 
            // problème de connexion
            print ("<h3>Un problème est survenu</h3>");
            print ("<img src='./image.jpg'>");
            print ("<a href='./accueil.php'>Accueil</a>");

            // var_dump ($e->getMessage());
            die();
        }

        // 3. Créer une requête du type INSERT
        $sql = "INSERT INTO film (id, titre, description,duree,image) VALUES (null, :titre, :description, :duree, :image)";

        // 4. Préparer la requête
        $stmt = $cnx->prepare ($sql); // pbjet PDOStatement

        $stmt->bindValue(":titre", $titre);
        $stmt->bindValue(":description", $description);
        $stmt->bindValue(":duree", $duree);
        $stmt->bindValue(":image", $nomFichier);

        // 5. Lancer la requête
        $stmt->execute();

        // var_dump ($stmt->errorInfo());
        // var_dump ($cnx->errorInfo());
    ?>
</body>

</html>