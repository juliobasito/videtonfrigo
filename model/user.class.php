<?php



class User{

	public static function addUser($pseudo, $email, $password, $birthdate, $city, $budget)
	{
		include('bdd.php');
		$sql =$db->prepare("INSERT INTO user (Pseudo, Email, Password, BirthDate, City, Budget) VALUES (:pseudo, :email, :password, :birthdate, :city, :budget)");
		$flag = array('pseudo' => $pseudo ,'email' => $email, 'password' => $password, 'birthdate' => $birthdate, 'city' => $city, 'budget' => $budger);
		$sql = $sql->execute($flag);
	}

	public static function connexion($pseudo, $password)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM user WHERE password = :password AND Pseudo = :pseudo");
		$flag = array('password' => $password , 'pseudo' => $pseudo );
		$columns = $sql->execute($flag);
		$columns = $columns->fetch();
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