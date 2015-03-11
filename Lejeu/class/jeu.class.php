<?php

require_once 'Ronde.class.php' ;
require_once 'Enfant.class.php' ;

class Jeu
{
	private $_Ronde;

	public function veutJouer(Enfant $_unEnfant)
	{
		$this->_Ronde->entrer($_unEnfant);
	}
	
	public function __construct ()
	{
        $this->_Ronde = new Ronde();
	}
	
	public function combien()
	{
		return $this->_Ronde->combien();
	}
	
	
	
}
?>