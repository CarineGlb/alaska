

<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

//Mettre les classes dans un systeme de liste de chargement

class MyAutoload
{
    private static $_host;
    private static $_root;
    private static $_controller;
    private static $_view;
    private static $_model;
    private static $_classes;
    private static $_assets;

    public static function start() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class) {
        if (file_exists(self::model() . $class . '.php')) {
            include_once(self::model() . $class . '.php');
        } elseif (file_exists(self::classes() . $class . '.php')) {
            include_once(self::classes() . $class . '.php');
        } elseif (file_exists(self::controller() . $class . '.php')) {
            include_once(self::controller() . $class . '.php');
        }
    }

    public static function host() {
        if(empty(self::$_host))
            self::$_host = 'http://' . $_SERVER['HTTP_HOST'];

        return self::$_host;
    }

    public static function root() {
        if(empty(self::$_root))
            self::$_root = $_SERVER['DOCUMENT_ROOT'];

        return self::$_root;
    }

    public static function controller() {
        if(empty(self::$_controller))
            self::$_controller = self::root() . '/controller/';

        return self::$_controller;
    }

    public static function view() {
        if(empty(self::$_view))
            self::$_view = self::root() . '/view/';

        return self::$_view;
    }

    public static function model() {
        if(empty(self::$_model))
            self::$_model = self::root() . '/model/';

        return self::$_model;
    }

    public static function classes() {
        if(empty(self::$_classes))
            self::$_classes = self::root() . '/classes/';

        return self::$_classes;
    }

    public static function assets() {
        if(empty(self::$_assets))
            self::$_assets = self::root() . '/assets/';

        return self::$_assets;
    }
};
