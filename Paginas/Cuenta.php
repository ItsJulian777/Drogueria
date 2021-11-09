<?php

include "../InicioSesión/Conexion.php";
error_reporting(0);
session_start();

$telefono=$_POST["telefono"];
$residencia=$_POST["residencia"];
    $correo=$_POST["email"];
    $sexo=$_POST["sexo"];
    $info=$_POST["info"];
    $dni= $_SESSION['user'];
    
    
  

if(isset($_POST["actualizar"])){

  $sqlactualizar = "UPDATE usuario SET telefono_us= '$telefono' , residencia_us='$residencia' , correo_us='$correo' , sexo_us= '$sexo', adicional_us= '$info' where id_usuario='?'";
if(mysqli_query($coneccion, $sqlactualizar )){

  echo "<script>alert('actualizado bien ')</script>";

}
    else{
                echo "Error: ".$sql."<br>".mysql_error($coneccion);
            }
            
        }
    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drogueria</title>
    
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Boostrap/estilos.css" />
    <link href="estilo.css" type="text/css" rel="stylesheet" media="">
    <!---Link CDN FONT AWESOME-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2? family=Langostaydisplay=swap" rel="hoja de estilo">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="main-header">
        <div class="container">

            <div class="main-header-container">
                <h1 id="titulo" class="main-header-title">
                    Tu Drogueria
                </h1>
                <img id="icono" src="https://image.flaticon.com/icons/png/512/185/185932.png" alt="Drogueria el reloj">
                <a href="#" id="face" class="red"> <img id="icono"
                        src="https://th.bing.com/th/id/OIP.lPLk_BPmeSAu1COdk8i8iwHaHa?pid=ImgDet&rs=1"
                        alt="Drogueria el reloj"><span><i></i></span></a>
                <a href="#" id="insta" class="red"> <img id="icono"
                        src="https://i0.pngocean.com/files/750/461/292/logo-computer-icons-instagram.jpg"
                        alt="Drogueria el reloj"> <span><i></i></span></a>
                <a href="#" id="whasa" class="red"> <img id="icono"
                        src="https://th.bing.com/th/id/OIP.8fFvZfU73gxvOshB-XsJRQD6D6?pid=ImgDet&rs=1"
                        alt="Drogueria el reloj"> <span><i></i></span></a>
                        
            </div>

        </div>
    </header>
    <!--empieza la barra de navegacion-->
    <nav id="letras" class="navbar navbar-expand-lg navbar-light bg-light">
        <div id="navegacion" class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="letras" class="nav-link active" aria-current="page" href="../Index.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a id="letras" class="nav-link" href="#">OFERTAS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="letras" class="nav-link dropdown-toggle" href="Productos.php"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PRODUCTOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Productos.php">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <div class="main-header-container1">

                        <input id="buscador" type="search" placeholder="Buscar Productos">
                        <?php
     $alert ="";
    session_start();
     if(!empty($_SESSION['active'])){
  
    switch ($_SESSION['us_tipo']){
        case 1:

            ?>
 <a href="Paginas-Admin/Index_Admin.html"><i id="item" class="fas fa-user"></i></a>
 <?php

          break;
          case 2:
          ?>
    <a href="Paginas-Admin/Index_Admin.html"><i id="item" class="fas fa-user"></i></a>
      <?php

     break;
     case 3:
      ?>
     <a href="#"><i id="item" class="fas fa-user"></i></a>
      <?php

       break;

    }
    }else {


                        ?>
   <a href="Paginas/LoginInicio.php"><i id="item" class="fas fa-user"></i></a>
    <?php
    }
      ?>
                                          
 
                        <a href="Carrito.php" alt="Carrito"><i id="item" class="fas fa-shopping-cart"></i> </a>
                        <a href="../InicioSesión/salir.php"><i id="item" ><img class="close" src="../Img/salir.png" alt="Salir del sistema" title="Salir"></i></a>
                        
                    </div>

                </form>
            </div>
        </div>
    </nav>

    <!--TERMINA la barra de navegacion
  
    -->
    <!--Empieza la parte superior-->
    
        <div class="container-main">
        <div class="superior">
            <div>
          <p class="h3" id="pro">Datos Personales</p>
        </div>
      <section >
         <div class="content">
           <div class="container-fluid">
                <div class="row">
                     <div class="col-md-3">
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                            <div class=" text-center">
                                                    <img src="../Img/avatar.png" class="profile-user-img img-fluid img-circle" >
 


                                              </div> 
                                              <input id="id_usuario" type="hidden" value="">
                                              <?php
                                            
                                              session_start();
                                             
                                              
$querys = mysqli_query($coneccion,"SELECT * FROM usuario");
$results= mysqli_num_rows($querys);
if($results >0){

    $data= mysqli_fetch_array($querys);

?>
                                                            <h3 id="nombre_us" class="profile-username text-center text-succes">

                                                            <?php
echo $data['nombre_us'];

?>
                                                            </h3>

                                                         <p id="apellidos_us" class="text-muted text-center">
                                                         <?php
echo $data['apellidos_us'];

?>
                                                         </p>
                                         <ul class="list-group list-group-unbordered mb-3">
               
                                            <li class="list-group-item">
                                                    <b id="id_usuario" style="color:#0B7300">
                                                    <?php
echo $data['id_usuario'];

?>
                                                </b><a class="float-right"></a>

                                             </li>
                                            <li class="list-group-item">
                                                        <b id="dni_us" style="color:#0B7300">
                                                        <?php
echo $data['dni_us'];

?>
                                                    </b><a class="float-right"></a>

                                              </li>
                                             <li class="list-group-item">
                                                         <b id="edad" style="color:#0B7300">
                                                         <?php
echo $data['edad'];

?>
                                                        </b><a class="float-right"></a>

                                             </li>
        
                               
                                             <?php
}

?>
    
                                         </ul>


                             </div> 


                        </div> 
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Sobre mi</h3>
                            </div>
                            <div class="card-body">
                                <strong style="color:#0B7300">
                                    <i class="fas fa-phone mr-1"></i>Telefono
                                </strong>
                                <p class="text-muted">23123</p>
                                <strong style="color:#0B7300">
                                    <i class="fas fa-map-marjer-alt mr-1"></i>Residencia
                                </strong>
                                <p class="text-muted">23123</p>
                                <strong style="color:#0B7300">
                                    <i class="fas fa-at mr-1"></i>Correo
                                </strong>
                                <p class="text-muted">23123</p>
                                <strong style="color:#0B7300">
                                    <i class="fas fa-smile-wink mr-1"></i>Sexo
                                </strong>
                                <p class="text-muted">23123</p>
                                <button class="btn btn-block bg-gradient-danger">Editar</button>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">Click en el boton si decea editar</p>
                            </div>
                        </div>

                     </div> 
                  <div class="col-md-9">
                     <div class="card card-success">
                              <div class="card-header">
                                  <h3 class="card-title">Editar Datos personales</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal"action="" method="POST" class="formularior" id="formar" name="formar">
                                        <div class="form-group row">
                                            <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                            <div class="col-sm-10">
                                            <input type="number" name="telefono" id="telefono" class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                            <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="residencia" id="residencia" class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                            <div class="col-sm-10">
                                            <input type="email" name="email" id="email" class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                            <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="sexo" id="sexo" class="form-control">
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                            <label for="info" class="col-sm-2 col-form-label">Informacion Adicional</label>
                                            <div class="col-sm-10">
                                            <textarea class="form-control" name="info" id="info" cols="30" rows="10"></textarea>
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                           
                                            <div class="offset-sm-2 col-sm-10 float-right">
                                            <button name="actualizar" id="actualizar" class="btn btn-block btn-outline-success">Guardar</button>
                                            </div>
                                           
                                        </div>
                                    </form>
                                    </div>
                                    <div class=" card-footer">
                                    <p class="text-muted">Cuidado con ingresar datos erroneos</p>
                                    </div>

    </div>
</div>
                </div> 

             </div> 

        </div>   

        </section>
       
      



        </div>
        </div>
    
    <!--Termina la parte superior de la pagina-->
    <!--Empieza el cuerpo-->

    <main class="main-main">
        <div class="container-main">
            
            <section class="productos">


            


            </section>

        </div>
    </main>
    
<script src="../Javascript/Usuario.js"></script>
    <!--Termina el pie de pagina-->
</body>


</html>