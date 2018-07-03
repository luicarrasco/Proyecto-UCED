<?php
require ('config/db_connect.php');
$con=connect();
	$idA=$_POST['idA'];
	$nom_ac=$_POST['nom_ac'];
	$nombre=$_POST['nombre'];
	$id=$_POST['id'];
	$Nom_monitor=$_POST['Nom_monitor'];

	$sql="INSERT INTO actividad (idA, nom_ac, nombre, id, Nom_monitor) VALUES ( '$idA', '$nom_ac', '$nombre', '$id', '$Nom_monitor')";
	$result=mysqli_query($con,$sql) or die ('Error al insertar los registros');
	mysqli_close($con);
	echo "Datos insertados correctamente";

?>
