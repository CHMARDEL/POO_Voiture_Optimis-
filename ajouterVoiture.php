<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<title> Ajouter une voiture </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>

		<p> Ajouter une voiture </p>
		<div>
			<form class="form-inline" method="POST" action="ajouter.php">

				<label> Matricule : </label>
			    <input type="int" class="form-control" name="id"> <br>
<?php 
require('config.php');
$bdd = new ClassBD();
$pays = $bdd->prepare("SELECT DISTINCT `pays` FROM `vehicule`");
$pays->execute();
$markichs = $bdd->prepare("SELECT DISTINCT `marque` FROM `vehicule`");
$markichs->execute();
?>		
			    <label> Pays : </label>
			    
				<select type="text" class="form-control form-control-sm" name="pays">
				
				<?php foreach ($pays as $valeur) {
				?>
				<option>
			    		<?php print_r($valeur['pays']);?><br>
			    </option>
			    <?php  
			    } 			    	
				?>
			    </select> <br>


			    <label> Marque :</label>
			    <select type="text" class="form-control form-control-sm" name="marque">
					<?php foreach ($markichs as $markich){  
					?>	
					<option>
							<?php print_r($markich['marque']);?> <br>
					</option>
					<?php
					}					    	
					?>
			    </select> <br>

			    <label> Modele :</label>
			    <input type="text" class="form-control" name="modele"> <br>

			    <label> Energie :</label>
			    <input type="text" class="form-control" name="energie"> <br>

			    <label> Puissance :</label>
			    <input type="int" class="form-control" name="puissance"> <br>

			    <label> Boite Vitesse :</label>
			    <input type="text" class="form-control" name="boite"> <br>

			    <label> Image :</label>
			    <input type="text" class="form-control" name="image"> <br>

	    		<label> Prix :</label>
			    <input type="int" class="form-control" name="prix"> <br>

			  <button type="submit" class="btn btn-primary">Ajouter</button>
			</form>
		</div>

	</body>
</html>
		




<!--
GROUP BY `pays`

// print_r (permet de visualisé les )

<select type="text" class="form-control form-control-sm" name="pays">
<option> Englend</option>
<option> Japon</option>
<option> France</option>
<option> Italie</option>
<option> Allemagne</option>
</select>
______________________________________________________
<input type="text" class="form-control" name="pays"> <br> 


-->
