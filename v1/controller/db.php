<?php

class DB 
{
    private static $readConnection;
    private static $writeConnection;
    
    public static function readDB() 
    {
        $user = 'root';
        $password = '';
        $options = [
                      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                      PDO::ATTR_EMULATE_PREPARES => false
                  ];
        
        
        try {
            self::$readConnection = new PDO('mysql:host=localhost;dbname=udemy', $user, $password, $options);
        
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
        $user = 'root';
        $password = '';
        $options = [
                      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                      PDO::ATTR_EMULATE_PREPARES => false
                  ];
        
        
        try {
            self::$writeConnection = new PDO('mysql:host=localhost;dbname=udemy', $user, $password, $options);
        
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