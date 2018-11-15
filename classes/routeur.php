<?php

//include_once (CONTROLLER.'Home.php');

/*class routeur pour créer les routes et trouver le controller. Il gère l'ensemble des choix réalisés dans l'index

créer un construc
passer la route
quand on a la route on fait un include*/

class Routeur
{
    private $request;

    private $routes =
        [
                        'home'          => ['controller' =>'Home', 'method' =>'showHome'],
                        'apropos'       => ['controller' =>'Home', 'method' =>'showPropos'],
                        'chapitres'     => ['controller' =>'Home', 'method' =>'showChapitres'],
                        'chapitre'      => ['controller' =>'Home', 'method' =>'showChapitre'],
                        'contact'       => ['controller' =>'Home', 'method' =>'showContact'],
                        'bibliographie' => ['controller' =>'Home', 'method' =>'showBibliographie'],
                        'admin'         => ['controller' =>'Home', 'method' =>'showConnexion'],
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

                /*if( $request === 'home')
                {
                    listChapters();
                }

                elseif( $request === 'contact')
                    {
                        include(VIEW. 'contact.php');
                    }*/
            }
            else
            {
            echo '404';
            }
    }
}




