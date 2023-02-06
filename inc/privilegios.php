<?php
function permitirAcceso($tipo, $formulario){
	include('conexion.php');
	$result=$conexion->query("SELECT * FROM privilegio WHERE userType='$tipo' AND form='$formulario'");
	if ($result->num_rows>0) 
		return true;
	else
		return false;
}

?>