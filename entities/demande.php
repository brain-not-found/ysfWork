<?php
class demande {

    private $id;
    private $username;
	private $type;
	private $nom;
	private $prenom;

	function __construct($username,$type,$nom,$prenom)
	{
		$this->username=$username;
		$this->type=$type;
		$this->nom=$nom;
		$this->prenom=$prenom;
	
	}

	function getid(){ return $this->id ; }
	function getusername(){ return $this->username ; }
	function gettype(){ return $this->type ; }
	function getnom(){ return $this->nom ; }
	function getprenom(){ return $this->prenom ; }


	function setmail($mail){ $this->mail=$mail ; }
	function settype($type){ $this->type=$type ; }
	

}

?>