<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3">Salas</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Salas</li>
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
            <h5>Salas</h5>          
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Sala</th>
                    <th>Estado</th>
                    <?php if($admin["perfil"] == "Administrador") : ?>
                      <th>Acciones</th>
                    <?php endif ?>
                </thead>
                <tbody>
                  <?php $salas = ControladorSalas::ctrMostrarSalas(null, null);

                    foreach ($salas as $key => $value):

                    $actions = '<div class="btn-group" role="group">
                      <button class="btn btn-primary editarSala" idSala="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#editarSala" data-whatever="@getbootstrap">EDITAR</button>
                    </div>';	

                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $value["sala"] ?></td>
                    <?php
                      if($value["status"] == 'Disponible') : ?>
                        <td><span class="btn btn-success btn-xs">Disponible</span></td>
                      <?php elseif($value["status"] == 'Ocupada'): ?>
                        <td><span class="btn btn-danger btn-xs">Ocupada</span></td>
                    <?php endif ?>

                    <?php if($admin["perfil"] == "Administrador") : ?>
                      <td><?= $actions ?></td>
                    <?php endif ?>
                   
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

<!-- MODAL CREAR SALA -->
<div class="modal fade" id="crearSala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-blue">
        <h5 class="modal-title">EDITAR SALA</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formGuardarSala">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-laptop-house"></i> </span>
                        <input type="text" class="form-control" name="registroSala" placeholder="Nombre de la sala" autocomplete="off" required>
                      </div>
                  </div>
                
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Statu</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                        <select class="form-control" name="registroEstado" required>
                          <option value="">Seleccione un estado</option>
                          <option value="Disponible">Disponible</option>
                          <option value="Ocupada">Ocupada</option>
                        </select>
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

<!-- MODAL EDITAR SALA -->
<div class="modal fade" id="editarSala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-blue">
        <h5 class="modal-title">EDITAR SALA</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarSala">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-laptop-house"></i> </span>
                        <input type="text" class="form-control" name="editarSala" placeholder="Nombre de la sala" autocomplete="off" readonly required>
                        <input type="hidden" class="form-control" name="idSala">
                      </div>
                  </div>
                
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Statu</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                        <select class="form-control" name="editarEstado" required>
                          <option class="editarEstadoOption"></option>
                          <option value="Disponible">Disponible</option>
                          <option value="Ocupada">Ocupada</option>
                        </select>
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
GUARDAR SALA
=============================================*/
const formGuardarSala = document.getElementById('formGuardarSala');

formGuardarSala.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formGuardarSala);

  try {
    const post = await 	fetch('public/assets/ajax/salas/guardar-sala.php', {
      method: 'POST',
      body: datos
    })

    const resPost = await post.json();

    console.log(resPost)

    if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'La sala ha sido guardada con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
            window.location = "salas";
          } 
        });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
MOSTRAR DATOS DE LA SALA EN LA VENTANA MODAL
=============================================*/

$(document).on("click", ".editarSala", function(){

  var idSala = $(this).attr("idSala");

  var datos = new FormData();
  datos.append("idSala", idSala);

  $.ajax({
    url:"public/assets/ajax/salas/salas.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success:function(respuesta){ 	
    
      $('input[name="idSala"]').val(respuesta["id"]);
      $('input[name="editarSala"]').val(respuesta["sala"]);
      $('.editarEstadoOption').val(respuesta["status"]);
      $('.editarEstadoOption').html(respuesta["status"]);

    }

  })

})

/*=============================================
EDITAR SALA
=============================================*/
const formEditarSala = document.getElementById('formEditarSala');

formEditarSala.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formEditarSala);

  try {
    const post = await 	fetch('public/assets/ajax/salas/editar-sala.php', {
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
            window.location = "salas";
          } 
        });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})



/*=============================================
Eliminar Sala
=============================================*/

$(document).on("click", ".eliminarSala", function(){

  var idSala = $(this).attr("idSala");

  Swal.fire({
      title: '¿Está seguro de eliminar esta sala?',
      text: "¡Si no lo está puede cancelar la acción!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, eliminar sala!'
  }).then(function(result){

    if(result.value){

      var datos = new FormData();
         datos.append("idEliminar", idSala);

         $.ajax({

          url:"public/assets/ajax/salas/salas.ajax.php",
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
                  text: "La sala ha sido borrada correctamente",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
                 }).then(function(result){

                    if(result.value){

                      window.location = "salas";

                    }
                
                })

            }

          }

        })  

    }

})

})
</script>