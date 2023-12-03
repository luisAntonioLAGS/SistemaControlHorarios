<?php
if ($admin["perfil"] !== "Administrador") {
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
          <h3 class="mb-3">Equipos</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <a class="imprimirReportes" href="pdf/reporte-inventario.php" target="blank"> <button class="btn btn-pill btn-success btn-lg" type="button" title="Seleccione los reportes que desee imprimir, o bien no seleccione ningún elemento para imprimir todo">IMPRIMIR <i data-feather="printer"></i></button> </a>
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
            <button class="btn btn-pill btn-success" type="button" data-bs-toggle="modal" data-bs-target="#nuevoEquipo" data-whatever="@getbootstrap"> <i class="icon-plus"></i> AGREGAR EQUIPO</button>
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th class="center">Seleccionar / N°</th>
                    <th class="center">Equipo</th>
                    <th class="center">Sala</th>
                    <th class="center">Detalle / Imprimir</th>
                    <th class="center">Acciones</th>
                  </tr>
                </thead>
                <tbody id="equiposTableBody">
                  <?php $equipos = ControladorEquipos::ctrMostrarEquipos(null, null);
                  foreach ($equipos as $key => $value) :

                    $idSala = $value["id_sala"];
                    $sala = ControladorSalas::ctrMostrarSalas("id", $idSala);

                    $mas = '<div class="btn-group d-flex justify-content-center" role="group">
                            <a href="index.php?pagina=equipo&id=' . $value[0] . '"> 
                            <button class="btn btn-pill btn-primary btn-lg" type="button"><i data-feather="monitor"></i></button>
                            </a>
                            <a href="pdf/reporte-equipo.php?&id=' . $value[0] . '" target="blank"> 
                              <button class="btn btn-pill btn-success btn-lg" type="button"><i data-feather="printer"></i></button>
                            </a>
                          </div>';

                    $actions = '<div class="btn-group btn-group-pill d-flex justify-content-center" role="group">
                      <button class="btn btn-warning editarEquipo" idEquipo="' . $value["id"] . '" type="button" data-bs-toggle="modal" data-bs-target="#modalEditarEquipo" data-whatever="@getbootstrap"><i class="fa-solid fa-pen-to-square"></i> Editar</button>
                      <button class="btn btn-danger eliminarEquipo" idEquipo="' . $value["id"] . '" type="button" data-bs-original-title="" title=""><i class="fa-regular fa-trash-can"></i> Eliminar</button>
                    </div>';
                  ?>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input seleccionarEquipo" name="seleccionarEquipo" type="checkbox" value="<?= $value["id"]; ?>" style="height: 1em; width: 1em;">
                          <label class="form-check-label" for="flexCheckChecked"><?= ($key + 1) ?></label>
                        </div>
                      </td>

                      <td><?= $value["equipo"] ?></td>
                      <td><?= $sala["sala"] ?></td>
                      <td><?= $mas ?></td>
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

<!-- MODAL GUARDAR EQUIPO -->
<div class="modal fade" id="nuevoEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header color-blue">
        <h5 class="modal-title">NUEVO EQUIPO</h5>
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
                    <input type="text" class="form-control" name="observacion" placeholder="Observacion" autocomplete="off">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn color-blue" type="submit">Guardar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- MODAL EDITAR EQUIPO -->
<div class="modal fade" id="modalEditarEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header color-blue">
        <h5 class="modal-title">EDITAR EQUIPO</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formEditarEquipo">
        <div class="modal-body">
          <div class="card-body">
            <div class="row">

              <div class="col-md-6">
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
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Código</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="editarEquipo" placeholder="Código del Equipo" autocomplete="off" required>
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
                    <input type="text" class="form-control" name="editarSerieTeclado" placeholder="Serie del Teclado" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Modelo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="editarModeloTeclado" placeholder="Modelo del Teclado" autocomplete="off" required>
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
                    <input type="text" class="form-control" name="editarSerieMouse" placeholder="Serie del Mouse" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Modelo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="editarModeloMouse" placeholder="Modelo del Mouse" autocomplete="off" required>
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
                    <input type="text" class="form-control" name="editarSeriePantalla" placeholder="Serie de la Pantalla" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Modelo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="editarModeloPantalla" placeholder="Modelo de la Pantalla" autocomplete="off" required>
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
                    <input type="text" class="form-control" name="editarSerieCpu" placeholder="Serie del Cpu" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Modelo</label>
                  <div class="input-group"><span class="input-group-text"> <i data-feather="code"></i> </span>
                    <input type="text" class="form-control" name="editarModeloCpu" placeholder="Modelo del Cpu" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Adaptador de Red</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-network-wired"></i> </span>
                    <input type="text" class="form-control" name="editarAdaptadorRed" placeholder="Adaptador de Red" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">RAM</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-memory"></i> </span>
                    <input type="text" class="form-control" name="editarRam" placeholder="RAM" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Procesador</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-microchip"></i> </span>
                    <input type="text" class="form-control" name="editarProcesador" placeholder="Procesador" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">Disco Duro</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-hard-drive"></i> </span>
                    <input type="text" class="form-control" name="editarDisco" placeholder="Disco Duro" autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3 m-form__group">
                  <label class="form-label">CD ROM</label>
                  <div class="input-group"><span class="input-group-text"> <i class="fa-solid fa-compact-disc"></i> </span>
                    <input type="text" class="form-control" name="editarCd" placeholder="CD ROM" autocomplete="off" required>
                    <input type="hidden" class="form-control" name="editarId" required>
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
          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn color-blue" type="submit">Guardar</button>
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
      const post = await fetch('public/assets/ajax/equipos/guardar-equipo.php', {
        method: 'POST',
        body: datos
      })

      const resPost = await post.json();

      console.log(resPost)

      if (resPost.ok) {

        Swal.fire(
          'Correcto!',
          'El equipo ha sido guardado con éxito!',
          'success'
        ).then(function(result) {

          if (result.value) {
            window.location = "equipos";
          }
        });
      }

    } catch (error) {
      console.log(error);

    }
  });

  /*=============================================
  IMPRIMIR LOS REPORTES SELECCIONADOS
  =============================================*/
  $(document).ready(function() {
    $(document).on("click", ".imprimirReportes", function(e) {
      e.preventDefault();
      $('#responsive').DataTable().destroy();

      let equiposSeleccionados = [];
      $("#equiposTableBody tr").each(function() {
        const fila = $(this);
        if ($(this).find(".seleccionarEquipo:checked").length > 0) {
          const id = fila.find('input[name="seleccionarEquipo"]').val();
          const valorCheckbox = $(this).find('input[name="seleccionarEquipo"]').val();
          //console.log("Valor del checkbox seleccionado:", valorCheckbox);
          equiposSeleccionados.push(valorCheckbox);
        }
      });

      // Construir la URL con los equipos seleccionados
      equiposSeleccionados = equiposSeleccionados.length > 0 ? equiposSeleccionados.join(',') : 'all';
      const url = `pdf/reporte-inventario.php?equipos=${equiposSeleccionados}`;
      //console.log(equiposSeleccionados);
      // Abrir la URL en una nueva pestaña
      window.open(url, '_blank');

      $('#responsive').DataTable({
        responsive: true
      });
    });
  });

  /*=============================================
  MOSTRAR DATOS DEL EQUIPO EN LA VENTANA MODAL
  =============================================*/

  $(document).on("click", ".editarEquipo", function() {

    var idEquipo = $(this).attr("idEquipo");

    var datos = new FormData();
    datos.append("idEquipo", idEquipo);

    $.ajax({
      url: "public/assets/ajax/equipos/equipos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta) {

        var datosSala = new FormData();
        datosSala.append("idSala", respuesta["id_sala"]);

        $.ajax({

          url: "public/assets/ajax/salas/salas.ajax.php",
          method: "POST",
          data: datosSala,
          cache: false,
          contentType: false,
          processData: false,
          dataType: "json",
          success: function(respuesta) {

            console.log(respuesta)

            $('.editarSalaOption').val(respuesta["id"]);
            $('.editarSalaOption').html(respuesta["sala"]);

          }

        })

        $('input[name="editarId"]').val(respuesta["id"]);
        $('input[name="editarEquipo"]').val(respuesta["equipo"]);
        $('input[name="editarSerieTeclado"]').val(respuesta["serie_teclado"]);
        $('input[name="editarModeloTeclado"]').val(respuesta["modelo_teclado"]);
        $('input[name="editarSerieMouse"]').val(respuesta["serie_mouse"]);
        $('input[name="editarModeloMouse"]').val(respuesta["modelo_mouse"]);
        $('input[name="editarSeriePantalla"]').val(respuesta["serie_pantalla"]);
        $('input[name="editarModeloPantalla"]').val(respuesta["modelo_pantalla"]);
        $('input[name="editarSerieCpu"]').val(respuesta["serie_cpu"]);
        $('input[name="editarModeloCpu"]').val(respuesta["modelo_cpu"]);
        $('input[name="editarAdaptadorRed"]').val(respuesta["adaptador_red"]);
        $('input[name="editarRam"]').val(respuesta["ram"]);
        $('input[name="editarProcesador"]').val(respuesta["procesador"]);
        $('input[name="editarDisco"]').val(respuesta["disco_duro"]);
        $('input[name="editarCd"]').val(respuesta["cd_rom"]);
        $('input[name="editarObservacion"]').val(respuesta["observacion"]);


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
      const post = await fetch('public/assets/ajax/equipos/editar-equipo.php', {
        method: 'POST',
        body: datos
      })

      const resPost = await post.json();

      console.log(resPost)

      if (resPost.ok) {

        Swal.fire(
          'Correcto!',
          'Los datos han sido actualizados con éxito!',
          'success'
        ).then(function(result) {

          if (result.value) {
            window.location = "equipos";
          }
        });
      }

    } catch (error) {
      console.log(error);

    }
  });

  /*=============================================
  Eliminar Equipo
  =============================================*/

  $(document).on("click", ".eliminarEquipo", function() {

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
    }).then(function(result) {

      if (result.value) {

        var datos = new FormData();
        datos.append("idEliminar", idEquipo);

        $.ajax({

          url: "public/assets/ajax/equipos/equipos.ajax.php",
          method: "POST",
          data: datos,
          cache: false,
          contentType: false,
          processData: false,
          success: function(respuesta) {

            if (respuesta == "ok") {

              Swal.fire({
                type: "success",
                title: "¡CORRECTO!",
                text: "El equipo ha sido borrado correctamente",
                showConfirmButton: true,
                confirmButtonText: "Cerrar",
                closeOnConfirm: false
              }).then(function(result) {

                if (result.value) {

                  window.location = "equipos";

                }

              })

            }

          }

        })

      }

    })

  });
</script>