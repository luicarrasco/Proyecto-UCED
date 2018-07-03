<?php
require('config/db_connect.php');
$conexion = connect();
$sql = 'SELECT DISTINCT `nom_ac`,`idA`,`Nom_monitor` FROM `actividad` ORDER BY `id_ac` ASC';
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
	<title class="text-center">Seleccion de Actividad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
  <?php include('./inc/navbar.php');?><br><br>     
      <div class="text-center"><span class="text-center h4 border p-3 mb-2 bg-dark text-white">Segun la actividad deseada complete los campos solicitados</span></div><br><br><br>           
  <div class="container">
    <div class="row">
      <div class="col-6">
         <table align="center" class="table table-condensed">
           <form action="./ins.php" method="post">
              <tr class="text-center"><td>Código Actividad</td>
                <td>
                <input type="text" class="form-control" id="idA" name="idA" aria-describedby="idAcHelp" value="" required autofocus>
                </td>
              </tr>  

              <tr class="text-center"><td>Nombre Actividad</td>
                <td>
                     <select  type="text" class="form-control" id="nom_ac" name="nom_ac" aria-describedby="nom_acHelp" value="">
                              <option value="Football">Football</option>
                              <option value="Karate">Karate</option>
                              <option value="Yoga">Yoga</option>
                              <option value="Musculacion">Musculacion</option>
                              <option value="Voleyball">Voleyball</option>
                     </select>
                </td>
              </tr> 
              <tr class="text-center"><td>Nombre Profesor</td>
                <td>
                     <select type="text" class="form-control" id="Nom_monitor" name="Nom_monitor" aria-describedby="Nom_monitorHelp">
                            <option value="marco">marco</option>
                            <option value="jose">jose</option>
                            <option value="alex">alex</option>
                            <option value="tom">tom</option>
                            <option value="Alejandro">Alejandro</option>
                     </select>
                </td>
              </tr> 
              <tr class="text-center"><td>Nombre:</td>
                <td>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombrecHelp" value="" required autofocus>
                </td>
              </tr> 
              <tr class="text-center"><td>Identificador:</td>
                <td>
                <input type="text" class="form-control" id="id" name="id" aria-describedby="idcHelp" value="" required autofocus>
                </td>
              </tr> 
              <tr class="text-center"><td>Para concretar la inscripción<br>presione el boton de enviar</td>
                <td>
                <input class="btn btn-primary" type="submit">
                </td>
              </tr> 
              </td></tr>
            </form>
          </table>
      </div>  
      <div class="col-6">
          <?php
            if (isset($msg)) {
                echo $msg;
              }
              if (mysqli_num_rows($result) > 0) {
                # CREAR TABLA
                echo '<table class="table table-hover">';
                      echo '<thead class="thead-dark">';
                      echo '<tr class=text-center>';
                      echo '<th class="table-header" >Nombre Actividad</th>';
                      echo '<th class="table-header" >Codigo Actividad</th>';
                      echo '<th class="table-header" >Nombre Monitor</th>';
                      echo '</tr>';
                      echo '</thead>';
                      echo '<tbody>';
                 $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
               
                   echo '<tr class=text-center>';
                  echo '<td>' . $row['nom_ac'] . '</td>';
                  echo '<td>' . $row['idA'] . '</td>';
                  echo '<td>' . $row['Nom_monitor'] . '</td>';
                  echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
               } else {
                echo '<p class="alert alert-warning">No hay resultados</p>';
              }
            mysqli_close($conexion);
          ?>
	  </div>
    </div>
  </div><br><br><br>
</body>
</html>