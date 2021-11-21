<?php
   session_start(); 
   error_reporting(E_PARSE);
	include '../InicioSesión/configServer.php';
	include '../InicioSesión/consulSQL.php';

	$code=consultasSQL::clean_string( $_SESSION['UserNIT']);

	$SelectUser=ejecutarSQL::consultar("SELECT * FROM cliente WHERE NIT='".$code."'");
	if(mysqli_num_rows($SelectUser)==1){
		$DataUser=mysqli_fetch_array($SelectUser, MYSQLI_ASSOC);
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../Enlaces/link-Cuenta.php'; ?>
</head>

<body>
    <header class="main-header">
        <div class="container">

            <div class="main-header-container">
                <h1 id="titulo" class="main-header-title">
                    Tu Drogueria
                </h1>
                <img id="icono" src="https://image.flaticon.com/icons/png/512/185/185932.png" alt="Drogueria el reloj">


            </div>

        </div>
        <?php include '../Enlaces/navbar.php'; ?>
    </header>

    <!--TERMINA la barra de navegacion
  
    -->
    <!--Empieza la parte superior-->
    <main class="main-main">
        <div class="container-main">

            <br>

            <div>
                <p class=" text-center" class="h3" id="pro">Datos Personales</p>
            </div>
            <section>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-success card-outline">
                                    <div class="card-body box-profile">
                                        <div class=" text-center">
                                            <img src="../Img/avatar.png" class="profile-user-img img-fluid img-circle">



                                        </div>
                                        <input id="id_usuario" type="hidden" value="">

                                        <h3 id="nombre_us" class="profile-username text-center text-succes">
                                            <?php
                                      echo $DataUser['NombreCompleto'];
                                        ?>
                                        </h3>

                                        <p id="apellidos_us" class="text-muted text-center">
                                        <?php
                                      echo $DataUser['Apellido'];
                                        ?>
                                        </p>
                                        <ul class="list-group list-group-unbordered mb-3">

                                            <li class="list-group-item">
                                                <b id="id_usuario" style="color:#0B7300">
                                                <?php
                                      echo $DataUser['NIT'];
                                        ?>
                                                </b><a class="float-right"></a>

                                            </li>
                                          
                                          


                                        </ul>


                                    </div>


                                </div>
                                <div class="card card-success" >
                                    <div class="card-header" >
                                        <h3 class="card-title">Sobre mi</h3>
                                    </div>
                                    <div class="card-body">
                                        <strong style="color:#0B7300">
                                            <i class="fas fa-phone mr-1"></i>Telefono
                                        </strong>
                                        <p class="text-muted">
                                        <?php
                                      echo $DataUser['Telefono'];
                                        ?>
                                       
                                        </p>
                                        <strong style="color:#0B7300">
                                            <i class="fas fa-map-marjer-alt mr-1"></i>Residencia
                                        </strong>
                                        <p class="text-muted">
                                        <?php
                                      echo $DataUser['Direccion'];
                                        ?>
                                        </p>
                                        <strong style="color:#0B7300">
                                            <i class="fas fa-at mr-1"></i>Correo
                                        </strong>
                                        <p class="text-muted">
                                        <?php
                                      echo $DataUser['Email'];
                                        ?>
                                        </p>
                                        
                                      
                                    </div>
                                    <div class="card-footer">
                                        <p class="text-muted">Aqui puede ver su información personal</p>
                                    </div>
                                </div>
                              
                            </div>
                            <br>
                            
                            <div class="col-md-9">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Editar Datos personales</h3>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" action="../InicioSesión/Actualiza.php" method="POST" class="formularior"
                                            id="formar" name="formar">
                                            <div class="form-group row">
                                                <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="telefono" id="telefono"
                                                        class="form-control">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label for="residencia"
                                                    class="col-sm-2 col-form-label">Nombre</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nombre" id="nombre"
                                                        class="form-control">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label for="sexo" class="col-sm-2 col-form-label">Apellido</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="apellido" id="apellido" class="form-control">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" id="email" class="form-control">
                                                </div>

                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="info" class="col-sm-2 col-form-label">Dirección</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="direccion" id="direccion" cols="30"
                                                        rows="10"></textarea>
                                                </div>

                                            </div>
                                            <div class="form-group row">

                                                <div class="offset-sm-2 col-sm-10 float-right">
                                                    <button name="actualizar" id="actualizar"
                                                        class="btn btn-block btn-outline-success">Guardar</button>
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
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    <?php
}else{
		echo "Ocurrio un error, por favor recargue la pagina e intente nuevamente";
	}
    ?>
    <!--Termina la parte superior de la pagina-->
    <!--Empieza el cuerpo-->

    <?php include '../Enlaces/footer.php'; ?>
    <script src="../Javascript/Usuario.js"></script>
    <!--Termina el pie de pagina-->
</body>


</html>