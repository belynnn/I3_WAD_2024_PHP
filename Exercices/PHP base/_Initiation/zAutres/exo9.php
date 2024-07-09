<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Array associatif - Exercice 9</title>
</head>

<body>
    <?php
        // (Web) Créez un array contenant de noms de sites web (ex: Startpage, Wikipedia), leur lien d'internet (ex: www.startpage.com) et une description de chacun (ex: moteur de recherche).

        // Création d'un array de sites web
        // Contenant des sites web avec leur nom, url, description
        $wikipedia = [
            'Name' => 'Wikipedia',
            'URL' => 'https://wikipedia.com',
            'Description' => 'Encyclopédie.'
        ];
        $github = [
            'Name' => 'Github',
            'URL' => 'https://github.com',
            'Description' => 'Répertoires Git.'
        ];
        $websites = [$wikipedia, $github];


        
        // Ajouter 2 autres sites web à l'array de sites web
        $websites[] = $google = [                
            'Name' => 'Google',
            'URL' => 'https://google.com',
            'Description' => 'Moteur de recherche.'];
        $websites[] = $inaturalist = [                
            'Name' => 'iNaturalist',
            'URL' => 'https://inaturalist.com',
            'Description' => 'Répertoire d\'observations de la nature.'];



        // Générer un tableau
        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    $keys = array_keys($websites[0]);
                    foreach($keys as $key){
                        echo "<th>$key</th>";
                    }
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                foreach ($websites as $site){
                    echo "<tr>";
                        foreach($site as $key => $value){
                            if($key == "URL"){
                                echo '<td><a href="' . $site["URL"] . '">'. $site["Name"] . '</a></td>';
                            } else {
                                echo "<td>$value</td>";
                            }
                        }
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>