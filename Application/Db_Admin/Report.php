<?php 
require 'Conection.php';

if($_POST['action']=='insert'){
	$cod = $_POST['idEdit'];
	$name = $_POST['name'];
	$dir = $_POST['Address'];
	$tel = $_POST['tel'];

	$sql = "INSERT INTO tbleditorial VALUES ('$cod', '$name', '$dir', '$tel')";
	if(mySqli_query($mysqli,$sql)){
		echo json_encode(array('answ' =>false));
	} else {
		echo json_encode(array('answ' =>true));
	}
} 
$mysqli->close();
?>