<?php

// classe qui gère la connexion à la BDD = manager


class publierDesChapitresManager
{
    private $_bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->_bdd = new PDO('mysql:host=localhost;dbname=alaska;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }


    public function getListeChapitres()//publierTousLesChapitres() // fait la requete
    {
        $bdd = $this->_bdd;
        $requete = $bdd->prepare('SELECT idChapitre,titreChapitre,contenuChapitre FROM livre ORDER BY idChapitre');
        $requete->execute();
        while($donnees = $requete->fetch()) // si je ne crée pas de boucles avec while mon tableau contiendra uniquement 1 ligne et ne pourra pas affichert ous mes chapitres
        {
            $chapitres = new chapitre();
            $chapitres->setIdChapitre($donnees['idChapitre']);
            $chapitres->setTitreChapitre($donnees['titreChapitre']);
            $chapitres->setContenuChapitre($donnees['contenuChapitre']);
            $lireChapitres[] = $chapitres; // tableau d'objet
        }

        return $lireChapitres;

    }

    public function getChapitre($idChapitre) // pour afficher un chapitre
    {

        $query = ('SELECT idChapitre,titreChapitre,contenuChapitre FROM livre WHERE idChapitre = :idChapitre'); // where=lorsque
        $req = $this->_bdd->prepare ($query);
        $req->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);

        $chapitre = new chapitre();
        $chapitre->setIdChapitre ($row['idChapitre']); // on hydrate
        $chapitre->setTitreChapitre($row['titreChapitre']);
        $chapitre->setContenuChapitre($row['contenuChapitre']);

        return $chapitre;



    }






}


/* public function publierTousLesChapitres() // fait la requete
    {
        $bdd = $this->_bdd;
        $requete = $bdd->prepare('SELECT idChapitre,titreChapitre,contenuChapitre FROM blog ORDER BY idChapitre');
        $requete ->execute();
       // $chapitres = array();
        while ($row = $req->fetch())   //PDO::FETCH_ASSOC
           {
               $chapitres = new publierDesChapitresManager();
               $chapitres->setIdChapitre($row['idChapitre']); // on hydrate
               $chapitres->setTitreChapitre($row['titreChapitre']);
               $chapitres->setContenuChapitre($row['contenuChapitre']);

               $lireChapitres[] = $chapitres; // tableau d'objet
            }

            return $lireChapitres;
        var_dump($lireChapitres);

    }



    public function publierUnChapitre($idChapitre) // pour afficher un chapitre
{
    $query = ('SELECT idChapitre,titreChapitre, contenuChapitre  FROM blog WHERE idChapitre = :idChapitre'); // where=lorsque
    $req = $this->bdd->prepare ($query);
    $req->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
    $req->execute();
    $row = $req->fetch(PDO::FETCH_ASSOC);

    $chapitre = new publierUnChapitre();
    $chapitre->setIdChapitre ($row['idChapitre']); // on hydrate
    $chapitre->setTitreChapitre($row['titreChapitre']);
    $chapitre->setContenu($row['contenuChapitre']);

    return $chapitre;

    var_dump($chapitres);
}*/