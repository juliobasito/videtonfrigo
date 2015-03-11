<?php
class Mere
{
    protected $val;
    
    public function __construct ()
    {
        $this->val = 17;
    }
    
    public function afficher ()
    {
        echo "dans la classe Mere :   $this->val <br/>";
    }
    public function getVal () { return $this->val; }
}
class Fille extends Mere
{       
    public function __construct ()
    {
        parent::__construct();
        echo $this->getVal ();
    }
    
    public function afficher ()
    {
        echo "dans la classe Fille :   $this->val <br/>";
        echo "et dans la classe Mere";
        parent::afficher();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$m = new Mere ();
//$m->afficher ();

$f = new Fille ();
$f->afficher ();
