<?php
require_once('./db_connect.php');
$conexion = connect();
$sql = 'SELECT * FROM persona';
$result = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>UCED</title>
</head>
<body>
	<?php include('./navbar.php');?>
	<div class="container">
		<div class="col-lg-5 col-md-8 col-sm-12 mx-auto">
			<div class="card px-5 py-3 border-0">
				<div class="card-block text-center py-5">
					<?php echo 'Hola '.$row['Nombre'].''?>
					<h2>Seleccione la opción que desea realizar</h2>
					<a class="btn btn-outline-primary" href="#">Reservar Hora</a>
					<a class="btn btn-outline-primary" href="#">Participar en una actividad</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>