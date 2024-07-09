<!DOCTYPE html>
<html lang="fr-be">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle d'événements - Utilisation de setTimeout</title>
</head>

<body>
    <button id="btn1">🔴 Start Timer 5 secondes</button>
    <button id="btn2">😊 Afficher "Aloha" dans la console</button>
</body>

<script>
    const btn1 = document.querySelector('#btn1');
    btn1.addEventListener('click', function(event) {
        console.log('🔴 Start');
        
        // appel non bloquant
        setTimeout(function() {
            btn1.textContent = "✅ C'est fini !";
            console.log('✅ Finish');
        }, 5000);
        console.log('On continue la suite du code durant les 5 secondes...');
    });

    const btn2 = document.querySelector('#btn2');
    btn2.addEventListener('click', function(event) {
        console.log('👋 Aloha');
    });

</script>
</html>