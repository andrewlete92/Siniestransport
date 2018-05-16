<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SignIn</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<div>
		<img src="../../img/signin_banner.jpg" style="width: 100%; height: 100%">
	</div>
<nav class="navbar navbar-expand-sm bg-light">
  	<ul class="navbar-nav">
		 <li class="nav-item">
      			<a class="nav-link" href="Index.php">Inicio</a>
  		</li>
   		<li class="nav-item">
     			<a class="nav-link" href="Libros.php">Portafolio</a>
   		</li>
   		<li class="nav-item">
      			<a class="nav-link" href="Editrial-php">Contáctenos</a>
   		</li>
	</ul>
</nav>

<section>
	<form action="Managment.html" method="POST">
		<div class="container" style="margin: 10px;padding: 10px">
		<div class="row">
			<div class="col-lg-2">
				<h4>Nombre</h4>
			</div>
			<div class="col">
				<h4><input type="text" required="true"></h4>
			</div>
			<div class="col-lg-2">
				<h4>Apellido</h4>
			</div>
			<div class="col">
				<h4><input type="text" required="true"></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<h4>Email</h4>
			</div>
			<div class="col">
				<h4><input type="email" required="true" placeholder="Ingrese Email"></h4>
			</div>
			<div class="col-lg-2">
				<h4>Contraseña</h4>
			</div>
			<div class="col">
				<h4><input type="password" required="true" placeholder="Contraseña"></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<h4>Confirmar Email</h4>
			</div>
			<div class="col">
				<h4><input type="mail" required="true"></h4>
			</div>
			<div class="col-lg-2">
				<h4>Confirmar Contraseña</h4>
			</div>
			<div class="col">
				<h4><input type="password" required="true"></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<h4>Organización</h4>
			</div>
			<div class="col">
				<h4><input type="mail" required="true"></h4>
			</div>
			<div class="col-lg-2">
				<h4>Código Validación</h4>
			</div>
			<div class="col">
				<h4><input type="number" required="true"></h4>
			</div>
		</div>
		</div>
		<div class="row" style="margin: 20px">
			<button class="btn btn-success">REGISTRARSE</button>
		</div>
	</form>

</section>

<footer>
	<iframe src="Footer.html" id="footer1"></iframe>
</footer>
</body>
</html>