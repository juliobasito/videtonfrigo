	
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
			$lePremierEnfant = $this->sortir();
			$this->entrer($lePremierEnfant);
		}
		
		public function entrer (Enfant $p_unEnfant)
		{
			$this->_unEnfant
	
		public function sortir()
		{
			$
			array_shift($this->tableauEnfant);
			$this->nombreEnfant = $this->nombreEnfant - 1;
		}
		
		public function premierEnfant()
		{
			return $this->tableauEnfant[0];
		}

		public function to_string()
		{
		}


		
		public function combienEnfant()
		{
			return $this->nombreEnfant;
		}
		
		
}
?>