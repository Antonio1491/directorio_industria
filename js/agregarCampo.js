  //********************** AGREGAR CAMPOS DINAMICAMENTE CON EL BOTON *******************//
  var campos_max          = 5;   //max de 10 campos

  var x = 0;


 let div = document.getElementById('add_field');
 let div2 = document.getElementById('listas1');
 let div3 = document.getElementById('remover');

 div.addEventListener("click", (e) =>{
   
  e.preventDefault();     //prevenir novos clicks
  if (x < campos_max) {

    div2.innerHTML += `<div class="row" id="eliminar">
    <div id="listas" class="col-12 mt-2">
    <input type="text" name="nom-prod[]" id="nombre-prod" class="form-control" placeholder="Nombre del Producto *">
    </div>
    <div id="listas" class="col-12 mt-2">
    <textarea class="form-control" id="desc-prod" placeholder="descripcion del producto *" rows="3" name="desc-prod[]"></textarea>
    </div>
    <div id="listas" class="col-12 mt-2">
    <input type="file" id="file3" name="archivo[]" class="imgproducto form-control" placeholder="Nombre del Producto *" onchange="ValidateSingleInput(this);">Imagen producto *
    </div>
        <a href="#" id="remover" class="remover_campo">Remover</a>
      </div>`;

x++

    // $('#listas1').append(`<div class="row">
    //     <div id="listas" class="col-12 mt-2">
    //     <input type="text" name="nom-prod[]" id="nombre-prod" class="form-control" placeholder="Nombre del Producto *">
    //     </div>
    //     <div id="listas" class="col-12 mt-2">
    //     <textarea class="form-control" id="desc-prod" placeholder="descripcion del producto *" rows="3" name="desc-prod[]"></textarea>
    //     </div>
    //     <div id="listas" class="col-12 mt-2">
    //     <input type="file" id="file3" name="archivo[]" class="imgproducto form-control" placeholder="Nombre del Producto *" onchange="ValidateSingleInput(this);">Imagen producto *
    //     </div>
    //         <a href="#" id="remover" class="remover_campo">Remover</a>
    //       </div>`);
}else{
  Swal.fire({
    icon: 'warning',
    title: 'Limite alcanzado',
    text: 'Solo puede agregar 6 productos',
  })
}

  
 })


 $('#listas1').on("click",".remover_campo",function(e) {
  e.preventDefault();
  $(this).parent('div').remove();
  x--;
});
  // $('#add_field').click (function(e) {
  //   e.preventDefault();     //prevenir novos clicks
  //   if (x < campos_max) {
  //           $('#listas1').append(`<div class="row">
  //               <div id="listas" class="col-12 mt-2">
  //               <input type="text" name="nom-prod[]" id="nombre-prod" class="form-control" placeholder="Nombre del Producto *">
  //               </div>
  //               <div id="listas" class="col-12 mt-2">
  //               <textarea class="form-control" id="desc-prod" placeholder="descripcion del producto *" rows="3" name="desc-prod[]"></textarea>
  //               </div>
  //               <div id="listas" class="col-12 mt-2">
  //               <input type="file" id="file3" name="archivo[]" class="imgproducto form-control" placeholder="Nombre del Producto *" onchange="ValidateSingleInput(this);">Imagen producto *
  //               </div>
  //                   <a href="#" class="remover_campo">Remover</a>
  //                 </div>`);
  //           x++;
  //   }
  // });
  // Remover o div anterior
  

// function validarTipoImg(){
//   // let fileInput = document.querySelectorAll('input#files');
//   let archivos = document.getElementById('file');
//   // let archivos_otro=  document.getElementById('archivo');


//   // let otro = archivos_otro.value;
//   let filePath = archivos.value;
//   // let filedif= archivos_otro.value;

//   // Allowing file type
//   let extensionesValidas = /(\.jpg|\.jpeg|\.png)$/i;
    
//   if (!extensionesValidas.exec(filePath)) {
//     Swal.fire({ title: "Campo inválido",
//     text: "Formatos admitidos: .png .jpeg .jpg",
//     icon: "warning",customClass: "swal-wide",}).then(okay => {
//       if (okay) {
//       //  window.location.href = "../index.php";
//      }
//    });
//    archivos.value = '';
//       return false;
//   } 
//   else 
//   {
    
//   }
// }