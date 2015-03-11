<?php
class Enfant
{
	private $_nom;
	private $_prenom;
	private $_age;
	private $_rang;
	
	public function __construct($p_prenom = NULL, $p_nom = NULL, $p_age = NULL, $p_rang = NULL)
	{
		$this->_prenom=$p_prenom;
		$this->_nom=$p_nom;
		$this->_age=$p_age;
		$this->_rang=$p_rang;
	}

	public function getPrenom()
	{
		return $this->_prenom ;
	}
	/*public function eliminer()
	{
		$random = rand(0, 5);
		if($random == $this->_rang)
		{
			if($this->_prenom !== '')
			{
				echo getPrenom();
				$this->_prenom = '';
			}
		}else{
			echo 'Personne est éliminé' ;
		}
	}*/
}
	

?>