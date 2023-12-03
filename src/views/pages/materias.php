<?php
  if($admin["perfil"] !== "Administrador"){
    echo '<script>

      window.location = "error404";

    </script>';
  }
?>

<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3">Materias</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Materias</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <button class="btn btn-pill btn-success" type="button" data-bs-toggle="modal" data-bs-target="#crearMateria" data-whatever="@getbootstrap" > <i class="icon-plus"></i> NUEVA MATERIA</button>          
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Materia</th>
                    <th>Opciones</th>   
                  </tr>
                </thead>
                <tbody>
                  <?php $materias = ControladorMaterias::ctrMostrarMaterias(null, null);

                    foreach ($materias as $key => $value):

                    $actions = '<div class="btn-group btn-group-pill" role="group">
                      <button class="btn btn-warning editarMateria" idMateria="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#editarMateria" data-whatever="@getbootstrap">Editar</button>
                      <button class="btn btn-danger eliminarMateria" idMateria="'.$value["id"].'" type="button" data-bs-original-title="" title="">Eliminar</button>
                    </div>';	

                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $value["materia"] ?></td>
                    <td><?= $actions ?></td>
                  </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL GUARDAR MATERIA -->
<div class="modal fade" id="crearMateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-blue">
        <h5 class="modal-title">NUEVA MATERIA</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formGuardarMateria">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Materia</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="list"></i> </span>
                    <input type="text" class="form-control" name="materia" placeholder="Materia" autocomplete="off" required>
                  </div>
                </div>  
              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn color-blue" type="submit">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL EDITAR MATERIA -->
<div class="modal fade" id="editarMateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-blue">
        <h5 class="modal-title">EDITAR MATERIA</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarMateria">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Materia</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="list"></i> </span>
                    <input type="text" class="form-control" name="materiaEditar" placeholder="Materia" autocomplete="off" required>
                    <input type="hidden" class="form-control" name="idEditar" autocomplete="off" required>
                  </div>
                </div>
              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn color-blue" type="submit">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

/*=============================================
GUARDAR MATERIA
=============================================*/
const formGuardarMateria = document.getElementById('formGuardarMateria');

formGuardarMateria.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formGuardarMateria);

  try {
    const post = await 	fetch('public/assets/ajax/materias/guardar-materia.php', {
      method: 'POST',
      body: datos
    })

    const resPost = await post.json();

    console.log(resPost)

    if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'La materia ha sido guardada con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
            window.location = "materias";
          } 
        });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
MOSTRAR DATOS DEL DOCENTE EN LA VENTANA MODAL
=============================================*/

$(document).on("click", ".editarMateria", function(){

  var idMateria = $(this).attr("idMateria");

  var datos = new FormData();
  datos.append("idMateria", idMateria);

  $.ajax({
    url:"public/assets/ajax/materias/materias.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success:function(respuesta){ 	
      console.log(respuesta)

      $('input[name="idEditar"]').val(respuesta["id"]);
      $('input[name="materiaEditar"]').val(respuesta["materia"]);
     
    }
  })
})

/*=============================================
EDITAR MATERIA
=============================================*/
const formEditarMateria = document.getElementById('formEditarMateria');

formEditarMateria.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formEditarMateria);

  try {
    const post = await 	fetch('public/assets/ajax/materias/editar-materia.php', {
      method: 'POST',
      body: datos
    })

    const resPost = await post.json();

    console.log(resPost)

    if(resPost.ok){

      Swal.fire(
        'Correcto!',
        'Los datos han sido actualizados con éxito!',
        'success'
      ).then(function(result){

        if(result.value){   
        window.location = "materias";
        } 
      });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
ELIMINAR MATERIA
=============================================*/

$(document).on("click", ".eliminarMateria", function(){

  var idMateria = $(this).attr("idMateria");

  Swal.fire({
      title: '¿Está seguro de eliminar esta materia?',
      text: "¡Si no lo está puede cancelar la acción!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, eliminar materia!'
  }).then(function(result){

    if(result.value){

      var datos = new FormData();
         datos.append("idEliminar", idMateria);

         $.ajax({

          url:"public/assets/ajax/materias/materias.ajax.php",
          method: "POST",
          data: datos,
          cache: false,
          contentType: false,
          processData: false,
          success:function(respuesta){

            if(respuesta == "ok"){

              Swal.fire({
                  type: "success",
                  title: "¡CORRECTO!",
                  text: "La materia ha sido borrada correctamente",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
                 }).then(function(result){

                    if(result.value){

                      window.location = "materias";

                    }
                
                })

            }

          }

        })  

    }

})

})
</script>