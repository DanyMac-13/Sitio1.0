<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/pass.png">
	<?php require_once "scripts.php"; ?>
	<title>Recuperar contraseña</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">

				<br>
				<h1 align="center">Recuperación de contraseña</h1>
				<h3 align="center">Escribe el correo electrónico que registraste</h2>
				<form action="recover.php" name="recover" method="post">
					<div class="form-group">
						<label for="correo">Correo electrónico</label>
						<input class="form-control" type="email" name="correo" id="correo" required>
					</div>
					<center>
						
						<a button type="button" class="btn btn-outline-primary" href="#">Enviar</a>
						<a button type="button" class="btn btn-outline-danger" href="login.php">Cancelar</a>
					</center>
				</form>
				
			</div>
			
		</div>
		
	</div>
	
</body>
</html>