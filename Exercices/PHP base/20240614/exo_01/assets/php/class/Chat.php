<?php
declare(strict_types = 1);

class Chat {
    // propriétés
    public string $prenom;
    public string $activite;
    public string $plat;
    public string $cri;
    public string $photo;
    
    // méthodes
    function __construct(string $unePhoto, string $unPrenom, string $uneActivite, string $unPlat, string $unCri) {
        // on veut affecter les paramètres aux propriétés
        $this->photo = $unePhoto;
        $this->prenom = $unPrenom;
        $this->activite = $uneActivite;
        $this->plat = $unPlat;
        $this->cri = $unCri;
    }

    function introduce():void {
        print("Aloha, moi c'est ".$this->prenom." !<br>");
    }

    function play():void {
        print("J'adore ".$this->activite.".<br>");
    }

    function eat():void {
        print("J'adore manger des ".$this->plat.".<br>");
    }

    function shout():void {
        print("Mon cri de guerre est : ".$this->cri."<br><br>");
    }

    function displayPhoto():void {
        print("<img src='" .$this->photo. "'>");
    }
}