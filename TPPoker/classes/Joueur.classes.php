<?php
require_once "../autoload.inc.php";
require_once "../connexion_bdd.php";

class Joueur
{
	private $_ID;
	private $_nom;
	private $_carte1;
	private $_carte2;
	
	public function __construct($c_ID)
	{
		$this->_ID = $_SESSION['utilisateur1_id'];
		$db = new PDO ('mysql:host=localhost; dbname=poker', 'root', '');
		$requetejoueur= "SELECT * FROM joueur WHERE ID=".$this->_ID;
      	$res =$db->query($requetejoueur);
      	while ($joueur = $res->fetch(PDO::FETCH_ASSOC))
		{
			$this->_nom = $joueur['nom'];
		}
	}
	
	public function afficher()
	{
		echo "Nom du joueur :".$this->_nom;
		echo "carte 1 :".$this->carte1;
		echo "carte 2 :".$this->carte2;
	}
	
	public function sauvegarderMain($p_laPartie)
	{
		$sql = $db->prepare("CALL sauvegarderMain(:p_laPartie)");
		$sql->bindParam(":p_laPartie", $p_laPartie);
		$sql->execute();
	}
	
	
	public function getID()
	{
		return $this->_ID;
	}
	
	public function getNom()
	{
		return $this->_nom;
	}
	
	public function getCarte1()
	{
		return $this->_carte1->Afficher();
	}
	
	public function getCarte2()
	{
		return $this->_carte2->Afficher();
	}
	
	public function setID($newID)
	{
		$this->_ID = $newID;
	}
	
	public function setNom($newNom)
	{
		$this->_nom = $newNom;
	}
	
	public function setCarte1($newcarte1)
	{
		$this->_carte1 = $newcarte1;
	}
	
	public function setCarte2($newcarte2)
	{
		$this->_carte2 = $newcarte2;
	}
	
}
?>
	