const termeRecherche = document.querySelector('#termeRecherche');
const formHTML = document.querySelector('#formHTML');
const divFilms = document.querySelector('#divFilms');

termeRecherche.addEventListener('keyup', function(){
    if (termeRecherche.value.length == 0) {
            divFilms.innerHTML = "";
        return;
    }

    divFilms.innerHTML = "";

    let formData = new FormData(formHTML);
    const XHR = new XMLHttpRequest();

    XHR.onreadystatechange = function() {
        if (XHR.readyState === 4) {
            let arrayFilm = JSON.parse(XHR.responseText);
            console.log(arrayFilm);

            arrayFilm.forEach(element => {
                divFilms.innerHTML += `
                <a href="./detailFilm.php?idFilm=${element.id}">
                    <div class="card" style="width: 18rem;"> 
                        <img src="./uploads/${element.image}" class="card-img-top" alt="Image not found"> 
                        <div class="card-body">    
                            <h5 class="card-title">${element.titre}</h5> 
                            <p class="card-text">Durée : ${element.duree}</p>
                            <p class="card-text">${element.description}</p>    
                        </div>
                    </div>
                </a> 
                `
            });
        };
    };

    // Appel au serveur
    XHR.open('POST', './filmRechercheAjaxTraitement.php');
    XHR.send(formData);
});