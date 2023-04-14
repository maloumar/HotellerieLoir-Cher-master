<?php
namespace App;
class Session
{
    static $id= '';
    static $content = [];

    static function Start()
    {
        session_start();
        self::$id = session_id();
        self::$content = $_SESSION;
    } 
    static function getId()
    {
        return self::$id;
    }
    static function Get($var)
    {
        return self::$content[$var];
    }
    static function Set($var,$value=null)
    {
        self::$content[$var] = $value;
    }
    static function Save()
    {
        $_SESSION = self::$content;
    }
    static function Destroy()
    {
        self::$id = '';
        self::$content = [];
        session_destroy();
    }
}
?>