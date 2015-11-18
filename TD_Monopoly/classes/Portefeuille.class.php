<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '/autoload.inc.php';

/**
 * Description of Portefeuille
 *
 * @author mmaldo
 */
class Portefeuille implements Iterator{
    private $_lesProprietes;
    private $_liquidites;
	private $indice;
    
    public function __construct ()
    {
        $this->_lesProprietes = array ();
	}
   
	
	public function current() {
		echo "current...<br/>";
		return current ($this->_lesProprietes);
	}
	
	public function key() {
		echo "key....<br/>";
		return key($this->_lesProprietes);
		
	}
	
	function next() {
		echo "next....<br/>";
		next($this->_lesProprietes);
	}
	
	 
	function rewind() {
		echo "rewind....<br/>";
		reset($this->_lesProprietes);
	}
	
	function valid() {
		echo "valid.....<br/>";
		return (isset($this->_lesProprietes) == TRUE);
	}
	
    public function getLiquidites () { return $this->_liquidites; }
    public function toucher ($p_montant) { $this->_liquidites += $p_montant; }
    public function payer ($p_montant)
    {
        if ($p_montant > $this->_liquidites)  
            throw new Exception ("A découvert !");
        else
            $this->_liquidites -= $p_montant;
    }
    
    public function getProprietes () { return $this->_lesProprietes; }
    public function acheter (Propriete $p_laPropriete)
    {
        $this->payer ($p_laPropriete->getPrix());
        $this->_lesProprietes[$p_laPropriete->getTitre()] = $p_laPropriete;
    }
    public function vendre ($p_titre)
    {
        try {
            $laPropriete = $this->_lesProprietes[$p_titre];
            unset ($this->_lesProprietes[$p_titre]);
            $this->toucher ($laPropriete->getPrix());
        } catch (Exception $ex) {
            throw new Exception ("Cette propriete ne vous appartient pas !");
        }       
    }
    private function getPatrimoineImmobilier ()
    {        
        $total = 0;
        foreach ($this->_lesProprietes as  $laPropriete)
            $total += $laPropriete->getPrix();
        
        return $total;
    }
    public function getPatrimoine  ()
    {               
        return $this->_liquidites + $this->getPatrimoineImmobilier();
    }
     public function afficherPatrimoine ()
    {        
        echo "<strong>Liquidites : </strong> $this->_liquidites euros <br/>";
        echo "<strong>Proprietes : </strong> ".$this->getPatrimoineImmobilier()." euros : <ul>";
        foreach ($this->_lesProprietes as  $laPropriete)
        {
            echo "<li>" . $laPropriete->toString () . "</li>";
        }
        echo "</ul>"; 
        echo "<strong>Patrimoine total : ". $this->getPatrimoine()." euros</strong> <br/>";
    }
}
