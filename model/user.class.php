<?php



class User{


	public static function connexion($pseudo, $password)
	{
		include('bdd.php');
		$sql ="SELECT * FROM user WHERE password = '".$password."' AND Pseudo = '".$pseudo."'";
		$result = $db->prepare($sql);
		$columns = $result->execute();
		$columns = $result->fetch();
		if ( sizeof($columns) > 1)

		{
			$json = json_encode($columns['UserId']);

		}
		else
		{
			$json = json_encode($columns['0']);
		}
	}
	public static function getUser($userId)
	{
		include('bdd.php');
	    $sql = "SELECT * FROM user WHERE UserId = ".$userId."";
		$result = $db->prepare($sql);
		$columns = $result->execute();
		$columns = $result->fetch();
		return json_encode($columns);
	}
	
	public static function getAllUser()
	{
		include('bdd.php');
	    $sql = "SELECT * FROM user";
		$result = $db->prepare($sql);
		$columns = $result->execute();
		$tab = [];
		while($columns = $result->fetch())
		{
			$tab[] = $columns;
		}
		return json_encode($tab);
	}
	
	public static function AddUser($pseudo, $email, $password, $birthdate,$city,$budget)
	{
		include('bdd.php');
		$sql = "INSERT INTO `user`(pseudo, email, password, birthdate, city, budget) VALUES (:pseudo, :email, :password, :birthdate,:city,:budget)"; 
		$flag = array('pseudo'=>$pseudo,'email'=>$email,'password'=>$password, 'birthdate'=>$birthdate, 'city'=>$city, 'budget'=>$budget);
		$result = $db->prepare($sql);
		$columns = $result->execute($flag);
	}
	

}
?>