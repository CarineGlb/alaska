<?php 

/*le routeur
1er fichier appelé sur le site
Appelera le bon contrôleur

*/
//include_once(CONTROLLER.'home.php');
include_once ('controller/home.php');
include_once('config.php');
include_once (CLASSES.'/routeur.php');

//on teste le parametre action pour savoir quel controleur appeler


if(isset($_GET['action']))
{
	 if($_GET['action'] == 'homeBlog')
		{
			listChapters();
		}
	 

elseif ($_GET['action'] == 'chapter')
		{
			if(isset($_GET['id'])&& $_GET['id'] > 0)
			{
				viewchapter();
				
			}
		}	

else
		{
			var_dump('salut');
			die;
		}

}	  

else
{
	listChapters();
}

/*
$routeur = new Routeur($_GET);
$routeur->renderController();

*/



