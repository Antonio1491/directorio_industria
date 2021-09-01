<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Directorio de la Industria | Asociación Nacional de Parques y Recreación</title>
  <link rel="stylesheet" href="css/app.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<section class="seccion-portada">
  <header class="header-portada container">
    <div class="row justify-content-center">
      <div class="col-md-auto">
        <h1>Directorio de la industria</h1>
      <h3>Encuentra los productos para el diseño y construcción de tu espacio</h3>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <input type="search" class="form-control buscador" placeholder="Buscar Productos, marcas y más...">
        <!-- <button class="btn btn-outline-secondary" type="button" id="buscar">Buscar</button> -->
      </div>
    </div>
    <div class="row parque">
      <img src="src/img/nube1.png" alt="" class="parque__nube figure-img">
      <img src="src/img/nube2.png" alt="" class="parque__nube">
      <img src="src/img/nube3.png" alt="" class="parque__nube">
    </div>
    <div class="row categorias-home">
      <?php include('./inc/categorias_principal.php') ?>
    </div>
  </div>
</section>
<section class="categorias-principales container">
  <div class="row col">
    <h2 class="titulo-seccion">Categorías Principales</h2>
  </div>
  <di class="row">
    <div class="col categorias-principales__item"><img src="src/img/juegos_infantiles_foto.png" alt=""></div>
    <div class="col categorias-principales__item"><img src="src/img/gimnasios_foto.png" alt=""></div>
    <div class="col categorias-principales__item"><img src="src/img/parque_acuatico_foto.png" alt=""></div>
    <div class="col categorias-principales__item"><img src="src/img/mobiliario_foto.png" alt=""></div>
  </di>
</section>
<section class="busquedas-destacadas">
  <div class="container">
    <div class="row col">
      <h2 class="titulo-seccion">Busquedas Destacadas</h2>
    </div>
    <di class="row">
      <div class="col busquedas-destacadas__item"><img src="src/img/juegos_infantiles_foto.png" alt=""></div>
      <div class="col busquedas-destacadas__item"><img src="src/img/gimnasios_foto.png" alt=""></div>
      <div class="col busquedas-destacadas__item"><img src="src/img/parque_acuatico_foto.png" alt=""></div>
      <div class="col busquedas-destacadas__item"><img src="src/img/mobiliario_foto.png" alt=""></div>
    </di>
  </div>
</section>
<section class="promociones container">
<div class="row col">
    <h2 class="titulo-seccion">Promociones</h2>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-6 promociones__item">
      <img src="src/img/anuncio1.png" alt="">
    </div>
    <div class="col-md-6 col-lg-6 promociones__item">
      <img src="src/img/anuncio2.png" alt="">
    </div>
  </div>
</section>
<section class="informacion">
<div class="informacion__contenido container">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-7">
      <p>Invitamos a todas las empresas que estén relacionadas con la industria del equipamiento urbano a <br><span>formar parte del directorio de la industria</span><br><small>y juntos lograremos fortalecer la cadena de valor para lograr más y mejores parques.</small> </p>
      <a href="#" class="btn btn__aqua">Registrate Gratis</a>
    </div>
  </div>
</div>
</section>
<?php include("./inc/footer.php") ?>
</body>
</html>