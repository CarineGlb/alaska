<?php



class CommentaireManager
{

    private $_bdd;

    public function __construct() // on instancie $bdd au démarrage
    {
        $this->_bdd = new PDO('mysql:host=carineglbvoc.mysql.db;dbname=carineglbvoc;charset=utf8', 'carineglbvoc', '5qhYmhRnuCV9',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //return $bdd;
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

    public function insertCommentaire($commentaire) //insererCommentaireBDD($commentaire)
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

    public function insertCommentaireSignale($commentaire) //insererCommentaireSignaleBDD($commentaire)

        {
            $bdd = $this->_bdd;
            $requete = $bdd->prepare('UPDATE commentairelivre SET commentaireSignale = commentaireSignale+1 WHERE idCommentaire= :idCommentaire'); // verif dans sql est ok
            $requete->bindValue(':idCommentaire', $commentaire->getIdCommentaire(), PDO::PARAM_INT);

            //var_dump($commentaire);

            //$requete->bindValue(':commentaireSignale', $commentaire->getCommentaireSignale(), PDO::PARAM_INT);

            $signaler = $requete->execute();

            return $signaler ;

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

    public function getListeTousLesCommentaires()
    {
        $bdd = $this->_bdd;

        $query = ('SELECT*FROM commentairelivre ORDER BY commentaireSignale DESC');

        $pdoStat = $bdd->prepare($query);
        //$pdoStat->bindValue(':idCommentaire', $idCommentaire, PDO::PARAM_INT);
        $pdoStat->execute();

        while ($results = $pdoStat->fetch(PDO::FETCH_ASSOC)) {
            $tabCommentaireAdmin[] = new commentaire($results);
        }

        return $tabCommentaireAdmin;

        //return new commentaire($pdoStat->fetchAll(PDO::FETCH_ASSOC));
    }

// creer une boucle de resultats car pr le moment un seul resultat stocke



    public function getListeCommentaires($idChapitre)//lireCommentaire($idChapitre)

    {
        $bdd = $this->_bdd;
        $query = ('SELECT pseudoCommentaire, contenuCommentaire, idCommentaire FROM commentairelivre WHERE idChapitre = :idChapitre ORDER BY idChapitre');
        $pdoStat = $bdd->prepare($query);
        $pdoStat->bindValue(':idChapitre', $idChapitre, PDO::PARAM_INT);
        $pdoStat->execute();
        $tabCommentaire=[];

        while ($results= $pdoStat->fetch(PDO::FETCH_ASSOC))
        {
            $tabCommentaire[] = new commentaire($results);
        }

        return $tabCommentaire;

    }
/*
    public function count()
    {
        $bdd = $this->_bdd;
        $requete=$bdd->query('SELECT COUNT(*) FROM livre');
        $requete->execute(fetchColumn());

        return $requete;
    }
*/
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

    public function getCommentaire($idCommentaire)
    {
        $bdd=$this->_bdd;

        $query = ('SELECT*FROM commentairelivre WHERE idCommentaire=:idCommentaire');

        $pdoStat = $bdd->prepare($query);
        $pdoStat->bindValue(':idCommentaire', $idCommentaire, PDO::PARAM_INT);
        $pdoStat->execute();

        return new commentaire($pdoStat->fetch(PDO::FETCH_ASSOC));
    }




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


    public function deleteCommentaire($idCommentaire)
    {
        $bdd = $this->_bdd;

        $query = ('DELETE FROM commentairelivre WHERE idCommentaire =:idCommentaire');

        $deleteCommentaire = $bdd->prepare($query);
        $deleteCommentaire->bindValue(':idCommentaire', $idCommentaire, PDO::PARAM_INT);
        $deleteCommentaire->execute();

        return $deleteCommentaire;

        //return new commentaire($pdoStat->fetchAll(PDO::FETCH_ASSOC));
    }

    public function deleteCommentaireSignale($idCommentaire,$commentaire)
    {
        $bdd = $this->_bdd;
        $requete = $bdd->prepare('UPDATE commentairelivre SET commentaireSignale = :commentaireSignale WHERE idCommentaire= :idCommentaire'); // verif dans sql est ok
        $requete->bindValue(':idCommentaire', $commentaire->getCommentaireSignale(), PDO::PARAM_INT);
        $requete->bindValue(':commentaireSignale', $commentaire->getCommentaireSignale(), PDO::PARAM_INT);
        //var_dump($commentaire);

        //$requete->bindValue(':commentaireSignale', $commentaire->getCommentaireSignale(), PDO::PARAM_INT);

        $suppressionSignaler = $requete->execute();

        return $suppressionSignaler ;

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

    public function modifierCommentaire($commentaire)
    {
        $bdd = $this->_bdd;
        $requete = $bdd->prepare('UPDATE `commentairelivre` SET pseudoCommentaire = :pseudoCommentaire, mailCommentaire = :mailCommentaire, contenuCommentaire = :contenuCommentaire , idChapitre = :idChapitre , commentaireSignale = :commentaireSignale  WHERE idCommentaire= :idCommentaire'); // verif dans sql est ok
        $requete->bindValue(':idCommentaire', $commentaire->getIdCommentaire(), PDO::PARAM_INT);
        $requete->bindValue(':pseudoCommentaire', $commentaire->getPseudoCommentaire(), PDO::PARAM_STR);
        $requete->bindValue(':mailCommentaire', $commentaire->getMailCommentaire(), PDO::PARAM_STR);
        $requete->bindValue(':contenuCommentaire', $commentaire->getContenuCommentaire(), PDO::PARAM_STR);
        $requete->bindValue(':idChapitre', $commentaire->getIdChapitre(), PDO::PARAM_INT);
        $requete->bindValue(':commentaireSignale', $commentaire->getCommentaireSignale(), PDO::PARAM_INT);
        //var_dump($commentaire);

        //$requete->bindValue(':commentaireSignale', $commentaire->getCommentaireSignale(), PDO::PARAM_INT);

        $modifierCommentaire = $requete->execute();

        return $modifierCommentaire;
    }



}