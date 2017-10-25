<?php 
$name = $_REQUEST['name'];
$lastName = $_REQUEST['lastName'];
$cedula = $_REQUEST['cedula'];
$codigo = $_REQUEST['codigo'];

if ($cedula) {
	$sql = "INSERT INTO estudiante (cedula, nombre, apellidos) VALUES ('$cedula', '$name', '$lastName')";	
	$sql2 = "INSERT INTO estudiantesmatricula (codigo_estudiante, codigo_carrera) VALUES ('$cedula', '$codigo')";	
	$connection= mysqli_connect("localhost","root","","rally") or die("Connection Error");
	$connection->query($sql);
	$connection->query($sql2);
	
} 




header('location:index.php');

 ?>