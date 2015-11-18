<?php
	Class Recette
	{
		
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
		
		public static function getRecetteByNote($note)
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM recette WHERE Note >= :note");
			$flag = array('note'=>$note);
			$sql->execute($flag);
			$tab = [];
			while($columns = $sql->fetch())
			{
				$tab[] = $columns;
			}
			return json_encode($tab);
		}
		
		public static function getRecetteByTemps($temps)
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM recette WHERE Temps <= :temps");
			$flag = array('temps'=>$temps);
			$sql->execute($flag);
			$tab = [];
			while($columns = $sql->fetch())
			{
				$tab[] = $columns;
			}
			return json_encode($tab);
		}
		
		public static function getRecetteByAll($complexite, $note, $temps)
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM recette WHERE Temps <= :temps AND Note >= :note AND Complexite <= :complexite ");
			$flag = array('temps'=>$temps, 'complexite'=> $complexite, 'note'=>$note);
			$sql->execute($flag);
			$tab = [];
			while($columns = $sql->fetch())
			{
				$tab[] = $columns;
			}
			return json_encode($tab);
		}
		
		public static function getAllRecette()
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM recette");
			$sql->execute();
			$tab = [];
			while($columns = $sql->fetch())
			{
				$tab[] =  $columns;
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