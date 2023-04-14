<?php
/*
    Initialisation du moteur PHP
    Modifications des paramêtres
*/

ini_set( "display_errors", "off" );
error_reporting( E_ALL );

/*
    Définitions des répertoires 
*/

define('DIR_BASE',__DIR__.'/../');
define('DIR_CONTROLLER',DIR_BASE.'Controller/');
define('DIR_MODEL',DIR_BASE.'Model/');
define('DIR_VIEW',DIR_BASE.'View/');
define('DIR_CONFIG',DIR_BASE.'Config/');
define('BASE_HREF','/');
define('DIR_UPLOAD',DIR_BASE.'Public/upload/');

/*
    Liaison à la base de données
*/
define("DB_HOST","localhost");
define("DB_USER","hotellerie");
define("DB_PASSWORD","dev");
define("DB_NAME","hotellerie");

/*
    Chargement des librairies Composer et Autoload
*/
require_once(DIR_BASE . 'vendor/autoload.php');

set_error_handler(['\App\App_Exceptions', 'PhpErrors'], E_ALL);
register_shutdown_function(['\App\App_Exceptions', 'PhpFatalErrors']);

require_once DIR_CONFIG.'routes.php';
?>