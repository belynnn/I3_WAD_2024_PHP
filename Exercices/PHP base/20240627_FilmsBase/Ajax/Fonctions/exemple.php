<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>

<script>
    // Fonction - afficher des valeurs
    function sayAloha() {
        for (let i = 0; i < 10; i++) {
            console.log(i);
        }
    }

    // Fonction synchrone qui prend plein de temps à s'exécuter (ne sert à rien)
    function functionLong() {
        let a;
        for (i = 0; i < 1000000000; i++) {
            a = i;
        }
    }

    // sayAloha();
    // functionLong();
    // console.log("on a fini!");

    function f2() {
        console.log("Je suis f2");
        functionLong();
        console.log("On a fini la fonction longue");
    }

    f2();
    console.log("On a fini f2, on est dans le code principal");

</script>
</html>