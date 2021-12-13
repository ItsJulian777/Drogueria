
    
  <?php  include '../../Modelo/Conexion/configServer.php';?>
   <?php include '../../Modelo/Conexion/consulSQL.php';?>

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
 
        <div class="container">
            <div class="page-header">
              <h1>PEDIDOS <small class="tittles-pages-logo">STORE</small></h1>
            </div>
            <br><br><br>
            <div class="row">
            
  
        <form action="../../Controlador/InicioSesión/confirmcompra.php" method="POST" role="form" data-form="save">
          <div class="modal-header">
            
            <h4 class="modal-title" id="myModalLabel">Pago por transaccion bancaria</h4>
          </div>
          <div class="modal-body">
            <?php
              $consult1=ejecutarSQL::consultar("SELECT * FROM cuentabanco");
              if(mysqli_num_rows($consult1)>=1){
                $datBank=mysqli_fetch_array($consult1, MYSQLI_ASSOC);
            ?>
            <p>Por favor haga el deposito en la siguiente cuenta de banco e ingrese el numero de deposito que se le proporciono.</p><br>
            <p>
              <strong>Nombre del banco:</strong> <?php echo $datBank['NombreBanco']; ?><br>
              <strong>Numero de cuenta:</strong> <?php echo $datBank['NumeroCuenta']; ?><br>
              <strong>Nombre del beneficiario:</strong> <?php echo $datBank['NombreBeneficiario']; ?><br>
              <strong>Tipo de cuenta:</strong> <?php echo $datBank['TipoCuenta']; ?><br><br>
            </p>
                <?php if($_SESSION['UserType']=="Admin"): ?>
                <div class="form-group">
                    <label>Numero de deposito</label>
                    <input class="form-control" type="text" name="NumDepo" placeholder="Numero de deposito" maxlength="50" required="">
                </div>
                <div class="form-group">
                  <span>Tipo De Envio</span>
                  <select class="form-control" name="tipo-envio" data-toggle="tooltip" data-placement="top" title="Elige El Tipo De Envio">
                      <option value="" disabled="" selected="">Selecciona una opción</option>
                      <option value="Recoger Por Tienda">Recoger Por Tienda</option>
                      <option value="Envio Por Currier">Envio Gratis</option> 
                  </select>
               </div>
                <div class="form-group">
                    <label>DNI del cliente</label>
                    <input class="form-control" type="text" name="Cedclien" placeholder="DNI del cliente" maxlength="15" required="">
                </div>
                <div class="form-group">
                      <input type="file" name="comprobante">
                      <div class="input-group">
                        <input type="text" readonly="" class="form-control" placeholder="Seleccione la imagen del comprobante...">
                          <span class="input-group-btn input-group-sm">
                            <button type="button" class="btn btn-fab btn-fab-mini">
                              <i class="fa fa-file-image-o" aria-hidden="true"></i>
                            </button>
                          </span>
                      </div>
                        <p class="help-block"><small>Tipos de archivos admitidos, imagenes .jpg y .png. Maximo 5 MB</small></p>
                    </div>
                <?php else: ?>
                    <div class="form-group">
                        <label>Numero de deposito</label>
                        <input class="form-control" type="text" name="NumDepo" placeholder="Numero de deposito" maxlength="50" required="">
                    </div>
                    <div class="form-group">
                      <span>Tipo De Envio</span>
                      <select class="form-control" name="tipo-envio" data-toggle="tooltip" data-placement="top" title="Elige El Tipo De Envio">
                          <option value="" disabled="" selected="">Selecciona una opción</option>
                          <option value="Recoger Por Tienda">Recoger Por Tienda</option>
                          <option value="Envio Por Currier">Envio Gratis</option> 
                      </select>
                   </div>
                    <input type="hidden" name="Cedclien" value="<?php echo $_SESSION['UserNIT']; ?>">
                    <div class="form-group">
                      <input type="file" name="comprobante">
                      <div class="input-group">
                        <input type="text" readonly="" class="form-control" placeholder="Seleccione la imagen del comprobante...">
                          <span class="input-group-btn input-group-sm">
                            <button type="button" class="btn btn-fab btn-fab-mini">
                              <i class="fa fa-file-image-o" aria-hidden="true"></i>
                            </button>
                          </span>
                      </div>
                        <p class="help-block"><small>Tipos de archivos admitidos, imagenes .jpg y .png. Maximo 5 MB</small></p>
                    </div>
                <?php 
                endif;
              }else{
                echo "Ocurrio un error: Parese ser que no se ha configurado las cuentas de banco";
              }
              mysqli_free_result($consult1);
            ?>
          </div>
          <div class="modal-footer">
            <button type="button" >Cancelar</button>
            <button type="submit" >Confirmar</button>
          </div>
        </form>
      </div>
    </div>
  <?php include '../Vista/Enlaces/footer.php'; ?>

  <!--Termina el pie de pagina-->
</body>

</html></html>