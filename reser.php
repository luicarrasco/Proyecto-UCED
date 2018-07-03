<?php
require ('config/db_connect.php');
$con=connect();
		$reserva = $_POST['reserva'];
		$nombre = $_POST['nombre'];
		$dia = $_POST['dia'];
		$Horario = $_POST['Horario'];
		$id = $_POST['id'];

	$sql="INSERT INTO reserva (reserva,nombre,dia,Horario,id) VALUES ('$reserva','$nombre','$dia','$Horario','$id')";
	$result=mysqli_query($con,$sql) or die ('Error al insertar los registros');
	mysqli_close($con);
	echo "Datos insertados correctamente";

?>