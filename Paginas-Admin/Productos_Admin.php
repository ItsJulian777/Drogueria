<?php
   session_start(); 
   error_reporting(E_PARSE);
	include '../InicioSesión/configServer.php';
	include '../InicioSesión/consulSQL.php';
?>
<!doctype html>
<html lang="en">

    <head>
    <?php include '../Enlaces/link-AdmiProductos.php'; ?>
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

<br>
<br>



        <main >
            <div class="d-flex container-admin">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width:280px; min-height: 80vh; border-right: 0.2px solid rgb(63, 63, 63);">
                    <a href="Index_Admin.html" class="d-flex mb align-items-center justify-content-center link-dark text-decoration-none">
                        
                        <span class="d-flex align-items-center  link-dark text-decoration-none fs-4">Administrador</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto ">
                        <li class="nav-item">
                            <a href="Usuario_Admin.php" class="nav-link link-dark link_sidebar ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-people-fill"
                                     viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd"
                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                </svg>
                                Usuarios
                            </a>
                            
                                <hr>
                            
                        </li>
                        <li>
                            <a href="" class="nav-link link-dark link_sidebar ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-basket"
                                     viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                Productos
                            </a>
                            <hr>
                        </li>
                        <li>
                            <a href="Categoria_Admin.php" class="nav-link link-dark link_sidebar ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-basket"
                                     viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                Categorias
                            </a>
                            <hr>
                        </li>

                      
                        <li>
                            <a href="Ventas_Admin.php" class="nav-link link-dark link_sidebar">
                                
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                  </svg>
                                Ventas
                            </a>
                            <hr>  
                        </li>
                    </ul>
                    <hr>
                </div>

                <div class="container-Users-admin">

 
                    <ul class="breadcrumb" style="margin-bottom: 5px;">
                        
                    </ul>
                    <div class="main-container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="container-form-admin">
                                    <h3 class="text-primary text-center">Agregar un producto a la tienda</h3>
                                    <form action="../InicioSesión/Producto.php" method="POST" enctype="multipart/form-data" class="FormCatElec" data-form="save">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <legend>Datos básicos</legend>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group label-floating mb-2">
                                                    <!--<label class="control-label">Código de producto</label>-->
                                                    <input  class="form-control" type="text" required maxlength="30" name="prod-codigo" placeholder="Codigo Requerido">
                                                  </div>
                                                </div>
                                               
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group label-floating mb-2">
                                                   <!--  <label class="control-label">Nombre de producto</label>-->
                                                    <input  type="text" class="form-control" required maxlength="30" name="prod-name" placeholder="Nombre Requerido">
                                                  </div>
                                                </div>
                                                

                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group label-floating mb-2">
                                                   <!-- <label class="control-label">Marca</label>-->
                                                    <input  type="text" class="form-control" required name="prod-marca" placeholder="Marca Requerido">
                                                  </div>
                                                </div>
                                               

                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group label-floating mb-2">
                                                    <!--<label class="control-label">Modelo</label>-->
                                                    <input  type="text" class="form-control" required name="prod-model"placeholder="Modelo Requerido">
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group label-floating mb-2">
                                                    <!--<label class="control-label">Precio</label>-->
                                                    <input  type="text" class="form-control" required  name="prod-price"placeholder="Precio Requerido">
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group label-floating mb-2">
                                                    <!--<label class="control-label">Descuento (%)</label>-->
                                                    <input type="text" class="form-control" required maxlength="2" pattern="[0-9]{1,2}" name="prod-desc-price" value="0" placeholder="Descuento% Requerido">
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group label-floating mb-2">
                                                    <!--<label class="control-label">Unidades disponibles</label>-->
                                                    <input type="text" class="form-control" required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock" placeholder="Unidades Requerido">
                                                  </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <legend>Categoría, proveedor y estado</legend>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group">
                                                    <label>Categoría</label>
                                                    <select class="form-control" name="prod-categoria">
                                                        <?php
                                                            $categoriac= ejecutarSQL::consultar("SELECT * FROM categoria");
                                                            while($catec=mysqli_fetch_array($categoriac, MYSQLI_ASSOC)){
                                                                echo '<option value="'.$catec['CodigoCat'].'">'.$catec['Nombre'].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group">
                                                    <label>Proveedor</label>
                                                    <select class="form-control" name="prod-codigoP">
                                                        <?php
                                                            $proveedoresc=  ejecutarSQL::consultar("SELECT * FROM proveedor");
                                                            while($provc=mysqli_fetch_array($proveedoresc, MYSQLI_ASSOC)){
                                                                echo '<option value="'.$provc['NITProveedor'].'">'.$provc['NombreProveedor'].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4">
                                                  <div class="form-group">
                                                    <label>Estado</label>
                                                    <select class="form-control" name="prod-estado">
                                                        <option value="Activo" selected="">Activo</option>
                                                        <option value="Desactivado">Desactivado</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <legend>Imagen/Foto del producto</legend>
                                                    <p class="text-center text-primary">
                                                        Seleccione una imagen/foto en el siguiente campo. Formato de imágenes admitido png y jpg. Tamaño máximo 5MB
                                                    </p>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                      <input type="file" name="img">
                                                      <div class="input-group">
                                                       
                                                          <span class="input-group-btn input-group-sm">
                                                            <button type="button" class="btn btn-fab btn-fab-mini">
                                                              <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                                            </button>
                                                          </span>
                                                      </div>
                                                        <p class="help-block">Formato de imágenes admitido png y jpg. Tamaño máximo 5MB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <input type="hidden"  name="admin-name" value="<?php echo $_SESSION['nombreAdmin'] ?>">
                                    <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Agregar a la tienda</button></p>
                                    </form>
                                </div>
                            </div>     
                        </div>
                    </div>
          </div>

            </div>
        </main>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

        <script src="../Javascript/sidebars.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#tblUsuarios').DataTable();
            });
        </script>

     <?php include '../Enlaces/footer.php'; ?>
    </body>

</html>