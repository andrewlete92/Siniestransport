<?php 
require 'Conection.php';

if($_POST['action']=='insert'){
	$idCliente = 111;
	$User = 'andres.angulo';
	$fecha = 'CURRENT_DATE()';
	$Placa = $_POST['Placa'];
	$TipoVehiculo = $_POST['TipoVehiculo'];
	$idCondicion = $_POST['idCondicion'];
	$idDesperfecto = $_POST['idDesperfecto'];
	$idSitCarretera = $_POST['idSitCarretera'];
	$idCausa_Peaton = $_POST['idCausa_Peaton'];
	$idCaract_Avenidas = $_POST['idCaract_Avenidas'];
	$idCausa_Conductor = $_POST['idCausa_Conductor'];
	$Conductor  = $_POST['Conductor'];
	$Testimonio = $_POST['Testimonio'];
	$Heridos = $_POST['Heridos'];
	$Muertos = $_POST['Muertos'];

	$sql = "INSERT INTO tblreportes (idCliente,Usuario, Fecha,Placa, TipoVehiculo, idCondicion, idDesperfecto, idSitCarretera,idCaract_Avenidas, idCausa_Peaton, idCausa_Conductor, Conductor, Testimonio)
	VALUES
	('$idCliente'
	,'$User'
	,'$fecha'
	,'$Placa'
	,'$TipoVehiculo'
	,'$idCondicion'
	,'$idDesperfecto'
	,'$idSitCarretera'
	,'$idCausa_Peaton'
	,'$idCaract_Avenidas'
	,'$idCausa_Conductor'
	,'$Heridos'
	,'$Muertos'
	,'$Conductor'
	,'$Testimonio'
	)";
	if(mySqli_query($mysqli,$sql)){
		echo json_encode(array('answ' =>false));
	} else {
		echo json_encode(array('answ' =>true));
	}
} 

$mysqli->close();
?>