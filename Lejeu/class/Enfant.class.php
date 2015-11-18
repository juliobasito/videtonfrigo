 <?php

require_once 'Ronde.class.php' ;
require_once 'jeu.class.php' ;

 class Enfant 
 {
	private $_nom;
	private $_prenom;
	private $_age;
	
	// CONSTRUCTEURS
	public function __construct ()
	{
           $args = func_get_args();
            
            switch(count($args))
            {
                    case 1:
                            $this->__construct1 ($args[0]);
                            break;

                    case 2:
                            $this->__construct2 ($args[0], $args[1]);
                            break;

                    case 3:
                            $this->__construct3 ($args[0], $args[1], $args[2]);
                            break;
                    break;

                    default:
                            die ("constructeur de la classe Enfant : nombre de parametre incorrects !");
            }
	}
	
	private function __construct1 ($p_prenom)
	{
		$this->_prenom = $p_prenom;
	}
	private function __construct2 ($p_prenom, $p_nom)
	{
		$this->_nom = $p_nom;
		$this->__construct1 ($p_prenom);
	}
	private function __construct3 ($p_prenom, $p_nom, $p_age)
	{
		$this->_age = $p_age;
		$this->__construct2 ($p_prenom, $p_nom);
	}
	
	// ACCESSEURS GET
        /**
         * Accesseur Nom
         * 
         * Cette fonction renvoie le nom de l'enfant (donnée privée)
         * 
         * @return string le nom de l'enfant
         */
	public function getNom () { return $this->_nom; }
	public function getPrenom () { return $this->_prenom; }
	public function getAge () { return $this->_age; }
	
	// ACCESSEURS SET
	public function setNom ($p_nom) { $this->_nom = $p_nom; }
	public function setPrenom ($p_prenom) { $this->_prenom = $p_prenom; }
	public function setAge ($p_age) { $this->_age = $p_age;}
	
        public function toString ()
        {
            if ($this->_nom != NULL)
                return "$this->_prenom, $this->_nom, $this->_age ans. <br />";
           else
                return "$this->_prenom <br />";
        }
 }
 ?>