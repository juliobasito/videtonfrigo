<?php

require_once "../autoload.inc.php";
require_once "../connexion_bdd.php";

class Partie {
	private $_ID;
	private $unPaquet;
	private $joueur1;
	private $joueur2;
	public $leTirage;
	
	public function __construct($pjoueur1, $pjoueur2)
	{
		$this->unPaquet = new Paquet();
		$this->joueur1 = $pjoueur1;;
		$this->joueur2 = $pjoueur2;
		$this->leTirage = array();
	}
	
	 
    public function ajouterCarteTirage (Carte $p_laCarte)
    {       
        $this->leTirage[] = $p_laCarte;
    }  

	
	public function getId()
	{
		return $this->_ID;
	}
	
	public function getPaquet()
	{
		return $this->unPaquet;
	}
	
	public function getJoueur1()
	{
		return $this->joueur1;
	}
	
	public function getJoueur2()
	{
		return $this->joueur2;
	}
	
	public function setID($newId)
	{
		$this->_ID = $newID;
	}
	
	public function setPaquet($newPaquet)
	{
		$this->unPaquet = $newPaquet;
	}
	public function setJoueur1($newJoueur1)
	{
		$this->joueur1 = $newjoueur1;
	}
	public function setjoueur2($newjoueur2)
	{
		$this->joueur2 = $newjoueur2 ;
	}
}