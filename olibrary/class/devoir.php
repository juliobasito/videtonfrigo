<?php 
class Ronde
{
ronde    attributs : les enfants
methodes : __construct   ajouterunenfant($p_unEnfant)
ajouter_un enfant($p_unenfant)
soertirlenfant()
avancer()
premierenfant()
combiendenfants()
public function avancer()
{
	$lepremier = $this->_lesEnfants[0];
	unset($this->_lesEnfants[0];
	$this->_LesEnfants[]= $lepremier