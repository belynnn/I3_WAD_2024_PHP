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
      <h2>If</h2>

      <h3>Exercices :</h3>
        <ol>
          <li>Créez un code capable de calculer la surface d'une chambre. Demandez à l'utilisateur la largeur et la longueur. Si les valeurs sont pareilles, affichez le message "La chambre est carrée!"</li>
            <section class="text_indentation">
              <!--
                Code à exécuter en console :
                  fichier : exo_if_1.php
              -->
              <?php
                  echo "<span class=\"text_italic text_red\">Exercice à faire en console.<br> 📃  Fichier : exo_if_1.php</span>";
                  echo "<br><br>";
                  // Exemples pour l'afficher en HTML
                  echo "Exemple :<br>";
                  $user_width1 = 5;
                  $user_lenght1 = 5;
                  $user_lenght2 = 6;
                  echo "• SI la largeur est égale à la longueur :<br>";
                  echo " ➡️  L=$user_width1, l=$user_lenght1 : La chambre est carrée.<br><br>";

                  echo "• SI la largeur n'est pas égale à la longueur :<br>";
                  echo " ➡️  L=$user_width1, l=$user_lenght2 : La chambre n'est pas carrée.";
                  echo "<br><br><br>";
              ?>
            </section>

          <li>Demandez à l'utilisateur la température de la salle où il se trouve.
            <ul>
              <li>Si elle vaut entre 15 et 25 affichez "Il fait bon".</li>
              <li>Si la valeur est inférieure, affichez "Ça caille !! Montez la température !</li>
              <li>et si la valeur est supérieure affiche "Trop chaud ! Descendez la température !"</li>
            </ul>
          </li>
            <section class="text_indentation">
              <!--
                Code à exécuter en console :
                  fichier : exo_if_2.php
              -->
              <?php
                  echo "<span class=\"text_italic text_red\">Exercice à faire en console.<br> 📃  Fichier : exo_if_2.php</span>";
                  echo "<br><br>";
                      
                  // Exemples pour l'afficher en HTML
                  echo "Exemple :<br>";
                  echo "• SI la température est entre 15 et 25 degrés :<br>";
                  echo " ➡️  Il fait bon.<br><br>";

                  echo "• SI la température est inférieure de 15 degrés :<br>";
                  echo " ➡️  Il fait froid. Montez la température.<br><br>";

                  echo "• SI la température est supérieure de 25 degrés :<br>";
                  echo " ➡️  Il fait chaud. Descendez la température.";
                  echo "<br><br><br>";
              ?>
            </section>

          <li>Demandez deux chiffres à l'utilisateur et une opération à réaliser avec ces deux chiffres (addition, multiplication, soustraction et division). Affichez le calcul correspondant.</li>
            <section class="text_indentation">
              <?php
                  echo "<span class=\"text_italic text_red\">Exercice à faire en console.<br> 📃  Fichier : exo_if_3.php</span>";
                  echo "<br><br>";
                      
                  // Exemples pour l'afficher en HTML
                  echo "Exemples :<br>";
                  $user_number1 = 5;
                  $user_number2 = 2;

                  echo "• SI l'opération de l'utilisateur est \"+\" ou \"addition\" ou \"plus\" :<br>";
                  $result = $user_number1 + $user_number2;
                  echo " ➡️  $user_number1 + $user_number2 = $result<br><br>";

                  echo "• SI l'opération de l'utilisateur est \"-\" :<br>";
                  $result = $user_number1 - $user_number2;
                  echo " ➡️  $user_number1 - $user_number2 = $result<br><br>";

                  echo "• SI l'opération de l'utilisateur est \"*\" :<br>";
                  $result = $user_number1 * $user_number2;
                  echo " ➡️  $user_number1 * $user_number2 = $result<br><br>";

                  echo "• SI l'opération de l'utilisateur est \"/\" :<br>";
                  $result = $user_number1 / $user_number2;
                  echo " ➡️  $user_number1 / $user_number2 = $result";
                  echo "<br><br><br>";
              ?>
            </section>
            
          <li>Nous faisons un système informatique pour une école. Pour qu'un élève puisse réussir une matière il doit assister à un minimum de cours : 
            <ul>
              <li>80% des cours s'il est en 1ere année</li>
              <li>70% des cours s'il est en 2eme année</li>
              <li>60% des cours s'il est en 3eme année</li>
            </ul>
            Considérez qu'il y a 50 cours chaque année. Le script doit demander à l'utilisateur l'année et le nombre d'absences, et afficher si l'élève a reussi ou pas.</li>
            <section class="text_indentation">
              <?php
                  echo "<span class=\"text_italic text_red\">Exercice à faire en console.<br> 📃  Fichier : exo_if_4.php</span>";
                  echo "<br><br>";
                      
                  // Exemples pour l'afficher en HTML
                  echo "Exemples :<br>";

                  echo "• SI le taux de présence actuel est supérieur ou = au minimum de cours requis :<br>";
                  echo " ➡️  L'élève a réussi son année.<br>";

                  echo "• SI le taux de présence actuel est inférieur au minimum de cours requis :<br>";
                  echo " ➡️  L'élève n'a pas réussi son année. Il faut au minimum avoir été présent.e durant XX cours et l'élève n'a été présent.e que durant XX cours.";

                  echo "<br><br><br>";
              ?>
            </section>
          

          <li>Nous voulons calculer le prix d'une commande dans un magasin de téléphonie. On vend juste trois produits :
            <ul>
              <li>Samsung Galaxy S24 - 1000 euros</li>
              <li>IPhone 15 - 1500 euros</li>
              <li>Huawei P60 Pro - 800 euros</li>
            </ul>
            Demandez à l'utilisateur le nombre d'unités qu'il veut acheter de chaque produit (fonction "readline" ;)<br>
            Calculez le total de la commande sachant que :
                <ul>
                  <li>Si on commande plus de 5 unités d'un certain produit on a une remise du 10% sur le prix de ce produit</li>
                  <li>Les produits peuvent être retirés au magasin ou livrés. La livraison coute 2% du prix total de la commande, mais elle est gratuite si notre commande dépasse 3000 euros</li>
                  <li>Une carte de fidélité accorde 20% de réduction sur le prix total de la commande</li>
                </ul>
          </li>
            <section class="text_indentation">
              <?php
                  echo "<span class=\"text_italic text_red\">Exercice à faire en console.<br> 📃  Fichier : exo_if_5.php</span>";
                  echo "<br><br>";
                      
                  // Exemples pour l'afficher en HTML
                  echo "Exemples :<br>";
                  const SAMSUNG_PRICE = 1000;
                  const IPHONE_PRICE = 1500;
                  const HUAWEI_PRICE = 800;
                  const DISCOUNT_THRESHOLD = 5;
                  const DISCOUNT_RATE = 0.1;
                  const DELIVERY_RATE = 0.02;
                  const FREE_DELIVERY_TRESHOLD = 3000;
                  const LOYALTY_CARD_DISCOUNT = 0.2;
                  function calculateDiscount($quantity, $price) {
                      if ($quantity >= DISCOUNT_THRESHOLD) {
                          return $price * DISCOUNT_RATE * $quantity;
                      } else {
                          return 0;
                      }
                  }
                  $samsung_quantity = 2;
                  $iphone_quantity = 6;
                  $huawei_quantity = 0;
                  $samsung_subtotal = $samsung_quantity * SAMSUNG_PRICE;
                  $iphone_subtotal = $iphone_quantity * IPHONE_PRICE;
                  $huawei_subtotal = $huawei_quantity * HUAWEI_PRICE;
                  $samsung_discount = calculateDiscount($samsung_quantity, SAMSUNG_PRICE);
                  $iphone_discount = calculateDiscount($iphone_quantity, IPHONE_PRICE);
                  $huawei_discount = calculateDiscount($huawei_quantity, HUAWEI_PRICE);
                  $total_subtotal = $samsung_subtotal + $iphone_subtotal + $huawei_subtotal;
                  $total_discount = $samsung_discount + $iphone_discount + $huawei_discount;
                  $loyalty_card_discount = $total_subtotal * LOYALTY_CARD_DISCOUNT;
                  $total_before_delivery = $total_subtotal - $total_discount - $loyalty_card_discount;
                  $delivery_fee = $total_before_delivery * DELIVERY_RATE;
                  $final_total = $total_before_delivery + $delivery_fee;
                  echo "________________________________________________________<br>";
                  echo "<br>Commande :<br>";
                  echo "Samsung Galaxy S24 x$samsung_quantity : " . number_format($samsung_subtotal, 2) . " €<br>";
                  echo "iPhone 15 x$iphone_quantity : " . number_format($iphone_subtotal, 2) . " €<br>";
                  echo "Huawei P60 Pro x$huawei_quantity : " . number_format($huawei_subtotal, 2) . " €<br>";
                  echo "________________________________________________________<br>";
                  echo "Réduction :<br>";
                  echo "- Article x5 : " . number_format($total_discount, 2) . " €<br>";
                  echo "- Carte de fidélité : " . number_format($loyalty_card_discount, 2) . " €<br>";
                  echo "________________________________________________________<br>";
                  echo "Sous total : " . number_format($total_subtotal, 2) . " €<br>";
                  echo "Frais de livraison : " . number_format($delivery_fee, 2) . " €<br><br>";
                  echo "**Total Final : " . number_format($final_total, 2) . " €**<br>";
                  echo "________________________________________________________";
              ?>
            </section>
        </ol>
  </body>
</html>