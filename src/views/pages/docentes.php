<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3">Docentes</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Docentes</li>
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
            <button class="btn btn-pill btn-success" type="button" data-bs-toggle="modal" data-bs-target="#crearDocente" data-whatever="@getbootstrap" > <i class="icon-plus"></i> Crear nuevo Docente</button>          
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Titulo</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Cedula</th>
                    <th>Detalles</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $docentes = ControladorDocentes::ctrMostrarDocentes(null, null);

                    foreach ($docentes as $key => $value):

                    $actions = '<div class="btn-group btn-group-pill" role="group">
                      <button class="btn btn-warning editarDocente" idDocente="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#editarDocente" data-whatever="@getbootstrap">Editar</button>
                      <button class="btn btn-danger eliminarDocente" idDocente="'.$value["id"].'" type="button" data-bs-original-title="" title="">Eliminar</button>
                    </div>';	

                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $value["titulo"] ?></td>
                    <td><?= $value["nombre"] ?></td>
                    <td><?= $value["carrera"] ?></td>
                    <td><?= $value["cedula"] ?></td>
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

<!-- MODAL GUARDAR DOCENTE -->
<div class="modal fade" id="crearDocente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Crear Nuevo Docente</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formGuardarDocente">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Cedula</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="list"></i> </span>
                        <input type="text" class="form-control" name="cedula" placeholder="Cedula" autocomplete="off" required>
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Nombre</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="user-check"></i> </span>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" autocomplete="off" required>   
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Titulo</label>
                    <div class="input-group"><span class="input-group-text"> <i data-feather="type"></i> </span>
                      <input type="text" class="form-control" name="titulo" placeholder="Titulo" autocomplete="off" required>
                    </div>
                  </div> 
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Carrera</label>
                    <div class="input-group"><span class="input-group-text"> <i data-feather="tag"></i> </span>
                      <input type="text" class="form-control" name="carrera" placeholder="Carrera" autocomplete="off" required>
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

<!-- MODAL EDITAR DOCENTE -->
<div class="modal fade" id="editarDocente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Editar Docente</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarDocente">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Cedula</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="list"></i> </span>
                        <input type="text" class="form-control" name="cedulaEditar" placeholder="Cedula" autocomplete="off" required>
                        <input type="hidden" class="form-control" name="idEditar" autocomplete="off" required>
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Nombre</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="user-check"></i> </span>
                        <input type="text" class="form-control" name="nombreEditar" placeholder="Nombre" autocomplete="off" required>   
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Titulo</label>
                    <div class="input-group"><span class="input-group-text"> <i data-feather="type"></i> </span>
                      <input type="text" class="form-control" name="tituloEditar" placeholder="Titulo" autocomplete="off" required>
                    </div>
                  </div> 
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Carrera</label>
                    <div class="input-group"><span class="input-group-text"> <i data-feather="tag"></i> </span>
                      <input type="text" class="form-control" name="carreraEditar" placeholder="Carrera" autocomplete="off" required>
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
GUARDAR DOCENTE
=============================================*/
const formGuardarDocente = document.getElementById('formGuardarDocente');

formGuardarDocente.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formGuardarDocente);

  try {
    const post = await 	fetch('public/assets/ajax/docentes/guardar-docente.php', {
      method: 'POST',
      body: datos
    })

    const resPost = await post.json();

    console.log(resPost)

    if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'El docente ha sido guardado con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
            window.location = "docentes";
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

$(document).on("click", ".editarDocente", function(){

  var idDocente = $(this).attr("idDocente");

  var datos = new FormData();
  datos.append("idDocente", idDocente);

  $.ajax({
    url:"public/assets/ajax/docentes/docentes.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success:function(respuesta){ 	
      console.log(respuesta)

      $('input[name="idEditar"]').val(respuesta["id"]);
      $('input[name="cedulaEditar"]').val(respuesta["cedula"]);
      $('input[name="nombreEditar"]').val(respuesta["nombre"]);
      $('input[name="tituloEditar"]').val(respuesta["titulo"]);
      $('input[name="carreraEditar"]').val(respuesta["carrera"]);
    

    }

  })

})

/*=============================================
EDITAR DOCENTE
=============================================*/
const formEditarDocente = document.getElementById('formEditarDocente');

formEditarDocente.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formEditarDocente);

  try {
    const post = await 	fetch('public/assets/ajax/docentes/editar-docente.php', {
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
        window.location = "docentes";
        } 
      });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
ELIMINAR DOCENTE
=============================================*/

$(document).on("click", ".eliminarDocente", function(){

  var idDocente = $(this).attr("idDocente");

  Swal.fire({
      title: '¿Está seguro de eliminar este docente?',
      text: "¡Si no lo está puede cancelar la acción!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, eliminar docente!'
  }).then(function(result){

    if(result.value){

      var datos = new FormData();
         datos.append("idEliminar", idDocente);

         $.ajax({

          url:"public/assets/ajax/docentes/docentes.ajax.php",
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
                  text: "El docente ha sido borrado correctamente",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
                 }).then(function(result){

                    if(result.value){

                      window.location = "docentes";

                    }
                
                })

            }

          }

        })  

    }

})

})
</script>