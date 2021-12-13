<?php 
    session_start(); 
    error_reporting(E_PARSE);
?>

<head>
    <?php include 'link.php'; ?>
</head>
<nav id="letras" class="navbar navbar-expand-lg navbar-light bg-light">
    <div id="navegacion" class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a id="letras" class="nav-link active" aria-current="page" href="#">INICIO</a>
                </li>
               
                <li class="nav-item dropdown">
                    <a id="letras" class="nav-link active" href="./Vista/Paginas/Productos.php"
                    aria-current="page">
                        PRODUCTOS
                    </a>
                   
                </li>

            </ul>
            <form class="d-flex">
                <div class="main-header-container1">

                    <input id="buscador" type="search" placeholder="Buscar Productos">
                    <?php
                        
                         if(!$_SESSION['nombreAdmin']==""){
                             echo ' 
                                
                                 <a id="letras"  href="Vista/Paginas-Admin/Index_Admin.php" class="table-cell-td" style="
                                 text-decoration: none;" >Administración</a>
                                 <a id="letras"  href="Controlador/InicioSesión/salir.php" class="table-cell-td exit-system" style="
                                 text-decoration: none;">
                                     <i id="letras"  href="Vista/Paginas-Admin/Index_Admin.php" class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreAdmin'].'
                                 </a>
                                 <a id="letras" href="../Paginas/Carrito.php" class="table-cell-td " style="
                                 text-decoration: none;">
                                <i id="letras" class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;&nbsp;Pedidos
                    </a>
                              ';
                         }else if(!$_SESSION['nombreUser']==""){
                             echo ' 
                             <a id="letras"  href="Vista/Paginas/Cuenta.php" class="table-cell-td" style="
                             text-decoration: none;" >Cuenta</a>
                             <a id="letras"  href="Controlador/InicioSesión/salir.php" class="table-cell-td exit-system" style="
                             text-decoration: none;" >
                                 <i id="letras"  href="Vista/Paginas/Cuenta.php" class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreUser'].'
                                 <a href="#!" class="table-cell-td userConBtn" data-code="'.$_SESSION['UserNIT'].'">
                                 <i class="glyphicon glyphicon-cog"></i>
                             </a>
                             <a id="letras" href="../Paginas/Carrito.php" class="table-cell-td " style="
                             text-decoration: none;">
                             <i id="letras" class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;&nbsp;Pedidos
                    </a>
                          ';
     
                         }else{
                             echo ' 
   
                             <a id="letras" href="Vista/Paginas/registrarvista.php" class="table-cell-td"  style="
                             text-decoration: none;">Registro</a>
                                 <a id="letras"  style="
                                 text-decoration: none;" href="Vista/Paginas/LoginInicio.php" class="table-cell-td" data-toggle="modal" data-target=".modal-login">
                                     <i id="letras" class="fa fa-user"></i>&nbsp;&nbsp;Login
                                 </a>
                              ';
                         }
                     ?>


                    <a id="letras" href="Vista/Paginas/Carrito.php" class="table-cell-td " style="
    text-decoration: none;">
                        <i id="letras" class="fa fa-shopping-cart "></i>&nbsp;&nbsp;Carrito
                    </a>

                </div>

            </form>
        </div>
    </div>
</nav>