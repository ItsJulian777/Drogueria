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
  
    <main class="main-main">
        <div class="container-main">
            <div>
                <h2 class="h3"id="pro">Carrito De Compras</h2>

            </div>
            <section class="productos">


                <div class="producto">
                    <div class="card_product">
                        <img src="../Img/acetamino.png" alt="">
                    </div>

                    <div class="pro_description">
                        <h4 class="title_product">Acetaminofen
                            <br> Caja con 100 Tabletas
                        </h4>
                    </div>
                    <div class="price">
                        <span class="product_price">$18.600</span>
                    </div>
                    <div>

                        <a href="#" class="btn btn-primary"> <span><i class="fas fa-tags"></i></span></a>
                    </div>
                </div>


                <div class="producto">
                    <div class="card_product">
                        <img src="../Img/advil.png" alt="">
                    </div>
                    <div class="pro_description">
                        <h4 class="title_product">Advil Max
                            <br> Caja con 72 Capsulas Liquidas
                        </h4>



                    </div>
                    <div class="price">
                        <span class="product_price">$96.600</span>
                    </div>
                    <div class="logo_tags">
                        <a href="#" class="btn btn-primary"> <span><i class="fas fa-tags"></i></span></a>
                    </div>
                </div>


                <div class="producto">
                    <div class="card_product">
                        <img src="../Img/dolexF.png" alt="">
                    </div>
                    <div class="pro_description">
                        <h4 class="title_product">Dolex Forte
                            <br> Caja con 14 Capsulas Cubiertas
                        </h4>
                    </div>
                    <div class="price">
                        <span class="product_price">$33.650</span>
                    </div>
                    <div class="logo_tags">
                        <a href="#" class="btn btn-primary"> <span><i class="fas fa-tags"></i></span></a>
                    </div>
                </div>
                <div class="producto">
                    <div class="card_product">
                        <img src="../Img/nan.png" alt="">
                    </div>
                    <div class="pro_description">
                        <h4 class="title_product">Leche Nan Pro </h4>
                    </div>
                    <div class="price">
                        <span class="product_price">$95.500</span>
                    </div>
                    <div class="logo_tags">
                        <a href="#" class="btn btn-primary"> <span><i class="fas fa-tags"></i></span></a>
                    </div>
                </div>
                <div class="producto">
                    <div class="card_product">
                        <img src="../Img/pañales.png" alt="">
                    </div>
                    <div class="pro_description">
                        <h4 class="title_product">Pañales</h4>



                    </div>
                    <div class="price">
                        <span class="product_price">$22.649</span>

                    </div>
                    <div class="logo_tags">
                        <a href="#" class="btn btn-primary"> <span><i class="fas fa-tags"></i></span></a>
                    </div>
                </div>
                <div class="producto">
                    <div class="card_product">
                        <img src="../Img/vitaminaC.png" alt="">
                    </div>
                    <div class="pro_description">
                        <h4 class="title_product">Vitamina C</h4>



                    </div>
                    <div class="price">
                        <span class="product_price">$4.500</span>
                    </div>
                    <div class="logo_tags" id="shop">
                        <a href="#" class="btn btn-primary"> <span><i class="fas fa-tags"></i></span></a>
                    </div>



                </div>


            </section>

        </div>
    </main>
    <?php include '../Enlaces/footer.php'; ?>

  <!--Termina el pie de pagina-->
 
</body>
<script src="../Javascript/Usuario.js"></script>
</html>