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

			 	<?php include "ajouterVoiture.php";?>

			 </div>		

		</div>

</body>
</html>