<?php

class DB 
{
    private static $readConnection;
    private static $writeConnection;

    public static function readDB() 
    {
        
        try {
            self::$readConnection = new PDO('mysql:host=localhost;dbname=udemy', 'root', '');
            self::$readConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$readConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
                echo 'connection made with readDB'; 
        } 
        catch(PDOException $e) 
        {
            echo  'Connection failed:' .$e->getMessage();
        }

        return self::$readConnection;

    }
    public static function writeDB() 
    {
        
        try {
            self::$writeConnection = new PDO('mysql:host=localhost;dbname=udemy', 'root', '');
            self::$writeConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$writeConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
                echo 'connection made with writeDB'; 
        } 
        catch(PDOException $e) 
        {
            echo  'Connection failed:' .$e->getMessage();
        }
        
        return self::$writeConnection;
    }
}
?>