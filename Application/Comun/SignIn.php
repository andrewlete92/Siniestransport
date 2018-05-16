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
	<form action="" id="formRegistro">
		<div class="container" style="margin: 10px;padding: 10px">
		<div class="row">
			<div class="col-lg-2">
				<h4>Nombre</h4>
			</div>
			<div class="col">
				<h4><input type="text" id="name" name="name" placeholder="Nombre" required="true"></h4>
			</div>
			<div class="col-lg-2">
				<h4>Apellido</h4>
			</div>
			<div class="col">
				<h4><input type="text" id="apellido" name="apellido" placeholder="Apellido" required="true"></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<h4>Email</h4>
			</div>
			<div class="col">
				<h4><input type="email" id="email" name="email" required="true" placeholder="Ingrese Email"></h4>
			</div>
			<div class="col-lg-2">
				<h4>Contraseña</h4>
			</div>
			<div class="col">
				<h4><input type="password" id="pass" name="pass" required="true" placeholder="Contraseña"></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<h4>Confirmar Email</h4>
			</div>
			<div class="col">
				<h4><input type="mail" placeholder="Confirmar Email" name="email2" id="email2" required="true"></h4>
			</div>
			<div class="col-lg-2">
				<h4>Confirmar Contraseña</h4>
			</div>
			<div class="col">
				<h4><input type="password" name="pass2" id="pass2" placeholder="Confirmar Contraseña" required="true"></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<h4>Organización</h4>
			</div>
			<div class="col">
				<h4><input type="text" id="empresa" name="empresa" placeholder="Organización" required="true"></h4>
			</div>
			<div class="col-lg-2">
				<h4>Código Validación</h4>
			</div>
			<div class="col">
				<h4><input type="number" id="nvalidacion" name="nvalidacion" placeholder="Código" required="true"></h4>
			</div>
		</div>
		</div>
		<div class="row" style="margin: 20px">
			<input type="submit" id="btnRegistrarse" value="REGISTRASE" class="btn btn-success">
		</div>
	</form>
<div id="ModalAlert" role="dialog">
	
</div>
</section>

<footer>
	<iframe src="Footer.html" id="footer1"></iframe>
</footer>
</body>
</html>