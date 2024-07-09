# TO DO
## Base de données
* ✅ Créer la base de données
    * ✅ exercice_crud_film
* Tables :
    * ✅ utilisateurice
        * ✅ id
        * ✅ pseudo
        * ✅ mail
        * ✅ mot de passe -> password
        * ✅ img -> img_profil
    * ✅ film
        * ✅ id
        * ✅ titre
        * ✅ description
        * ✅ image
* Fichiers / Dossiers
    * ✅ config.php
        * ✅ const DSN
            * ✅ mysql
            * ✅ host : localhost;
            * ✅ dbname : nom de la base de donnée;
            * ✅ port : 3306 - numéro du port;
            * ✅ charset : utf8 - type d'encodage
        * ✅ const USERNAME => "root"
        * ✅ const PASSWORD => ""
    * ✅ assets
        * ✅ css
            * ✅ style.css
        * ✅ js
            * ✅ main.js
        * ✅ img

## Pages :
* accueil.php
    * ✅ Navbar
    * ✅ Heading
    * Liste des films insérés
* insertionFilm.php
* insertionFilmTraitement.php
* ✅ nav.php
    * ✅ Accueil - Insérer un film


tarotGame = [
    1 {
        nom : majeur
        arrayCartesMajeur = [
            "majeur1" = {
                id = 0
                nom = "Empereur",
                description = "Je suis une carte majeure beaucoup trop forte",
                mot_clef = ["leadership", "pouvoir", "..."]
                img = "./uploads/nomdelimage.png"
            },
            "majeur2" = {
                id = 1
                nom = "Debby contre attaque",
                description = "CONTRE UNO"
                img = "./uploads/nomdelimage.png"
            }
        ]
    },
    2 {
        nom : mineur
    },
]

creationPersonnage = [
    nom = random(arrayCartesMajeur(0,len(mot_clef)-1))
    paysage = "Forêt"
    nbCarteMajeur = 2
    nbCarteMineur = 3
    couleurSpecifique = "rouge"
    element = "terre"
    nombreFetiche = 33
    mot_clef = random(mot_clef(0,len(mot_clef)-1))
]