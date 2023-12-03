<?php
   require_once "../src/controllers/equipos.controlador.php";
   require_once "../src/models/equipos.modelo.php";

   require_once "../src/controllers/salas.controlador.php";
   require_once "../src/models/salas.modelo.php";

  $idEquipo = $_GET["id"];
  $equipo = ControladorEquipos::ctrMostrarEquipos("id", $idEquipo);

  $idSala = $equipo["id_sala"];
  $sala = ControladorSalas::ctrMostrarSalas("id", $idSala);

?>

<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Reporte de Equipos</title></head><body>
   <div class="row">
      <div class="col-xl-9 col-md-12 box-col-12">
         <div class="email-right-aside bookmark-tabcontent">
            <div class="card email-body radius-left">
               <div class="ps-0">
                  <div class="tab-content">
                     <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div class="card mb-0">
                           <div class="card-header d-flex" style="text-align:center">
                              <h4 class="mb-0">Información General</h4> Equipo: <?= $equipo["equipo"] ?>  - <?= $sala["sala"] ?>
                           </div>
                           <div style="margin-top:20px">
                              <div>
                                 <div style="background:#014e82; color:#fff; text-align:center ">
                                    <p><b> TECLADO </b></p>   
                                 </div>
                                 <div class="table-responsive">
                                    <table border="1" cellspacing="0" width="545" class="table" style="text-align:center" border:"1">       
                                       <tr>
                                          <td>
                                             <h4>Serie:</h4>
                                          </td>
                                          <td>
                                          <?= $equipo["serie_teclado"] ?>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <h4>Modelo:</h4>
                                          </td>
                                          <td>
                                             <?= $equipo["modelo_teclado"] ?>
                                          </td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                              <!-- Mouse -->
                              <div>
                                 <div style="background:#014e82; color:#fff; text-align:center ">
                                    <p><b> MOUSE </b></p>   
                                 </div>
                                 <div class="table-responsive">
                                    <table border="1" cellspacing="0" width="545" class="table" style="text-align:center" border:"1">       
                                       <tr>
                                          <td>
                                             <h4>Serie:</h4>
                                          </td>
                                          <td>
                                          <?= $equipo["serie_mouse"] ?>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <h4>Modelo:</h4>
                                          </td>
                                          <td>
                                             <?= $equipo["modelo_mouse"] ?>
                                          </td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                              <!-- Pantalla -->
                              <div>
                                 <div style="background:#014e82; color:#fff; text-align:center ">
                                    <p><b> PANTALLA </b></p>   
                                 </div>
                                 <div class="table-responsive">
                                    <table border="1" cellspacing="0" width="545" class="table" style="text-align:center" border:"1">       
                                       <tr>
                                          <td>
                                             <h4>Serie:</h4>
                                          </td>
                                          <td>
                                          <?= $equipo["serie_pantalla"] ?>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <h4>Modelo:</h4>
                                          </td>
                                          <td>
                                             <?= $equipo["modelo_pantalla"] ?>
                                          </td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                              <!-- CPU -->
                              <div>
                                 <div style="background:#014e82; color:#fff; text-align:center ">
                                    <p><b> CPU </b></p>   
                                 </div>
                                 <div class="table-responsive">
                                    <table border="1" cellspacing="0" width="545" class="table" style="text-align:center" border:"1">       
                                       <tr>
                                          <td>
                                             <h4>Serie:</h4>
                                          </td>
                                          <td>
                                             <h4>Modelo:</h4>
                                          </td>
                                          <td>
                                             <h4>Adaptador de Red:</h4>
                                          </td>
                                          <td>
                                             <h4>RAM:</h4>
                                          </td>
                                          <td>
                                             <h4>Procesador:</h4>
                                          </td>
                                          <td>
                                             <h4>Disco Duro:</h4>
                                          </td>
                                          <td>
                                             <h4>CD ROM:</h4>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <?= $equipo["serie_cpu"] ?>
                                          </td>
                                          <td>
                                             <?= $equipo["modelo_cpu"] ?>
                                          </td>
                                          <td>
                                             <?= $equipo["adaptador_red"] ?>
                                          </td>
                                          <td>
                                             <?= $equipo["ram"] ?>
                                          </td>
                                          <td>
                                             <?= $equipo["procesador"] ?>
                                          </td>
                                          <td>
                                             <?= $equipo["disco_duro"] ?>
                                          </td>
                                          <td>
                                             <?= $equipo["cd_rom"] ?>
                                          </td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body></html>