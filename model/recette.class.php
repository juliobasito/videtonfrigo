<?php
Class Recette
{
	public static function getRecette()
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM recette");
		$sql->execute();
		$tab = [];
		while($donne = $sql->fetch())
		{
			$tab[] = $donne;
		}
		echo json_encode($tab);
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
		$sql = $db->prepare('SELECT * FROM recette WHERE NomRecette LIKE "%'.$recetteName.'%"');
		$sql->execute();
		$tab = [];
		while($donne = $sql->fetch())
		{
			$tab[] = $donne;
		}
		echo json_encode($tab);
	}

	public static function getRecetteByComplexite($complexite, $userId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM recette WHERE NomRecette <= :complexite");
		$flag = array('complexite'=>$complexite);
		$sql->execute($flag);
		$tab = array();
		while($columns = $sql->fetch())
		{
			$pourcent = json_decode(recette::getPourcentageIngredient($columns['RecetteId'],$userId));
			$tab[$columns['RecetteId']] = $pourcent;
		}
		arsort($tab);
		return json_encode($tab);
	}

	public static function getRecetteByNote($note, $userId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM recette WHERE Note >= :note");
		$flag = array('note'=>$note);
		$sql->execute($flag);
		$tab = array();
		while($columns = $sql->fetch())
		{
			$pourcent = json_decode(recette::getPourcentageIngredient($columns['RecetteId'],$userId));
			$tab[$columns['RecetteId']] = $pourcent;
		}
		arsort($tab);
		return json_encode($tab);
	}

	public static function getRecetteByTemps($temps,$userId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM recette WHERE Temps <= :temps");
		$flag = array('temps'=>$temps);
		$sql->execute($flag);
		$tab = array();
		while($columns = $sql->fetch())
		{
			$pourcent = json_decode(recette::getPourcentageIngredient($columns['RecetteId'],$userId));
			$tab[$columns['RecetteId']] = $pourcent;
		}
		arsort($tab);
		return json_encode($tab);
	}

	public static function getRecetteByAll($complexite, $note, $temps, $userId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM recette WHERE Temps <= :temps AND Note >= :note AND Complexite <= :complexite ");
		$flag = array('temps'=>$temps, 'complexite'=> $complexite, 'note'=>$note);
		$sql->execute($flag);
		$tab = array();
		while($columns = $sql->fetch())
		{
			$pourcent = json_decode(recette::getPourcentageIngredient($columns['RecetteId'],$userId));
			$tab[$columns['RecetteId']] = $pourcent;
		}
		arsort($tab);
		return json_encode($tab);
	}

	public static function getAllRecette($userId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM recette");
		$sql->execute();
		$tab = array();
		while($columns = $sql->fetch())
		{
			$pourcent = json_decode(recette::getPourcentageIngredient($columns['RecetteId'],$userId));
			$tab[$columns['RecetteId']] = $pourcent;
		}
		arsort($tab);
		return json_encode($tab);
	}

	public static function getPourcentageIngredient($recetteId,$userId)
	{
		include('bdd.php');
		$sql = $db->prepare('SELECT * FROM recette_ingr WHERE RecetteId = :recetteId');
		$flag = array('recetteId' => $recetteId);
		$sql->execute($flag);
		$nbTrue = 0;
		$nbFalse = 0;
		while($ingredient = $sql->fetch())
		{
			$sql2 = $db->prepare('SELECT count(FrigoId) AS nb , quantite FROM frigo WHERE IngredientId = :ingredientId AND UserId = :userId');
			$flag2 = array('ingredientId' => $ingredient['IngredientId'], 'userId' => $userId);
			$sql2->execute($flag2);
			$sql2 = $sql2->fetch();
			$nbIngr = $sql2['nb'];
			if($nbIngr >= 1 && $ingredient['quantite'] <= $sql2['quantite'])
			{
				$nbTrue++;
			}
			else
			{
				$nbFalse++;
			}
		}
		$total = $nbFalse + $nbTrue;
		$pourcent = 0;
		if($total != 0)
		{
			$pourcent = $nbTrue/$total*100;
		}
		}
		public static function addRecette($nomrecette, $complexite, $note, $temps, $nbpersonne, $description, $urlimg)
		{
			include('bdd.php');
			$sql = $db->prepare("INSERT INTO `recette`(`RecetteId`, `NomRecette`, `Complexite`, `Note`, `Temps`, `nbPersonne`, `description`, `URLimg`) VALUES (:nomrecette, :complexite, :note, :temps, :nbpersonne, :description, :urlimg)");
			$flag = array("recetteId"=>$recetteid, "nomrecette"=>$nomrecette, "complexite"=>$complexite, "note"=>$note, "temps"=>$temps, "nbpersonne"=>$nbpersonne, "description"=>$description, "urlimg"=>$urlimg);
			$sql->execute($flag);
		}
		public static function ModifRecette($nomrecette, $complexite, $note, $temps, $nbpersonne, $description, $urlimg, $id)
		{
			include('bdd.php');
			$sql = $db->prepare("UPDATE `recette` SET nomrecette = :nomrecette,complexite = :complexite,note= :note,temps= :temps,nbpersonne= :nbpersonne,description= :description,urlimg= :urlimg WHERE RecetteId = :id");
			$flag = array("recetteId"=>$recetteid, "nomrecette"=>$nomrecette, "complexite"=>$complexite, "note"=>$note, "temps"=>$temps, "nbpersonne"=>$nbpersonne, "description"=>$description, "urlimg"=>$urlimg, "id"=>$id);
			$sql->execute($flag);
		}
	}
?>