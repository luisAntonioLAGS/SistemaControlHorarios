
/*=============================================
MOSTRAR DATOS DEL HORARIO EN LA VENTANA MODAL
=============================================*/
$(document).on("click", ".editarS1", function(){

  var idHorario = $(this).attr("idHorarioS1");
  
  console.log(idHorario)
  
  var datos = new FormData();
  datos.append("idHorario", idHorario);
  
  $.ajax({
    url:"public/assets/ajax/horarios/horarios.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType:"json",
    success:function(respuesta){

      var datosSala = new FormData();
      datosSala.append("idSala",respuesta["id_sala"]);

      $.ajax({

        url:"public/assets/ajax/salas/salas.ajax.php",
        method: "POST",
        data: datosSala,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success:function(respuesta){
                  
          $("#salaEditar").val(respuesta["sala"]);

        }

      })

      var datosMateria = new FormData();
      datosMateria.append("idMateria",respuesta["id_materia"]);

      $.ajax({

        url:"public/assets/ajax/materias/materias.ajax.php",
        method: "POST",
        data: datosMateria,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success:function(respuesta){
                  
          $("#editarMateria").val(respuesta["id"]);
          $("#editarMateria").html(respuesta["materia"]);

        }

      })

      var datosDocente = new FormData();
      datosDocente.append("idDocente",respuesta["id_docente"]);

      $.ajax({

        url:"public/assets/ajax/docentes/docentes.ajax.php",
        method: "POST",
        data: datosDocente,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success:function(respuesta){
                  
          $("#editarDocente").val(respuesta["id"]);
          $("#editarDocente").html(respuesta["nombre"]);

        }

      })

      console.log(respuesta)
    
      $("#idHorarioEditar").val(respuesta["id"]);
      $("#diaEditar").val(respuesta["dia"]);
      $("#horaEditar").val(respuesta["hora_inicio"]);
      $("#horasEditar").val(respuesta["hora_fin"]);
    
    }
  
  })
  
  })

/*=============================================
EDITAR HORARIO
=============================================*/

formEditarHorarioS1.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formEditarHorarioS1);

  try {
    const post = await 	fetch('public/assets/ajax/horarios/editar-horario.php', {
      method: 'POST',
      body: datos
    })

    const resPost = await post.json();

    console.log(resPost)

    if(resPost.ok){

      Swal.fire(
        'Correcto!',
        'El horario ha sido actualizado con éxito!',
        'success'
      ).then(function(result){

        if(result.value){   
        window.location = "horario-s1";
        } 
      });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
ELIMINAR HORARIO S1
=============================================*/

$(document).on("click", ".eliminarS1", function(){

  var idHorario = $(this).attr("idHorarioS1");

  Swal.fire({
    title: '¿Estás seguro de eliminar este horario?',
    text: "¡Si no lo estás puedes cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, eliminar horario!'
  }).then(function(result){
  
    if(result.value){
     
      var datos = new FormData();
      datos.append("idEliminar", idHorario)
     
      $.ajax({
  
      url:"public/assets/ajax/horarios/horarios.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      success:function(respuesta){
  
        console.log(respuesta);
  
        if(respuesta == "ok"){
          Swal.fire(
          'Correcto!',
          'El horario ha sido borrado con éxito!',
          'success'
          ).then(function(result){
  
            if(result.value){   
            window.location = "horario-s1";
            } 
          });
  
          }
  
      }
  
      })
  
    }
  
    })
  
  })

