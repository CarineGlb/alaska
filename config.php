<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

//Mettre les classes dans un systeme de liste de chargement

class MyAutoload
{
    public static function start () // statique car appelée 1 seule fois dans l'appli
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));

        $root = $_SERVER['DOCUMENT_ROOT'];
        //$root='/www/alaska';
        $host = $_SERVER['HTTP_HOST'];



        //echo $root; // /home/carineglbv/www/alaska
      //  echo '-------------';
        //echo $host; // www.blog-alaska.carinegl.com



        define('HOST', 'http://' . $host);
        define('ROOT', $root); //define('ROOT', $root.'/blog_alaska/'); define('ROOT', $root.'/');

        /*define('HOST', 'http://' . $host . '/blog_alaska/');
        define('ROOT', $root . '/blog_alaska/');*/

        define('CONTROLLER', ROOT . '/controller/'); //define('CONTROLLER', ROOT . 'controller/');
        define('VIEW', ROOT . '/view/'); //define('VIEW', ROOT . 'view/');
        define('MODEL', ROOT . '/model/'); //define('MODEL', ROOT . 'model/');
        define('CLASSES', ROOT.'/classes/'); //define('CLASSES', ROOT . 'classes/');

        define('ASSETS', HOST . '/assets/'); //define('ASSETS', HOST . 'assets/');


    }



    public static function autoload ($class) // on passe les classes en variables. Si la classe existe on la charge
    {


        if (file_exists(MODEL . $class . '.php')) {
            include_once(MODEL . $class . '.php');

        } elseif (file_exists(CLASSES . $class . '.php')) {
            include_once(CLASSES . $class . '.php');
        } elseif (file_exists(CONTROLLER . $class . '.php')) {
            include_once(CONTROLLER . $class . '.php');
        }

    }

}



