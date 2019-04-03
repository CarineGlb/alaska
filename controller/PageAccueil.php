<?php
//frontcontroller acccueil du site//
//include_once (CONTROLLER.'PageAccueil.php');

//ATTENTION les noms des variables mentionnees ici ne sont pas identiques à celles du model. Celles du model restent dans le model et ici, je cree une variable dans ma fonction en appelant une fonction de mon model

class PageAccueil // sert à montrer la page d'accueil
{
    public function accueil()
    {
        $manager = new publierDesChapitresManager();
        $chapitres = $manager->publierTousLesChapitres();

        $myView = new View('viewPageAccueil'); // mm noms que les fichiers de ma vue
        $myView->render(array('chapitres' => $chapitres)); // c'est une variable qui appelle une autre variable
    }

    public function aPropos()
    {
        $manager = new publierDesChapitresManager();
        $chapitres = $manager->publierTousLesChapitres();

        $myView = new View('affichageAPropos');
        $myView->render(array('chapitres' => $chapitres));
    }

    // ATTENTION $lireChapitres et $idChapitre n'ont pas ete definies. je dois les déclarer ici dans la fonction en appelant la fonction du model dans laquelle
    //elles ont défnies sinon je dois la créer avec par ex $idChapitre = $_POST['idChapitre']


    public function accederChapitres()
    {
        if (isset($_GET['idChapitre']))
        {
            echo 'XXXXXXXXXXXXXXXXXX';

            $idChapitre = $_GET['idChapitre']; // renommer $idChapitre

            $manager = new publierDesChapitresManager();
            $chapitres = $manager->publierTousLesChapitres();

            $unChapitre = $manager->getChapitre($idChapitre);

            echo 'YYYYYYYYYYYYYYYYYYY';

            $lireCommentairesChapitre = new publierDesCommentairesManager();

            $commentaires= $lireCommentairesChapitre->lireCommentaire($idChapitre);





              //$manager = new publierDesChapitresManager();
                //$chapitres = $manager->publierTousLesChapitres();// idChapitre en parametre

                //$managerComment = new publierDesCommentairesManager();
                // $commentaires = $managerComment->lireTousLesCommentaires();

                //$this->accederChapitres();

        }
         else
        {
          echo 'Aucun commentaire de publié';
         }

        $myView = new View('affichageUnChapitre');
        $myView->render(array('chapitres' => $chapitres, 'unChapitre' => $unChapitre,'lireCommentairesChapitre'=> $lireCommentairesChapitre, 'commentaires'=>$commentaires));

        //$managerCommentaire = new publierDesCommentairesManager();
            //$lireCommentaires = $managerCommentaire->lireTousLesCommentaires($commentaire);

           // var_dump($lireCommentaires);

         /*else {
            $chapitre = new publierDesChapitresManager();
            $autreChapitre = $chapitre->publierTousLesChapitres();
            $tabCommentaire=array();

        }*/


    }

    /*public function lireExtraitChapitre()
    {
        if (isset($_GET['idChapitre'])) {
            $idChapitre = $_GET['idChapitre']; // renommer $idChapitre
            $manager = new publierDesChapitresManager();

            $chapitres = $manager->publierTousLesChapitres();
            $lireUnChapitre = $manager->publierUnChapitre();


            $managerComment = new publierDesCommentairesManager();
            $tabCommentaire = $managerComment->lireCommentaire($idChapitre);// idChapitre en parametre


        } else {
            $chapitre = new publierDesChapitresManager();
            $unChapitre = $chapitre->publierTousLesChapitres();
            $tabCommentaire=array();

        }

        $myView = new View('affichageUnChapitre');
        $myView->render(array('chapitres' => $chapitres, 'lireUnChapitre' => $lireUnChapitre,'tabCommentaire'=>$tabCommentaire));
    }*/

    //   'insertionCommentaires'            => ['controller' =>'PageAccueil',  'method' =>'insertionCommentairesBDD'],

    public function insertionCommentairesBDD()
    {

        echo 'AAAAA';
        if (isset($_GET['idChapitre']))
        {

            echo 'BBBBBBB';
            if ($_POST != null)
            {

                echo 'CCCCCCCCCCCC';
                $manager = new publierDesChapitresManager();
                $chapitres = $manager->publierTousLesChapitres();

                $idChapitre = $_GET['idChapitre'];

                $unChapitre = $manager->getChapitre($idChapitre);

                $idCommentaire = $_GET['idCommentaire'];

                $insererCommentaireManager = new publierDesCommentairesManager();

                $commentaire = new commentaire($idChapitre); // mon objet $sommentaire est mon entité commentaire
                $commentaire->setIdCommentaire($idCommentaire);
                $commentaire->setPseudoCommentaire($_POST['pseudoCommentaire']);
                $commentaire->setContenuCommentaire($_POST['contenuCommentaire']);
                $commentaire->setMailCommentaire($_POST['mailCommentaire']);
                $commentaire->setIdChapitre($_GET['idChapitre']);

                $insererCommentaireManager->insererCommentaireBDD($commentaire);



                $commentaires= $insererCommentaireManager->lireCommentaire($idChapitre);


                echo 'Votre commentaire a bien été ajouté <br/>';
            }

            else
            {
                echo 'Erreur';
            }

            if ($commentaire != null)
            {
                $commentairesManager = new publierDesCommentairesManager();

                $lireCommentaires= $commentairesManager->lireCommentaire($idChapitre);
            }

            else
            {
                $manager = new publierDesChapitresManager();
                $chapitres = $manager->publierTousLesChapitres();

                $idChapitre = $_GET['idChapitre'];

                $unChapitre = $manager->getChapitre($idChapitre);
            }

        }


        $myView = new View('affichageUnChapitre');
        $myView->render(array(
            'chapitres' => $chapitres,
            'unChapitre' => $unChapitre,
            'insererCommentaireManager'=>$insererCommentaireManager,
            'commentaires'=>$commentaires,
            'lireCommentaires'=>$lireCommentaires
        ));
           // 'commentaire'=>$commentaire,

            //'pseudoCommentaire'=>$pseudoCommentaire,
            //'mailCommentaire'=>$mailCommentaire,
           // 'contenuCommentaire'=>$contenuCommentaire)



//'commentaire'=>$commentaire dans $myView ?
    }


    public function insertionCommentaireSignaleBDD()
    {

        echo '????????????';
        if (isset($_GET['idCommentaire'])){

            $idCommentaire= $_GET['idCommentaire'];

                echo '!!!!!!!!!!!!!!';


            $manager = new publierDesChapitresManager();
            $chapitres = $manager->publierTousLesChapitres();
            $commentaire = new commentaire($idCommentaire); // mon objet $sommentaire est mon entité commentaire

           $idChapitre = $commentaire->getIdChapitre();

           $unChapitre = $manager->getChapitre($idChapitre);


            $lireCommentairesChapitre = new publierDesCommentairesManager();

            $commentaires= $lireCommentairesChapitre->lireCommentaire($idChapitre);


            //$insererCommentaireSignaleManager = new publierDesCommentairesManager(); // mon objet $sommentaire est mon entité commentaire
            $commentaire = new Commentaire();
            $signaler = setCommentaireSignale();

            $commentaireSignale=$lireCommentairesChapitre->insererCommentaireSignaleBDD($commentaire);


           // $insererCommentaireSignaleManager->insererCommentaireSignaleBDD();

            if ($commentaire != null)
            {
                $commentairesManager = new publierDesCommentairesManager();

                $lireCommentaires= $commentairesManager->lireCommentaire($idChapitre);
            }

            else
            {
                $manager = new publierDesChapitresManager();
                $chapitres = $manager->publierTousLesChapitres();

                $idChapitre = $_GET['idChapitre'];

                $unChapitre = $manager->getChapitre($idChapitre);
            }

            }


        $myView = new View('affichageCommentaireSignale'); // corrige
        $myView->render(array(
            'chapitres' => $chapitres,
            'unChapitre' =>$unChapitre,
            //'insererCommentaireSignaleManager' => $insererCommentaireSignaleManager,
           'commentaireSignale' =>$commentaireSignale,
            'commentaire' =>$commentaire,
            'commentaires' =>$commentaires,
            'lireCommentaires' => $lireCommentaires,
            'signaler' =>$signaler


    ));
    }


//'lireCommentaireChapitre'          => ['controller' =>'PageAccueil',  'method' =>'lireCommentaireChapitre'],

    public function lireCommentaireChapitre()
    {
        if (isset($_GET['idChapitre']))
        {
            $idChapitre = $_GET['idChapitre']; // renommer $idChapitre

            echo 'FFFFFFFFF';

            $manager = new publierDesChapitresManager();
            $chapitres = $manager->publierTousLesChapitres();

            echo 'GGGGGGGGGGG';

            $commentaire = new commentaire($idChapitre);
            $manager = new publierDesChapitresManager();
            $unChapitre = $manager->getChapitre(idChapitre);

            echo 'HHHHHHHHHHHH';


            $managerComment = new publierDesCommentairesManager();
            $lireCommentaireParChapitre = $managerComment->lireTousLesCommentaires();// idChapitre en parametre

            var_dump($lireCommentaireParChapitre);
        }
        else
        {
            $chapitre = new Chapitre();
        }

        $this->accederChapitres();

        $myView = new View('chapitre');
        $myView->render(array(
            'chapitres' => $chapitres,
            'unChapitre'=>$unChapitre,
            'chapitre'=>$chapitre,
            'commentaire' => $commentaire,
            'lireCommentaireParChapitre'=>$lireCommentaireParChapitre));

    }

        /*$commentaire = new Commentaire();

        $commentaire->getIdCommentaire(); //$_POST['idCommentaire']
        $commentaire->getCommentaire(); //$_POST['commentaire']
        $commentaire->getPseudo(); //$_POST['pseudo']
        $commentaire->getMail(); //$_POST['mail']
        $commentaire->getIdChapitre(); //$idChapitre*/


// 'lireLesCommentaires'              => ['controller' =>'PageAccueil',  'method' =>'lireTousLesCommentaires'],
  public function lireTousLesCommentaires()
    {
        echo 'DDDDDD';
        if (isset($_GET['idChapitre']))
        {

            echo 'eeeeeee';

            if ($_POST != null) {

                $manager = new publierDesChapitresManager();
                $chapitres = $manager->publierTousLesChapitres();


                // $commentaire = new commentaire();

                $idChapitre = $_GET['idChapitre'];

                $unChapitre = $manager->getChapitre($idChapitre);

                $lireCommentairesChapitre = new publierDesCommentairesManager();
                //$lireCommentairesChapitre = $managerComment->lireTousLesCommentaires($idChapitre);


                $commentaire = new commentaire(); // mon objet $sommentaire est mon entité commentaire
                $commentaire->setIdCommentaire($_GET['idCommentaire']);
                $commentaire->setPseudoCommentaire($_POST['pseudoCommentaire']);
                $commentaire->setContenuCommentaire($_POST['contenuCommentaire']);
                $commentaire->setMailCommentaire($_POST['mailCommentaire']);
                $commentaire->setIdChapitre($_GET['idChapitre']);
                $lireCommentairesChapitre->lireCommentaire($commentaire);


                var_dump($lireCommentairesChapitre);

            }
        }   //$manager = new publierDesChapitresManager();
            //$chapitres = $manager->publierTousLesChapitres();// idChapitre en parametre

            //$managerComment = new publierDesCommentairesManager();
            // $commentaires = $managerComment->lireTousLesCommentaires();

            //$this->accederChapitres();


        else{
            echo 'Aucun commentaire de publié';
        }

        $myView = new View('affichageUnChapitre');
        $myView->render(array(
            'chapitres' => $chapitres,
            'unChapitre'=>$unChapitre,
            'commentaire' => $commentaire,
            'lireCommentairesChapitre'=>$lireCommentairesChapitre));
    }


    public function formulaireContact()
    {
        if (isset($_POST['nom']) && (!empty($_POST['nom']))) {
            echo $nom = htmlspecialchars($_POST['nom']);
        } elseif (isset($_POST['prenom']) && (!empty($_POST['prenom']))) {
            echo $prenom = htmlspecialchars($_POST['prenom']);
        } elseif (isset($_POST['mail']) && (!empty($_POST['mail']))) {
            echo $mail = htmlspecialchars($_POST['mail']);
        } elseif (isset($_POST['message']) && (!empty($_POST['message']))) {
            echo $message = htmlspecialchars($_POST['message']);
        } else {
            echo 'Votre mail a bien été envoyé.';
        }

        if (empty($_POST['nom'])) {
            $erreurs['nom'] = 'champ obligatoire';
        } elseif (empty($_POST['prenom'])) {
            $erreurs['prenom'] = 'champ obligatoire';
        } elseif (empty($_POST['mail'])) {
            $erreurs['mail'] = 'champ obligatoire';
        } elseif (empty($_POST['message'])) {
            $erreurs['message'] = 'champ obligatoire';
        } else {
            $messageValidation = 'Votre mail a bien été envoyé.';

        }

        $manager = new publierDesChapitresManager();
        $chapitres = $manager->publierTousLesChapitres();

        $myView = new View('affichageFormulaireContact');
        $myView->render(array('chapitres' => $chapitres, 'erreurs' => $erreurs, 'validation' => $message));
    }


    public function messageFormulaireContactValide()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            // Récupération des variables et sécurisation des données
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);// htmlentities() convertit des caractères "spéciaux" en équivalent HTML
            $mail = htmlspecialchars($_POST['mail']);
            $message = htmlspecialchars($_POST['message']);

            // Variables concernant l'email

            $destinataire = 'glcarine26@gmail.com';
            $sujet = 'Demande de contact depuis le blog alaska'; // Titre de l'email

            $contenu =
                '<p><strong>Nom</strong>: ' . $nom . '</p>';
            '<p><strong>Prénom</strong>: ' . $prenom . '</p>';
            '<p><strong>Mail</strong>: ' . $mail . '</p>';
            '<p><strong>Message</strong>: ' . $message . '</p>';
            '</body></html>'; // Contenu du message de l'email (en XHTML)


            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


            mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
            echo '<p><b>Votre message a bien été envoyé!</b></p>';


            $myView = new View('contactvalide');
            $myView->render(array('contenu' => $contenu));
        }

    }

    public function bibliographie()
    {
        $manager = new publierDesChapitresManager();
        $chapitres = $manager->publierTousLesChapitres();

        $myView = new View('affichageBibliographie');
        $myView->render(array('chapitres' => $chapitres));
    }

    public function connexionAdmin()
    {
        $myView = new View('admin');
        $myView->render(array('admin' => $admin));
    }

}