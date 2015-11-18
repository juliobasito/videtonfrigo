<?php
require_once "../autoload.inc.php";
require_once "../connexion_bdd.php";

class Carte {
	private $_ID;
	private $_couleur;
	private $_hauteur;
	private $_image;
	private $_hauteurImage;
	private $_largeurImage;
	
	public function __construct($c_ID)
	{
		$this->_ID = $c_ID;
		$this->_largeurImage = "144px";
		$this->_hauteurImage = "193px";
		$db = new PDO ('mysql:host=localhost; dbname=poker', 'root', '');
		$requetecarte= "SELECT * FROM carte WHERE ID=".$this->_ID;
      	$res =$db->query($requetecarte);
      	while ($carte = $res->fetch(PDO::FETCH_ASSOC))
		{
			$this->_couleur = $carte['couleur'];
			$this->_hauteur = $carte['hauteur'];
			$this->_image = $carte['image'];
		}
	}
	
	public function Afficher()
	{
		echo "<img src='../images/".$this->_image."' style='width:".$this->_largeurImage.";height:".$this->_hauteurImage.";'/>" ;
	}

		
	public function getID()
	{
		return $this->_ID;
	}
	
	public function getCouleur()
	{
		return $this->_couleur;
	}
	
	public function getHauteur()
	{
		return $this->_hauteur;
	}
	
	public function getImage()
	{
		return $this->_image;
	}
	
	public function setId($newId)
	{
		$this->_ID = $newId;
	}
	
	public function setCouleur($newCouleur)
	{
		$this->_couleur = $newCouleur;
	}
	
	public function setHauteur($newHauteur)
	{
		$this->_hauteur = $newHauteur;
	}
	
	public function setImage($newImage)
	{
		$this->_image = $newImage;
	}

}

?>