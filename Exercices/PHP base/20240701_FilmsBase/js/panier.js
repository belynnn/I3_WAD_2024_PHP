const BTN_RAJOUTER_PANIER = document.querySelector('#btnRajouterPanier');

BTN_RAJOUTER_PANIER.addEventListener('click', () => {
    console.log('coucou');
    // Récupérer la valeur du select 'quantite'
    let quantite = Number(document.querySelector('#quantite').value);
    console.log("quantite :", quantite, typeof(quantite));

    // Stocker la valeur dans le panier
});