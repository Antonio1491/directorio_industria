function validar (){


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
    let file= document.getElementById("file").value;


    //  let expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    //  let nombreC =/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;


  




    if (nombre == "" || direccion=="" || email=="" ||telefono==""||  direccionweb=="" || informacion=="" || whatsapp=="" || videourl=="" ||catalogourl=="" ||pais==0 || file==""){
        Swal.fire({ title: "Todos los campos son obligatorios",
        text: "Porfavor completa de manera correcta los campos",
        icon: "error",customClass: "swal-wide",}).then(okay => {
          if (okay) {

         }
       });
       return false;

    }



    }



