
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
            <h5>AULA SI</h5>
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
                  require_once "hora-s1.php";
                }elseif($admin["perfil"] == "Docente") {
                  require_once "hora-s1-docente.php";
                }
                ?>

                <?php if($admin["perfil"] == "Administrador") {
                  require_once "modals/s1/modalss1-8.php";
                  require_once "modals/s1/modalss1-9.php";
                  require_once "modals/s1/modalss1-10.php";
                  require_once "modals/s1/modalss1-11.php";
                  require_once "modals/s1/modalss1-12.php";
                  require_once "modals/s1/modalss1-13.php";
                  require_once "modals/s1/modalss1-14.php";
                  require_once "modals/s1/modalss1-15.php";
                  require_once "modals/s1/modalss1-16.php";
                  require_once "modals/s1/modalss1-17.php";
                }
                ?>

                <tbody style="text-align: center">
                  <tr class="border-bottom-primary">
                    <td>8:00 - 8:30 </td>
                    <td> 
                      <?php if ($respS1Lunes8 == "0"): ?>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles8; ?> </br> 
                         
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves8; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes8 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes8" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes8; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>9:00 - 9:30 </td>
                    <td> 
                      <?php if ($respS1Lunes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves9; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes9 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes9" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes9; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>10:00 - 10:30 </td>
                    <td> 
                      <?php if ($respS1Lunes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves10; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes10 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes10" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes10; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>11:00 - 11:30 </td>
                    <td> 
                      <?php if ($respS1Lunes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves11; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes11 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes11" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes11; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>12:00 - 12:30 </td>
                    <td> 
                      <?php if ($respS1Lunes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves12; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes12 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes12" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes12; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>13:00 - 13:30 </td>
                    <td> 
                      <?php if ($respS1Lunes13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves13; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes13 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes13" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes13; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>14:00 - 14:30 </td>
                    <td> 
                      <?php if ($respS1Lunes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves14; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes14 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes14" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes14; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>15:00 - 15:30 </td>
                    <td> 
                      <?php if ($respS1Lunes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves15; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes15 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes15" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes15; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>16:00 - 16:30 </td>
                    <td> 
                      <?php if ($respS1Lunes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves16; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes16 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes16" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes16; ?> 
                      <?php endif ?>
                    </td>
                  </tr>
                  <tr class="border-bottom-primary">
                    <td>17:00 - 17:30 </td>
                    <td> 
                      <?php if ($respS1Lunes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Lunes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Lunes17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Martes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Martes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Martes17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Miercoles17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Miercoles17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Miercoles17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Jueves17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Jueves17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Jueves17; ?> 
                      <?php endif ?>
                    </td>
                    <td> 
                      <?php if ($respS1Viernes17 == "0"): ?>
                          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#S1Viernes17" data-whatever="@getbootstrap"><i data-feather="clock"></i></button>
                        <?php else : ?>
                          <?= $respS1Viernes17; ?> 
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
<div class="modal fade" id="editarS1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">EDITAR HORARIO</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarHorarioS1">   
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


<script src="public/assets/js/pages/s1/s1-8.js"></script>
<script src="public/assets/js/pages/s1/s1-9.js"></script>
<script src="public/assets/js/pages/s1/s1-10.js"></script>
<script src="public/assets/js/pages/s1/s1-11.js"></script>
<script src="public/assets/js/pages/s1/s1-12.js"></script>
<script src="public/assets/js/pages/s1/s1-13.js"></script>
<script src="public/assets/js/pages/s1/s1-14.js"></script>
<script src="public/assets/js/pages/s1/s1-15.js"></script>
<script src="public/assets/js/pages/s1/s1-16.js"></script>
<script src="public/assets/js/pages/s1/s1-17.js"></script>

<script src="public/assets/js/pages/options/s1.js"></script>