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
    


    <main>
        <div class="d-flex container-admin">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width:280px; min-height: 80vh; border-right: 0.2px solid rgb(63, 63, 63);">
                <span class="fs-4" style="text-align: center;">Administrador</span>
                <hr> 
                <ul class="nav nav-pills flex-column mb-auto ">
                    <li class="nav-item">
                        <a href="Usuario_Admin.php" class="nav-link link-dark link_sidebar ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                            Usuarios
                        </a>

                        <hr>

                    </li>
                    <li>
                        <a href="Productos_Admin.php" class="nav-link link-dark link_sidebar ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            Productos
                        </a>
                        <hr>
                    </li>
                    <li>
                        <a href="" class="nav-link link-dark link_sidebar ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            Categorias
                        </a>
                        <hr>
                    </li>
                    <a href="Proveedores_Admin.php" class="nav-link link-dark link_sidebar ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            Proveedores 
                        </a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="Banco_Admin.php" class="nav-link link-dark link_sidebar ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                            Cuenta de Banco
                        </a>

                        <hr>

                    </li>



                    <li>
                        <a href="Ventas_Admin.php" class="nav-link link-dark link_sidebar">


                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
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
                                <h3 class=" text-center">Agregar una categoria</h3>
                                <hr>
                                <form action="../../Controlador/InicioSesión/Categoria.php" method="POST" enctype="multipart/form-data" class="FormCatElec" data-form="save">
                                    <div class="container-fluid">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="form-group label-floating">
                                                    <!--<label class="control-label">Código de la categoria</label>-->
                                                    <input class="form-control text-center" type="text" required maxlength="30" name="categ-code" placeholder="Codigo Requerido">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="form-group label-floating">
                                                    <!-- <label class="control-label">Nombre de la categoria</label>-->
                                                    <input type="text" class="form-control text-center" required maxlength="30" name="categ-name" placeholder="Nombre Requerido">
                                                </div>
                                            </div>


                                            <div class="col-xs-12 col-sm-6 col-md-4">
                                                <div class="form-group label-floating">
                                                    <!--<label class="control-label">Descripcion</label>-->
                                                    <input type="text" class="form-control text-center" required name="categ-descrip" placeholder="Descripcion">
                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <input type="hidden" name="admin-name" value="<?php echo $_SESSION['nombreAdmin'] ?>">
                                        <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Agregar Categoria</button></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="../Vista/Javascript/sidebars.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tblUsuarios').DataTable();
        });
    </script>

    <?php include '../Vista/Enlaces/footer.php'; ?>
</body>

</html>