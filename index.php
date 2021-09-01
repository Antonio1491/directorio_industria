<?php session_start();
require ("class/clases.php");
$empresa = new Empresa();
$categorias = new Categoria();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <title>Registro de Empresas 1</title>

</head>
<body>
  <div class="container mt-5 d-flex">
    <form  class="col-12 d-flex align-items-center" method="post" action="class/datosForm.php"  enctype="multipart/form-data" onsubmit="return validar()">
      <div class="row">
          <h1 class="text-center">Formulario Empresas</h1>
        <label for="exampleInputEmail1" class="form-label">Datos de la empresa</label>
        <div class="col-6">
          <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre de la empresa *" name="nombre">
        </div>
        <div class="col-6">
          <input type="text" class="form-control" id="direccion" placeholder="Direccion *" name="direccion">
        </div>
        <div class="col-6 mt-2">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email *" name="email">
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="telefono" placeholder="Telefono *" name="telefono ">
          </div>
          <div class="col-12 mt-2">
            <input type="text" class="form-control" id="direccionweb" aria-describedby="emailHelp" placeholder="Direccion web" name="direccionweb">
          </div>
          <div class="col-12 mt-2">
          <textarea class="form-control" id="informacion" placeholder="Informacion de la empresa *" rows="3" name="informacion"></textarea>
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="whatsapp" aria-describedby="WhatsApp" placeholder="WhatsApp" name="whatsapp">
          </div>
          <div class="col-6 mt-2">
            <input type="file" class="form-control" id="file" name="file" onchange="ValidateSingleInput(this);">Logo empresa *
          </div>
          <div class="col-6 mt-2">
            <input type="url" class="form-control" id="videourl" aria-describedby="emailHelp" placeholder="Video url" name="videourl" onchange="validarurl(this)">
          </div>
          <div class="col-6 mt-2">
            <input type="url" class="form-control" id="catalogourl" aria-describedby="emailHelp" placeholder="Catalogo url" name="catalogourl">
          </div>

          <div class="col-6 mt-2">
            <select id="pais" class="form-select" aria-label="Default select example" required name="pais">
              <option selected value="0">Selecciona un pais *</option>
                <?php echo $empresa -> getHtmlPaises(); ?>
            </select>
            </div>

            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="ciudad" aria-describedby="emailHelp" placeholder="Ciudad *" name="ciudad">
            </div>
            <label for="exampleInputEmail1" class="form-label mt-4">Redes sociales de la empresa:</label>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="facebook" aria-describedby="emailHelp" placeholder="Facebook" name="facebook">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="twitter" aria-describedby="emailHelp" placeholder="Twiter" name="twitter">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="instagram" aria-describedby="emailHelp" placeholder="Instagram" name="instagram">
            </div>
            <div class="col-6 mt-2">
              <input type="url" class="form-control" id="youtube" aria-describedby="emailHelp" placeholder="Youtube" name="youtube">
            </div>

            <label for="exampleInputEmail1" class="form-label mt-4">Datos del represetante de al empresa:</label>
            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="nom-rep" aria-describedby="emailHelp" placeholder="Nombre *" name="nom-rep">
            </div>
            <div class="col-6 mt-2">
              <input type="number" class="form-control" id="tele-rep" aria-describedby="emailHelp" placeholder="Telefono *" name="tele-rep">
            </div>
            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="puesto-rep" aria-describedby="emailHelp" placeholder="Puesto representante *" name="puesto-rep">
            </div>
            <div class="col-6 mt-2">
              <input type="email" class="form-control" id="correo-rep" aria-describedby="emailHelp" placeholder="Correo-representante *" name="correo-rep">
            </div>
            <div class="col-12 mt-2">
              <input type="url" class="form-control" id="link-rep" aria-describedby="emailHelp" placeholder="Link Higherlogic" name="link-rep">
            </div>
            <div id="" class="col-12 mt-2">
                <input type="file" id="file2" name="foto" class="form-control" placeholder="Foto" onchange="ValidateSingleInput(this);">Fotografía del representante *
            </div>
            <label for="exampleInputEmail1" class="form-label mt-4">Categorias (Selecciona almenos 1): *</label>



            <div class="col-12 mt-2 otro">

              <?php echo $categorias -> getHtmlCategorias(); ?>

              </div>

          
            <label for="exampleInputEmail1" class="form-label mt-4">Productos (Máximo 6):</label>
            <div id="listas" class="col-12 mt-2">
                <input type="text" name="nom-prod[]" id="nombre-prod" class="form-control" placeholder="Nombre del Producto *">
            </div>
            <div id="listas" class="col-12 mt-2">
          <textarea class="form-control text-a" id="desc-prod" id="desc-prod" placeholder="descripcion del producto *" rows="3" name="desc-prod[]"></textarea>
          </div>
            <div id="listas1" class="col-12 mt-2">
                <input type="file" id="file3" name="archivo[]" class="form-control imgproducto" placeholder="Foto del producto" onchange="ValidateSingleInput(this);" >Imagen producto *
            </div>
            <div class="col-12 mt-2">
            <input type="button" id="add_field" value="Agregar Producto" class="btn btn-success">
            </div>
          
        <div class="col-12 text-center mt-4">

        <button type="submit" class="btn btn-primary m-auto">Enviar</button>
        </div>
      </div>
    </form>
    
  </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <script src="js/validar.js"></script>
    <script src="js/agregarCampo.js"></script>



</body>
</html>