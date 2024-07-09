<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button id="btn1">Click me 1</button>
    <button id="btn2">Click me 2</button>
</body>

<script>
    const btn1 = document.querySelector('#btn1');

    // currentTarget, celui à qui on ajoute l'écoute d'événement
    // target, celui qui trigger l'événement
    document.addEventListener('click', function(event) {
        // console.log('evenement', event);
        // console.log("cible qui trigger l'evenement", event.target);
        // console.log("cible subit l'evenement", event.currentTarget);
        // console.log(typeof(event));

        console.log("On clique sur le document, n'importe où");

        if (event.target.id == "btn1") {
            console.log("On clique sur le btn1");
            btn1.textContent = "Je change... au clique"
        } else if (event.target.id == "btn2") {
            console.log("On clique sur le btn2");
            btn1.textContent = "Allons faire la pause... au clique"
        }

        console.log("target :", event.target);
        console.log("currentTarget :", event.currentTarget);
    });


</script>
</html>