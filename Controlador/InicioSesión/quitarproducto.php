<?php
    error_reporting(E_PARSE);
    session_start();
    include '../../Modelo/Conexion/configServer.php';
    include '../../Modelo/Conexion/consulSQL.php';
    $codigo=consultasSQL::clean_string($_POST['codigo']);
    unset($_SESSION['carro'][$codigo]);
    echo '<script> window.location="../../Vista/Paginas/Carrito.php"; </script>';