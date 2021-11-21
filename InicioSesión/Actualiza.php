<?php
	session_start();
	include 'configServer.php';
	include 'consulSQL.php';

	
	$Nombre=consultasSQL::clean_string($_POST['nombre']);
	$Apellido=consultasSQL::clean_string($_POST['apellido']);
	$Telefono=consultasSQL::clean_string($_POST['telefono']);
	$Email=consultasSQL::clean_string($_POST['email']);
	$Direccion=consultasSQL::clean_string($_POST['direccion']);

    $code=consultasSQL::clean_string( $_SESSION['UserNIT']);
   $campos="NombreCompleto='$Nombre',Apellido='$Apellido',Direccion='$Direccion',Telefono='$Telefono',Email='$Email'";
	

	if(consultasSQL::UpdateSQL("cliente", $campos, "NIT='$code'")){
		$_SESSION['nombreUser'];
        echo '<script> location.href="../index.php"; </script>';
	}else{
		echo '<script>swal("ERROR", "Ocurrio un error inesperado", "error");</script>';
	}
