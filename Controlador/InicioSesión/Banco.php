<?php
session_start();
include '../../Modelo/Conexion/configServer.php';
	include '../../Modelo/Conexion/consulSQL.php';

$bancoCuenta=consultasSQL::clean_string($_POST['bancoCuenta']);
$bancoNombre=consultasSQL::clean_string($_POST['bancoNombre']);
$bancoBeneficiario=consultasSQL::clean_string($_POST['bancoBeneficiario']);
$bancoTipo=consultasSQL::clean_string($_POST['bancoTipo']);

if(consultasSQL::InsertSQL("cuentabanco", "NumeroCuenta, NombreBanco, NombreBeneficiario, TipoCuenta", "'$bancoCuenta','$bancoNombre','$bancoBeneficiario','$bancoTipo'")){
    echo '<script> location.href="../../Vista/Paginas-Admin/Banco_Admin.php"; </script>';
}else{
  echo '<script>swal("ERROR", "Ocurrió un error inesperado, por favor intente nuevamente", "error");</script>';
}