
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="../Css/StyleLogin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  
  <div class="contenedor">
    <h2>Login</h2>
    <form action="../../Controlador/InicioSesión/Loguearse.php" method="post">
      <div class="elemento">
        <label for="usuario">Usuario</label>
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
        <input type="submit" value="Enviar" class="btn" class="btn btn-primary "/>
        <p>¿No tienes un Usuario?<a  href="registrarvista.php">Registrar Usuario</a></p>
          <p><a  class="btn btn-primary" class="link" href="../../Index.php">HOME</a></p>
      </div>
    </form>
  </div>
</body>

</html>