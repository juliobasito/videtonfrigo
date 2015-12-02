<?php
	class Categorie
	{
		public static function getCategorieName($categorie)
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM categorie WHERE NomCategorie = :categorie");
			$flag = array('categorie'=>$categorie);
			$sql->execute($flag);
			$columns = $sql->fetch();
			return json_encode($columns);
		}
		
		public static function getCategorieId($categorie)
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM categorie WHERE CategorieId = :categorie");
			$flag = array('categorie'=>$categorie);
			$sql->execute($flag);
			$columns = $sql->fetch();
			return json_encode($columns);
		}
		
		
		public static function getAllCategorie()
		{
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM categorie");
			$sql->execute();
			$tab = [];
			while($columns = $sql->fetch())
			{
				$tab[] = $columns;
			}
			return json_encode($tab);
		}
		
		public static function AddCategorie($nomcategorie)
		{
			include('bdd.php');
			$sql = $db->prepare("INSERT INTO categorie(nomCategorie) VALUES (:nomCategorie)");
			$flag = array("nomCategorie"=>$nomcategorie);
			$sql->execute($flag);
		}
	}
?>