<?php
require_once('config/db_connect.php');
$conexion = connect();

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
	<title>Reserva Horario</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<?php include('./inc/navbar.php');?>
	<div class="container">
		<div class="col-6">
		  <h4 class="text-center">Reserva de Horas</h4>
 			<table align="center" class="table table-dark">
 				<tr class="text-center"><td>Seleccione el dia <br>en el cual quiere reservar:</td>
		 		 	   <td>
		 		 			<form action="./reser.php" method="post">
		 					 <select type="text" class="form-control" id="dia" name="dia" aria-describedby="diaHelp" value="">
		    				 	<option value="Lunes">Lunes</option>
		    				 	<option value="Martes">Martes</option>
		   					 	<option value="Miercoles">Miercoles</option>
		   					 	<option value="Jueves">Jueves</option>
		   					 	<option value="Viernes">Viernes</option>
		   					 	<option value="Sabado">Sabado</option>
		   					 	<option value="Domingo">Domingo</option>
		  					 </select>
		  			   </td></tr>
		  				<tr class="text-center"><td>Seleccione la hora <br> que quiere reservar:</td>
		  				<td class="text-center">
		  					 <select type="text" class="form-control" id="Horario" name="Horario" aria-describedby="HorarioHelp" value="">
		    				 	<option value="09:00">10:00hrs</option>
		    				 	<option value="10:00">10:00hrs</option>
		   					 	<option value="11:00">11:00hrs</option>
		   					 	<option value="12:00">12:00hrs</option>
		   					 	<option value="13:00">13:00hrs</option>
		   					 	<option value="14:00">14:00hrs</option>
		   					 	<option value="15:00">15:00hrs</option>
		   					 	<option value="16:00">16:00hrs</option>
		   					 	<option value="17:00">17:00hrs</option>
		   					 	<option value="18:00">18:00hrs</option>
		   					 	<option value="19:00">19:00hrs</option>
		   					 	<option value="20:00">20:00hrs</option>
		   					 	<option value="21:00">21:00hrs</option>
		   					 </select>
		   				</td></tr>
              <tr class="text-center"><td>Nombre:</td>
                <td>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" value="" required autofocus>
                </td>
              </tr>
              <tr class="text-center"><td>Identificador:</td>
                <td>
                <input type="text" class="form-control" id="id" name="id" aria-describedby="idHelp" value="" required autofocus>
                </td>
              </tr>
              <tr class="text-center"><td>Actividad a realizar:</td>
                <td>
                <input type="text" class="form-control" id="reserva" name="reserva" aria-describedby="reservaHelp" value="" required autofocus>
                </td>
              </tr> 
              <tr class="text-center"><td>Para concretar la inscripción<br>presione el boton de enviar</td>
                <td>
                <input class="btn btn-primary" type="submit">
                </td>
              </tr> 
		 				</form>
 		 	</table>
 		</div> 	
	</div>
</body>
</html>