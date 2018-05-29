<?php

$bdd = new PDO('mysql:host=localhost;dbname=voiture;charset=utf8', 'root', '');

$varpays = $_POST['contry'];

$pays = $varpays;

?>
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
		<div class="row">

 			 <div class="col-sm-3">
				<?php include "m_logo.php";?>
			 </div>
			 <div class="col-sm-7">
			 	<!-- la carte de pays -->
			 	<?php include "pays.php"; ?>

<!-- Début article menu voiture -->
	<div class="col-sm-8"><br>
	<?php if (isset($_POST['prenom_client']) || isset($_POST['nom_client']) ) 
	{ 
	?>

	<?php 
	} 
	?>
<!-- Fin article menu voiture -->
<?php

//$articles = $bdd->query("SELECT * FROM vehicule");
//$articles->execute();
$articles = $bdd->prepare("SELECT * FROM `vehicule`  WHERE `pays` LIKE '%".$pays."%'");
$articles->execute();

?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
				
				<?php	while ($article = $articles->fetch()) 
				{	
				?>
				<div class="col-sm-4">
						<div class="thumbnails">   
						<br>
							<img src="<?php echo $article['image'];?>" width="200" height="150">

								<p> Pays : <?php echo $article['pays'];?> </p>
								<p> Modèle : <?php echo $article['marque'].' '.$article['modele'];?> </p>
								<p> Prix : <?php echo $article['prix'];?> euros</p>
								<div>
									
									<button type="button" class="btn btn-success btn-sm">Plus d'infomation</button>

									<button type="button" class="btn btn-primary btn-sm">Commandé</button><br>


								</div>
						</div>
				</div>	
				<?php 
				}
				?>
				</li>

		</div>
	</div>
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item"><a class="page-link" href="#">Next</a></li>
			  </ul>
			</nav>

			</div>









			 </div>	

			 <div class="col-sm-2">
			 	<?php include "marque.php";?>
			 </div>		

		</div>


	

</body>
</html>

