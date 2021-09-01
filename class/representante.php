<?php

class Representante extends Empresa
{
  
  public $idRepresentante;
  public $idEmpresa;
  
  public function __construct()
  {
    parent::__construct();
  }

  public function guardarRepresentante($data)
  {
    $data = json_decode($data);

    var_dump($data);

    $sql ="INSERT INTO representante
    VALUES (
      null,
      '{$data -> nombre}',
      '{$data -> telefono}',
      '{$data -> cargo}',
      '{$data -> urlHL}',
      '{$data -> foto}',
      '{$data -> idEmpresa}'
    )";

    $result = false;

    $ejecutar = $this -> conexion_db -> query($sql);
    
    if($ejecutar){
      return true;
    }

    return $result;

  }
  
  // El método obtiene al representante de la empresa a través del id de la empresA
  public function getRepresentante($idEmpresa)
  {
    
    $sql = "SELECT * 
    FROM representante
    WHERE id_empresa = '$idEmpresa'";

    $ejecutar = $this -> conexion_db ->query($sql);

    $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    return json_encode($data[0]);

  }

}
?>