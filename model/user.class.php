<?php



class User{

	public static function updateSeeting($complexite,$temps,$note,$nbPersonne,$userId)
	{
		include('bdd.php');
		$sql = "UPDATE seeting SET complexite = :complexite, temps = :temps, note = :note, nbPersonne = :nbPersonne WHERE userId = :userId";
		$flag = array('complexite' => $complexite, 'temps' => $temps, 'note' => $note, 'nbPersonne'=> $nbPersonne, 'userId'=> $userId);
		$result = $db->prepare($sql);
		$columns = $result->execute($flag);
	}

	public static function getSeeting($userId)
	{
		include('bdd.php');
		$sql = "SELECT * FROM seeting WHERE userId = :userId";
		$flag = array('userId' => $userId);
		$result = $db->prepare($sql);
		$columns = $result->execute($flag);
		$tab = [];
		while($columns = $result->fetch())
		{
			$tab[] = $columns;
		}
		echo json_encode($tab);
		
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
			$json = json_encode($columns['UserId']);

		}
		else
		{
			$json = json_encode($columns['0']);
		}
		echo $json;
	}
	public static function UpdateUser($pseudo, $email, $password, $birthdate,$city,$budget, $id)
	{
		include('bdd.php');
		$sql = "UPDATE `user` SET pseudo=:pseudo,email = :email,password = :password,birthdate = :birthdate,city = :city,budget = :budget WHERE UserId = :id)"; 
		$flag = array('pseudo'=>$pseudo,'email'=>$email,'password'=>$password, 'birthdate'=>$birthdate, 'city'=>$city, 'budget'=>$budget, 'id'=>$_SESSION["id"]);
		$result = $db->prepare($sql);
		$columns = $result->execute($flag);
	}
	public static function getUser($userId)
	{
		include('bdd.php');
	    $sql = "SELECT * FROM user WHERE UserId = ".$userId."";
		$result = $db->prepare($sql);
		$columns = $result->execute();
		$columns = $result->fetch();
		echo json_encode($columns);
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
		echo json_encode($tab);
	}
	
	public static function AddUser($pseudo, $email, $password, $birthdate,$city,$budget)
	{
		include('bdd.php');
		$sql = "INSERT INTO `user`(pseudo, email, password, birthdate, city, budget) VALUES (:pseudo, :email, :password, :birthdate,:city,:budget)"; 
		$flag = array('pseudo'=>$pseudo,'email'=>$email,'password'=>$password, 'birthdate'=>$birthdate, 'city'=>$city, 'budget'=>$budget);
		$result = $db->prepare($sql);
		$columns = $result->execute($flag);
	}
	
	public static function DelUser($id)
	{
		include('bdd.php');
		$sql = "DELETE FROM user WHERE UserId = :id";
		$flag = array("id"=>$id);
		$result = $db->prepare($sql);
		$columsn = $result->execute($flag);
	}

}
?>