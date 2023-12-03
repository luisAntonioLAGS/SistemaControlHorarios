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
                      $docente = ControladorAdministradores::ctrMostrarAdministradores("id", $idDocente);

                    $actions = '<div class="btn-group btn-group-pill" role="group">
                      <button class="btn btn-warning editarEquipo" idEquipo="'.$value["id"].'" type="button" data-bs-toggle="modal" data-bs-target="#editarEquipo" data-whatever="@getbootstrap">Editar</button>
                      <button class="btn btn-danger eliminarEquipo" idEquipo="'.$value["id"].'" type="button" data-bs-original-title="" title="">Eliminar</button>
                    </div>';	

                    $detalles= ' <a href="index.php?pagina=equipo&id='.$value[0].'"> <button class="btn btn-pill btn-primary btn-lg" type="button"><i data-feather="monitor"></i></button> </a>';
                    $crearReporte = '<button class="btn btn-pill btn-success btn-lg" type="button"><i data-feather="file-text"></i></button>';
                  ?>

                  <tr>
                    <td><?= ($key + 1) ?> </td>
                    <td><?= $fecha ." ". $hora ?></td>
                    <td><?= $docente["nombre"] ?></td>
                    <td><?= $value["reporte"] ?></td>
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
<div class="modal fade" id="modalCrearReporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Crear Reporte</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formCrearReporte">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Reporte</label>
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
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Enviar Reporte</button>
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
