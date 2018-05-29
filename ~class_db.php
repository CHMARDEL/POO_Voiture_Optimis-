<?php

require('config.php');

class ClassBD
{

	//$db_host = "localhost";
	//$db_name = "db_name=voiture";
	//$db_charset ="charset=utf8";
	//private $param = 'mysql:host=localhost;dbname=voiture;charset=utf8';
	//private $db_root ='root';
	//private $db_mp = '';
	private $bdd;

	public function __Construct(){
		$this->bdd = new PDO($this->param, $this->db_root,$this->db_mp);
	}

	public function getPays(){
		$pays = $this->bdd->prepare("SELECT DISTINCT `pays` FROM `vehicule`");
		$pays->execute();
		var_dump($pays);
		die();
	}
}

$var = new ClassBD();
$var->getPays();



?>