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
		return json_encode($ingredient);
	}
	
	public static function getIngredientByName($nom)
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient WHERE Nom = :nom");
		$flag = array('nom'=>$nom);
		$sql->execute($flag);
		$ingredient = $sql->fetch();
		return json_encode($ingredient);
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
		return json_encode($tab);
	}
	
	public static function getAllIngredient()
	{
		include('bdd.php');
		$sql = $db->prepare("SELECT * FROM ingredient");
		$sql->execute();
		$tab = [];
		while($ingredient = $sql->fetch())
		{
			$tab[] = $ingredient;
		}
		return json_encode($tab);
	}
	public static function addIngredient($userID, $ingredientId)
	{

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
		return json_encode($tab);
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
		return json_encode($tab);
	}

}
?>