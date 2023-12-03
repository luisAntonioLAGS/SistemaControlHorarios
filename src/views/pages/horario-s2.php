
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
            <h5>AULA SII</h5>
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
                  require_once "hora-s2.php";
                }elseif($admin["perfil"] == "Docente") {
                  require_once "hora-s2-docente.php";
                }
                ?>

                <?php if($admin["perfil"] == "Administrador") {
                  require_once "modals/s2/modalss2-8.php";
                  require_once "modals/s2/modalss2-9.php";
                  require_once "modals/s2/modalss2-10.php";
                  require_once "modals/s2/modalss2-11.php";
                  require_once "modals/s2/modalss2-12.php";
                  require_once "modals/s2/modalss2-13.php";
                  require_once "modals/s2/modalss2-14.php";
                  require_once "modals/s2/modalss2-15.php";
                  require_once "modals/s2/modalss2-16.php";
                  require_once "modals/s2/modalss2-17.php";
                }
                ?>

                <tbody style="text-align: center">
                  <tr class="border-bottom-primary">
                    <td>8:00 - 8:30 </td>
                    <td> 
                      <?php if ($respS2Lunes8 == "0"): ?>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes8; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>9:00 - 9:30 </td>
                    <td> 
                      <?php if ($respS2Lunes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes9; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>10:00 - 10:30 </td>
                    <td> 
                      <?php if ($respS2Lunes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes10; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>11:00 - 11:30 </td>
                    <td> 
                      <?php if ($respS2Lunes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes11; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>12:00 - 12:30 </td>
                    <td> 
                      <?php if ($respS2Lunes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes12; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>13:00 - 13:30 </td>
                    <td> 
                      <?php if ($respS2Lunes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes13; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>14:00 - 14:30 </td>
                    <td> 
                      <?php if ($respS2Lunes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes14; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>15:00 - 15:30 </td>
                    <td> 
                      <?php if ($respS2Lunes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes15 ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>16:00 - 16:30 </td>
                    <td> 
                      <?php if ($respS2Lunes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes16; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>17:00 - 17:30 </td>
                    <td> 
                      <?php if ($respS2Lunes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Lunes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Lunes17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Martes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Martes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Martes17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Miercoles17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Miercoles17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Miercoles17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Jueves17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Jueves17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Jueves17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS2Viernes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S2Viernes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS2Viernes17; ?> 
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
<div class="modal fade" id="editarS2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">EDITAR HORARIO</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarHorarioS2">   
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


<script src="public/assets/js/pages/s2/S2-8.js"></script>
<script src="public/assets/js/pages/s2/S2-9.js"></script>
<script src="public/assets/js/pages/s2/S2-10.js"></script>
<script src="public/assets/js/pages/s2/S2-11.js"></script>
<script src="public/assets/js/pages/s2/S2-12.js"></script>
<script src="public/assets/js/pages/s2/S2-13.js"></script>
<script src="public/assets/js/pages/s2/S2-14.js"></script>
<script src="public/assets/js/pages/s2/S2-15.js"></script>
<script src="public/assets/js/pages/s2/S2-16.js"></script>
<script src="public/assets/js/pages/s2/S2-17.js"></script>

<script src="public/assets/js/pages/options/s2.js"></script>