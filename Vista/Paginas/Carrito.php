<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../Enlaces/link-Carrito.php'; ?>
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

    <!--Empieza el cuerpo-->

    <div class="row mt-5">
        <h3 class="text-center">
            Carrito de Compras
        </h3>
        <div class="col-xs-12 mt-4 " style="    display: flex;flex-wrap: wrap;align-items: center; justify-content: center;">

            <?php
            require_once '../../Modelo/Conexion/configServer.php';
            require_once '../../Modelo/Conexion/consulSQL.php';
            if (!empty($_SESSION['carro'])) {
                $suma = 0;
                $sumaA = 0;
            ?>

                <table class="table table-bordered table-hover text-center" style="max-width: 80%;">
                    <thead>
                        <tr class="bg-primary text-white opacity-75 ">
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>';
                <?php
                foreach ($_SESSION['carro'] as $codeProd) {
                    $consulta = ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='" . $codeProd['producto'] . "'");
                    while ($prod = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
                        $pref = number_format(($prod['Precio'] - ($prod['Precio'] * ($prod['Descuento'] / 100))), 2, '.', '');
                        echo "<tbody>
                                            <tr>
                                                <td>" . $prod['NombreProd'] . "</td>
                                                <td> " . $pref . "</td>
                                                <td> " . $codeProd['cantidad'] . "</td>
                                                <td> " . $pref * $codeProd['cantidad'] . "</td>
                                                <td>
                                                    <form action='../../Controlador/InicioSesión/quitarproducto.php' method='POST' class='FormCatElec' data-form=''>
                                                        <input type='hidden' value='" . $codeProd['producto'] . "' name='codigo'>
                                                        <button class='btn btn-danger btn-raised btn-xs'>Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>";
                        $suma += $pref * $codeProd['cantidad'];
                        $sumaA += $codeProd['cantidad'];
                    }
                    mysqli_free_result($consulta);
                }
                echo '<tr class="table-dark">
                
                <td colspan="2">Total</td>
                <td><strong>' . $sumaA . '</strong></td>
                <td><strong>$' . number_format($suma, 2) . '</strong></td>
                </tr>
                
                </table>
                
                <div class="ResForm">
                </div>';
                echo '
                            <p class="text-center ">

                            <button class="btn btn-primary ">
                            <a href="Productos.php"  class="text-decoration-none text-white">Seguir comprando</a>
                            </button>
                            
                            <button class="btn btn-primary  ">    
                            <a href="../../Controlador/InicioSesión/vaciarcarrito.php"  class="text-decoration-none text-white">Vaciar el carrito</a>
                            </button>
                            <button class="btn btn-primary  "> 
                            <a href="Pedidos.php" class="text-decoration-none text-white" >Confirmar el pedido</a>
                            </button>
                            </p>
                            ';
            } else {
                echo '<p class="text-center text-danger lead">El carrito de compras esta vacío</p><br>
                            <div class="container">
                            <a href="Productos.php" class="btn btn-primary btn-lg btn-raised">Ir a Productos</a>
                            </div>';
            }
                ?>
        </div>
        <?php include '../Vista/Enlaces/footer.php'; ?>

        <!--Termina el pie de pagina-->

</body>
<script src="../Vista/Javascript/Usuario.js"></script>

</html>