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
abstract class Propriete {
    //put your code here
    private $_titre;
    private $_prix;
       
    public function __construct ($p_titre, $p_prix)
    {
        $this->_titre =$p_titre;
        $this->_prix = $p_prix;
    }
    public function getTitre () { return $this->_titre; }
    public function setTitre ($p_nouveauTitre) {  $this->_titre = $p_nouveauTitre; }
    
    public function getPrix () { return $this->_prix; }
    public function setPrix ($p_nouveauPrix) { $this->_prix = $p_nouveauPrix; }
    
    public abstract function calculerLoyer ();
       
    public function toString ()
    {
        return "$this->_titre  (prix :   $this->_prix )";
    }  
}
