<!DOCTYPE html>
<html>
<head>
	<title> Menu Modèle Véhicule </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=voiture;charset=utf8', 'root', '');
$menu = $bdd->query("SELECT `marque` FROM `vehicule` GROUP BY `marque`");
$menu->execute();

?>
	<div class="container">
			<div class="row">

			<?php
				while ($modele = $menu->fetch()) {
			?>
					<a href=""> <?php echo $modele['marque'] ;?> <br> </a>

			<?php
			}
			?>
				
			</div>
	</div>

</body>
</html>





