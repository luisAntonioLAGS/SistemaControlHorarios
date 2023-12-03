<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3">Equipos</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Equipos</li>
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
            <button class="btn btn-pill btn-success" type="button" data-bs-toggle="modal" data-bs-target="#crearSala" data-whatever="@getbootstrap" > <i class="icon-plus"></i> Agregar</button>          
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Equipo</th>
                    <th>Sala</th>
                    <th>Estado</th>
                    <th>Observación</th>
                    <?php 
                      if($admin["perfil"] == "Administrador") : ?>
                      <th>Acciones</th>
                    <?php endif ?>
                  </tr>
                </thead>
                <tbody>
                  <?php $equipos = ControladorEquipos::ctrMostrarEquipos(null, null);

                    foreach ($equipos as $key => $value):

                      $idSala = $value["id_sala"];
                      $sala = ControladorSalas::ctrMostrarSalas("id", $idSala);

                    $actions = '<div class="btn-group btn-group-pill" role="group">
                      <button class="btn btn-warning editarEquipo" idEquipo="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#editarEquipo" data-whatever="@getbootstrap">Editar</button>
                      <button class="btn btn-danger eliminarEquipo" idEquipo="'.$value["id"].'" type="button" data-bs-original-title="" title="">Eliminar</button>
                    </div>';	

                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $value["equipo"] ?></td>
                    <td><?= $sala["sala"] ?></td>
                    <?php
                      if($value["status"] == 'Operativo') : ?>
                        <td><span class="btn btn-success btn-xs">Operativo</span></td>
                      <?php elseif($value["status"] == 'Inoperativo'): ?>
                        <td><span class="btn btn-danger btn-xs">Inoperativo</span></td>
                    <?php endif ?>
                    <td><?= $value["observacion"] ?></td>

                    <?php 
                      if($admin["perfil"] == "Administrador") : ?>
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

<!-- MODAL GUARDAR EQUIPO -->
<div class="modal fade" id="crearSala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Agregar Equipos</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formGuardarEquipo">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Equipo</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-laptop"></i> </span>
                        <input type="text" class="form-control" name="registroEquipo" placeholder="Equipo" autocomplete="off" required>
                      </div>
                  </div>
                
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-laptop-house"></i> </span>
                        <select class="form-control" name="registroSala" required>
                          <option value="">Selecione una sala</option>
                          <?php
                            $sala = ControladorSalas::ctrMostrarSalas(null, null);
                            foreach ($sala as $key => $value) : 
                          ?>
                          <option value="<?= $value["id"] ?>"> <?= $value["sala"] ?> </option>
                          <?php endforeach ?>
                        </select>
                      </div>
                  </div> 
                  
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Estado</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                        <select class="form-control" name="registroEstado" required>
                          <option value="Operativo">Operativo</option>
                          <option value="Inoperativo">Inoperativo</option>
                        </select>
                      </div>
                  </div>  

                  <div class="mb-3 m-form__group">
                      <label class="form-label">Observación</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-align-center"></i> </span>
                        <textarea class="form-control" name="registroObservacion"></textarea>
                      </div>
                  </div>  

              </div>

              
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- MODAL EDITAR SALA -->
<div class="modal fade" id="editarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Editar Equipo</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarEquipo">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Equipo</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-laptop"></i> </span>
                        <input type="text" class="form-control" name="editarEquipo" placeholder="Equipo" autocomplete="off" required>
                        <input type="hidden" class="form-control" name="editarId" required>
                      </div>
                  </div>
                
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-laptop-house"></i> </span>
                        <select class="form-control" name="editarSala" required>
                          <option class="editarSalaOption"></option>
                          <?php
                            $sala = ControladorSalas::ctrMostrarSalas(null, null);
                            foreach ($sala as $key => $value) : 
                          ?>
                          <option value="<?= $value["id"] ?>"> <?= $value["sala"] ?> </option>
                          <?php endforeach ?>
                        </select>
                      </div>
                  </div> 
                  
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Estado</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                        <select class="form-control" name="editarEstado" required>
                          <option class="editarEstadoOption"></option>
                          <option value="Operativo">Operativo</option>
                          <option value="Inoperativo">Inoperativo</option>
                        </select>
                      </div>
                  </div>  

                  <div class="mb-3 m-form__group">
                      <label class="form-label">Observación</label>
                      <div class="input-group"><span class="input-group-text"> <i class="fas fa-align-center"></i> </span>
                        <input type="text" class="form-control" name="editarObservacion" placeholder="Observacion" autocomplete="off">
                      </div>
                  </div>  

              </div>

              
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<script>

/*=============================================
GUARDAR EQUIPO
=============================================*/
const formGuardarEquipo = document.getElementById('formGuardarEquipo');

formGuardarEquipo.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formGuardarEquipo);

  try {
    const post = await 	fetch('public/assets/ajax/equipos/guardar-equipo.php', {
      method: 'POST',
      body: datos
    })

    const resPost = await post.json();

    console.log(resPost)

    if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'El equipo ha sido guardado con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
            window.location = "equipos";
          } 
        });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
MOSTRAR DATOS DEL EQUIPO EN LA VENTANA MODAL
=============================================*/

$(document).on("click", ".editarEquipo", function(){

  var idEquipo = $(this).attr("idEquipo");

  var datos = new FormData();
  datos.append("idEquipo", idEquipo);

  $.ajax({
    url:"public/assets/ajax/equipos/equipos.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
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

          console.log(respuesta)
                  
          $('.editarSalaOption').val(respuesta["id"]);
          $('.editarSalaOption').html(respuesta["sala"]);

        }

      })

      $('input[name="editarId"]').val(respuesta["id"]);
      $('input[name="editarEquipo"]').val(respuesta["equipo"]);
      $('input[name="editarObservacion"]').val(respuesta["observacion"]);
      $('.editarEstadoOption').val(respuesta["status"]);
      $('.editarEstadoOption').html(respuesta["status"]);

    }

  })

})

/*=============================================
EDITAR EQUIPO
=============================================*/
const formEditarEquipo = document.getElementById('formEditarEquipo');

formEditarEquipo.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formEditarEquipo);

  try {
    const post = await 	fetch('public/assets/ajax/equipos/editar-equipo.php', {
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
        window.location = "equipos";
        } 
      });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
Eliminar Equipo
=============================================*/

$(document).on("click", ".eliminarEquipo", function(){

  var idEquipo = $(this).attr("idEquipo");

  Swal.fire({
      title: '¿Está seguro de eliminar este equipo?',
      text: "¡Si no lo está puede cancelar la acción!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, eliminar equipo!'
  }).then(function(result){

    if(result.value){

      var datos = new FormData();
         datos.append("idEliminar", idEquipo);

         $.ajax({

          url:"public/assets/ajax/equipos/equipos.ajax.php",
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
                  text: "El equipo ha sido borrado correctamente",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
                 }).then(function(result){

                    if(result.value){

                      window.location = "equipos";

                    }
                
                })

            }

          }

        })  

    }

})

})
</script>