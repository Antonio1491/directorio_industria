<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
require ("clases.php");
$datosForm= new Empresa();
$representante = new Representante();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $direccionweb = $_POST["direccionweb"];
    $informacion = $_POST["informacion"];
    $whatsapp = $_POST["whatsapp"];
    $videourl = $_POST["videourl"];
    $catalogourl = $_POST["catalogourl"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];

    $logotipo = $_FILES["file"];

    $logotipo = $datosForm -> setImg($logotipo);

    $facebook = $_POST["facebook"];
    $twitter = $_POST["twitter"];
    $instagram = $_POST["instagram"];
    $youtube = $_POST["youtube"];

    /* === Valores de los campos del formulario para el representante */
    $representante = $_POST["nom-rep"];
    $telRepresentante = $_POST["tele-rep"];
    $puesto = $_POST["email-rep"];
    $urlHL = $_POST["link-rep"];
    $foto = $_POST["facebook"];
    $idEmpresa = $_FILES["foto"];

    $dataRepresentante= [
        "nombre" => "$representante",
        "telefono" => "$telRepresentante",
        "cargo" => "$puesto",
        "urlHL" => "$urlHL",
        "foto" => "$foto",
        "idEmpresa" => "$idEmpresa"
        ];
      
    $dataRepresentante = json_encode($dataRepresentante);
    
    $guardarRepresentante = $representante -> guardarRepresentante($dataRepresentante); 

    $categoria = $_POST["categoria"];

    //guardar categorias

    $producto = $_POST["nom-prod"];
    $descripcionProducto = $_POST["desc-prod"];
    $fotoProductos = $_FILES["fotoProducto"];
    
    // echo $nombre,$direccion,$email,$telefono,$direccionweb,$informacion,$whatsapp,$videourl,$catalogourl,$archivoF;
    $guardarEmpresa = $datosForm->guardarDatosEmpresa($nombre,
                                $direccion,
                                $email,
                                $telefono,
                                $direccionweb,
                                $informacion,
                                $whatsapp,
                                $videourl,
                                $catalogourl,
                                $img,
                                $pais,
                                $ciudad,
                                $facebook,
                                $twitter,
                                $instagram,
                                $youtube);

//setear las imagenes antes de guardarlas

    if($guardarEmpresa)
    {
        $datosForm -> guardarImg($logotipo);
    }



    

    if($guardarEmpresa && $guardarRepresentante){
        echo '<script>
                      Swal.fire({ title: "Registro completo",
                          text: "Tu registro se ha guardado con éxito",
                          icon: "success",customClass: "swal-wide",}).then(okay => {
                            if (okay) {
                             window.location.href = "../index.php";
                           }
                         });
                    
                  </script>';
    }else{
        echo 'hubo un error al mandar el formulario' ;
        }
        



    }


?>

