<?php
class Frigo{
	public static function getIngredientsFridge($userId)
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
		echo json_encode($tab);
	}
	public static function getIngredientsFridgeWithFiltre($userId, $filtre, $donnee)
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
				echo json_encode($tab);
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
				echo json_encode($tab);
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
				echo json_encode($tab);
			break;
		}
	}
	public static function getUserFridge($frigoId)
	{
		include ('bdd.php');
		$sql = $db->prepare('SELECT UserId FROM frigo WHERE FrigoId = :frigoId');
		$flag = array('frigoId' => $frigoId);
		$sql->execute($flag);
		$donnee = $sql->fetch();
		echo json_encode($donnee);
	}
	public static function getFridge($userId)
	{
		include ('bdd.php');
		$sql = $db->prepare('SELECT FrigoId FROM frigo WHERE UserId = :userId');
		$flag = array('userId' => $userId);
		$sql->execute($flag);
		$donnee = $sql->fetch();
		echo json_encode($donnee);
	}
	public static function getAllFridge()
	{
		include ('bdd.php');
		$sql = $db->prepare('SELECT * FROM frigo');
		$sql->execute();
		$tab = [];
		while($donnee = $sql->fetch())
		{
			$tab[] = $donnee;
		}		
		echo json_encode($tab);
	}
	
	public static function AddFrigo($UserId, $ingredientId)
	{	
		include('bdd.php');
		$sql= $db->prepare('INSERT INTO `Frigo` (UserId, IngredientId) VALUES (:UserId, :ingredientId)');
		$flag = array('UserId'=>$UserId, 'ingredientId'=>$ingredientId);
		$sql->execute($flag);
	}
	
	public static function ModifFrigo($UserId, $ingredientId, $id)
	{	
		include('bdd.php');
		$sql= $db->prepare('UPDATE `Frigo` SET UserId = :UserId,IngredientId = :ingredientId WHERE FrigoId = :id');
		$flag = array('UserId'=>$UserId, 'ingredientId'=>$ingredientId, 'id'=>$id);
		$sql->execute($flag);
	}
	public static function DelFrigo($id)
	{	
		include('bdd.php');
		$sql= $db->prepare('DELETE FROM Frigo WHERE FrigoId =:id');
		$flag = array('id'=>$id);
		$sql->execute($flag);
	}
}
?>