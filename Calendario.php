<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
   <title class="text-center">Calendario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 </head>
 
<body>

	<?php include('./inc/navbar.php');?>
<div class="container">
 
<h1 class="text-center">Calendario</h1>
<table class="table table-dark">
  <tr class="text-center">


<?php
$titulos = array("Hora\Dia", "Lunes", "Martes", "Miercoles", "Jueves", "Sabado", "Domingo"); 
$estado= array("09:00","2","3","4","5","6","7");
?>

	<tr class="text-center">
<?php
function datos_hora($valor) {
    for ($i=0; $i < 7 ; $i++) { 
	echo "<th>$valor[$i]</th>";
	}
}
?>
	<tr class="text-center"><?php datos_hora($titulos); ?></tr>
	<tr class="text-center"><?php datos_hora($estado); ?></tr>

</table>
</div>

</body>
</html>