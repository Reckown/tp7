<?php

include 'Form.php';

class Form2 extends Formulaire{

    function __construct($nomFichier, $methode){
        parent::__construct($nomFichier, $methode);
        $this->ajouterZoneText("votre nom");
        $this->ajouterZoneText("votre code");
        $this->ajouterBouton();
    }
}

$form = new Form2('oui', 'get');