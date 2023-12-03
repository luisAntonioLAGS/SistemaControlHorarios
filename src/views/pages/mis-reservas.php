<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3">Mis Reservas</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Mis Reservas</li>
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
            <h5>Historial</h5>          
          </div>
          <div class="card-body">
            <div>
              <table class="display tablas" id="responsive">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Fecha</th>
                    <th>Sala</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $idDocente = $admin["id"];
                    $reservas = ControladorReservas::ctrMostrarMisReservas("id_docente", $idDocente);

                    foreach ($reservas as $key => $value):

                      $dato = $value["fecha"];
                      $fecha = date('d/m/Y', strtotime($dato));

                      $idSala = $value["id_sala"];
                      $sala = ControladorSalas::ctrMostrarSalas("id", $idSala);

                      $reservaActiva = '<button class="btn btn-pill btn-success active cerrarReserva" idReserva="'.$value["id"].'" type="button">Cerrar Reserva</button>';
                      $reservaCerrada = '<button class="btn btn-pill btn-danger active" type="button">Cerrada</button>';

              
                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $fecha ?></td>
                    <td><?= $sala["sala"] ?></td>
                    <td><?= $value["hora_inicio"] ?></td>
                    <td><?= $value["hora_fin"] ?></td>
                   
                    <td>
                      <?php
                        if($value["status"] == "0") {
                          echo $reservaCerrada;
                        }else{
                          echo $reservaActiva;
                        }
                      ?>
                    </td>
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

<script>

/*=============================================
Cerrar Reserva
=============================================*/

$(document).on("click", ".cerrarReserva", function(){

  var idReserva = $(this).attr("idReserva");

  Swal.fire({
      title: '¿Estás seguro de cerrar esta reserva?',
      text: "¡Si no lo estás puedes cancelar la acción!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, cerrar reserva!'
  }).then(function(result){

    if(result.value){

      var datos = new FormData();
         datos.append("idEliminar", idReserva);

         $.ajax({

          url:"public/assets/ajax/reservas/reservas.ajax.php",
          method: "POST",
          data: datos,
          cache: false,
          contentType: false,
          processData: false,
          success:function(respuesta){

            console.log(respuesta)

            if(respuesta == "ok"){

              Swal.fire({
                  type: "success",
                  title: "¡MUY BIEN!",
                  text: "La reserva ha sido cerrada correctamente",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
                 }).then(function(result){

                    if(result.value){

                      window.location = "mis-reservas";

                    }
                
                })

            }

          }

        })  

    }

})

})
</script>