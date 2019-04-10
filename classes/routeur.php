<?php

//include_once (CONTROLLER.'PageAccueil.php');

/*class routeur pour créer les routes et trouver le controller. Il gère l'ensemble des choix réalisés dans l'index

créer un construc
passer la route
quand on a la route on fait un include*/

class Routeur
{
    private $request;

    private $routes =
        [
                    // parametre d'action de l'url                  controleur                  methode appelee depuis le controleur

                        'accueil'                          => ['controller' =>'PageAccueil',  'method' =>'accueil'],
                        'apropos'                          => ['controller' =>'PageAccueil',  'method' =>'aPropos'],
                        'lireChapitres'                    => ['controller' =>'PageAccueil',  'method' =>'accederChapitres'],
                        'extraitChapitre'                  => ['controller' =>'PageAccueil',  'method' =>'lireExtraitChapitre'],
                        'formulaireContact'                => ['controller' =>'PageAccueil',  'method' =>'formulaireContact'],
                        'messageFormulaireValide'          => ['controller' =>'PageAccueil',  'method' =>'messageFormulaireContactValide'],
                        'bibliographie'                    => ['controller' =>'PageAccueil',  'method' =>'bibliographie'],
                        'connexionAdmin'                   => ['controller' =>'PageAccueil',  'method' =>'connexionAdmin'],
                        'insertionCommentaires'            => ['controller' =>'PageAccueil',  'method' =>'insertionCommentairesBDD'],
                        'insertionCommentaireSignale'      => ['controller' =>'PageAccueil',  'method' =>'insertionCommentaireSignaleBDD'],
                        'lireLesCommentaires'              => ['controller' =>'PageAccueil',  'method' =>'lireTousLesCommentaires'],
                        'lireCommentaireChapitre'          => ['controller' =>'PageAccueil',  'method' =>'lireCommentaireChapitre'],
                        'tableauBordAdmin'                 => ['controller' =>'PageAdmin',    'method' =>'accueilAdmin'],
                        'tableauCommentaireAdmin'          => ['controller' =>'PageAdmin',    'method' =>'adminValidationCommentaires'],
                        'tableauContenuAdmin'              => ['controller' =>'PageAdmin',    'method' =>'adminContenuChapitres']
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
}




