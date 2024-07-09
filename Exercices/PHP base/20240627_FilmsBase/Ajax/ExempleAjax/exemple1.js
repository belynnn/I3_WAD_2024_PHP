const btn1 = document.querySelector('#btn1');
let div1 = document.querySelector('#div1');

btn1.addEventListener('click', function() {
    console.log("👋 btn1 clicked");

    // besoin d'un objet XHR objet d'une classe XMLhttpRequest, appel le serveur comme les formulaires (GET et POST) et obtient les données du serveur sans recharger la page (contrairement aux formulaires)
    // Appel au serveur, j'obtiens pas immédiatement les données, pour les afficher, il faut attendre.
    // cet objet créé un événement qui gère différents Etat de l'objet
    // états :
    // ne pas avoir appelé
    // appel fais pas de donnée
    // donnée reçue
    // appel au serveur fini <- c'est lui qui nous intéresse

    const XHR = new XMLHttpRequest();

    // chaque changement d'état, je vais faire quelque  chose
    XHR.onreadystatechange = function() {
        console.log('⌚ Changement état...')
        console.log('👉 Etat >>> ', XHR.readyState);
        
        if (XHR.readyState === 4) {
            console.log('✅ readyState 4 >>> Appel fini');
            div1.innerText = XHR.responseText;
        };
    };

    // appel au serveur
    XHR.open('POST', './exemple1Traitement.php');
    XHR.send();

    console.log('On continue...');
});