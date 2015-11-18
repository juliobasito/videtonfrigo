<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '/autoload.inc.php';

/**
 * Description of Compagnie
 *
 * @author mmaldo
 */
class Compagnie extends Propriete {
     public function __construct($p_titre, $p_prix)
    {        
        parent::__construct($p_titre, $p_prix) ;       
    }
    
    public function calculerLoyer ()
    {
        echo "je calcule le loyer d'une compagnie...<br/>";
        return 0;
    }
    
}
