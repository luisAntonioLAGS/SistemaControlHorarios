
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3">Horario</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Horario</li>
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
            <h5>AULA SIII</h5>
          </div>
          <div class="card-body">
            <div>
              <table class="table">
                <thead>
                  <tr class="border-bottom-primary" style="text-align: center">
                    <th>Hora</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                  </tr>
                </thead>

                <?php if($admin["perfil"] == "Administrador") {
                  require_once "hora-s3.php";
                }elseif($admin["perfil"] == "Docente") {
                  require_once "hora-s3-docente.php";
                }
                ?>

                <?php if($admin["perfil"] == "Administrador") {
                  require_once "modals/s3/modalss3-8.php";
                  require_once "modals/s3/modalss3-9.php";
                  require_once "modals/s3/modalss3-10.php";
                  require_once "modals/s3/modalss3-11.php";
                  require_once "modals/s3/modalss3-12.php";
                  require_once "modals/s3/modalss3-13.php";
                  require_once "modals/s3/modalss3-14.php";
                  require_once "modals/s3/modalss3-15.php";
                  require_once "modals/s3/modalss3-16.php";
                  require_once "modals/s3/modalss3-17.php";
                }
                ?>

                <tbody style="text-align: center">
                  <tr class="border-bottom-primary">
                    <td>8:00 - 8:30 </td>
                    <td> 
                      <?php if ($respS3Lunes8 == "0"): ?>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes8; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>9:00 - 9:30 </td>
                    <td> 
                      <?php if ($respS3Lunes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes9; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>10:00 - 10:30 </td>
                    <td> 
                      <?php if ($respS3Lunes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes10; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>11:00 - 11:30 </td>
                    <td> 
                      <?php if ($respS3Lunes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes11; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>12:00 - 12:30 </td>
                    <td> 
                      <?php if ($respS3Lunes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes12; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>13:00 - 13:30 </td>
                    <td> 
                      <?php if ($respS3Lunes13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes13; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>14:00 - 14:30 </td>
                    <td> 
                      <?php if ($respS3Lunes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes14; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>15:00 - 15:30 </td>
                    <td> 
                      <?php if ($respS3Lunes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes15 ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>16:00 - 16:30 </td>
                    <td> 
                      <?php if ($respS3Lunes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes16; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>17:00 - 17:30 </td>
                    <td> 
                      <?php if ($respS3Lunes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Lunes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Lunes17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Martes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Martes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Martes17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Miercoles17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Miercoles17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Miercoles17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Jueves17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Jueves17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Jueves17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS3Viernes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S3Viernes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS3Viernes17; ?> 
                      <?php endif ?>
                    </td>
                  </tr>   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MODAL EDITAR HORARIO -->
<div class="modal fade" id="editarS3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">EDITAR HORARIO</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarHorarioS3">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-laptop-house"></i> </span>
                        <input type="text" class="form-control" name="salaEditar"  id="salaEditar" value="Sala 1" autocomplete="off" required readonly>
                        <input type="hidden" class="form-control" name="idHorarioEditar" id="idHorarioEditar" autocomplete="off" required>
                      </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Dia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-calendar"></i> </span>
                    <input type="text" class="form-control" name="diaEditar" id="diaEditar"  autocomplete="off" value="Jueves" required readonly>
                    </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Entrada</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="horaEditar" id="horaEditar" autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Salida</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="horasEditar" id="horasEditar" autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Materia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                      <select class="form-control" name="editarMateria" required>
                        <option id="editarMateria"></option>
                        <?php
                          $materias = ControladorMaterias::ctrMostrarMaterias(null, null);
                          foreach ($materias as $key => $value) {
                            echo '<option value="' . $value["id"] . '">' . $value["materia"] . '</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Docente</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-user"></i> </span>
                      <select class="form-control" name="editarDocente" required>
                        <option id="editarDocente"></option>
                        <?php
                          $docentes = ControladorDocentes::ctrMostrarDocentes(null, null);
                          foreach ($docentes as $key => $value) : ?>
                          <option value="<?= $value["id"] ?>"> <?= $value["nombre"] ?></option>
                        <?php endforeach ?>
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


<script src="public/assets/js/pages/s3/s3-8.js"></script>
<script src="public/assets/js/pages/s3/s3-9.js"></script>
<script src="public/assets/js/pages/s3/s3-10.js"></script>
<script src="public/assets/js/pages/s3/s3-11.js"></script>
<script src="public/assets/js/pages/s3/s3-12.js"></script>
<script src="public/assets/js/pages/s3/s3-13.js"></script>
<script src="public/assets/js/pages/s3/s3-14.js"></script>
<script src="public/assets/js/pages/s3/s3-15.js"></script>
<script src="public/assets/js/pages/s3/s3-16.js"></script>
<script src="public/assets/js/pages/s3/s3-17.js"></script>

<script src="public/assets/js/pages/options/s3.js"></script>