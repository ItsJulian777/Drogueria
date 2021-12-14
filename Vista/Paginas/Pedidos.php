<?php include '../../Modelo/Conexion/configServer.php'; ?>
<?php include '../../Modelo/Conexion/consulSQL.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../Enlaces/link-Productos.php'; ?>
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
  <!-- Pills navs -->
  <br>
  <br>






  <!-- Pills content -->
  <!--Termina la parte superior de la pagina-->

  <div class="container mt-4 " >


    <div class="row">


      <form action="../../Controlador/InicioSesión/confirmcompra.php" method="POST" role="form" data-form="save">
        <div class=" text-center">

          <h3 class="modal-title text-center" id="myModalLabel">Pago por transaccion bancaria</h3>
        </div>
        <div class="modal-body">

          <?php
          $consult1 = ejecutarSQL::consultar("SELECT * FROM cuentabanco");
          if (mysqli_num_rows($consult1) >= 1) {
            $datBank = mysqli_fetch_array($consult1, MYSQLI_ASSOC);
          ?>
            
            <p class="text-danger text-center">Por favor haga el deposito en la siguiente cuenta de banco e ingrese el numero de deposito que se le proporciono.</p><br>
            <hr>
            <div class="informacion_Banco container "  >
              <h5 class="modal-title text-center mb-2">Datos de la Cuenta</h5>
              <form class="container">
                <div class="form-group row justify-content-center mb-3 ">
                  <label class="col-sm-5 col-form-label"><strong>Nombre del banco:</strong></label>
                  <div class="col-auto">
                    <label class="col-sm-5 col-form-label"><?php echo $datBank['NombreBanco']; ?></label>
                  </div>
                </div>

                <div class="form-group row  justify-content-center mb-3">
                  <label class="col-sm-5 col-form-label"><strong>Numero de cuenta:</strong></label>
                  <div class="col-auto">
                    <label class="col-sm-5 col-form-label"><?php echo $datBank['NumeroCuenta']; ?></label>
                  </div>
                </div>

                <div class="form-group row justify-content-center mb-3">
                  <label class="col-sm-5 col-form-label"><strong>Nombre del beneficiario:</strong></label>
                  <div class="col-auto">
                    <label class="col-sm-5 col-form-label"><?php echo $datBank['NombreBeneficiario']; ?></label>
                  </div>
                </div>

                <div class="form-group row justify-content-center  mb-3">
                  <label class="col-sm-5 col-form-label"> <strong>Tipo de cuenta:</strong></label>
                  <div class="col-auto">
                    <label class="col-sm-5 col-form-label"><?php echo $datBank['TipoCuenta']; ?></label>
                  </div>


                </div>
              </form>
            </div>
            
            <hr>
            <div class="informacion_cliente">
              <?php if ($_SESSION['UserType'] == "Admin") : ?>
                <form>
                <h5 class="text-center m-2">Datos de la Consignacion</h5>
                  <div class="form-group row justify-content-center mb-3">
                    <label class="col-sm-5 col-form-label">Numero de deposito</label>
                    <div class="col-sm-5">
                      <input class="form-control" type="text" name="NumDepo" maxlength="50" required="">
                    </div>
                  </div>


                  <div class="form-group row justify-content-center mb-3">
                    <label class="col-sm-5 col-form-label">Tipo De Envio</label>
                    <div class="col-sm-5">
                      <select class="form-control" name="tipo-envio" data-toggle="tooltip" data-placement="top" title="Elige El Tipo De Envio">
                        <option value="" disabled="" selected="">Selecciona una opción</option>
                        <option value="Recoger Por Tienda">Recoger Por Tienda</option>
                        <option value="Envio Por Currier">Envio Gratis</option>
                      </select>
                    </div>

                  </div>

                  <div class="form-group row justify-content-center mb-3">
                    <label class="col-sm-5 col-form-label">DNI del cliente</label>
                    <div class="col-sm-5">
                      <input class="form-control" type="text" name="Cedclien" maxlength="15" required="">
                    </div>
                  </div>




                  <div class="form-group text-center">
                    <input class="text-center"  type="file" name="comprobante" >
                    <div class="input-group row justify-content-center">

                      <span class="input-group-btn input-group-sm">
                        <button type="button" class="btn btn-fab btn-fab-mini">
                          <i class="fa fa-file-image-o" aria-hidden="true"></i>
                        </button>
                      </span>
                    </div>
                    <p class="help-block text-center text-danger"><small>Tipos de archivos admitidos, imagenes .jpg y .png. Maximo 5 MB</small></p>
                  </div>







                <?php else : ?>


                  <div class="form-group row mb-3">
                    <label class="col-sm-5 col-form-label">Numero de deposito</label>
                    <div class="col-sm-5">
                      <input class="form-control" type="text" name="NumDepo" maxlength="50" required="">
                    </div>
                  </div>


                  <div class="form-group row mb-3">
                    <label class="col-sm-5 col-form-label">Tipo De Envio</label>
                    <div class="col-sm-5">
                      <select class="form-control" name="tipo-envio" data-toggle="tooltip" data-placement="top" title="Elige El Tipo De Envio">
                        <option value="" disabled="" selected="">Selecciona una opción</option>
                        <option value="Recoger Por Tienda">Recoger Por Tienda</option>
                        <option value="Envio Por Currier">Envio Gratis</option>
                      </select>
                    </div>

                  </div>

                  <div class="form-group row mb-3">
                    <label class="col-sm-5 col-form-label">DNI del cliente</label>
                    <div class="col-sm-5">
                      <input class="form-control" type="text" name="Cedclien" maxlength="15" required="">
                    </div>
                  </div>


                  <input type="hidden" name="Cedclien" value="<?php echo $_SESSION['UserNIT']; ?>">
                  <div class="form-group row">
                    <input type="file" name="comprobante">
                    <div class="input-group">

                      <span class="input-group-btn input-group-sm">
                        <button type="button" class="btn btn-fab btn-fab-mini">
                          <i class="fa fa-file-image-o" aria-hidden="true"></i>
                        </button>
                      </span>
                    </div>
                    <p class="help-block"><small>Tipos de archivos admitidos, imagenes .jpg y .png. Maximo 5 MB</small></p>
                  </div>
                </form>
            </div>
        <?php
              endif;
            } else {
              echo "Ocurrio un error: Parese ser que no se ha configurado las cuentas de banco";
            }
            mysqli_free_result($consult1);
        ?>
        </div>
        <div class="modal-footer container">
          <button class=" btn btn-primary" type="button">Cancelar</button>
          <button class="btn btn-primary" type="submit">Confirmar</button>




        </div>
      </form>

    </div>
  </div>
  <?php include '../Vista/Enlaces/footer.php'; ?>

  <!--Termina el pie de pagina-->
</body>

</html>

</html>