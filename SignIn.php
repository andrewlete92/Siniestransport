<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SignIn</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>
	<div>
		<img src="img/signin_banner.jpg" style="width: 100%; height: 100%">
	</div>
<nav class="navbar navbar-expand-sm bg-light">
  	<ul class="navbar-nav">
		 <li class="nav-item">
      			<a class="nav-link" href="Index.html">Inicio</a>
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

<footer class="footer-distributed">
			<div class="footer-left">
				<h3>Company<span>logo</span></h3>
				<p class="footer-links">
					<a href="Index.html">Inicio</a>
					<br>
					<a href="#">Portafolio</a>
					<br>
					<a href="#">Contáctenos</a>
				</p>
				<p class="footer-company-name">Company Name &copy; 2018</p>
			</div>
			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Avenida Siempre Viva 123</span> Medellín, Antioquia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+57 313 752 06 71
					<br>
					+57 319 449 52 96</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Acerca de XXXXX</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
					<a href="https://github.com"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
</body>
</html>