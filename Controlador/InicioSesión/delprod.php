<?php
    error_reporting(E_PARSE);
    session_start();
    include '../../Modelo/Conexion/configServer.php';
    include '../../Modelo/Conexion/consulSQL.php';
    $codigo=consultasSQL::clean_string($_POST['CodigoProd']);
    unset($_SESSION['NIT'][$codigo]);
    echo '<script> window.location="../../Vista/Paginas-Admin/Productos_Admin.php"; </script>';