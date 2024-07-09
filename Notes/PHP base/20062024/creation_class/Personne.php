<?php
declare(strict_types = 1);

class Personne {
    // Propriétés
    public string $prenom;
    public string $hobby;

    // Méthodes (fonctionnalités)
    function introduce():void {
        print("Je m'appelle ".$this->prenom." et j'adore ".$this->hobby.". ");
    }

    function say():void {
        print('Mreow !');
    }
}