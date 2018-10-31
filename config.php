<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];


define('HOST', 'http://'.$host.'/blog_alaska/');
define('ROOT', $root.'/blog_alaska/'); // document_root = C:/wamp/www chemin des dossiers

//echo ROOT;EXIT; C:/wamp/www/blog_alaska/

define('CONTROLLER', ROOT.'controller/');
define('VIEW', ROOT.'view/');
define('MODEL', ROOT.'model/');
define('CLASSES', ROOT.'classes/');

define('ASSETS', HOST.'assets/');
// avec host car integration css se fait par ue url et pas par une insertion dans un dossier

//echo CONTROLLER; EXIT;  C:/wamp/www/blog_alaska/


