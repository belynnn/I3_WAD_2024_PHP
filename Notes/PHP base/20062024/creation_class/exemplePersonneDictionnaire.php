<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aloha</h1>
    <?php
        function affichePersonne (array $personne){
            print("<p>Je suis {$personne['prenom']} et j'aime ${personne['hobby']}.</p>");
        };

        $s1 = [
            'prenom' => 'Mariam',
            'hobby' => 'lire'
        ];
        $s2 = [
            'prenom' => 'Marwa',
            'hobby' => 'danser'
        ];

        affichePersonne($s1);
        affichePersonne($s2);
    ?>
</body>
</html>