const termeRecherche = document.querySelector('#termeRecherche');
const formHTML = document.querySelector('#formHTML');

termeRecherche.addEventListener('keyup', function(){
    let formData = new FormData(formHTML);

    const XHR = new XMLHttpRequest;

    XHR.onreadystatechange = function() {
        if (XHR.readyState === 4) {
            let arrayFilm = JSON.parse(XHR.responseText);

            // let div = document.createElement('div');
            // divResultat.appendChild(div);
    
            // for (let i in arrayFilm){
            //     let p = document.createElement('p');
            //     p.textContent = arrayFilm[i].titre;
            //     div.appendChild(p);
            // };
        };
    };

    // Appel au serveur
    XHR.open('POST', './filmRechercheAjaxTraitement.php');
    XHR.send(formData);
});