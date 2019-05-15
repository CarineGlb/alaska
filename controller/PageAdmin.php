<?php
/**
 * Created by PhpStorm.
 * User: stb26
 * Date: 07/04/2019
 * Time: 15:50
 */

/*                      'tableauBordAdmin'                 => ['controller' =>'PageAdmin',    'method' =>'accueilAdmin'],
                        'tableauCommentaireAdmin'          => ['controller' =>'PageAdmin',    'method' =>'adminValidationCommentaires'],
                        'tableauContenuAdmin'              => ['controller' =>'PageAdmin',    'method' =>'adminContenuChapitres']*/

class PageAdmin // sert à montrer la page d'admin
{

    public function tableauBordAdmin($messageValidation ='')
    {
        $commentaireManager = new CommentaireManager();
        $chapitreManager = new ChapitreManager();


        $commentairesAdmin = $commentaireManager->getListeTousLesCommentaires();

        $nombreTotalCommentaires = count($commentairesAdmin);
       // $idChapitre = $_GET['idChapitre'];
        $chapitres = $chapitreManager->getListeChapitres();
        $totalChapitres = $chapitreManager->getTotalChapitres(); //publierTousLesChapitres();

        $nombreTotalChapitres = count($chapitres);

        // var_dump($commentairesAdmin);

        $myView = new View('tableauBordAdmin');
        $myView->renderAdmin(array(
            'commentairesAdmin' => $commentairesAdmin,
            'nombreTotalCommentaires'=> $nombreTotalCommentaires,
            'totalChapitres' => $totalChapitres,
            'nombreTotalChapitres' => $nombreTotalChapitres,
            'chapitres' => $chapitres,
            'messageValidation'=>$messageValidation
            )); // c'est une variable qui appelle une autre variable
    }



    public function listCommentaires($message='')// avant adminTableauCommentaires
    {
        $commentaireManager = new CommentaireManager();
        $chapitreManager = new ChapitreManager();

        $commentaires = $commentaireManager->getListeTousLesCommentaires();

        $nombreTotalCommentaires = count($commentaires);

        $chapitres = $chapitreManager->getListeChapitres();
       // $totalChapitres = $chapitreManager->getTotalChapitres(); //publierTousLesChapitres();

        $nombreTotalChapitres = count($chapitres);

        $commentairesAdmin = $commentaireManager->getListeTousLesCommentaires();


        $myView = new View('adminCommentaires');
        $myView->renderAdmin(array(
            // 'creerChapitreAdmin' => $creerChapitreAdmin,
            'nombreTotalCommentaires'=> $nombreTotalCommentaires,
            'nombreTotalChapitres' => $nombreTotalChapitres,
            'commentairesAdmin'=>$commentairesAdmin,
            'commentaires'=>$commentaires,
            'message' =>$message

        )); // c'est une variable qui appelle une autre variable
    }



    public function deleteCommentaire() //avanat adminDeleteCommentaire
    {
        $commentaireManager = new CommentaireManager();
        $chapitreManager = new ChapitreManager();

        $commentairesAdmin = $commentaireManager->getListeTousLesCommentaires();

        $nombreTotalCommentaires = count($commentairesAdmin);


        $chapitres = $chapitreManager->getListeChapitres();
        $totalChapitres = $chapitreManager->getTotalChapitres(); //publierTousLesChapitres();

        $nombreTotalChapitres = count($chapitres);


        $idCommentaire = $_GET['idCommentaire'];

        $deleteCommentaireAdmin = $commentaireManager->deleteCommentaire($idCommentaire);

        if ($deleteCommentaireAdmin)
        {
            $messageSuppressionCommentaire = 'Ce commentaire a été supprimé.';

            $this->listCommentaires($messageSuppressionCommentaire);
        }

        else
        {
            $myView = new View('adminCommentaires');
            $myView->renderAdmin(array(
                'deleteCommentaireAdmin' => $deleteCommentaireAdmin,
                'nombreTotalCommentaires'=> $nombreTotalCommentaires,
                'totalChapitres' => $totalChapitres,
                'nombreTotalChapitres' => $nombreTotalChapitres,
                'commentairesAdmin' => $commentairesAdmin

            ));
        }

    }

   public function updateSignalementCommentaire() //avant modificationSignalementCommentaire
   {
       $commentaireManager = new CommentaireManager();
       $chapitreManager = new ChapitreManager();

       // $idChapitre = $_GET['idChapitre'];
       $commentairesAdmin = $commentaireManager->getListeTousLesCommentaires();

       $nombreTotalCommentaires = count($commentairesAdmin);

       $chapitres = $chapitreManager->getListeChapitres();
       //$totalChapitres = $manager->getTotalChapitres(); //publierTousLesChapitres();

       $nombreTotalChapitres = count($chapitres);

       $idCommentaire = $_GET['idCommentaire'];

       $commentaire = $commentaireManager->getCommentaire($idCommentaire);


       if (isset($_POST['choix'])) {

           $messageSuppression ='Le signalement du commentaire a été conservé.';
           if ($_POST['choix'] == "supprimer")
           {
               $commentaire->setCommentaireSignale(0);
               $modifierSignalementCommentaireAdmin = $commentaireManager->modifierCommentaire($commentaire);

               if($modifierSignalementCommentaireAdmin)
               {
                   $messageSuppression = 'Le signalement du commentaire a été supprimé.';
               }
               else{
                   $messageSuppression = 'Un problème est survenu lors de la suppression du signalement.';
               }

           }
           $this->listCommentaires($messageSuppression);
       }

       else
       {
           $myView = new View('modifierSignalementCommentaire');
           $myView->renderAdmin(array(
               'nombreTotalCommentaires' => $nombreTotalCommentaires,
               'nombreTotalChapitres' => $nombreTotalChapitres,
               'chapitres' => $chapitres,
               'commentaire' => $commentaire
           ));
       }


   }






    public function listChapitres($message='')
    {
        $commentaireManager = new CommentaireManager();
        $chapitreManager = new ChapitreManager();

        $commentairesAdmin = $commentaireManager->getListeTousLesCommentaires();

        $nombreTotalCommentaires = count($commentairesAdmin);

        $chapitres = $chapitreManager->getListeChapitres();
        //$totalChapitres = $chapitreManager->getTotalChapitres(); //publierTousLesChapitres();

        $nombreTotalChapitres = count($chapitres);

        $chapitresAdmin = $chapitreManager->getListeChapitres();

        $myView = new View('adminChapitres');
        $myView->renderAdmin(array(
           // 'creerChapitreAdmin' => $creerChapitreAdmin,
            'nombreTotalCommentaires'=> $nombreTotalCommentaires,
            'nombreTotalChapitres' => $nombreTotalChapitres,
            'chapitresAdmin'=>$chapitresAdmin,
            'message'=>$message
        )); // c'est une variable qui appelle une autre variable
    }


//'creationChapitresAdmin'           => ['controller' =>'PageAdmin',    'method' =>'adminCreationChapitres'],


    public function addChapitre()
    {

        $commentaireManager = new CommentaireManager();
        $chapitreManager = new ChapitreManager();

        $commentairesAdmin = $commentaireManager->getListeTousLesCommentaires();
        $nombreTotalCommentaires = count($commentairesAdmin);

        $chapitres = $chapitreManager->getListeChapitres();
        //$totalChapitres = $managerChapitre->getTotalChapitres(); //publierTousLesChapitres();
        $nombreTotalChapitres = count($chapitres);

        $messageResultat = '';

        if (!empty($_POST['send'])) {
            $chapitre = new Chapitre();
            $chapitre->setTitreChapitre(htmlspecialchars($_POST['titreChapitre']));
            $chapitre->setContenuChapitre(htmlspecialchars($_POST['contenuChapitre']));

            $creerChapitreAdmin = $chapitreManager->creerChapitre($chapitre);

            if ($creerChapitreAdmin) {
                $messageResultat = 'Votre nouveau chapitre a été crée.';
            }

            $this->listChapitres($messageResultat);

        }
        else{
            $myView = new View('creerChapitre');
            $myView->renderAdmin(array(

                'nombreTotalCommentaires' => $nombreTotalCommentaires,
                'nombreTotalChapitres' => $nombreTotalChapitres,
                'messageResultat' => $messageResultat
            )); // c'est une variable qui appelle une autre variable
        }


     }


    public function updateChapitre()
    {
        $commentaireManager = new CommentaireManager();
        $chapitreManager = new ChapitreManager();

       // $idChapitre = $_GET['idChapitre'];
        $commentairesAdmin = $commentaireManager->getListeTousLesCommentaires();

        $nombreTotalCommentaires = count($commentairesAdmin);

        $chapitres = $chapitreManager->getListeChapitres();
        //$totalChapitres = $manager->getTotalChapitres(); //publierTousLesChapitres();

        $nombreTotalChapitres = count($chapitres);

        $idChapitre = $_GET['idChapitre'];
        $chapitre = $chapitreManager->getChapitre($idChapitre);

        $message='';

        if (!empty($_POST['send']))
        {
            $chapitre = new Chapitre();
            $chapitre->setTitreChapitre($_POST['titreChapitre']);
            $chapitre->setContenuChapitre($_POST['contenuChapitre']);

            $modifierChapitreAdmin = $chapitreManager->modifierChapitre($idChapitre, $chapitre);

            if ($modifierChapitreAdmin)
            {
                $message = 'Vos modifications ont été prises en compte.';
            }

            $this->listChapitres($message);
        }

        else{

        $myView = new View('modifierChapitre');

        $myView->renderAdmin(array(
            //'modifierChapitreAdmin' => $modifierChapitreAdmin,
            'chapitre'=> $chapitre,
            //'chapitresAdmin'=>$chapitresAdmin,
            'nombreTotalCommentaires'=> $nombreTotalCommentaires,
            //'totalChapitres' => $totalChapitres,
            'nombreTotalChapitres' => $nombreTotalChapitres,
            'message' =>$message));
            }

}


    public function deleteChapitre()
    {

        $commentaireManager= new CommentaireManager();
        $chapitreManager = new ChapitreManager();

        $commentairesAdmin = $commentaireManager->getListeTousLesCommentaires();

        $nombreTotalCommentaires = count($commentairesAdmin);
        $idChapitre = $_GET['idChapitre'];

        $chapitres = $chapitreManager->getListeChapitres();
        $totalChapitres = $chapitreManager->getTotalChapitres(); //publierTousLesChapitres();

        $nombreTotalChapitres = count($chapitres);

        $idChapitre = $_GET['idChapitre'];
        $deleteChapitreAdmin = $chapitreManager->deleteChapitre($idChapitre);

        if ($deleteChapitreAdmin) {
            $messageSuppressionChapitre = 'Ce chapitre a été supprimé.';

            $this->listChapitres($messageSuppressionChapitre);
        }

        else {
            $myView = new View('adminChapitres');
            $myView->renderAdmin(array(
                'deleteChapitreAdmin' => $deleteChapitreAdmin,
                'nombreTotalCommentaires' => $nombreTotalCommentaires,
                'totalChapitres' => $totalChapitres,
                'nombreTotalChapitres' => $nombreTotalChapitres
                //'messageSuppressionChapitre' =>$messageSuppressionChapitre
            ));
        }
    }


     public function connexionAdmin()
    {
        if(isset($_POST['motDePasse']) AND $_POST['motDePasse'] ==  "alaska")
        {
            $myView = new View('identificationAdmin');
            $myView->renderAdmin();
        }
    }


}