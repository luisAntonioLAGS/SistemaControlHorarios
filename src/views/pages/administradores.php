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
          <h3 class="mb-3">Administradores</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Administradores</li>
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
            <button class="btn btn-pill btn-success" type="button" data-bs-toggle="modal" data-bs-target="#crearAdministrador" data-whatever="@getbootstrap" > <i class="icon-plus"></i> Crear nuevo Administrador</button>          
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <?php 
                      if($admin["perfil"] == "Administrador") : ?>
                      <th>Acciones</th>
                    <?php endif ?>
                  </tr>
                </thead>
                <tbody>
                  <?php $administradores = ControladorAdministradores::ctrMostrarAdministradores(null, null);

                    foreach ($administradores as $key => $value):

                    $actions = '<div class="btn-group btn-group-pill" role="group">
                      <button class="btn btn-warning editarAdministrador" idAdministrador="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#editarAdministrador" data-whatever="@getbootstrap">Editar</button>
                      <button class="btn btn-danger eliminarAdministrador" idAdministrador="'.$value["id"].'" type="button" data-bs-original-title="" title="">Eliminar</button>
                    </div>';	

                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $value["nombre"] ?></td>
                    <td><?= $value["usuario"] ?></td>
                    <td><?= $value["perfil"] ?></td>
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

<!-- MODAL GUARDAR ADMINISTRADOR -->
<div class="modal fade" id="crearAdministrador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Crear nuevo administrador</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formGuardarAdministrador">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Nombre</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="user"></i> </span>
                        <input type="text" class="form-control" name="registroNombre" placeholder="Ingresa el nombre" autocomplete="off" required>
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Usuario</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="user-check"></i> </span>
                        <input type="text" class="form-control" name="registroUsuario" placeholder="Ingresa el usuario" autocomplete="off" required>   
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Contraseña</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="lock"></i> </span>
                        <input type="password" class="form-control" name="registroPassword" placeholder="Ingresa la contraseña" required>
                      </div>
                  </div>  
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Perfil</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="at-sign"></i> </span>
                        <select class="form-control" name="registroPerfil" required>
                          <option value="">Seleccione un perfil</option>
                          <option value="Administrador">Administrador</option>
                          <option value="Jefe de Area">Jefe de Área</option>
                          <option value="Docente">Docente</option>
                        </select>
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

<!-- MODAL EDITAR ADMINISTRADOR -->
<div class="modal fade" id="editarAdministrador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Editar administrador</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarAdministrador">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Nombre</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="user"></i> </span>
                        <input type="text" class="form-control" name="editarNombre" placeholder="Ingresa el nombre" autocomplete="off" required>
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Usuario</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="user-check"></i> </span>
                        <input type="text" class="form-control" name="editarUsuario" placeholder="Ingresa el usuario" autocomplete="off" required>   
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Contraseña</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="lock"></i> </span>
                        <input type="password" class="form-control" name="editarPassword" placeholder="Cambie la contraseña"> 
                        <input type="hidden" name="passwordActual"> 
                        <input type="hidden" name="editarId">    
                      </div>
                  </div>  
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Perfil</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="at-sign"></i> </span>
                        <select class="form-control" name="editarPerfil" required>
                          <option class="editarPerfilOption"></option>
                          <option value="Administrador">Administrador</option>
                          <option value="Jefe de Area">Jefe de Área</option>
                          <option value="Docente">Docente</option>
                        </select>
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
GUARDAR ADMINISTRADOR
=============================================*/
const formGuardarAdministrador = document.getElementById('formGuardarAdministrador');

formGuardarAdministrador.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formGuardarAdministrador);

  try {
    const post = await 	fetch('public/assets/ajax/administradores/guardar-administrador.php', {
      method: 'POST',
      body: datos
    })

    const resPost = await post.json();

    console.log(resPost)

    if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'El administrador ha sido guardado con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
            window.location = "administradores";
          } 
        });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
MOSTRAR DATOS DEL ADMINISTRADOR EN LA VENTANA MODAL
=============================================*/

$(document).on("click", ".editarAdministrador", function(){

  var idAdministrador = $(this).attr("idAdministrador");

  var datos = new FormData();
  datos.append("idAdministrador", idAdministrador);

  $.ajax({
    url:"public/assets/ajax/administradores/administradores.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success:function(respuesta){ 	
    
      $('input[name="editarId"]').val(respuesta["id"]);
      $('input[name="editarNombre"]').val(respuesta["nombre"]);
      $('input[name="editarUsuario"]').val(respuesta["usuario"]);
      $('input[name="passwordActual"]').val(respuesta["password"]);
      $('input[name="editarEmail"]').val(respuesta["email"]);
      $('.editarPerfilOption').val(respuesta["perfil"]);
      $('.editarPerfilOption').html(respuesta["perfil"]);

    }

  })

})

/*=============================================
EDITAR ADMINISTRADOR
=============================================*/
const formEditarAdministrador = document.getElementById('formEditarAdministrador');

formEditarAdministrador.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formEditarAdministrador);

  try {
    const post = await 	fetch('public/assets/ajax/administradores/editar-administrador.php', {
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
        window.location = "administradores";
        } 
      });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
Eliminar Administrador
=============================================*/

$(document).on("click", ".eliminarAdministrador", function(){

  var idAdministrador = $(this).attr("idAdministrador");

  if(idAdministrador == 1){

    Swal.fire({
      title: "Error",
      text: "Este administrador no se puede eliminar",
      type: "error",
      confirmButtonText: "¡Cerrar!"
    });

    return;

  }

  Swal.fire({
      title: '¿Está seguro de eliminar este administrador?',
      text: "¡Si no lo está puede cancelar la acción!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, eliminar administrador!'
  }).then(function(result){

    if(result.value){

      var datos = new FormData();
         datos.append("idEliminar", idAdministrador);

         $.ajax({

          url:"public/assets/ajax/administradores/administradores.ajax.php",
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
                  text: "El administrador ha sido borrado correctamente",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
                 }).then(function(result){

                    if(result.value){

                      window.location = "administradores";

                    }
                
                })

            }

          }

        })  

    }

})

})
</script>