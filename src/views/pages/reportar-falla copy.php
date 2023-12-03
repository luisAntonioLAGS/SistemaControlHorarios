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
            <h5>Reportar Falla</h5>
          </div>
          <div class="card-body">
            <div>
              <?php
                $idDocente = $admin["id"];
                $reservas = ControladorReservas::ctrMostrarMisReservasActivas($idDocente);
                @$idSala = $reservas["id_sala"];
              ?>

              <!-- Equipos -->

              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Equipo</th>
                    <th>Sala</th>
                    <th>Detalles</th>
                    <th>Crear Reporte</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $equipos = ControladorEquipos::ctrMostrarEquiposSala("id_sala", $idSala);

                    foreach ($equipos as $key => $value):

                      $idSala = $value["id_sala"];
                      $sala = ControladorSalas::ctrMostrarSalas("id", $idSala);

                    $actions = '<div class="btn-group btn-group-pill" role="group">
                      <button class="btn btn-warning editarEquipo" idEquipo="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#editarEquipo" data-whatever="@getbootstrap">Editar</button>
                      <button class="btn btn-danger eliminarEquipo" idEquipo="'.$value["id"].'" type="button" data-bs-original-title="" title="">Eliminar</button>
                    </div>';	

                    $detalles= ' <a href="index.php?pagina=equipo&id='.$value[0].'"> <button class="btn btn-pill btn-primary btn-lg" type="button"><i data-feather="monitor"></i></button> </a>';
                    $crearReporte = '<button class="btn btn-pill btn-success btn-lg" type="button"><i data-feather="file-text"></i></button>';
                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $value["equipo"] ?></td>
                    <td><?= $sala["sala"] ?></td>
                    <td><?= $detalles ?></td>
                    <td><?= $crearReporte ?></td>
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
