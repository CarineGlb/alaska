<?php
//frontcontroller acccueil du site//
//include_once (CONTROLLER.'PageAccueil.php');

//ATTENTION les noms des variables mentionnees ici ne sont pas identiques à celles du model. Celles du model restent dans le model et ici, je cree une variable dans ma fonction en appelant une fonction de mon model

class PageAccueil // sert à montrer la page d'accueil
{
    public function accueil()
    {
        $chapitreManager = new ChapitreManager();
        //$idChapitre = $_GET['idChapitre'];
        $chapitres = $chapitreManager->getListeChapitres(); //publierTousLesChapitres();

        $myView = new View('viewPageAccueil'); // mm noms que les fichiers de ma vue
        $myView->render(array('chapitres' => $chapitres)); // c'est une variable qui appelle une autre variable
    }

    public function aPropos()
    {
        $chapitreManager = new ChapitreManager();
        $idChapitre = $_GET['idChapitre'];
        $chapitres = $chapitreManager->getListeChapitres(); //publierTousLesChapitres();

        $myView = new View('affichageAPropos');
        $myView->render(array('chapitres' => $chapitres));
    }

    // ATTENTION $getChapitres et $idChapitre n'ont pas ete definies. je dois les déclarer ici dans la fonction en appelant la fonction du model dans laquelle
    //elles ont défnies sinon je dois la créer avec par ex $idChapitre = $_POST['idChapitre']

//getChapitres à la place de lireChapitres

    public function getChapitres($messageResultat = '') // j'ai passé un parametre et si appelle cette fonction sans passer de variable se sera soit rempli avec la variable ou chaine vide
    {
        if (isset($_GET['idChapitre']))
        {
            $idChapitre = htmlspecialchars($_GET['idChapitre']); // renommer $idChapitre

            $chapitreManager = new ChapitreManager();
            $chapitres = $chapitreManager->getListeChapitres(); //publierTousLesChapitres();

            $unChapitre = $chapitreManager->getChapitre($idChapitre);

            $commentaireManager = new commentaireManager();

            $commentaires= $commentaireManager->getListeCommentaires($idChapitre);

        }
         else
        {
          echo 'Aucun commentaire de publié';
         }

        $myView = new View('affichageUnChapitre');
        $myView->render(array(
            'chapitres' => $chapitres,
            'unChapitre' => $unChapitre,
            'commentaires'=>$commentaires,
            'messageResultat'=>$messageResultat));

    }



    //   'insertionCommentaires'            => ['controller' =>'PageAccueil',  'method' =>'insertionCommentairesBDD'],

    public function insertCommentaires() // avant insertionCommentairesBDD
    {

        if (isset($_GET['idChapitre']))
        {
            if ($_POST != null)
            {

                $chapitreManager = new ChapitreManager();
                $idChapitre = htmlspecialchars($_GET['idChapitre']);
                $chapitres = $chapitreManager->getListeChapitres(); //publierTousLesChapitres();

                $unChapitre = $chapitreManager->getChapitre($idChapitre);

                $idCommentaire = htmlspecialchars($_GET['idCommentaire']);

                $commentaireManager = new CommentaireManager();

                $commentaire = new commentaire($idChapitre); // mon objet $sommentaire est mon entité commentaire
                $commentaire->setIdCommentaire (htmlspecialchars($idCommentaire));
                $commentaire->setPseudoCommentaire(htmlspecialchars($_POST['pseudoCommentaire']));
                $commentaire->setContenuCommentaire(htmlspecialchars($_POST['contenuCommentaire']));
                $commentaire->setMailCommentaire(htmlspecialchars($_POST['mailCommentaire']));
                $commentaire->setIdChapitre(htmlspecialchars($_GET['idChapitre']));

                $commentaireManager->insertCommentaire($commentaire);// insererCommentaireBDD($commentaire);

                $commentaires = $commentaireManager->getListeCommentaires($idChapitre);

                $messageResultat = '';
                if ($commentaires) {
                    $messageResultat = 'Votre commentaire a été ajouté.';
                }

                $myView = new View('affichageUnChapitre');
                $myView->render(array(
                    'chapitres' => $chapitres,
                    'unChapitre' => $unChapitre,
                    'commentaires' => $commentaires,
                    'messageResultat' => $messageResultat));

            }
        }

    }




    public function insertSignalementCommentaires() //avant insertionCommentaireSignaleBDD
    {
        if (isset($_GET['idCommentaire']))
        {

            $idCommentaire = $_GET['idCommentaire'];

            // instancie les managers
            $commentaireManager = new CommentaireManager();

            // signalement du commentaire
            $commentaire = $commentaireManager->getCommentaire($idCommentaire);
            $signaler = $commentaireManager->insertCommentaireSignale($commentaire);

            $messageResultat ='';
            if($signaler)
            {
                $messageResultat = 'Votre commentaire a été signalé et nous vous en remercions.';
            }
        }

        $this->getChapitres($messageResultat);
    }


//'lireCommentaireChapitre'          => ['controller' =>'PageAccueil',  'method' =>'lireCommentaireChapitre'],

    public function getCommentaireChapitre() //avant lireCommentaireChapitre
    {
        if (isset($_GET['idChapitre']))
        {
            $idChapitre = htmlspecialchars($_GET['idChapitre']); // renommer $idChapitre

            $chapitreManager = new ChapitreManager();
            $chapitres = $chapitreManager->getListeChapitres(); //publierTousLesChapitres();

            $commentaire = new Commentaire($idChapitre);
            $unChapitre = $chapitreManager->getChapitre($idChapitre);

            $commentaireManager = new CommentaireManager();
            $lireCommentaireParChapitre = $commentaireManager->lireTousLesCommentaires();// idChapitre en parametre

        }
        else
        {
            $chapitre = new Chapitre();
        }

        $this->getChapitres();

        $myView = new View('chapitre');
        $myView->render(array(
            'chapitres' => $chapitres,
            'unChapitre'=>$unChapitre,
            'chapitre'=>$chapitre,
            'commentaire' => $commentaire,
            'lireCommentaireParChapitre'=>$lireCommentaireParChapitre));

    }



// 'lireLesCommentaires'              => ['controller' =>'PageAccueil',  'method' =>'lireTousLesCommentaires'],
  public function getCommentaires() //avant lireTousLesCommentaires
    {
        if (isset($_GET['idChapitre']))
        {
            if ($_POST != null) {

                $chapitreManager = new ChapitreManager();

                $chapitres = $chapitreManager->getListeChapitres(); //publierTousLesChapitres();

                $idChapitre = htmlspecialchars($_GET['idChapitre']);

                $unChapitre = $chapitreManager->getChapitre($idChapitre);

                $commentaireManager = new CommentaireManager();

                $commentaire = new commentaire($idChapitre); // mon objet $sommentaire est mon entité commentaire
                $commentaire->setIdCommentaire(htmlspecialchars($_GET['idCommentaire']));
                $commentaire->setPseudoCommentaire(htmlspecialchars($_POST['pseudoCommentaire']));
                $commentaire->setContenuCommentaire(htmlspecialchars($_POST['contenuCommentaire']));
                $commentaire->setMailCommentaire(htmlspecialchars($_POST['mailCommentaire']));
                $commentaire->setIdChapitre(htmlspecialchars($_GET['idChapitre']));

                $lireCommentaires= $commentaireManager->getCommentaire($idChapitre);//lireCommentaire($commentaire);

            }
        }

        $myView = new View('affichageUnChapitre');
        $myView->render(array(
            'chapitres' => $chapitres,
            'unChapitre'=>$unChapitre,
            'commentaire' => $commentaire,
            'lireCommentaires'=>$lireCommentaires));
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

        $manager = new ChapitreManager();
        $chapitres = $manager->getListeChapitres(); //publierTousLesChapitres();

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
        $chapitreManager = new ChapitreManager();
        $chapitres = $chapitreManager->getListeChapitres(); //publierTousLesChapitres();

        $myView = new View('affichageBibliographie');
        $myView->render(array('chapitres' => $chapitres));
    }



}