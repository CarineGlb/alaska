<?php



class publierDesCommentairesManager
{

    private $_bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->_bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }



    /**
     * @param Commentaire $commentaire
     */

    public function insererCommentaireBDD($commentaire)
    {
        $bdd = $this->_bdd;

        // preparation de la requête

        $requete = $bdd->prepare('INSERT INTO commentaire(idCommentaire,pseudoCommentaire,mailCommentaire,contenuCommentaire,idChapitre) VALUES(:idCommentaire,:pseudoCommentaire,:mailCommentaire,:contenuCommentaire,:idChapitre)');

//lier les marqueurs à une valeur
        $newCommentaire = $requete->bindValue(':idCommentaire', $commentaire->getIdCommentaire(), PDO::PARAM_INT);
        $newCommentaire = $requete->bindValue(':pseudoCommentaire',$commentaire->getPseudoCommentaire() , PDO::PARAM_STR);
        $newCommentaire = $requete->bindValue(':mailCommentaire',$commentaire->getMailCommentaire() , PDO::PARAM_STR);
        $newCommentaire = $requete->bindValue(':contenuCommentaire', $commentaire->getContenuCommentaire() ,  PDO::PARAM_STR);
        $newCommentaire =  $requete->bindValue(':idChapitre', $commentaire->getIdChapitre() ,  PDO::PARAM_INT);

        /*$insert = $requete->execute();
        if ($insert) {
            $message = "Commentaire ajouté";
        } else {
            $message = "Echec";

        }*/
        //$requete->execute();

       // return $requete;

        //print_r($insert);

        return $newCommentaire;
    }

    public function insererCommentaireSignaleBDD($commentaire)
    {
        $bdd = $this->_bdd;

        // preparation de la requête

        $requete = $bdd->prepare('INSERT INTO commentaire(commentaireSignale) VALUES(:commentaireSignale)');

//lier les marqueurs à une valeur

        $commentaireSignale =  $requete->bindValue(':commentaireSignale', $commentaire->getCommentaireSignale() ,  PDO::PARAM_INT);

        /*$insert = $requete->execute();
        if ($insert) {
            $message = "Commentaire ajouté";
        } else {
            $message = "Echec";

        }*/
        //$requete->execute();

        // return $requete;

        //print_r($insert);

        return $commentaireSignale;
    }



         //---------------------------------------------------------------------------------------------
       // $requete->bindValue(':idCommentaire', $commentaire->getIdCommentaire(), PDO::PARAM_INT);

       // $requete->bindValue(':idChapitre', $commentaire->getIdChapitre(), PDO::PARAM_INT);

        /*$requete->bindValue(':pseudoCommentaire', $pseudoCommentaire, PDO::PARAM_STR);
        $requete->bindValue(':mailCommentaire', $mailCommentaire, PDO::PARAM_STR);
        $requete->bindValue(':contenuCommentaire', $contenuCommentaire, PDO::PARAM_STR);


        $requete->bindValue(':mailCommentaire', $mailCommentaire->getMailCommentaire(), PDO::PARAM_STR);
        $requete->bindValue(':contenuCommentaire', $contenuCommentaire->getContenuCommentaire(), PDO::PARAM_STR);*/


        /*$requete->execute(array(
            'idCommentaire'=>$_POST['idCommentaire'],
            'pseudoCommentaire'=>$_POST['pseudoCommentaire'],
            'mailCommentaire'=> $_POST['mailCommentaire'],
            'contenuCommentaire'=>$_POST['contenuCommentaire'],
            'idChapitre'=>$_GET['idChapitre'])
             );*/




    /*public function creerCommentaire($commentaire)
    {
        //insert l'objet passé en argument
        //met à jour l'id de l'objet
        //retourne un bool


// preparation de la requête

        $pdoStat = $this->_objectPDO->prepare('INSERT INTO commentaire(idCommentaire, pseudoCommentaire, mailCommentaire,contenuCommentaire,idChapitre) VALUES(:idCommentaire,:pseudoCommentaire, :mailCommentaire, :contenuCommentaire, :idChapitre)');

//lier les marqueurs à une valeur

        $pdoStat->bindValue(':idCommentaire', $commentaire->getIdCommentaire(), PDO::PARAM_INT);
        $pdoStat->bindValue(':pseudoCommentaire', $commentaire->getPseudoCommentaire(), PDO::PARAM_STR);
        $pdoStat->bindValue(':mailCommentaire', $commentaire->getMailCommentaire(), PDO::PARAM_STR);
        $pdoStat->bindValue(':contenuCommentaire', $commentaire->getContenuCommentaire(), PDO::PARAM_STR);
        $pdoStat->bindValue(':idChapitre', $commentaire->getIdChapitre(), PDO::PARAM_INT);

// execution de la requete preparée

        $insert = $pdoStat->execute();
        if ($insert) {
            $message = "Commentaire ajouté";
        } else {
            $message = "Echec";

        }
    }*/

    public function lireCommentaire($idChapitre)

    {
        $bdd = $this->_bdd;
        $query = ('SELECT pseudoCommentaire, contenuCommentaire FROM commentaire WHERE idChapitre = :idChapitre ORDER BY idChapitre');
        $pdoStat = $bdd->prepare($query);
        $pdoStat->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
        $pdoStat->execute();

        while ($results= $pdoStat->fetch(PDO::FETCH_ASSOC))
        {
            $tabCommentaire[] = new commentaire($results);
        }

        return $tabCommentaire;

    }
            //---------------sous ligne 117------------

            //$tabCommentaire = array();
        /*foreach ($results as $row) {
            $commentaire = new commentaire(); // on transforme ici le tableau isssu de fetch en objets
            //on va créer un tableau d'objets
            //$commentaire->setIdChapitre($row['idChapitre']);
            //$commentaire->setIdCommentaire($row['idCommentaire']);// on hydrate
            $commentaire->setPseudoCommentaire($row['pseudoCommentaire']);
            $commentaire->setContenuCommentaire($row['contenuCommentaire']);
            //$commentaire->setMailCommentaire($row['mailCommentaire']);

            $tabCommentaire[] = $commentaire;*/




    /*exemple :
      public function getList($nom)
  {
    $persos = [];

    $q = $this->_db->prepare('SELECT id, nom, degats FROM personnages WHERE nom <> :nom ORDER BY nom');
    $q->execute([':nom' => $nom]);

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $persos[] = new Personnage($donnees);
    }

    return $persos;
  }


        //
//$row = $req->fetch();
    //------sous ligne 140
       // return $tabCommentaire;






    public function lireTousLesCommentaires() // tous les commentaires par chapitre  UTILE ?

    {
        $bdd = $this->_bdd;
        $requete = $bdd->prepare('SELECT pseudoCommentaire, contenuCommentaire FROM commentaire ORDER BY idChapitre'); // whereidChapitre = lorsque
        $requete->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
        $requete->execute();

        $tabTousLesCommentaires = array();

        while($lesCommentaires = $requete->fetch())
        {
            $commentaire = new commentaire($lesCommentaires);
            //$TousLesCommentaires->setIdCommentaire($lesCommentaires['idCommentaire']);
            $commentaire->setPseudoCommentaire($lesCommentaires['pseudoCommentaire']);
            $commentaire->setContenuCommentaire($lesCommentaires['contenuCommentaire']);
            $tabTousLesCommentaires[] =  $commentaire; // tableau d'objet
        }

        return $tabTousLesCommentaires;


     }






       /* //foreach ($results as $row)
        {
            $commentaires = new Commentaire();
           // $commentaires->setIdChapitre($results['idChapitre']);
           // $commentaires->setIdCommentaire($results['idCommentaire']);// on hydrate
            $commentaires->setPseudoCommentaire($results['pseudoCommentaire']);
            $commentaires->setContenuCommentaire($results['contenuCommentaire']);
            $commentaires->setMailCommentaire($results['mailCommentaire']);
            //$commentaire->setidChapitre($row['idChapitre']);//setIdChapitre

            $tableauDesCommentaires[] = $commentaires; // tableau d'objet

        }

        // $commentaires = array();
        // while ($row = $pdoStat->fetchAll())   //PDO::FETCH_ASSOC*/





    public function supprimerCommentaires($commentaire)
    {
        /*supprime l'objet passé en argument
        retourne true ou false*/

        $this->_pdoStatement = $this->_pdo->prepare('DELETE FROM commentaire WHERE id=:id LIMIT 1');

        $this->_pdoStatement->bindValue(':id', $commentaire->getIdCommentaire(), PDO::PARAM_INT);

        return $this->_pdoStatement->execute();
    }


}