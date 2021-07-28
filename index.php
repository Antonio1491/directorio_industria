<?php session_start();
require ("class/clases.php");
$empresa = new Empresa();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Registro de Empresas</title>
</head>
<body>
  <div class="container mt-5 d-flex">
    <form  class="col-8 d-flex align-items-center" method="post" action="class/datosForm.php"  enctype="multipart/form-data" onsubmit="return validar();">
      <div class="row">
        <label for="exampleInputEmail1" class="form-label">Datos de la empresa</label>
        <div class="col-6">
          <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre de la empresa" name="nombre">
        </div>
        <div class="col-6">
          <input type="text" class="form-control" id="direccion" placeholder="Direccion" name="direccion">
        </div>
        <div class="col-6 mt-2">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono">
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="direccionweb" aria-describedby="emailHelp" placeholder="Direccion web" name="direccionweb">
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="informacion" placeholder="Información" name="informacion">
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="whatsapp" aria-describedby="WhatsApp" placeholder="WhatsApp" name="whatsapp">
          </div>
          <div class="col-6 mt-2">
            <input type="file" class="form-control" id="file" name="file">Logo empresa
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="videourl" aria-describedby="emailHelp" placeholder="Video url" name="videourl">
          </div>
          <div class="col-6 mt-2">
            <input type="text" class="form-control" id="catalogourl" aria-describedby="emailHelp" placeholder="Catalogo url" name="catalogourl">
          </div>

          <div class="col-6 mt-2">
            <select id="pais" class="form-select" aria-label="Default select example" required name="pais">
              <option selected value="0">Selecciona un pais</option>
              </div>
                <?php
                  $array_pais = $empresa->getPaises();
                  foreach ($array_pais as $valor) {
                    echo"<option value=".$valor['pais'].">".$valor['pais']."</option>";
                  }
                  ?>
            </select>
            </div>

            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="ciudad" aria-describedby="emailHelp" placeholder="Ciudad" name="ciudad">
            </div>
            <label for="exampleInputEmail1" class="form-label mt-4">Redes sociales de la empresa:</label>
            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Facebook" name="facebook">
            </div>
            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twiter" name="twitter">
            </div>
            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instagram" name="instagram">
            </div>
            <div class="col-6 mt-2">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Youtube" name="youtube">
            </div>

            <label for="exampleInputEmail1" class="form-label mt-4">Categorias:</label>
            <div class="categorias">
              <!-- dar formato con css -->
              <div class="formatear">
              <?php echo $empresa -> getHtmlCategorias(); ?>
              </div>
            </div>
          
            <label for="exampleInputEmail1" class="form-label mt-4">Productos (Máximo 6):</label>
            <div id="listas" class="col-6 mt-2">
                <input type="text" name="nom-prod[]" class="form-control" placeholder="Nombre del Producto">
            </div>
            <div id="listas" class="col-6 mt-2">
                <input type="text" name="desc-prod[]" class="form-control" placeholder="Descripcion del producto">
            </div>
            <div id="listas1" class="col-12 mt-2">
                <input type="file" name="archivo[]" class="form-control" placeholder="Descripcion del producto">Imagen producto
            </div>
            <div class="col-12 mt-2">
            <input type="button" id="add_field" value="Agregar Producto" class="btn btn-success">
            </div>
          
        <div class="col-12 text-center mt-4">

        <button type="submit" class="btn btn-primary m-auto">Enviar</button>
        </div>
      </div>
    </form>
    <div class="col-4">
      <div class="row">
          <img src="Form.png" alt="">
      </div>
    </div>
  </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <script>
      var campos_max          = 5;   //max de 10 campos

      var x = 0;
      $('#add_field').click (function(e) {
        e.preventDefault();     //prevenir novos clicks
        if (x < campos_max) {
                $('#listas1').append('<div class="row">\
                    <div id="listas" class="col-6 mt-2">\
                    <input type="text" name="nom-prod[]" class="form-control col-6" placeholder="Nombre del Producto">\
                    </div>\
                    <div id="listas" class="col-6 mt-2">\
                    <input type="text" name="desc-prod[]" class="form-control col-6" placeholder="Nombre del Producto">\
                    </div>\
                    <div id="listas" class="col-12 mt-2">\
                    <input type="file" name="archivos[]" class="form-control col-6" placeholder="Nombre del Producto">Imagen producto\
                    </div>\
                        <a href="#" class="remover_campo">Remover</a>\
                      </div>');
                x++;
        }
      });
      // Remover o div anterior
      $('#listas1').on("click",".remover_campo",function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
      });
    </script>

</body>
</html>