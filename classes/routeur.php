<?php

include_once (CONTROLLER.'home.php');

//class routeur pour créer les routes et trouver le controller. Il gère l'ensemble des choix réalisés dans l'index//

/*class Routeur
// créer un construc
    //passer la route
    // quand on a la route on fait un include
{
    private $request;

    public function__construct ($request)// on crée le construc qui recupere $request
    {
        $this->request = $request; // il affecte à request la variable request
    }

    public function renderController()
    {
        if($this->request == 'home')
        {
            include(CONTROLLER.'home.php');
        }
        else
        {
            listChapters();
        }
    }

}
*/