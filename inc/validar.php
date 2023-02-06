<?php 
include("conexion.php");
include("mensaje.php");

	$Usuario=$_POST['usuario'];
	$Pass=$_POST['password'];

	$sql="SELECT * FROM login, usuario WHERE login.emailLogin='".$_POST['usuario']."' AND usuario.Login_emailLogin='".$_POST['usuario']."' AND login.password='".$_POST['usuario']."' AND usuario.enabled='Si'";

	$consulta=$conexion->query($sql);

	if($resultado=mysqli_fetch_array($consulta)){

		header('Location:https://www.soundcloud.com/markjenko');
	}else{
		mensaje('Usuario o contraseña incorrectos', 'login.php', 'error.png');
	}

?>