<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '/autoload.inc.php';

/**
 * Description of Album
 *
 * @author mmaldo
 */
class Album implements Iterator{
    private $_anneeDeParution;
    private $_titre;
    private $_artiste;
    private $_jacquette;
    private $_LesPistes;
    

    public function __construct ($p_anneeDeParution,$p_titre,$p_artiste,$p_jacquette)
    {
        $this->_anneeDeParution = $p_anneeDeParution;
        $this->_titre = $p_titre;
        $this->_artiste = $p_artiste;
        $this->_jacquette =$p_jacquette;
        $this->_LesPistes = array ();
    }
    
    public function getAnneeDeParution () { return $this->_anneeDeParution; }    
    public function getTitre () { return $this->_titre; }
    public function getArtistre () { return $this->_artiste; }
    public function getJacquette () { return $this->_jacquette; }
    
    public function ajouterPiste (Piste $p_laPiste)
    {       
        $this->_lesPistes[] = $p_laPiste;
    }      
    
    /* implementation de l'interface Iterator */    
    public function current () 
    {
        return current ($this->_lesPistes);
    }
    public function key ()
    {
        return key($this->_lesPistes);
    }
    public function next  ()
    {
       next($this->_lesPistes);
    }
            
    public function rewind ()
    {
        reset($this->_lesPistes);
    }
    public function valid ()
    {
        return (key($this->_lesPistes) !== NULL);
    }
        
    public function getDuree ()
    {
        $temps = $this->getDureeEnSec ();
        $min = intval($temps / 60);
        $sec = $temps % 60;
	
               
        return Piste::surDeuxChiffres($min) . ":" . Piste::surDeuxChiffres($sec);
    }

    public function getDureeEnSec ()
    {
        $duree = 0;
        foreach ($this as $unePiste)
          $duree += $unePiste->getDureeEnSec ();
        
        return $duree;
    }   
	
	public function to_String()
    {
        echo "Titre : $this->_titre  </br>";
		echo "artiste :   $this->_artiste </br>";
		echo "Annee de parution : $this->_anneeDeParution </br>";
		echo "<img src='$this->_jacquette' /></br>";
    }  
}
