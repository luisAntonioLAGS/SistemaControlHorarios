<?php
  if($admin["perfil"] !== "Administrador"){
    echo '<script>

      window.location = "error404";

    </script>';
  }
?>

<?php

@$verReportes = new ControladorReportes();
@$verReportes -> ctrVerReportes();

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
                      <button class="btn btn-success enviarReporte" idReporte="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#modalEnviarReporte" data-whatever="@getbootstrap"><i class="fa fa-upload"></i> </button>
                    </div>';	

                    $detalles= ' <a href="public/assets/documents/Mantenimiento.docx"> <button class="btn btn-pill btn-primary btn-lg" type="button"><i class="fa fa-file-word-o"></i></button> </a>';
                    $crearReporte = '<button class="btn btn-pill btn-success btn-lg" type="button"><i data-feather="file-text"></i></button>';
                  ?>
                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $fecha ." ". $hora ?></td>
                    <td><?= $docente["nombre"] ?></td>
                    <td><?= $value["reporte"] ?></td>
                    <td><?= $detalles ?></td>
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
      <form method="post" enctype="multipart/form-data">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Archivo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="file" class="form-control" name="resume"  required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Email</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="mail"></i> </span>
                    <input type="email" class="form-control" name="email" autocomplete="off" required>
                  </div>
                </div>
              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn color-blue" type="submit">Enviar Reporte</button>
        </div>

        <?php

          $enviarEmail = new ControladorReportes();
          $enviarEmail -> ctrEnviarEmail();

		    ?>
      </form>
    </div>
  </div>
</div>


