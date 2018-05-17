<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Siniestransport</title>
	<link rel="stylesheet" href="../../css/style.css">
	<script src="../../js/jquery.js"></script>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/login.js"></script>
</head>
<body>
<div>
	<img src="../../img/banner_index.jpg" style="width: 100%; height: 100%">
</div>
<section>
<div class="row barra d-flex flex-row" style="margin: 10px">
	<form action="" id="formlg">
		<div class="row">
			<div class="col">
				<h3>EMAIL</h3>
			</div>
			<div class="col">
				<input class="textbox" type="text" required="true" name="userlg" placeholder="Email" >
			</div>
			<div class="">
				<h3>CONTRASEÑA</h3>
			</div>
			<div class="col">
				<input class="textbox2" type="password" required="true" name="passlg" placeholder="Contraseña">
			</div>
			<div class="col">
				<input type="submit" class="btn btn-success" id="btnlg" value="INGRESAR">
			</div>
		</div>
	</form>
		<div class="col">
			<button class="btn btn-primary" name="btnlg2" onclick="signin()">REGISTRARSE</button>		
		</div>
	</div>
	<div id="modal" role="dialog">
      
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
      			<a class="nav-link" href="Contactenos.html">Contáctenos</a>
    		</li>
  		</ul>
	</nav>
</section>
<footer>
	<iframe src="Footer.html" id="footer1"></iframe>
</footer>
</body>
</html>