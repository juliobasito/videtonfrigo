<?php


require_once '/autoload.inc.php';


class Membre {
    private $nom;
    private $prenom;
    private $adresse;
    private $complement;
    private $codePostal;
	private $ville;
	private $csp;
	private $tel;
	private $mail;
	private $motDePasse;
    
    public function __construct ()
    {   
        if (func_num_args()> 0)
        {
            $this->nom = func_get_arg(0);
            $this->prenom =func_get_arg(1);
            $this->adresse = func_get_arg(2);
            $this->complement =func_get_arg(3);
            $this->codePostal =func_get_args(4);
			$this->ville =func_get_args(5);
			$this->tel =func_get_args(6);
			$this->mail =func_get_args(7);
			$this->motDePasse =func_get_args(8);
			$this->csp = array();
        }
        else
           $this->csp = array ();   
    }

    public function getAnneeDeParution () { return $this->$dateParution; }    
    public function getTitre () { return $this->titre; }
    public function getArtistre () { return $this->artiste; }
    public function getJacquette () { return $this->jaquette; }
    
    public function ajouterPiste (Piste $p_laPiste)
    {       
        $this->lesPistes[] = $p_laPiste;
    }      
    
    /* implementation de l'interface Iterator */    
    public function current () 
    {
        return current ($this->lesPistes);
    }
    public function key ()
    {
        return key($this->lesPistes);
    }
    public function next  ()
    {
       next($this->lesPistes);
    }
            
    public function rewind ()
    {
        reset($this->lesPistes);
    }
    public function valid ()
    {
        return (key($this->lesPistes) !== NULL);
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
}
