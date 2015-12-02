<?php
	class Categorie
	{
		public static function getCategoryName($categorie)
		{
			/*============================================================

			getCategoryName(string categorie)

			Retourne le nom de la catégorie de l'id passé en paramètre

			==============================================================*/
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM categorie WHERE CategorieId = :categorie");
			$flag = array('categorie'=>$categorie);
			$sql->execute($flag);
			$columns = $sql->fetch();
			echo json_encode($columns);
		}
		
		public static function getCategoryId($categorie)
		{
			/*============================================================
			
			getCategoryId(string categorie)

			Retourne l'id  de la catégorie avec pour nom celui passé en paramètre

			==============================================================*/
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM categorie WHERE NomCategorie = :categorie");
			$flag = array('categorie'=>$categorie);
			$sql->execute($flag);
			$columns = $sql->fetch();
			echo json_encode($columns);
			
		}
		
		
		public static function getAllCategory()
		{
			/*============================================================
			
			getAllCategory()

			Retourne les informations de toutes les catégories.

			==============================================================*/
			include('bdd.php');
			$sql = $db->prepare("SELECT * FROM categorie");
			$sql->execute();
			$tab = [];
			while($columns = $sql->fetch())
			{
				$tab[] = $columns;
			}
			echo json_encode($tab);
		}
		
		public static function AddCategorie($nomcategorie)
		{
			include('bdd.php');
			$sql = $db->prepare("INSERT INTO categorie(nomCategorie) VALUES (:nomCategorie)");
			$flag = array("nomCategorie"=>$nomcategorie);
			$sql->execute($flag);
		}
		
		public static function ModifCategorie($nomcategorie, $id)
		{
			include('bdd.php');
			$sql = $db->prepare("UPDATE categorie SET nomCategorie = :nomCategorie WHERE CategorieId = :id");
			$flag = array("nomCategorie"=>$nomcategorie, "id"=>$id);
			$sql->execute($flag);
		}
		
		public static function DelCategorie($id)
		{
			include('bdd.php');
			$sql = $db->prepare("DELETE FROM categorie WHERE CategorieId = :id");
			$flag = array("id"=>$id);
			$sql->execute($flag);
		}
	}
?>