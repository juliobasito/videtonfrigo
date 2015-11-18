<?php
namespace Forum\Technique;

use PDO;

class Connexion
{
    private static	$host = "localhost",
                        $user = "root",
                        $pass = "",
                        $bdd = "forumbase";   
    
    public static function Connecter ()
    {        
        try 
        {
            $db =  new PDO("mysql:host=".self::$host."; dbname=".self::$bdd, self::$user, self::$pass);
            return $db;
        }   
        catch (Exception $e)
        {
            echo $e->getMessage();
            return null;
        }	
    }
}
