const btn1 = document.querySelector('#btn1');
let divResultat = document.querySelector('#resultat');

btn1.addEventListener('click', function() {
    // console.log('👋 btn1 >>> clicked');
    
    const XHR = new XMLHttpRequest();
    
    XHR.onreadystatechange = function() {
        if (XHR.readyState === 4) {
            // console.log('✅ readyState 4 >>> Appel fini');
            // console.log('Résultat final >>>', XHR.responseText);
            divResultat.innerText = XHR.responseText;
            let resultat = JSON.parse(XHR.responseText);
            console.log(resultat);

            // vider la div à chaque clique bouton
            divResultat.innerHTML = "";

            // divResultat.innerText = "Hello" + resultat[1].prenom +" "+ resultat[1].nom;

            let ul = document.createElement('ul');
            divResultat.appendChild(ul);

            for (let i in resultat){
                let li = document.createElement('li');
                li.textContent = resultat[i].prenom;
                ul.appendChild(li);
            }
        };
    };
    
    // Appel au serveur
    XHR.open('POST', './exemple2Traitement.php');
    XHR.send();
});