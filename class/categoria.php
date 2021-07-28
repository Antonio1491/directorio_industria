<?php
class Categoria extends Empresa
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

  /*Método que hace una consulta a la tabla empresas y devuelve un array con las empresas
  de dicha categoría*/
  public function getCategoria($categoria)
  {

    $sql = "SELECT * 
    FROM empresa_cat 
    LEFT JOIN categorias
    ON empresa_cat.id_cat = categorias.id_cat
    LEFT JOIN empresas 
    ON empresa_cat.id_empresa = empresas.id
    WHERE empresa_cat.id_cat = '$categoria' ";

    $ejecutar = $this -> conexion_db -> query($sql);

    $result = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    return $result;

  }

  public function getHtmlCategorias()
  {
    $bloque = "";

    foreach($this -> allCategorias() as $data)
    {
      $id = $data["id_cat"];

      $categoria = $data["categoria"];

      $bloque .= '<input type="checkbox" name="categoria[]" value="'.$id.'"> <label>'.$categoria.'</label>';
    }

    return $bloque;

  }

  //Método que recibe un array de categorias para guardar en la tabla cat_membresia
  public function guardarCatEmpresa($idEmpresa, $arrayCat){

    foreach($arrayCat as $valor)
    {

      $idCategoria = $valor;

      $sql = "INSERT INTO empresa_cat 
      VALUES ( $idEmpresa,
              $idCategoria)";

      $guardar = $this -> conexion_db -> query($sql);

    }

  }



}
?>