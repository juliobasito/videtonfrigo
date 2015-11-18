<?php


require_once '/autoload.inc.php';


class Csp {
    private $code;
	private $libelle;
	
	public function __construct ()
    {   
        if (func_num_args()> 0)
        {
            $this->code = func_get_arg(0);
            $this->libelle =func_get_arg(1);
		}
	}
	
	public function getCode()
	{
		return $this->code ;
	}
	
	public function getLibelle()
	{
		return $this->libelle ;
	}
}
	
	