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
		switch ($filtre) {
			case 'prix':
				
				break;
			
			default:
				# code...
				break;
		}
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