<?php

class Jeu 
{
	private $m_ronde;
	
	public function __construct()
	{
		$this->m_ronde = new Ronde();
		
	}
	
	public function VeutJouer($azertyuiop)
	{
		$this->m_ronde->ajouterEnfant($azertyuiop); 
	}
	
	public function Jouer()
	{
			echo 'Nous sommes '.$this->m_ronde->combienEnfant().' a jouer <br>';
	echo '<br>------------- Debut du jeu -------------<br><br>';
	
	
	
	$premierEnfant = $this->m_ronde->premierEnfant();
	echo 'Le premier enfant de la ronde est : '.$premierEnfant->getPrenom();
	echo '<br>Nombre d\'enfant dans la ronde : '.$this->m_ronde->combienEnfant();
	
	while($this->m_ronde->combienEnfant() > 1)
	{
	
	echo '<br><br>------------- Avancer -------------<br>';
	for($i = 0; $i < 15; $i++)
	{
	$this->m_ronde->avancer();
	$premierEnfant = $this->m_ronde->premierEnfant();
	echo 'Le premier enfant de la ronde est : '.$premierEnfant->getPrenom();
	echo '<br>';
	}
	
	echo '<br><br>------------- Sortir le premier enfant -------------<br>';
	
	echo 'Le premier enfant de la ronde est : '.$premierEnfant->getPrenom();

	$this->m_ronde->sortirPremierEnfant();
	$premierEnfant = $this->m_ronde->premierEnfant();
		echo '<br>Nombre d\'enfant dans la ronde : '.$this->m_ronde->combienEnfant();
	
	}
	
	$premierEnfant = $this->m_ronde->premierEnfant();
	echo '<br><br><h1>THE WINNER IS : '.$premierEnfant->getPrenom().'</h1>';
	}	
}

?>

