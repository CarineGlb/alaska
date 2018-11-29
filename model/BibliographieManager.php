<?php

Class BibliographieManager
{
    private $bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->bdd = new PDO('mysql:host=localhost;dbname=bibliographie;charset=utf8', 'root', '');
    }

}