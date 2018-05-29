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
	<!-- division de ma page par des div Bootstrap -->
		<div class="row">

 			 <div class="col-sm-3">
				<?php include "ajouterVoiture.php";?>
			 </div>
			 <div class="col-sm-7">
			 	<!-- la carte de pays -->
			 	<?php include "pays.php"; ?>
				<?php include "article.php"; ?>
			 </div>	

			 <div class="col-sm-2">
			 	<?php include "marque.php";?>
			 </div>		

		</div>


	

</body>
</html>