<?php

include "../InicioSesión/Conexion.php";
error_reporting(0);
session_start();

$id=$_POST["id"];
$nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $fecha=$_POST["fecha"];
    $user=$_POST["usuario"];
    $pass=$_POST["password"];
    $tipo=3;

if(isset($_POST["registrar"])){

  $sqlgrabar = "INSERT INTO usuario(id_usuario, nombre_us, apellidos_us, edad, dni_us,contraseña_us, us_tipo) values ('$id','$nombre','$apellido','$fecha','$user','$pass','$tipo')";
if(mysqli_query($coneccion, $sqlgrabar )){

  echo "<script>alert('registrado bien ')</script>";

}
    else{
                echo "Error: ".$sql."<br>".mysql_error($coneccion);
            }
            
        }
    


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport"
    content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="../Css/StyleLogin.css">
 
  
  

</head>

<body>

  <div class="contenedor">
    <h2>Registrarse</h2>
    <form action="" method="POST" class="formulario" id="forma" name="forma">
    <div class="elemento">
        <label for="usuario">ID</label>
        <input class="fas fa-user icon" type="text " id="id" name="id" required />
      </div>
      <div class="elemento">
        <label for="usuario">Nombres</label>
        <input class="fas fa-user icon" type="text " id="nombre" name="nombre" required />
      </div>
      <div class="elemento">
        <label for="usuario">Apellidos</label>
        <input class="fas fa-user icon" type="text " id="apellido" name="apellido" required />
      </div>
      <div class="elemento">
        <label for="email">Nacimiento</label>
        <input class="fas fa-envelope icon" type="date" name="fecha" id="fecha" required />
      </div>
      <div class="elemento">
        <label for="email">Usuario</label>
        <input class="fas fa-envelope icon" type="text" name="usuario" id="usuario" required />
      </div>
      <div class="elemento">
        <label for="password">Contraseña</label>
        <input class="fas fa-key icon" type="password" name="password" id="password" required />
      </div>
     
      <div class="elemento">
        <input type="submit" value="Registrarse" name="registrar" />
        <center>
          <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
          <p>¿Ya tienes una cuenta?<a  href="../Paginas/LoginInicio.php">Iniciar Sesion</a></p>
          <p><a class="link" href="../Index.html">HOME</a></p>


        </center>

      </div>
    </form>
  </div>

  -->
</body>

</html>