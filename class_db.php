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
		$this->bdd = new PDO(PARAM, DB_ROOT,DB_MP);
	}

	public function getPays(){
		$pays = $this->bdd->prepare("SELECT DISTINCT `pays` FROM `vehicule`");
		$pays->execute();
	}

	public function getBdd(){
		return $this->bdd;
	}

	public function getArticles(){
		$ar = $this->bdd->query("SELECT * FROM vehicule");
		$ar->execute();
		return $ar;

	}


}


?>
