<!DOCTYPE html>
<html>
<head>
	<title>Pays</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">

	<form class="form-inline" method="POST" action="Mavoiture.php">
		<label> Saisie Pays : </label>
		<input type="text" value="Japon" class="form-control" name="contry">
	  	<button type="submit" class="btn btn-primary">Envoyer</button>
	</form>

<!--  contenur des articles -->
		
		<div class="col-sm-8" method="POST" action="Mavoiture.php">

		<div class="col-sm-2">
		<img src="https://previews.123rf.com/images/gknec/gknec1403/gknec140300008/26786974-gran-breta%C3%B1a-icono-inglaterra-reino-unido-mapa-de-la-bandera-bandera-union-jack.jpg" width="100" height="100">
		<a href="Mavoiture.php" valeur="Englend">Englend</a></div>

		<div class="col-sm-2">
		<img src="https://thumbs.dreamstime.com/b/map-japan-flag-7229025.jpg" width="100" height="100">
		<a href="Mavoiture.php" valeur="Japon"> Japon </a></div>

		<div class="col-sm-2">
		<img src="http://www.carte-du-monde.net/pays/france/carte-drapeaux-france.jpg" width="100" height="100">
		<a href="Mavoiture.php" valeur="France">France</a></div>

		<div class="col-sm-2">
		<img src="https://images-na.ssl-images-amazon.com/images/I/410nwGHbmxL._SY355_.jpg" width="100" height="100">
		<a href="Mavoiture.php" valeur="Italie">Italie</a></div>

		<div class="col-sm-2">
		<img src="http://www.zhaodeco.com/public_files/prodyn_img/img_2-7988_drapeau_carte_0_allemagne.png" width="100" height="100">
		<a href="Mavoiture.php" valeur="Allemagne">Allemagne</a></div>

		</div>
	</form>

</body>
</html>