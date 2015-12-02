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
			return json_encode($columns);
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
			return json_encode($columns);
			
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
			return json_encode($tab);
		}
	}
?>