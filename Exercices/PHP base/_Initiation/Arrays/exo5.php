<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays - Exercice 5</title>
</head>
<body>
    <?php
        $list_country = ["Séoul", "Bruxelles", "Nancy", "Salou", "Madrid"];
        array_push($list_country, "Toronto", "Jeju");
        $list_country[0] = "Quito";

        // $list_replacements = array(0 => "Quito");
        // $newlist_country = array_replace($list_country, $list_replacements);

        for ($i = 0; $i < count($list_country); $i++) {
            echo "$list_country[$i]<br>";
        }
    ?>
</body>
</html>