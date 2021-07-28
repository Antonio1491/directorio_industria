
<?php
class Empresa extends Conexion{

  public $empresa;
  public $direccion;
  public $email;
  public $web;
  public $informacion;
  public $logotipo;
  
  public function __construct()
  {
    
    parent::__construct();

  }

  public function guardarDatosEmpresa($nombre,$direccion,$email,$telefono,$direccionweb,$informacion,$whatsapp,$videourl,$catalogourl,$archivoF,$pais,$ciudad, $facebook,$twitter,$instagram,$youtube)
  {

  $sql = "INSERT INTO empresas
    VALUES (null, 
    '$nombre',
    '$direccion', 
    '$email', 
    '$telefono',
    '$direccionweb',
    '$informacion',
    '$whatsapp',
    '$archivoF',
    '$videourl',
    '$catalogourl',
    '$pais',
    '$ciudad', 
    '$facebook',
    '$twitter',
    '$instagram',
    '$youtube')";

  $ejecutar = $this -> conexion_db -> query($sql);

  $this -> empresa = $nombre; //se asigna el nombre como variable global

  return $ejecutar;

  }

  public function getEmpresaByNombre($nombre)
  {
    $this -> empresa = $nombre;

    $sql = "SELECT * 
    FROM empresas
    WHERE nombre = '{$this -> empresa}'";

    $ejecutar = $this -> conexion_db -> query($sql);

    $data = $ejecutar -> fetch_all(MYSQLI_ASSOC);

    return json_encode($data[0]);

  }

  public function getPaises()
  {
    $sql = "SELECT * 
    FROM lista_paises" ;

    $consulta = $this->conexion_db->query($sql);

    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

    return return $resultado;
    
  }

  public function getHtmlPaises()
  {
    $paises = "";
    foreach($this -> getPaises() as $data)
    {
      $pais = $data["pais"];
      $paises .= '<option value="'.$pais.'">'.$pais.'</option>';
    }
​
    return $paises;
​
  }
​

  public function validarImg($img)
  {

    $type = $img["type"];

    $size = $img["size"];

    if(($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png") && ($size < 5000000))
    {
     
      return true;

    }

    return false;

  }

  public function setImg($img)
  {
    
    $random=bin2hex(random_bytes(2));  //generar cadena random de 4 caracteres 

    $imgName = "anpr-".$random.mb_strtolower(str_replace(' ', '-', $img["name"]));

   if($this -> validarImg($img))
   {

    return $imgName;

   }

   return false;

  }

  public function guardarImg($img)
  {

    $dir = $_SERVER['DOCUMENT_ROOT'].'/directorio_industria/imagenes';

    if(move_uploaded_file($img["tmp_name"], $dir."/".$img))
    {
      return true;
    }

    return false;

  }


}
?>