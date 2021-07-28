<?php

class Producto extends Empresa()
{
  public function __construct()
  {
    
    parent::__construct();
  }

  public function guardarProducto($producto, $descripcion, $foto, $idEmpresa)
  {

    $totalProductos = count($producto);

    for($i=0; $i<= $totalProductos; $i++)
    {

      $producto = $producto[$i];

      $descripcionProducto = $descripcion[$i];

      $foto = $this -> setImg($foto[$i]);

      if($foto){

        $this -> guardarImg($foto);

      }

    }

  }

  // El método consulta los productos de una empresa y devuelve el resultado en un array 
  public function getProductos($empresa)
  {
    
    $sql = "SELECT *
    FROM productos 
    WHERE id_empresa = '$empresa' ";

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    return $result;

  }
  
}
?>