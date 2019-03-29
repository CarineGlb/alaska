<?php


class formulaireContactManager
{
    private $bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }

    public function contact()
    {
        $bdd = $this->bdd;

        $form = $bdd->prepare('INSERT INTO contact(id, nom, prenom, message) VALUES(?, ?, ?,?)');

        $contactForm = $form->execute(array($id, $nom,$prenom, $message));

        return $contactForm;

    }




//$contactform[] = $contact;  tableau d'objet

}
