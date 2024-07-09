<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
        include('./assets/php/class/Chat.php');

        $chat1 = new Chat("./assets/img/calynn.png", "Calynn", "suivre mon humain", "mousses au saumon", "MrreeeeooooooOoOoOOOooooOOOw!!!!!");
        $chat2 = new Chat("./assets/img/lancelot.png", "Lancelot", "me balader", "friandises au thon", "mrrreow~");
        $chat3 = new Chat("./assets/img/xena.png", "Xena", "tenir compagnie à mon humain", "croquettes fraîches", "miou...");
        $chat4 = new Chat("./assets/img/arynn.png", "Arynn", "faire le beau gosse", "croquettes fraîches", "Mreow!");

        $tableauChats = [$chat1, $chat2, $chat3, $chat4];
        foreach($tableauChats as $unChat) {
            $unChat->displayPhoto();
            print('<br>');
            $unChat->introduce();
            $unChat->play();
            $unChat->eat();
            $unChat->shout();
        }
    ?>
</body>
</html>