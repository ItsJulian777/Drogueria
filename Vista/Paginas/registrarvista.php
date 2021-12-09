
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
    <form action="../../Controlador/InicioSesión/Registro.php" method="POST" class="formulario" id="forma" name="forma">
    <div class="elemento">
                            <div class="row">
                              <div class="col-xs-12">
                                <legend><i class="fa fa-user"></i> &nbsp; Datos personales</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su número de DNI</label>
                                  <input class="" type="text" required name="clien-nit" pattern="[0-9]{1,15}" title="Ingrese su número de DNI. Solamente números" maxlength="15" >
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus nombres</label>
                                  <input class="" type="text" required name="clien-fullname" title="Ingrese sus nombres (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus apellidos</label>
                                  <input class="" type="text" required name="clien-lastname" title="Ingrese sus apellido (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-mobile"></i>&nbsp; Ingrese su número telefónico</label>
                                    <input class="" type="tel" required name="clien-phone" maxlength="15" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 15">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Ingrese su Email</label>
                                    <input class="" type="email" required name="clien-email" title="Ingrese la dirección de su Email" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-home"></i>&nbsp; Ingrese su dirección</label>
                                  <input class="" type="text" required name="clien-dir" title="Ingrese la direción en la reside actualmente" maxlength="100">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <legend><i class="fa fa-lock"></i> &nbsp; Datos de la cuenta</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Ingrese su nombre de usuario</label>
                                    <input class="" type="text" required name="clien-name" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras y numeros sin espacios)" pattern="[a-zA-Z0-9]{1,9}" maxlength="9">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Introduzca una contraseña</label>
                                  <input class="" type="password" required name="clien-pass" title="Defina una contraseña para iniciar sesión">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Repita la contraseña</label>
                                    <input class="" type="password" required name="clien-pass2" title="Repita la contraseña">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-primary btn-block btn-raised">Registrarse</button></p>
                          <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
          <p>¿Ya tienes una cuenta?<a  href="LoginInicio.php">Iniciar Sesion</a></p>
          <p><a class="btn btn-primary"  class="link" href="../../Index.php">HOME</a></p>
    </form>
  </div>

  
  
</body>

</html>