<?php
class Frigo{

	public static function getIngredientsFrigo($userId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient i JOIN frigo f ON i.IngredientId = f.IngredientId WHERE f.UserId = :userId");
		$flag = array('userId' =>$userId);
		$sql->execute($flag);
		echo json_encode($sql);

	}
	public static function getIngredientsFrigo($userId, $filtre)
	{

	}
	public static function getUserFrigo($frigoId)
	{

	}
	public static function getFrigo($userId)
	{

	}
	public static function getAllFrigo()
	{
		
	}

}
?>