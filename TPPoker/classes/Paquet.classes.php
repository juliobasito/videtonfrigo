<?php

require_once "../autoload.inc.php";
//require_once "../connexion_bdd.php";

class Paquet implements Iterator
{
	private $_lesCartes = array();
	
	public function __construct()
	{
		$this->_lesCartes = array();
    	$db = new PDO ('mysql:host=localhost; dbname=poker', 'root', '');
    	for ($compteur=1; $compteur < 53 ; $compteur++) 
		{ 

    		$requetecarte= "SELECT * FROM carte WHERE ID=".$compteur;
      		$res =$db->query($requetecarte);
      		while ($carte = $res->fetch(PDO::FETCH_ASSOC))
				{
					$test = new carte($compteur);
					$this->_lesCartes[]=$test;
				}
    	}
		
    }
	
	 public function current () 
    {
        return current ($this->_lesCartes);
    }
    public function key ()
    {
        return key($this->_lesCartes);
    }
    public function next  ()
    {
       next($this->_lesCartes);
    }
            
    public function rewind ()
    {
        reset($this->_lesCartes);
    }
    public function valid ()
    {
        return (key($this->_lesCartes) !== NULL);
    }
	
	public function melanger ()
	{
	$melange = array();
	srand((double) microtime() * 1000000);
	while ( count($this->_lesCartes) != 0)
	{
		$i = rand (0, count($this->_lesCartes)-1);
		$val=$this->_lesCartes[$i];
		unset($this->_lesCartes[$i]);
		array_splice ($this->_lesCartes,$i,0);
		$melange[] = $val;
	}
	$this->_lesCartes=$melange;
	}
	
	public function distribuer ()
	{
	$carte = $this->_lesCartes[0];
	unset($this->_lesCartes[0]);
	array_splice ($this->_lesCartes,0,0);
	return $carte;
	}

}
	