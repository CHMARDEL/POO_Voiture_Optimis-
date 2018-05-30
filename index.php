<!DOCTYPE html>
<html>
<head>
	<title> Mon Site Automobile </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<?php include "nav.php";?>


	<!-- division de ma page par des div Bootstrap -->
	<!-- Lien qui amène a la page add pour ajouter une nouvelle voiture -->
	<h3> Mon Site Automobile </h3>
	<button class=".btn-primary"> <a href="add.php"> Ajouter une nouvelle voiture </a></button>

	</div>
		<div class="row">

		 	<div class="col-sm-2">
			 	<?php include "m_logo.php";?>
		 	</div>

			 <div class="col-sm-8">
			 	<!-- la carte de pays -->
			 	<?php include "pays.php"; ?>
				<?php include "article.php"; ?>
			 </div>	

			 <div class="col-sm-2">

			 </div>		

		</div>


	

</body>
</html>