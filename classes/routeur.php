<?php

//include_once (CONTROLLER.'PageAccueil.php');

/*class routeur pour créer les routes et trouver le controller. Il gère l'ensemble des choix réalisés dans l'index

créer un construc
passer la route
quand on a la route on fait un include*/

class routeur
{
    private $request;

    private $routes =
        [
                    // parametre d'action de l'url                  controleur                  methode appelee depuis le controleur

                        'accueil'                          => ['controller' =>'PageAccueil',  'method' =>'accueil'],
                        'apropos'                          => ['controller' =>'PageAccueil',  'method' =>'aPropos'],
                        'getChapitres'                     => ['controller' =>'PageAccueil',  'method' =>'getChapitres'],
                        'extraitChapitre'                  => ['controller' =>'PageAccueil',  'method' =>'lireExtraitChapitre'],//extraitChapitre
                        'formulaireContact'                => ['controller' =>'PageAccueil',  'method' =>'formulaireContact'],
                        'messageFormulaireValide'          => ['controller' =>'PageAccueil',  'method' =>'messageFormulaireContactValide'],
                        'bibliographie'                    => ['controller' =>'PageAccueil',  'method' =>'bibliographie'],
                        'insertionCommentaires'            => ['controller' =>'PageAccueil',  'method' =>'insertCommentaires'],//insertCommentaires
                        'insertionCommentaireSignale'      => ['controller' =>'PageAccueil',  'method' =>'insertSignalementCommentaires'],//insertSignalementCommentaires
                        'lireLesCommentaires'              => ['controller' =>'PageAccueil',  'method' =>'getCommentaires'],//getCommentaires
                        'lireCommentaireChapitre'          => ['controller' =>'PageAccueil',  'method' =>'getCommentaireChapitre'],//getCommentaireChapitre
                        'mentionsLegales'                  => ['controller' =>'PageAccueil',  'method' =>'mentionsLegales']

        ];

    private $routesAdmin =
        [

            'connexionAdmin'                   => ['controller' =>'PageAdmin',    'method' =>'connexionAdmin'],
            'tableauBordAdmin'                 => ['controller' =>'PageAdmin',    'method' =>'tableauBordAdmin'],
            'listCommentaires'                 => ['controller' =>'PageAdmin',    'method' =>'listCommentaires'],//listCommentaires
            'listChapitres'                    => ['controller' =>'PageAdmin',    'method' =>'listChapitres'],//listChapitres
            'suppressionCommentaire'           => ['controller' =>'PageAdmin',    'method' =>'deleteCommentaire'],//deleteCommentaire
            'signalementCommentaire'           => ['controller' =>'PageAdmin',    'method' =>'updateSignalementCommentaire'],//updateCommentaire
            'tableauChapitreAdmin'             => ['controller' =>'PageAdmin',    'method' =>'listChapitres'],//listChapitres
            'ajouterChapitre'                  => ['controller' =>'PageAdmin',    'method' =>'addChapitre'],//addChapitre
            'modifierChapitre'                 => ['controller' =>'PageAdmin',    'method' =>'updateChapitre'],//updateChapitre
            'suppressionChapitre'              => ['controller' =>'PageAdmin',    'method' =>'deleteChapitre'],//deleteChapitre
            'deleteChapitreEtCommentaires'     => ['controller' =>'PageAdmin',    'method' =>'deleteChapitreEtCommentaires']


        ];

    public function __construct($request)// on crée le construc qui recupere $request
    {
        $this->request = $request; // il affecte à request la variable request
    }

   public function renderController()
    {
        $request = $this->request;

        if(key_exists($request, $this->routes)) // si la clé existe dans le tableau routes alors
         {
                $controller = $this->routes[$request]['controller']; // on appelle le controller egal à sthis routes request
                $method     = $this->routes[$request]['method'];
               // include(CONTROLLER.$controller.'.php');

                $currentController = new $controller(); // $controller demandé juste au dessus
                $currentController->$method();
          }

        else
            {

            echo '404';
        }
    }

    public function renderControllerAdmin()
    {
        $request = $this->request;

        if(key_exists($request, $this->routesAdmin)) // si la clé existe dans le tableau routes alors
        {
            $controller = $this->routesAdmin[$request]['controller']; // on appelle le controller egal à sthis routes request
            $method     = $this->routesAdmin[$request]['method'];
            // include(CONTROLLER.$controller.'.php');

            $currentController = new $controller(); // $controller demandé juste au dessus
            $currentController->$method();
        }

        else
        {

            echo '404';
        }
    }




}




