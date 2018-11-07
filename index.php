<?php 

/*le routeur
1er fichier appelé sur le site
Appelera le bon contrôleur

C'est mon frontcontroller qui appellera mon controller depuis mon index
*/


//include_once ('controller/Home.php');
include_once('config.php');
//include_once (CLASSES.'/routeur.php');

MyAutoload::start();

//on teste le parametre action pour savoir quel controleur appeler


if(isset($_GET['action']))
{
    $request = $_GET['action'];
}

else{
    $request = 'home';
}


$routeur = new Routeur($request); //objet routeur dans lequel on passe la commande
$routeur->renderController();










