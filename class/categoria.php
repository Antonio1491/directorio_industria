<?php
class Categoria extends Empresa()
{

  public $categoria;
  
  public function __construct()
  {
    parent::__construct();
  }

  public function allCategorias()
  {
    
    $sql = "SELECT *
    FROM categorias";

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    $data = json_encode($result[0]);

    return $result;

  }



}
?>