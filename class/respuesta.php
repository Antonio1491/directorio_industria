<?php session_start();
 
 $membresia= $_SESSION['membresia'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php
require ("clases.php");
$Cancelar =  new Miembro();

$servicio = $_POST["servicio"];
$razon = $_POST["razon"];

$lista_check=$_POST['lista'];

foreach($lista_check as $respuestas){
  $datoscheck = $Cancelar->checkboxForm($respuestas,$membresia);
}




$setPerfil = $Cancelar->getCodigoActivasion($membresia);
$updateStatus =$Cancelar->actualizarEstatus($membresia);
$saveQuestions = $Cancelar->guardarPreguntas($servicio,$razon,$membresia);


if($updateStatus && $saveQuestions) {
    echo '<script>
    Swal.fire({ title: "Tu usuario se dio de baja con exito",
        text: "Gracias por ser parte de la familia ANPR",
        icon: "success",customClass: "swal-wide",}).then(okay => {
          if (okay) {
            window.location.href = "../baja.php";

         }
       });
  
</script>';
}

?>

