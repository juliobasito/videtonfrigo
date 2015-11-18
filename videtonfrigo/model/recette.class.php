<?php
	Class Recette
	{
		include('bdd.php');
		public static function getAllRecette()
		{
			$sql = $db->prepare("SELECT * FROM recette");
			$sql->execute();
			$tab_recette = [];
			while($recette = $sql->fetch())
			{
				$tab_recette = $recette;
			}
			return $tab_recette;
		}
		public static function getPourcentageIngredient()
		{

		}
		public static function getIngredientManquant()
		{
			
		}
	}
?>