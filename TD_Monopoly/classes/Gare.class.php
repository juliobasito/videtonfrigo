<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '/autoload.inc.php';

/**
 * Description of Gare
 *
 * @author mmaldo
 */
class Gare extends Propriete {
    private static $_loyer = array ( 1 => 25, 2 => 50, 3 => 100, 4 => 200);
    
    public function __construct($p_titre, $p_prix)
    {        
        parent::__construct($p_titre, $p_prix) ;       
    }
      
    public function calculerLoyer ()
    {
        echo "je calcule le loyer d'une gare...<br/>";
        return self::$_loyer[1];
    }
    
}
