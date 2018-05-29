<!DOCTYPE html>
<html>
<head>
	<title> Mon Site Automobile </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php include "nav.php";?>

	<h3> Mon Site Automobile</h3>
	<!-- retour a la page index principale -->
	<button class=".btn-primary"> <a href="index.php"> Retour a la page d'acceuil </a></button>


	</div>
		<div class="row">

		 	<div class="col-sm-3">
			 	<?php include "m_logo.php";?>
		 	</div>

			 <div class="col-sm-4">
			 	<!-- la carte de pays -->
			 	<?php include "pays.php"; ?>

			 </div>	

			 <div class="col-sm-4">
<?php

$id = $_POST['id'];
$pays = $_POST['pays'];
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$energie = $_POST['energie'];
$puissance = $_POST['puissance'];
$boite = $_POST['boite'];
$image = $_POST['image'];
$prix = $_POST['prix'];

//$bdd = New PDO('mysql:host=localhost;dbname=voiture;charset=utf8','root', '');
require('class_db.php');

$bd_connect = new ClassBD();
$bdd = $bd_connect->getBdd();

$insertion = $bdd->prepare("INSERT INTO `vehicule` (`id`,`pays`, `marque`, `modele`, `energie`, `puissance`, `boite`, `image`, `prix`) 
	VALUES (\"$id\", \"$pays\", \"$marque\", \"$modele\", \"$energie\", \"$puissance\", \"$boite\", \"$image\", \"$prix\");");

$insertion->execute();
?>
<img src="<?php echo $image;?>" width="450" height="300">
<?php
echo " <br><br> Le modèle est ".$marque.' '.$modele." <br><br> Puissance : ".$puissance." chevaux. <br> Energie utiliser : ".$energie.". "; 

echo "<br> Pays de Production : ".$pays.". <br><br>";

?>
 	<button class=".btn-primary"> <a href="index.php"> Retour a la page d'acceuil </a></button>
 	
	 </div>		

</div>
</body>
</html>