<?php 

/*le routeur
1er fichier appelé sur le site
Appelera le bon contrôleur

C'est mon frontcontroller qui appellera mon controller depuis mon index
*/


//include_once ('controller/PageAccueil.php');
include_once('config_test.php');
include_once('Debug.php');

MyAutoload::start();

//$request = $_GET['action'];

//on teste le parametre action pour savoir quel controleur appeler


if(isset($_GET['action']))
{
    $request = $_GET['action'];
}

else{
    $request = 'accueil';
}

$routeur = new routeur($request); //objet routeur dans lequel on passe la commande
$routeur->renderController();





/*include_once (CLASSES.'/');

include_once (CLASSES.'/routeur.php');*/






