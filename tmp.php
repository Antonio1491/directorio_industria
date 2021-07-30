<?php 
include 'class/clases.php';

$prueba = new Representante();

$empresa = new Empresa();

$dataRepresentante= [
  "nombre" => "Nombre",
  "telefono" => "44444",
  "cargo" => "$TI",
  "urlHL" => "www.ejemplo.com",
  "foto" => "foto",
  "idEmpresa" => "ANPRid"
];

$data = json_encode($dataRepresentante);

$data = json_decode($data);

var_dump($data->nombre);



?>
<html>
  <div>
  <input type="file" name="file">
  </div>
</html>