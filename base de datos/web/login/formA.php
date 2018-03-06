<html>
	<head>
		<title>Formulario de Registro</title>
				<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	</head>
	<body>
		<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-29">
		<h2>Registro</h2>

		<form role="form" name="registro" action="login.php" method="post">
		  <div class="form-group">
		    <label for="Nombres">Nombres</label>
		    <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres">
		  </div>
		  <div class="form-group">
		    <label for="Apellidos">Apellidos</label>
		    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos">
		  </div>
		  <div class="form-group">
		    <label for="Identificacion">Identificacion</label>
		    <input type="Identificacion" class="form-control" id="Identificacion" name="Identificacion" placeholder="Identificacion">
		  </div>
		  <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
		  </div>
		  <div class="form-group">
		    <label for="Nombre de equipo">Nombre de equipo</label>
		    <input type="Nombre de equipo" class="form-control" id="Nombre de equipo" name="Nombre de equipo" placeholder="Nombre de equipo">
		  </div>
		  <div class="form-group">
		    <label for="Numero de serie">Numero de serie</label>
		    <input type="Numero de serie" class="form-control" id="Numero de serie" name="Numero de serie" placeholder="Numero de serie">
		  </div>

  <div class="form-group">
  	<label for="Numero de serie">Hora de salida</label>
<input type="Hora" class="form-control" id="hora" name="hora" placeholder="Hora de salida">

  	 </div>
<select name="select">
	<option value="value1">Entregado</option>
	<option value="value2" select>No entregado</option>
	<option value="value3">Pendiente</option>
</select>

 </div>



  <div class="form-group">
  	<label for="Numero de serie">Hora de Entrada</label>
<input type="Hora" class="form-control" id="hora" name="hora" placeholder="Hora de Entrada">

  	 </div>
<select name="select">
	<option value="value1">Recibido</option>
	<option value="value2" select>No recibido</option>
	
</select>

 </div>
 <br>





		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>


	</body>
</html>