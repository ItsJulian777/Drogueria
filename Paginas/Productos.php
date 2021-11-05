<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drogueria</title>


  <!---Link CDN FONT AWESOME-->
  <link rel="stylesheet" href="../Css/style.css">
  <link href="../Css/estilo-productos.css" type="text/css" rel="stylesheet" media="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2? family=Langostaydisplay=swap" rel="hoja de estilo">
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="../Boostrap/estilos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header class="main-header">
    <div class="container">

      <div class="main-header-container">
        <h1 id="titulo" class="main-header-title">
          Tu Drogueria
        </h1>
        <img id="icono" src="https://image.flaticon.com/icons/png/512/185/185932.png" alt="Drogueria el reloj">
        <a href="#" id="face" class="red"> <img id="icono"
            src="https://th.bing.com/th/id/OIP.lPLk_BPmeSAu1COdk8i8iwHaHa?pid=ImgDet&rs=1"
            alt="Drogueria el reloj"><span><i></i></span></a>
        <a href="#" id="insta" class="red"> <img id="icono"
            src="https://i0.pngocean.com/files/750/461/292/logo-computer-icons-instagram.jpg" alt="Drogueria el reloj">
          <span><i></i></span></a>
        <a href="#" id="whasa" class="red"> <img id="icono"
            src="https://th.bing.com/th/id/OIP.8fFvZfU73gxvOshB-XsJRQD6D6?pid=ImgDet&rs=1" alt="Drogueria el reloj">
          <span><i></i></span></a>

      </div>

    </div>
  </header>
  <!--empieza la barra de navegacion-->
  <nav id="letras" class="navbar navbar-expand-lg navbar-light bg-light">
    <div id="navegacion" class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a id="letras" class="nav-link active" aria-current="page" href="../Index.html">INICIO</a>
          </li>
          <li class="nav-item">
            <a id="letras" class="nav-link" href="#">OFERTAS</a>
          </li>
          <li class="nav-item dropdown">
            <a id="letras" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              PRODUCTOS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

        </ul>
        <form class="d-flex">
          <div class="main-header-container1">

            <input id="buscador" type="search" placeholder="Buscar Productos">
            <a href="registrarvista.php"><i id="item" class="fas fa-user"></i></a>
            <a href="Carrito.php" alt="Carrito"><i id="item" class="fas fa-shopping-cart"></i> </a>
          </div>

        </form>
      </div>
    </div>
  </nav>

  <!--TERMINA la barra de navegacion
  
    -->
  <!--Empieza la parte superior-->
  <!-- Pills navs -->
  <ul id="superior" class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
    <li id="navega" class="nav-item" role="presentation">
      <a class="nav-link active" id="ex3-tab-1" data-mdb-toggle="pill" href="#ex3-pills-1" role="tab"
        aria-controls="ex3-pills-1" aria-selected="true">Medicamentos</a>
    </li>
    <li id="navega" class="nav-item" role="presentation">
      <a class="nav-link active" id="ex3-tab-2" data-mdb-toggle="pill" href="#ex3-pills-2" role="tab"
        aria-controls="ex3-pills-2" aria-selected="false">Cuidado respiratotio</a>
    </li>
    <li id="navega" class="nav-item" role="presentation">
      <a class="nav-link active" id="ex3-tab-3" data-mdb-toggle="pill" href="#ex3-pills-3" role="tab"
        aria-controls="ex3-pills-3" aria-selected="false">Cuidado Personal</a>
    </li>
    <li id="navega" class="nav-item" role="presentation">
      <a class="nav-link active" id="ex3-tab-3" data-mdb-toggle="pill" href="#ex3-pills-3" role="tab"
        aria-controls="ex3-pills-3" aria-selected="false">Cuidado en casa</a>
    </li>
  </ul>
  <!-- Pills navs -->


  <!-- Pills content -->
  <!--Termina la parte superior de la pagina-->
  <!--Empieza el cuerpo-->

  <main class="main-main">
    <div class="container-main">
      <div>
        <h2 class="h3" id="pro">Todos Los Productos</h2>

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
  <footer class="bd-footer py-5 mt-5 bg-light">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-3 mb-3">
          <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/"
            aria-label="DROGUERIA" _mstaria-label="138918">

            <span class="fs-5" _msthash="1416402" _msttexthash="138918">Drogueria</span>
          </a>
          <ul class="list-unstyled small text-muted">
            <li class="mb-2" _msthash="1363115" _msttexthash="7235683">Diseñado y construido con todo el amor del mundo
              por el equipo de tu farmacia y Drogueria mas confiable</li>

          </ul>

        </div>
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5 _msthash="1094392" _msttexthash="92313">Enlaces</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/" _msthash="1363388" _msttexthash="59059">Inicio</a></li>
            <li class="mb-2"><a href="/" _msthash="1363518" _msttexthash="44265">Ofertas</a></li>
            <li class="mb-2"><a href="/" _msthash="1363648" _msttexthash="115843">Ejemplos</a></li>

          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5 _msthash="1094600" _msttexthash="75413">Sobre Nosotros</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/" _msthash="1363661" _msttexthash="95693">Hitoria</a></li>
            <li class="mb-2"><a href="/" _msthash="1363791" _msttexthash="346359">Donde encontrarnos</a></li>
            <li class="mb-2"><a href="/" _msthash="1363921" _msttexthash="157144">vision</a></li>
            <li class="mb-2"><a href="/" _msthash="1364051" _msttexthash="95407">Mision</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5 _msthash="1094808" _msttexthash="139971">Productos</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/" _msthash="1363934" _msttexthash="149942">Cuidado Respiratorio</a></li>
            <li class="mb-2"><a href="/" _msthash="1363934" _msttexthash="149942">Cuidado Personal</a></li>
            <li class="mb-2"><a href="/" _msthash="1363934" _msttexthash="149942">Cuidado en Casa</a></li>
            <li class="mb-2"><a href="/" _msthash="1363934" _msttexthash="149942">Medicamentos</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5 _msthash="1095016" _msttexthash="131768">Comunidad</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/" _msthash="1364207" _msttexthash="160394">Usuarios</a></li>

          </ul>
        </div>
        <div class="pie">
          <div class="small text-center text-muted">Copyright &copy; 2021 - Tu Drogueria</div>
        </div>
        </form>
      </div>
    </div>
    </div>

  </footer>

  <!--Termina el pie de pagina-->
</body>

</html>