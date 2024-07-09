<!DOCTYPE html>
<html lang="fr-be">

<?php
    include "./head.php";
?>

<body>
<?php
    include "./checkSession.php";
    include "./nav.php";
?>
<?php
    $idFilm = $_GET['idFilm'];

    include "./db/config.php";

    try {
        $cnx = new PDO(DSN, USERNAME, PASSWORD);
    } catch (Exception $e) {
        print("<h3>Un problème est survenu</h3>");
        print("<img src='./image.jpg'>");
        print("<a href='./accueil.php'>Accueil</a>");
    
        die();
    }

    // $sql = "SELECT * FROM film WHERE id=:id";
    $sql = "SELECT *, AVG(valeur) AS moyenne FROM film INNER JOIN note ON film.id = note.idFilm WHERE film.id=:id";

    // SELECT AVG(valeur) AS moyenne FROM note WHERE idFilm=14;
    // SELECT *, AVG(valeur) AS moyenne FROM film INNER JOIN note ON film.id = note.idFilm WHERE film.id=14; 

    $stmt = $cnx->prepare($sql);

    $stmt->bindValue(":id", $idFilm);

    $stmt->execute();

    $film = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($film);
    
    print ($film['titre']);
    print ("<div>Notes des utilisateurs :
                <div id='divNote' data-moyenne='".$film['moyenne']."'></div>
            </div>");
    print ("<div>Votre note :
                <div id='divUserNote' data-usernote='".$film['valeur']."'></div>
            </div>");
    print ('<br>');
    print ("<img alt='Image not found' class='affiche' src='./uploads/". $film['image'] ."'>");
    print ('<br>');
    print ($film['description']);
    print ('<br>');
    print ($film['duree']);
?>

<script>
    // Création des étoiles dans la div divNote
    let divNote = document.querySelector('#divNote');
    let menuEtoile = jSuites.rating(divNote, {
        value: divNote.dataset.moyenne,
        tooltip: ['Horrible', 'Moyen', 'Plutôt bien', 'Très bien', 'GENIAL']
    });

    let divUserNote = document.querySelector('#divUserNote');
    let newNote = true;
    if (divUserNote.data.usernote !== "") {
        newNote = false;
    }

    let menuUserEtoile = jSuites.rating(divUserNote, {
        value: divUserNote.dataset.usernote,
        tooltip: ['Horrible', 'Moyen', 'Plutôt bien', 'Très bien', 'GENIAL'],
        onchange: stockerNote()
    });

    // faire appel AJAX pour insérer / mettre à jour la note de cet utilisateur pour ce film
    function stockerNote() {
        console.log("appel");
        
        const XHR = new XMLHttpRequest();
        
        XHR.onreadystatechange = function() {
            if (XHR.onreadystatechange == 4) {
                
                console.log("fini");
            };
        };

        XHR.open("GET", "./noteUpdate.php");
        XHR.send();
    }
</script>
</body>
</html>