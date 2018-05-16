<?php 
require 'Conection.php';

if($_POST['action']=='insert'){
	$idCliente = 111;
	$User = 'andres.angulo';
	//$fecha = 'CURRENT_DATE()';
	$Placa = $_POST['placa'];
	$idCondicion = $_POST['idCondicion'];
	$idDesperfecto = $_POST['idDesperfecto'];
	$idSitCarretera = $_POST['idSitCarretera'];
	$idCausa_Peaton = $_POST['idCausa_Peaton'];
	$idCaract_Avenidas = $_POST['idCaract_Avenidas'];
	$idCausa_Conductor = $_POST['idCausa_Conductor'];
	$TipoVehiculo = $_POST['TipoVehiculo'];
	$Heridos = $_POST['heridos'];
	$Muertos = $_POST['muertos'];
	$Conductor  = $_POST['Conductor'];
	$Testimonio = $_POST['testimonio'];

	$sql = "INSERT INTO tblReportes (idCliente,Usuario, Fecha,Placa, TipoVehiculo, idCondicion, idDesperfecto, idSitCarretera, idCaract_Avenidas, idCausa_Peaton, idCausa_Conductor, Heridos, Muertos,Conductor, Testimonio)
	VALUES
	('$idCliente'
	,'$User'
	,CURRENT_DATE()
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