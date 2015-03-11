<?php


require_once 'jeu.class.php' ;
require_once 'Enfant.class.php' ;

/**
 * Description of Ronde
 *
 * @author mmaldo
 */
class Ronde {
    //put your code here
    private $_lesEnfants;
    
    // constructeur inutile...
    
    /** 
     * Entrer dans la ronde
     * 
     * Ajoute un nouvel enfant à la ronde.
     * Celui-ci est ajouté en fin de tableau
     * 
     * @param Enfant $p_unEnfant : le nouveau venu
     */
    public function entrer (Enfant $p_unEnfant, $p_messageAccueil=True)
    {
        $this->_lesEnfants[] = $p_unEnfant;
        if ($p_messageAccueil)
            echo $p_unEnfant->getPrenom() . " entre dans la ronde ! <br/>";
    }
    
    /**
     * Combien
     * 
     * Donne le nombre d'enfants de la ronde (taille du tableau interne)
     * @return int nombre d'enfants de la ronde
     */
    public function combien ()
    {
        return count($this->_lesEnfants);
    }
    
    /**
     * Avancer dans la ronde
     * 
     * Sort le premier de la ronde et le remet à la fin.
     * Attention !! Les éléments restants ne sont pas renumérotés !
     * Il faut donc utiliser soit array_shift qui "dépile" le tableau
     * soit array_splice qui renumérote tous les éléments
     * 
     */    
    public function avancer ()
    {
        // on sort le premier et on renumérote
        $lePremierEnfant = $this->sortir();
        
        // on remet le premier
        $this->entrer($lePremierEnfant, False);
    }
   
    /**
     * Sortir de la ronde
     * 
     * Sort le premier enfant de la ronde
     * 
     * @return Enfant le premier enfant de la ronde
     */
    public function sortir ()
    {
        $lePremierEnfant = $this->_lesEnfants [0];
        array_splice ($this->_lesEnfants,0,1);
        
        return $lePremierEnfant;
    }
    /**
     * Affichage de la ronde
     * 
     * La méthode toString affiche tous les enfants de la ronde
     */
    public function toString ()
    {
        $res = "";
        $compteur=1;
        foreach ($this->_lesEnfants as $unEnfant)
        {           
            $res .= "Enfant No " . $compteur++ . " : " . $unEnfant->toString();
        }
        return $res;
    }
            
            
            
}
