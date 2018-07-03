<?php
require_once('config/db_connect.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <?php include('./inc/navbar.php');?>
	<div class="container">
			<div class="row justify-content-center">
				<form class="form-signin">
				<img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
				<h1 class="h3 mb-3 font-weight-normal">Registro</h1>
				<label for="Matricula" class="sr-only">Matricula</label>
				<input type="number" id="Matricula" class="form-control" placeholder="Matricula" maxlength="10" min="0" required autofocus>
				<div class="checkbox mb-3">
					<label><input type="checkbox" value="remember-me"> Recordar</label>
				</div>
				<a class="btn btn-primary" href="eleccion.php">Ingresar</a>
				</form>
			</div>
	</div>
  </body>
</html>
