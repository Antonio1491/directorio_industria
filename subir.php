<?php
    //var_dump($_FILES["file"]);
    $random=bin2hex(random_bytes(2));
    $directorio = "imagenes/"."anpr-".$random."-";
    $archivo = $directorio . basename($_FILES["file"]["name"]);
    $archivoF=  mb_strtolower($archivo, 'UTF-8');
    
    $tipoArchivo = strtolower(pathinfo($archivoF, PATHINFO_EXTENSION));

    // valida que es imagen
    $checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);

    //var_dump($size);

    if($checarSiImagen != false){

        //validando tamaño del archivo
        $size = $_FILES["file"]["size"];

        if($size > 5000000){
            echo "El archivo tiene que ser menor a 5 MbS";
        }else{

            //validar tipo de imagen
            if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo=="png"){
                // se validó el archivo correctamente
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivoF)){
                    echo "El archivo se subió correctamente";
                  
                }else{
                    echo "Hubo un error en la subida del archivo";
                }
            }else{
                echo "Solo se admiten archivos jpg/jpeg";
            }
        }
    }else{
        echo "El documento no es una imagen";
    }
?>