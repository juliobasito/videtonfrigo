<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '/autoload.inc.php';

/**
 * Description of Propriete
 *
 * @author mmaldo
 */
class Piste {
    //put your code here
    private $_numero;
    private $_titre;
    private $_duree;
       
    public function __construct ($p_numero, $p_titre, $p_duree)
    {
        $this->_numero =$p_numero;
        $this->_titre =$p_titre;
        $this->_duree = $p_duree;
    }
    
    public function getNumero () { return $this->_numero; }
    public function getTitre () { return $this->_titre; }
    public function getDuree () { return $this->_duree; }
    public function getDureeEnSec () 
    { 
        $temps = explode(":", $this->getDuree());        
        return 60 * $temps[0] +  $temps[1];        
    }
     
    public function toString ()
    {
        return "$this->_numero - $this->_titre  <i>($this->_duree)</i>";
    }  
    
    public static function surDeuxChiffres ($val)
    {
        return ($val < 10) ? ("0". $val) : $val;
    }
}


