<?php
namespace App;

class View
{
    static $loader;
    static $vars = [];
    static function Start()
    {
        self::$loader = new \Twig\Loader\FilesystemLoader(DIR_VIEW);
    }
    static function Set($var,$value)
    {
        self::$vars[$var] = $value;
    }
    static function Render($template)
    {
        $twig = new \Twig\Environment(self::$loader);
        echo $twig->render($template.'.html',self::$vars);
    }
    
}
?>