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
          <h3 class="mb-3">Reporte de Fallas</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Reporte de Fallas</li>
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
            <h5>Historial de Reportes</h5>
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Fecha</th>
                    <th>Docente</th>
                    <th>Reporte</th>
                    <th>Opciones</th>
                    <th>Enviar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $reportes = ControladorReportes::ctrMostrarReportes(null, null);
                    foreach ($reportes as $key => $value):
                      $dato = $value["fecha"];
                      $fecha = date('d/m/Y', strtotime($dato));
                      $hora = date('h:i:s', strtotime($dato));

                      $idDocente = $value["id_docente"];
                      $docente = ControladorDocentes::ctrMostrarDocentes("id", $idDocente);

                    $actions = '<div class="btn-group" role="group">
                      <button class="btn btn-success enviarReporte" idReporte="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#modalEnviarReporte" data-whatever="@getbootstrap"><i data-feather="repeat"></i> </button>
                    </div>';	

                    $detalles= ' <a href="index.php?pagina=equipo&id='.$value[0].'"> <button class="btn btn-pill btn-primary btn-lg" type="button"><i data-feather="monitor"></i></button> </a>';
                    $crearReporte = '<button class="btn btn-pill btn-success btn-lg" type="button"><i data-feather="file-text"></i></button>';
                  ?>
                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $fecha ." ". $hora ?></td>
                    <td><?= $docente["nombre"] ?></td>
                    <td><?= $value["reporte"] ?></td>
                    <td><?= $actions ?></td>
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

<!-- MODAL CREAR REPORTE -->
<div class="modal fade" id="modalEnviarReporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-blue">
        <h5 class="modal-title">SOLICITUD DE MANTENIMIENTO Y/O SERVICIO</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formCrearReporte">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                  <div class="form-check form-check-inline radio radio-primary">
                    <input class="form-check-input" id="radioinline1" type="radio" name="radio1" required>
                    <label class="form-check-label mb-0" for="radioinline1">Mantenimiento<span class="digits"></span></label>
                  </div>
                  <div class="form-check form-check-inline radio radio-primary">
                    <input class="form-check-input" id="radioinline2" type="radio" name="radio1">
                    <label class="form-check-label mb-0" for="radioinline2">Servicio<span class="digits"> </span></label>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="mb-3 m-t-15">
                  <div class="form-check checkbox checkbox-primary mb-0">
                    <input class="form-check-input" id="checkbox-primary-1" type="checkbox">
                    <label class="form-check-label" for="checkbox-primary-1">Recursos Materiales</label>
                  </div>
                  <div class="form-check checkbox checkbox-secondary mb-0">
                    <input class="form-check-input" id="checkbox-dark" type="checkbox">
                    <label class="form-check-label" for="checkbox-dark">Mantenimiento de Equipo</label>
                  </div>
                  <div class="form-check checkbox checkbox-success mb-0">
                    <input class="form-check-input" id="checkbox-primary" type="checkbox">
                    <label class="form-check-label" for="checkbox-primary">Centro de Computo</label>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Folio</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="folio" placeholder="Folio" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Fecha de Solicitud</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="calendar"></i> </span>
                    <input type="date" class="form-control" name="fecha" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Area Solicitante</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="home"></i> </span>
                    <input type="text" class="form-control" name="area" placeholder="Area del Solicitante" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Nombre del Solicitante</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="user"></i> </span>
                    <input type="text" class="form-control" name="nombreSolicitante" placeholder="Nombre del Solicitante" autocomplete="off" required>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                    <label class="form-label">Descripción del Servicio Solicitado</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-align-center"></i> </span>
                      <textarea class="form-control" name="reporte" require placeholder="Escribe tu reporte aquí"></textarea>
                      <input class="form-control" type="hidden" name="idDocente" value="<?= $idDocente ?>" required>
                    </div>
                </div>  
              </div>  
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn color-blue" type="submit" disabled>Enviar Reporte</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

  /*=============================================
  CREAR REPORTE
  =============================================*/
  const formCrearReporte = document.getElementById('formCrearReporte');

  formCrearReporte.addEventListener('submit', async (e) => {
    e.preventDefault();

    let datos = new FormData(formCrearReporte);

    try {
      const post = await 	fetch('public/assets/ajax/reportes/crear-reporte.php', {
        method: 'POST',
        body: datos
      })

      const resPost = await post.json();

      console.log(resPost)

      if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'Su reporte ha sido enviado con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
          window.location = "reportar-falla";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })

</script>
