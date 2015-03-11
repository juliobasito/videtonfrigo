<?php	
	
class Ronde
{
	private $tableauEnfant;
	private $nombreEnfant;
	
	public function __construct()  
	{
		$this->nombreEnfant = 0;
	}
	
	
	
	public function ajouterEnfant($newEnfant)
	{
		$this->tableauEnfant[$this->nombreEnfant] = $newEnfant;  
		$this->nombreEnfant++; 								
	}

		
		public function avancer()
		{
			$lePremier = $this->tableauEnfant[0]; 		
			array_shift($this->tableauEnfant);			
			$this->tableauEnfant[$this->nombreEnfant] = $lePremier; 
		}
		
	
	
		public function sortirPremierEnfant()
		{
			array_shift($this->tableauEnfant); 			
			$this->nombreEnfant = $this->nombreEnfant - 1;
		}
		
		public function premierEnfant()
		{
			return $this->tableauEnfant[0];
		}
		
		public function combienEnfant()
		{
			return $this->nombreEnfant;
		}
		
		
}
?>