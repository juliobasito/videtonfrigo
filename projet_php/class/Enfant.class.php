<?php

class Enfant 
{
		
		private $m_prenom;
		private $m_nom;
		private $m_age;
		
		

public function __construct() 
{ 
$a = func_get_args(); 		
$i = func_num_args(); 		 
$fct ='__construct'.$i;		
if (method_exists($this,$fct)) 
	{
		call_user_func_array(array($this,$fct),$a); } 
	}

private function __construct1 ($a1) { $this->m_prenom = $a1; }
private function __construct2 ($a1, $a2) { $this->m_prenom = $a1; $this->m_nom = $a2; }
private function __construct3 ($a1, $a2, $a3) { $this->m_prenom = $a1; $this->m_nom = $a2;  $this->m_age = $a3; }

         
          
          	
		public function getPrenom() 
		{
			return $this->m_prenom;
		}
		
		public function setPrenom($newPrenom) 
		{
			$this->m_prenom = $newPrenom; 
		}
		
} 
?>	