
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

  $this -> empresa = $nombre; 

  return $ejecutar;

  }

  /*Método trae los datos de una empresa por medio del nombre
  */
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

    return $resultado;
    
  }
  
  public function getHtmlPaises ()
  {

    $paises = "";

    foreach($this -> getPaises() as $data)
    {

      $lista = $data["pais"];

      $paises .= '<option value="'.$lista.'">'.$lista.'</option>';

    }

    return $paises;
    
  }

  public function validarImg($type, $size)
  {

    if(($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png") && ($size < 5000000))
    {
     
      return true;

    }

    return false;

  }

  //Método setea el nombre de la imagen y la válida devolviendo el nuevo nombre
  public function setImg($img, $size, $type)
  {
    
    $random=bin2hex(random_bytes(2));  //generar cadena random de 4 caracteres 

    $imgName = "anpr-".$random."-".mb_strtolower(str_replace(' ', '-', $img));

   if($this -> validarImg($type, $size))
   {

    return $imgName;

   }

   return false;

  }

  public function guardarImg($img, $tmp_name)
  {

    $dir = $_SERVER['DOCUMENT_ROOT'].'/directorio_industria/img';

    // var_dump($dir);
    // var_dump($img);

    if(move_uploaded_file($tmp_name, $dir."/".$img))
    {
      return true;
    }

    return false;

  }


}
?>