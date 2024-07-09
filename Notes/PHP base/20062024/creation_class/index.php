<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("./Personne.php");

        $personne1 = new Personne();
        $personne1->prenom = 'Lancelot';
        $personne1->hobby = 'dormir près de son humain préféré';

        $personne2 = new Personne();
        $personne2->prenom = 'Calynn';
        $personne2->hobby = 'embêter son humain préféré';

        $personne3 = new Personne();
        $personne3->prenom = 'Xena';
        $personne3->hobby = 'faire des câlins à son humain préféré';

        var_dump($personne1, $personne2, $personne3);

        $personne1->introduce();
        $personne1->say();
        print('<br><br>');
        $personne2->introduce();
        $personne2->say();
        print('<br><br>');
        $personne3->introduce();
        $personne3->say();
    ?>
</body>
</html>