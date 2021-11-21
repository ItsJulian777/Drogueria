
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
    <form action="../InicioSesión/Loguearse.php" method="post">
      <div class="elemento">
        <label for="usuario">usuario</label>
        <input type="text "  name="nombre-login" class="input" required/>
      </div>
      <div class="elemento">
        <label for="password">Password</label>
        <input type="password" name="clave-login" class="input"  required />
      </div>
      <p>¿Cómo iniciaras sesión?</p>
               
                <div class="radio">
                  <label>
                      <input type="radio" name="optionsRadios" value="option1" checked="">
                      Usuario
                  </label>
               </div>

               <div class="radio">
                  <label>
                      <input type="radio" name="optionsRadios" value="option2">
                       Administrador
                  </label>
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