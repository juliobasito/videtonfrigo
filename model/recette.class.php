<?php
	Class Recette
	{
		
		public static function getAllRecette()
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM recette");
			$sql->execute();
			$tab_recette = [];
			while($recette = $sql->fetch())
			{
				$tab_recette = $recette;
			}
			return json_encode($tab_recette);
		}
		
		public static function getRecetteByID($recetteId)
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM recette WHERE RecetteId = :recetteId");
			$flag = array('recetteId'=>$recetteId);
			$sql->execute($flag);
			$columns = $sql->fetch();
			return json_encode($columns);
		}
		
		public static function getRecetteByName($recetteName)
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM recette WHERE NomRecette = :recetteName");
			$flag = array('recetteName'=>$recetteName);
			$sql->execute($flag);
			$columns = $sql->fetch();
			return json_encode($columns);
		}
		
		public static function getRecetteByComplexite($complexite)
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM recette WHERE NomRecette <= :complexite");
			$flag = array('complexite'=>$complexite);
			$sql->execute($flag);
			$tab = [];
			while($columns = $sql->fetch())
			{
				$tab[] = $columns;
			}
			return json_encode($tab);
		}
		
		public static function getPourcentageIngredient()
		{

		}
		public static function getIngredientManquant()
		{
			
		}
	}
?>