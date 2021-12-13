// $(document).on('change','#cbo_categoria',function(){

//     let id_categoria=$('#cbo_categoria').val();
 
//     alert(id_categoria);


//     $.ajax({
//         url: "../../Http/Controllers/ComboController.php",
//         type: "post",
//         data: {
//             id_categoria
//         }
//     }).done(function (resp) {
      
      
//     alert(resp);
//     });
//     // $.get('api/menu/14/platos',function(datos){

//     //     console.log(datos);

//     // })

// });

// function seleccionar(){

//     let cbo_plato = document.getElementById(platos);
//     let platos=document.getElementsByTagName(plato)
//     let devolver=plato.value;

//     document.getElementById('comentario').innerText=`El plato que selecciono es  ${devolver}` ;

// }

// let e = document.getElementById("elementoSelect");
// let value = e.options[e.selectedIndex].value;
//  let boton=document.getElementById('calcular');
//  let respuesta= document.getElementById('respuesta');

//  boton.addEventListener('click',hacersuma);

//  function hacersuma(){

//     let canMenu=parseFloat(document.getElementById('canMenu').value);
//     let canBebida=parseFloat(document.getElementById('canBebida').value);
//     let s=canMenu+canBebida;
//     respuesta.innerHTML='${s}'



//  }