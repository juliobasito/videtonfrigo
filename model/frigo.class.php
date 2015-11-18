<?php
class Frigo{

	public static function getIngredientsFrigo($userId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient i JOIN frigo f ON i.IngredientId = f.IngredientId WHERE f.UserId = :userId");
		$flag = array('userId' =>$userId);
		$sql->execute($flag);
		$tab = [];
		while($donne = $sql->fetch())
		{
			$tab[] = $donne;
		}

		return json_encode($tab);
	}
	public static function getIngredientsFrigoWithFiltre($userId, $filtre, $donnee)
	{

		include('bdd.php');
		switch ($filtre) {
			case 'prix':
				$sql = $db->prepare("SELECT * FROM ingredient i JOIN frigo f ON i.IngredientId = f.IngredientId WHERE i.Prix <= :prix AND f.userId = :userId");
				$flag = array('prix'=>$donnee,'userId'=>$userId);
				$sql->execute($flag);
				$tab = [];
				while($ingredient = $sql->fetch())
				{
					$tab[] = $ingredient;
				}
				return json_encode($tab);
			break;
			case 'nom':
				$sql = $db->prepare("SELECT * FROM ingredient i JOIN frigo f ON i.IngredientId = f.IngredientId WHERE i.Nom <= :nom AND f.userId = :userId");
				$flag = array('nom'=>$donnee,'userId'=>$userId);
				$sql->execute($flag);
				$tab = [];
				while($ingredient = $sql->fetch())
				{
					$tab[] = $ingredient;
				}
				return json_encode($tab);
			break;
			case 'nom':
				$sql = $db->prepare("SELECT * FROM ingredient i JOIN frigo f ON i.IngredientId = f.IngredientId WHERE i.Nom <= :nom AND f.userId = :userId");
				$flag = array('nom'=>$donnee,'userId'=>$userId);
				$sql->execute($flag);
				$tab = [];
				while($ingredient = $sql->fetch())
				{
					$tab[] = $ingredient;
				}
				return json_encode($tab);
			break;
		}
	}
	public static function getUserFrigo($frigoId)
	{
		include ('bdd.php');
		$sql = $db->prepare('SELECT * FROM user WHERE ')
	}
	public static function getFrigo($userId)
	{

	}
	public static function getAllFrigo()
	{
		
	}

}
?>