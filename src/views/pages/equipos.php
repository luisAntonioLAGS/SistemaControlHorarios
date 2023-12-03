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
            <!-- <button class="btn btn-pill btn-success" type="button" data-bs-toggle="modal" data-bs-target="#crearSala" data-whatever="@getbootstrap" > <i class="icon-plus"></i> Agregar</button>           -->
            <h5>Inventario de Equipos</h5>
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Equipo</th>
                    <th>Sala</th>
                    <th>Detalles</th>
                    
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

                    $detalles= ' <a href="index.php?pagina=equipo&id='.$value[0].'"> <button class="btn btn-pill btn-primary btn-lg" type="button"><i data-feather="monitor"></i></button> </a>';

                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $value["equipo"] ?></td>
                    <td><?= $sala["sala"] ?></td>
                    <td><?= $detalles ?></td>
                   
                    
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

              <div class="col-md-6">
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
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Código</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="registroEquipo" placeholder="Código del Equipo" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <div class="alert alert-dark inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-keyboard"></i>
                  <p><b> Teclado </b></p>
                </div>
              </div>
                
              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Serie</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="serieTeclado" placeholder="Serie del Teclado" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Modelo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="modeloTeclado" placeholder="Modelo del Teclado" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <div class="alert alert-dark inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-computer-mouse"></i>
                  <p><b> Mouse </b></p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Serie</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="serieMouse" placeholder="Serie del Mouse" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Modelo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="modeloMouse" placeholder="Modelo del Mouse" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <div class="alert alert-dark inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-desktop"></i>
                  <p><b> Pantalla </b></p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Serie</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="seriePantalla" placeholder="Serie de la Pantalla" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Modelo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="modeloPantalla" placeholder="Modelo de la Pantalla" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <div class="alert alert-dark inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-server"></i>
                  <p><b> CPU </b></p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Serie</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="serieCpu" placeholder="Serie del Cpu" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Modelo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="modeloCpu" placeholder="Modelo del Cpu" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Adaptador de Red</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-network-wired"></i> </span>
                    <input type="text" class="form-control" name="adaptadorRed" placeholder="Adaptador de Red" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">RAM</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-memory"></i> </span>
                    <input type="text" class="form-control" name="ram" placeholder="RAM" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Procesador</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-microchip"></i> </span>
                    <input type="text" class="form-control" name="procesador" placeholder="Procesador" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Disco Duro</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-hard-drive"></i> </span>
                    <input type="text" class="form-control" name="disco" placeholder="Disco Duro" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">CD ROM</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-compact-disc"></i> </span>
                    <input type="text" class="form-control" name="cd" placeholder="CD ROM" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6"> 
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