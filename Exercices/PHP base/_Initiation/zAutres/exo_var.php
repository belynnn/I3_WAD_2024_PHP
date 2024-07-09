<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP - Exercices de base</title>
      <style>
          h1, h2 {
              text-align: center;
          }
          li {
              font-weight: 900;
          }
          .text_red {
              color: red;
          }
          .text_orange {
              color: orangered;
          }
          .text_blue {
              color: blue;
          }
          .text_italic {
              font-style: italic;
          }
          .text_little {
              font-size: smaller;
          }
          .text_indentation {
            margin-left: 1rem;
          }
      </style>
  </head>

  <body>
      <h1>PHP - Exercices de base</h1>
      <h2>Variables d'Entrée et de Sortie</h2>

      <h3>Exercices :</h3>
        <ol>
          <li>Affichez "Bonjour" dans l'écran avec print et echo</li>
            <section class="text_indentation">
              <?= "Bonjour avec <span class=\"text_blue\">&lt;?=</span> \"message\" <span class=\"text_blue\">?&gt;</span><br>"; ?>
              <?php
                  print("Bonjour avec <span class=\"text_orange\">print</span>(\"message\")<br>");
                  print "Bonjour avec <span class=\"text_orange\">print</span> \"message\"<br>";
                  echo("Bonjour avec <span class=\"text_orange\">echo</span>(\"message\")<br>");
                  echo "Bonjour avec <span class=\"text_orange\">echo</span> \"message\"";
                  echo "<br><br>"
              ?>
            </section>

          <li>Affichez "La console est rudimentaire mais elle fonctionne assez bien..." dans la ligne suivante (PHP_EOL ou \n en console)</li>
            <section class="text_indentation">
              <?php
                  echo "La console est rudimentaire mais elle fonctionne assez bien...";
                  echo "<br><br>"
              ?>
            </section>

          <li>Créez une variable contenant le titre du dernier film que vous avez regardé et une deuxième variable contenant une note de 0 à 10. Affichez un texte « Je donne un xxxx pour le film xxxxx ».</li>
            <section class="text_indentation">
              <?php
                  $last_serie = "Star Trek: Discovery";
                  $star = "10/10";
                  echo "Je donne un $star pour la série $last_serie";
                  echo "<br><br>"
              ?>
            </section>
            
          <li>Créez une variable contenant le prix d'un ticket pour l'UGC et une autre contenant le prix d'un ticket pour le Vendôme. Calculez la différence de prix entre les deux tickets et affichez-la sur l'écran avec un message.</li>
            <section class="text_indentation">
              <?php
                  $UGC_ticket_price = 10.50;
                  $vendome_ticket_price = 14.50;
                  $price_diff = $vendome_ticket_price - $UGC_ticket_price;
                  echo "UGC ticket  : $UGC_ticket_price &euro;<br>";
                  echo "Vendôme ticket  : $vendome_ticket_price &euro;<br>";
                  echo "La différence de prix des tickets de l'UGC et de Vendôme est de $price_diff &euro;.";
                  echo "<br><br>";
              ?>
            </section>
          
          <li>Le Vendôme est un cinéma cher (contrairement au Styx, qui d'ailleurs n'existe plus) et de fois ils offrent une réduction du 10% sur les entrées. Affichez le prix d'un ticket normal et le prix qu'on payerait si on avait la réduction.</li>
            <section class="text_indentation">
              <?php
                  $vendome_ticket_price2 = 16.50;
                  $reduc10 = 0.10;
                  $ticket_price_reduc = $vendome_ticket_price2 - ($vendome_ticket_price2 * $reduc10);
                  echo "Vendôme :<br>";
                  echo "Ticket price : $vendome_ticket_price2 &euro;<br>";
                  echo "Total with 10% reduction : $ticket_price_reduc &euro;";
                  echo "<br><br>";
              ?>
            </section>

          <li>Créez un programme qui demande son nom à l'utilisateur et affiche un message du style « Bienvenu xxxxxxxx ». Utilisez la fonction "readline(message à afficher)". Cette fonction affice le message à afficher à l'utilisateur, puis permet à l'utilisateur de taper un string sur le clavier. La saisie terminera quand l'utilisateur appuie sur Enter.</li>
            <section class="text_indentation">
              <?php
                  echo "<span class=\"text_italic text_red\">Exercice à faire en console.<br> 📃  Fichier : exo_var_6.php</span>";
                  echo "<br><br>";
                      
                  // Exemples pour l'afficher en HTML
                  echo "Exemples :<br>";
                  $username = "Bloup";
                  echo "Bienvenue $username !";
                  echo "<br><br>";
              ?>
            </section>

          <li>Créez un logiciel qui demande deux chiffres à l'utilisateur et qui affiche l'addition, la soustraction, la multiplication et la division.</li>
            <section class="text_indentation">
              <?php
                  echo "<span class=\"text_italic text_red\">Exercice à faire en console.<br> 📃  Fichier : exo_var_7.php</span>";
                  echo "<br><br>";
                      
                  // Exemples pour l'afficher en HTML
                  echo "Exemples :<br>";
                  $number1 = 5;
                  $number2 = 3;

                  $addition = $number1 + $number2;
                  $subtraction = $number1 - $number2;
                  $multiplication = $number1 * $number2;
                  $division = $number1 / $number2;

                  echo "$number1 & $number2 :<br>";
                  echo "+ : $addition<br>";
                  echo "- : $subtraction<br>";
                  echo "* : $multiplication<br>";
                  echo "/ : $division<br>";
                  echo "<br><br>";
              ?>
            </section>
        </ol>
  </body>
</html>