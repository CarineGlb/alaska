<?php



class publierDesCommentairesManager
{

    private $_bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $bdd= $this->_bdd = new PDO('mysql:host=localhost;dbname=alaska;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
    }



    /**
     * @param Commentaire $commentaire
     */

    /*$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires
	));*/

    public function insererCommentaireBDD($commentaire)
    {
        $bdd = $this->_bdd;

        // preparation de la requête

        $requete = $bdd->prepare('INSERT INTO commentairelivre(idCommentaire,pseudoCommentaire,mailCommentaire,contenuCommentaire,idChapitre) VALUES(:idCommentaire,:pseudoCommentaire,:mailCommentaire,:contenuCommentaire,:idChapitre)');

//lier les marqueurs à une valeur
         $requete->bindValue(':idCommentaire', $commentaire->getIdCommentaire(), PDO::PARAM_INT);
         $requete->bindValue(':pseudoCommentaire',$commentaire->getPseudoCommentaire() , PDO::PARAM_STR);
         $requete->bindValue(':mailCommentaire',$commentaire->getMailCommentaire() , PDO::PARAM_STR);
         $requete->bindValue(':contenuCommentaire', $commentaire->getContenuCommentaire() ,  PDO::PARAM_STR);
         $requete->bindValue(':idChapitre', $commentaire->getIdChapitre() ,  PDO::PARAM_INT);


        $newCommentaire = $requete->execute();

        return $newCommentaire;
    }

    public function insererCommentaireSignaleBDD($commentaire)
    {
        $bdd = $this->_bdd;

        $requete = $bdd->prepare('UPDATE commentairelivre SET commentaireSignale = commentaireSignale +1 WHERE idCommentaire= :idCommentaire');

        $requete->bindValue(':idCommentaire', $commentaire->getIdCommentaire(), PDO::PARAM_INT);

        $requete = execute();

        return $requete;

    }










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
        $query = ('SELECT pseudoCommentaire, contenuCommentaire, idCommentaire FROM commentairelivre WHERE idChapitre = :idChapitre ORDER BY idChapitre');
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
*/





    public function lireTousLesCommentaires() // tous les commentaires par chapitre  UTILE ?

    {
        $bdd = $this->_bdd;
        $requete = $bdd->prepare('SELECT pseudoCommentaire, contenuCommentaire FROM commentairelivre ORDER BY idChapitre'); // whereidChapitre = lorsque
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

        $this->_pdoStatement = $this->_pdo->prepare('DELETE FROM commentairelivre WHERE id=:id LIMIT 1');

        $this->_pdoStatement->bindValue(':id', $commentaire->getIdCommentaire(), PDO::PARAM_INT);

        return $this->_pdoStatement->execute();
    }


}