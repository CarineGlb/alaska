<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

$root = $_SERVER['DOCUMENT_ROOT']; //[DOCUMENT_ROOT] => C:/wamp/www
$host = $_SERVER['HTTP_HOST']; // [HTTP_HOST] => localhost


define('HOST', 'http://'.$host.'/blog_alaska/');
define('ROOT', $root.'/blog_alaska/'); // document_root = C:/wamp/www/blog_alaska  chemin des dossiers

var_dump(HOST);
var_dump(ROOT);

//echo ROOT;EXIT; C:/wamp/www/blog_alaska/

define('CONTROLLER', ROOT.'controller/');
define('VIEW', ROOT.'view/');
define('MODEL', ROOT.'model/');
define('CLASSES', ROOT.'classes/');

define('ASSETS', HOST.'assets/');
// avec host car integration css se fait par ue url et pas par une insertion dans un dossier

//echo CONTROLLER; EXIT;  C:/wamp/www/blog_alaska/

//echo '<pre>'; print_r($_SERVER);exit;  c'st l'url /
