<?php
$alert ="";
session_start();
if(!empty($_SESSION['active'])){
  header('location:../Paginas-Admin/Index_Admin.html');

}else{

if(!empty($_POST)){
if(empty($_POST['user'])||empty($_POST['pass']) ){

  $alert='ingrese usuario y clave';

}else{
require_once "../InicioSesión/Conexion.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = mysqli_query($coneccion,"SELECT * FROM usuario inner join tipo_us on us_tipo=id_tipo_us where id_usuario='$user' AND contraseña_us='$pass' ");
$result= mysqli_num_rows($query);

if($result >0){

  $data= mysqli_fetch_array($query);
  
  $_SESSION['active']= true;
  $_SESSION['us_tipo']= $data['us_tipo'];
  switch ($_SESSION['us_tipo']){
case 1:
  header('location:../Paginas-Admin/Index_Admin.html');
  break;
  case 2:
    header('location:../Paginas-Admin/Usuarios_Admin.html');
    break;
    case 3:
      header('location:../Index.php');
      break;

  }
  
  

}else{
$alert = 'el usuario o clave es incorrecta';
session_destroy();

}
}
}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="../Css/StyleLogin.css">
</head>

<body>

  
  <div class="contenedor">
    <h2>Login</h2>
    <form action="" method="post">
      <div class="elemento">
        <label for="usuario">usuario</label>
        <input type="text "  name="user" class="input" />
      </div>
      <div class="elemento">
        <label for="password">Password</label>
        <input type="password" name="pass" class="input" />
      </div>
      <div class="elemento">
        <div class="alert"><?php echo isset($alert) ? $alert :'';?></div>
        <input type="submit" value="Enviar" class="btn" />
        <p>¿No tienes una cuenta?<a  href="../Paginas/registrarvista.php">Registrate Sesion</a></p>
          <p><a class="link" href="../Index.php">HOME</a></p>
      </div>
    </form>
  </div>
</body>

</html>