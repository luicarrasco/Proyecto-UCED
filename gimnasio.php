<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>Imágenes</title>
</head>

<body>
	<?php include('./inc/navbar.php');?>
	<div class="container">
	<br><p class="text-sm-center">A continuación, se presentan imágenes del Gimnasio y algunas de sus actividades</p>
		<table>
			<tr>
				<td>
					<?php   $directorio="imagenes";
			$dirint = dir($directorio);

		  
					while (($archivo = $dirint->read()) !== false)
			{
				if (preg_match('/gif/', $archivo) || preg_match('/jpg/', $archivo) || preg_match('/png/', $archivo)){ // preg_match compara lo que lleva como discriminante
					echo '<img src="'.$directorio."/".$archivo.'">'."\n";
				}
			}
					  $dirint->close();
					?>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>