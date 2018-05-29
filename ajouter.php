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

$bdd = New PDO('mysql:host=localhost;dbname=voiture;charset=utf8','root', '');

$insertion = $bdd->prepare("INSERT INTO `vehicule` (`id`,`pays`, `marque`, `modele`, `energie`, `puissance`, `boite`, `image`, `prix`) 
	VALUES (\"$id\", \"$pays\", \"$marque\", \"$modele\", \"$energie\", \"$puissance\", \"$boite\", \"$image\", \"$prix\");");

$insertion->execute();
?>
<img src="<?php echo $image;?>" width="450" height="300">
<?php
echo " <br><br> Le modèle est ".$marque.' '.$modele." <br><br> Puissance : ".$puissance." chevaux. <br> Energie utiliser : ".$energie.". "; 

echo "<br> Pays de Production : ".$pays.". <br><br>";

?>


<a href="index.php"> Consulté la liste des voitures. </a>
 
