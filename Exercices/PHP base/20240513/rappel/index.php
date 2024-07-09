<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
  </head>
  <body>
    <?php
      echo "Un message en PHP - Le navigateur va interpreté le message du PHP, pour l'afficher en HTML";
    ?>

    Un message en HTML

    <?php
      echo "Un second message en PHP";

      $nom = "Debby";
      echo "<h2>Bonjour $nom</h2>";

      if ($nom == "Debby") {
        echo "<h2>Clerckx</h2>";
      } else {
        echo "<h2>Inconnu</h2>";
      }

      echo "<h3>Afficher les nombres paires de 0 inclu à 20 inclu</h3>";
      echo "<ul>";
        for ($i = 0 ; $i <= 20 ; $i += 2) {
            echo "<li> $i</li>";
        }
      echo "</ul>";
      // si on l'écrit en HTML, on se rend compte qu'il y a un problème via :
      //  - le message d'erreur lors du chargement de la page
      //  - la couleur du texte qui change
      // echo "<img src="./img/chat.jpg" alt="Image d'un chat" width="300px">";
      // echo '<img src="./img/chat.jpg" alt="Image d'un chat" width="300px">';
      
      // echo "<img src='./img/chat.jpg' alt='Image d'un chat' width='300px'>";
      // echo '<img src="./img/chat.jpg" alt="Image d'un chat" width="300px">';

      // Les façons correctes d'afficher l'image contenant des guillemets et des apostrophes
      echo "<img src='./img/chat.jpg' alt=\"Image d'un chat\" width='300px'>";
      // echo '<img src="./img/chat.jpg" alt="Image d\'un chat" width="300px">';
      // echo "<img src=\"./img/chat.jpg\" alt=\"Image d'un chat\" width=\"300px\">";
      echo "<br>";
      echo "<br>";

      echo "<h3>Afficher un nom d'une liste</h3>";
      $noms = ["Leslie", "Jessica", "Kenza"];

      // CRUD

      // Create
      $noms[] = "Mariam";

      // Read
      echo "Le nom à l'indice 2 est : $noms[2]<br>";
      echo "Le nom à l'indice 3 qui a été ajouté est : $noms[3]<br>";
      
      // Update
      $noms[2] = "Debby";
      echo "Le nouveau nom à l'indice 2 est : $noms[2]<br>";
      
      // Delete
      echo "<h4>On supprime l'indice 2</h4>";
      unset ($noms[2]);
      print_r ($noms);
      echo "<br>";
      echo "<br>";
      
      // Attention, içi le as $value pourrait se nommer $key, le résultat affichera TOUJOURS les valeurs
      foreach ($noms as $value) {
        echo "$value<br>";
      }
      // Si l'on souhaite afficher les clés, il faut écrit as $key => $value (attention, les variables pourraient tout à fait s'appeller $toto => $titi, toto sera la clé et titi la valeur)
      foreach ($noms as $key => $value) {
        echo "$key $value<br>";
      }
      echo "<br>";
      
      // Arrays associatifs
      $ville = [
        'nom' => 'Bruxelles',
        'population' => 1500000
      ];

      // CRUD
      // Create
      $ville[] = 'Belgique';
      $ville['pays'] = 'Belgique';
      print_r ($ville);

      // Read
      echo "<br>";
      echo $ville['nom'];
      echo "<br>";

      echo "<ul>";
        foreach ($ville as $key => $value) {
          echo "<li>$key : $value</li>";
        }
      echo "</ul>";

      // Update
      $ville['population'] += 100000;
      echo $ville['population'];

      // Delete
      unset ($ville['0']);
      echo "<ul>";
        foreach ($ville as $key => $value) {
          echo "<li>$key : $value</li>";
        }
      echo "</ul>";
    ?>

    <!-- <img src="./img/chat.jpg" alt="Image d'un chat" srcset="" width="300px"> -->
  </body>
</html>