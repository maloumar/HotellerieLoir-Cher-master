<?php
namespace App;

use PDO;
use App\App_Exceptions;

class Db 
{
    static $db;
    protected static function Connect()
    {
        if(is_null(self::$db))
        {
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
            try {
                self::$db =  new PDO($dsn,DB_USER,DB_PASSWORD);
                self::$db->exec("SET NAMES 'UTF8'");
                self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (App_Exceptions $e) {
                App_Exceptions::DbError($e);
            }
        }
    }
    
    public function __construct()
    {
        self::Connect();
    }

    public function Db()
    {
        return self::$db;
    }
}


?>