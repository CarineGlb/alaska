<?php

// classe qui gère la connexion à la BDD = manager


class chapitreManager
{
    private $_bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->_bdd = new PDO('mysql:host=localhost;dbname=alaska;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }


    public function getListeChapitres()//publierTousLesChapitres() // fait la requete
    {
        $bdd = $this->_bdd;
        $requete = $bdd->prepare('SELECT * FROM livre ORDER BY idChapitre');
        $requete->execute();
        while($donnees = $requete->fetch()) // si je ne crée pas de boucles avec while mon tableau contiendra uniquement 1 ligne et ne pourra pas affichert ous mes chapitres
        {
            $chapitres = new  chapitre();
            $chapitres->setIdChapitre($donnees['idChapitre']);
            $chapitres->setTitreChapitre($donnees['titreChapitre']);
            $chapitres->setContenuChapitre($donnees['contenuChapitre']);
            $lireChapitres[] = $chapitres; // tableau d'objet
        }

        return $lireChapitres;

    }

    public function getChapitre($idChapitre) // pour afficher un chapitre
    {

        $query = ('SELECT * FROM livre WHERE idChapitre = :idChapitre'); // where=lorsque
        $requete = $this->_bdd->prepare ($query);
        $requete->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
        $requete->execute();
        $row = $requete->fetch(PDO::FETCH_ASSOC);

        $chapitre = new chapitre($row);

        return $chapitre;

    }

    public function getTotalChapitres()
    {
        $bdd = $this->_bdd;

        $query = ('SELECT*FROM livre');

        $pdoStat = $bdd->prepare($query);
        $allChapitres = $pdoStat->execute();

        return $allChapitres;
    }



    public function modifierChapitre($idChapitre,$chapitre)
    {
        $bdd = $this->_bdd;
        $requete = $bdd->prepare('UPDATE livre SET titreChapitre= :titreChapitre,contenuChapitre=:contenuChapitre WHERE idChapitre= :idChapitre'); // verif dans sql est ok
        $requete->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
        $requete->bindValue(':titreChapitre', $chapitre->getTitreChapitre(), PDO::PARAM_STR);
        $requete->bindValue(':contenuChapitre', $chapitre->getContenuChapitre(), PDO::PARAM_STR);

        $modifierChapitre = $requete->execute();

        return $modifierChapitre ;
    }

    public function creerChapitre($chapitre)
    {
        $bdd = $this->_bdd;

        $requete = $bdd->prepare('INSERT INTO livre(titreChapitre,contenuChapitre) VALUES(:titreChapitre,:contenuChapitre)');

        //$requete->bindValue(':idChapitre', $chapitre->getIdChapitre(), PDO::PARAM_INT);
        $requete->bindValue(':titreChapitre', $chapitre->getTitreChapitre(), PDO::PARAM_STR);
        $requete->bindValue(':contenuChapitre', $chapitre->getContenuChapitre(), PDO::PARAM_STR);

        $newChapitre = $requete->execute();

        return $newChapitre;
    }


    public function deleteChapitre($idChapitre)
    {
        $bdd = $this->_bdd;

        $query = ('DELETE FROM livre WHERE idChapitre =:idChapitre');

        $deleteChapitre = $bdd->prepare($query);
        $deleteChapitre->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
        $deleteChapitre->execute();

        return $deleteChapitre;

    }


}


