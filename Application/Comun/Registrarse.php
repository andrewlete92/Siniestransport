<?php 
require 'Conection.php';

if($_POST['action']=='validar'){
	$key = $_POST['llave'];
	$res = $mysqli->query("
	SELECT * FROM tblLicencias WHERE Licencia = '$key'");
	if ($res->num_rows!=null){
	$data = $res->fetch_all(MYSQLI_ASSOC);
	echo json_encode($data);
	}else{
	echo json_encode(array('error' =>true));
	}
} elseif($_POST['action']=='insert'){
	$Name = $_POST['name'];
	$LastName = $_POST['apellido'];
	$User = $_POST['email'];
	$Pass = $_POST['pass'];
	$IdCliente = $_POST['idCliente'];

	$sql = "INSERT INTO tbl_users (Name,LastName,User, Pass, IdCliente, UserType) 
	VALUES ('$Name'
	,'$LastName'
	,'$User'
	,'$Pass'
	,'$IdCliente'	
	,'Admin')";
	if(mySqli_query($mysqli,$sql)){
		echo json_encode(array('answ' =>false));
	} else {
		echo json_encode(array('answ' =>true));
	}
}

$mysqli->close();
?>