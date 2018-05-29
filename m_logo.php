<?php
$bd = new PDO('mysql:host=localhost;dbname=voiture;charset=utf8','root','');

$marques = $bd->prepare("SELECT * FROM `marque`");
$marques->execute();


?>
<!DOCTYPE html>
<html>
<head>
	<title> logo des marques</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="col-sm-2">
	
	<?php
	foreach ($marques as $marque) {
	?>
		<div class="col-sm-2">

		<table>
			<tr>
				<th>
					<img src="<?php echo $marque['image_marque']; ?>" width="100" height="60">
				</th>
				<th>
					<p> <?php echo '  '.$marque['nom_marque'].' '; ?></p> <br>
				</th>
			
			</tr> <br>
		</table>
		
		</div>

	<?php
	}
	?>
	</div>

</body>
</html>