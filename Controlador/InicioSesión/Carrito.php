<?php
error_reporting(E_PARSE);
 include '../../Modelo/Conexion/configServer.php';
include '../../Modelo/Conexion/consulSQL.php';
session_start();
$codigo=consultasSQL::clean_string($_POST['codigo']);

if(empty($_SESSION['carro'][$codigo]))
{
	$_SESSION['carro'][$codigo] = array('producto' => $codigo
                                        
     );
     echo '<script> location.href="../../Vista/Paginas/Carrito.php"; </script>';
}else{
	echo '<script>
        swal({
        title: "ERROR",
        text: "El producto ya fue agregado al carrito. Quieres ver el carrito de compras?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        cancelButtonClass: "btn-primary",
        confirmButtonText: "Si, ver el carrito",
        cancelButtonText: "No, seguir comprando",
        closeOnConfirm: false
        },
        function(){
            window.location="carrito.php";
        });
    </script>';
}