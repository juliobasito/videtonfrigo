<?php

class Ingredient
{
	
	public static function getIngredientById($ingredientId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient WHERE IngredientId = :ingredientId");
		$flag = array('ingredientId'=>$ingredientId);
		$sql->execute($flag);
		$ingredient = $sql->fetch();
		echo json_encode($ingredient);
	}
	
	public static function getIngredientByName($nom)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient WHERE Nom = :nom");
		$flag = array('nom'=>$nom);
		$sql->execute($flag);
		$ingredient = $sql->fetch();
		echo json_encode($ingredient);
	}
	
	public static function getIngredientByPrix($prix)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient WHERE Prix <= :prix");
		$flag = array('prix'=>$prix);
		$sql->execute($flag);
		$tab = [];
		while($ingredient = $sql->fetch())
		{
			$tab[] = $ingredient;
		}
		echo json_encode($tab);
	}
	
	public static function getAllIngredient()
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient ORDER BY Nom");
		$sql->execute();
		$tab = [];
		while($ingredient = $sql->fetch())
		{
			$tab[] = $ingredient;
		}
		echo json_encode($tab);
	}

	public static function deleteIngredientFrigo($ingredientId)
	{

	}
	public static function getIngredientByRecette($recetteId)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient WHERE ingredientID = (SELECT ingredientID FROM recette_ingr WHERE RecetteId = :recetteid)");
		$flag = array("recetteid" => $recetteId);
		$sql->execute($flag);
		$tab = [];
		while($ingredient = $sql->fetch())
		{
			$tab[] = $ingredient;
		}
		echo json_encode($tab);
	}
	
	public static function getIngredientByCategorie($categorieID)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient WHERE ingredientID = (SELECT ingredientID FROM cate_ingre WHERE CategorieId = :categorieid)");
		$flag = array("categorieid" => $categorieID);
		$sql->execute($flag);
		$tab = [];
		while($ingredient = $sql->fetch())
		{
			$tab[] = $ingredient;
		}
		echo json_encode($tab);
	}
	
	public static function AddIngredient($nom, $prix, $unite)
	{
		include('bdd.php');
		$sql = $db->prepare("INSERT INTO Ingredient(nom, prix, unite) VALUES (:nom, :prix, :unite)");
		$flag = array("nom"=>$nom, "prix"=>$prix, "unite"=>$unite);
		$sql->execute($flag);
	}
	
	public static function ModifIngredient($nom, $prix, $unite, $id)
	{
		include('bdd.php');
		$sql = $db->prepare("UPDATE Ingredient SET nom = :nom, prix = :prix, unite = :unite WHERE IngredientId = :id");
		$flag = array("nom"=>$nom, "prix"=>$prix, "unite"=>$unite, "id"=>$id);
		$sql->execute($flag);
	}
	
	public static function DelIngredient($id)
	{
		include('bdd.php');
		$sql = $db->prepare("DELETE FROM Ingredient WHERE IngredientId = :id");
		$flag = array("id"=>$id);
		$sql->execute($flag);
	}

}
?>