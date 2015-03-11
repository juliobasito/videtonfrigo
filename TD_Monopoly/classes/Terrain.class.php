<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '/autoload.inc.php';

/**
 * Description of Terrain
 *
 * @author mmaldo
 */
class Terrain extends Propriete{
    
    private $_couleur;
    private $_nb_maison;
    private $_loyer_nu;
    
    public function __construct($p_titre, $p_prix, $p_couleur, $p_loyer_nu)
    {        
        parent::__construct($p_titre, $p_prix) ;

        $this->_couleur = $p_couleur;
        $this->_nb_maison = 0;
        $this->_loyer_nu = $p_loyer_nu;
    }
      
    public function getCouleur () { return $this-> _couleur;}
    public function getLoyer_nu () { return $this-> _loyer_nu;}
    public function getNb_maison () { return $this-> _nb_maison;}
    
    public function calculerLoyer ()
    {
        echo "je calcule le loyer d'un terrain...<br/>";
        return 0;
    }
    
    public function toString ()
    {
        return "[$this->_couleur] " . $this->getTitre() . " (prix : " . $this->getPrix() . ")";
    }
}
    //put your code here

