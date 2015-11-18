<?php



class User{

	public static function addUser($pseudo, $email, $password, $birthdate, $city, $budget)
	{
		include('bdd.php');
		
	}

	public static function connexion($pseudo, $password)
	{
		include('bdd.php');
		$sql ="SELECT * FROM user WHERE password = '".$password."' AND Pseudo = '".$pseudo."'";
		$result = $db->prepare($sql);
		$columns = $result->execute();
		$columns = $result->fetch();
		if ( sizeof($columns) > 1)

		{
			return json_encode($columns['UserId']);

		}
		else
		{
			return json_encode($columns['0']);
		}
	}
	public static function getUser($userId)
	{

	}

}
?>