<?php

$bdd = new PDO('mysql:host=localhost;dbname=voiture;charset=utf8','root','');
$allemagne = $bdd->prepare("SELECT `marque` FROM `vehicule` WHERE `pays`LIKE '%Allemagne%'");
$allemagne->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Selection Pays</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
	<p> Intégartion des marque par Pays. </p>
	<?php
	foreach ($allemagne as $dautch) {
	?>
		<p> La marque de cette voiture est  <?php echo($dautch['marque']) ?> est une marque Allemand</p> <br>

	<?php
	}
	?>

</body>
</html>


















