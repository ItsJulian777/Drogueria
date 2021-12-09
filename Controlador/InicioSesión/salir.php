<?php
session_start();
session_destroy();

header('location:../../Vista/Paginas/LoginInicio.php');
?>