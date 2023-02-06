<?php 
		$conexion=mysqli_connect("localhost","root","","demo");
		if ($conexion->connect_errno) {
			echo "Error al conectar a BD: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
		}else{
			echo "";
		}
?>
