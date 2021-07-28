function validar(){

    let nombre= document.getElementById("nombre").value;
    let direccion= document.getElementById("direccion").value;
    let email= document.getElementById("email").value;
    let telefono= document.getElementById("telefono").value;
    let direccionweb= document.getElementById("direccionweb").value;
    let informacion= document.getElementById("informacion").value;
    let whatsapp= document.getElementById("whatsapp").value;
    let videourl= document.getElementById("videourl").value;
    let catalogourl= document.getElementById("catalogourl").value;
    let pais= document.getElementById("pais").value;
    // let file= document.getElementById("file").value;


    //  let expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    //  let nombreC =/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;


  




    if (nombre == "" || direccion=="" || email=="" ||telefono==""||  direccionweb=="" || informacion=="" || whatsapp=="" || videourl=="" ||catalogourl=="" ||pais==0){
        Swal.fire({ title: "Todos los campos son obligatorios",
        text: "Porfavor completa de manera correcta los campos",
        icon: "error",customClass: "swal-wide",}).then(okay => {
          if (okay) {

         }
       });
       return false;

    }



    }
    

function ValidateSingleInput(img) {
  var _validFileExtensions = [".jpg", ".jpeg",".png"];    

    if (img.type == "file") {
        let sFileName = img.value;
         if (sFileName.length > 0) {
            let blnValid = false;
            for (let j = 0; j < _validFileExtensions.length; j++) {
                let sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
               
              Swal.fire({ title: "Campo inválido",
                  text: "Formatos admitidos: .png .jpeg .jpg",
                  icon: "warning",customClass: "swal-wide",}).then(okay => {
                    if (okay) {
                    //  window.location.href = "../index.php";
                   }
                 });
                 img.value = "";
                return false;
            }
        }
    }
    return true;
}

  


