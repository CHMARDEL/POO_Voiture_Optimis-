<!DOCTYPE html>
<html>
<head>
	<title> Barre de navigation </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">

  <!-- Début header de site -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Auto Mobile</a>
    </div>
  <!-- Fin header de site -->

    <ul class="nav navbar-nav">
      <!-- les menu -->
      <li class="active"><a href="#"> All Catégorie </a></li>

      <!-- les menu et les sous ménu -->
      <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Japon<span class="caret"></span></a>

			        <ul class="dropdown-menu">
			          <li><a href="#">Page 1-1</a></li>
			          <li><a href="#">Page 1-2</a></li>
			          <li><a href="#">Page 1-3</a></li>
			        </ul>
      </li>

      <!-- les menu -->
      <li><a href="#">Allemand</a></li>

      <li><a href="#">Italie</a></li>
      
      <!-- les menu -->
      <li><a href="#">Francais</a></li>

      <li><a href="#">Anglais</a></li>

    </ul>

  </div>
</nav>

</body>
</html>