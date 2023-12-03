<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Reservar Sala</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio">                                       <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Reservar Sala</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <!-- clientes -->
      <?php include_once "src/views/components/widgets-reserva.php"; ?>

      <!-- ventas -->
      
    </div>
  </div>
</div>


<!-- MODAL RESERVAR SALA 1 -->
<div class="modal fade" id="modalSala1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Reservar Sala 1</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formReservarSala1">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Fecha</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="calendar"></i> </span>
                        <input type="date" class="form-control" name="fecha" required>
                        <input type="hidden" class="form-control" name="idDocente" value="<?= $admin["id"] ?>" required>
                        <input type="hidden" class="form-control" name="idSala" value="1" required>
                      </div>
                  </div>
                
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Hora Inicio</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="clock"></i> </span>
                        <input type="time" class="form-control" name="hora" required>
                      </div>
                  </div> 

                  <div class="mb-3 m-form__group">
                      <label class="form-label">Hora Fin</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="clock"></i> </span>
                        <input type="time" class="form-control" name="horaFin" required>
                      </div>
                  </div> 
                  
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
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Reservar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL RESERVAR SALA 2 -->
<div class="modal fade" id="modalSala2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Reservar Sala 2</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formReservarSala2">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Fecha</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="calendar"></i> </span>
                        <input type="date" class="form-control" name="fecha" required>
                        <input type="hidden" class="form-control" name="idDocente" value="<?= $admin["id"] ?>" required>
                        <input type="hidden" class="form-control" name="idSala" value="2" required>
                      </div>
                  </div>
                
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Hora Inicio</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="clock"></i> </span>
                        <input type="time" class="form-control" name="hora" required>
                      </div>
                  </div> 

                  <div class="mb-3 m-form__group">
                      <label class="form-label">Hora Fin</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="clock"></i> </span>
                        <input type="time" class="form-control" name="horaFin" required>
                      </div>
                  </div> 
                  
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
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Reservar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL RESERVAR SALA 3 -->
<div class="modal fade" id="modalSala3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Reservar Sala 3</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formReservarSala3">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Fecha</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="calendar"></i> </span>
                        <input type="date" class="form-control" name="fecha" required>
                        <input type="hidden" class="form-control" name="idDocente" value="<?= $admin["id"] ?>" required>
                        <input type="hidden" class="form-control" name="idSala" value="3" required>
                      </div>
                  </div>
                
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Hora Inicio</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="clock"></i> </span>
                        <input type="time" class="form-control" name="hora" required>
                      </div>
                  </div> 

                  <div class="mb-3 m-form__group">
                      <label class="form-label">Hora Fin</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="clock"></i> </span>
                        <input type="time" class="form-control" name="horaFin" required>
                      </div>
                  </div> 
                  
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
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Reservar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const salaOcupada = () => {
    Swal.fire(
      'Esta sala está ocupada.',
      '¡Intentalo más tarde!',
      'info'
    )
  }

  const reservaActiva = () => {
    Swal.fire(
      'Tienes una reserva activa.',
      '¡Intentalo más tarde!',
      'info'
    )
  }

  /*=============================================
  RESERVAR SALA 1
  =============================================*/
  const formReservarSala1 = document.getElementById('formReservarSala1');

  formReservarSala1.addEventListener('submit', async (e) => {
    e.preventDefault();

    let datos = new FormData(formReservarSala1);

    try {
      const post = await 	fetch('public/assets/ajax/reservas/reservar-sala.php', {
        method: 'POST',
        body: datos
      })

      const resPost = await post.json();

      console.log(resPost)

      if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'Su reserva ha sido creada con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
          window.location = "reservar-sala";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })

  
  /*=============================================
  RESERVAR SALA 2
  =============================================*/
  const formReservarSala2 = document.getElementById('formReservarSala2');

  formReservarSala2.addEventListener('submit', async (e) => {
    e.preventDefault();

    let datos = new FormData(formReservarSala2);

    try {
      const post = await 	fetch('public/assets/ajax/reservas/reservar-sala.php', {
        method: 'POST',
        body: datos
      })

      const resPost = await post.json();

      console.log(resPost)

      if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'Su reserva ha sido creada con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
          window.location = "reservar-sala";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })

  
  /*=============================================
  RESERVAR SALA 3
  =============================================*/
  const formReservarSala3 = document.getElementById('formReservarSala3');

  formReservarSala3.addEventListener('submit', async (e) => {
    e.preventDefault();

    let datos = new FormData(formReservarSala3);

    try {
      const post = await 	fetch('public/assets/ajax/reservas/reservar-sala.php', {
        method: 'POST',
        body: datos
      })

      const resPost = await post.json();

      console.log(resPost)

      if(resPost.ok){

        Swal.fire(
          'Correcto!',
          'Su reserva ha sido creada con éxito!',
          'success'
        ).then(function(result){

          if(result.value){   
          window.location = "reservar-sala";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })

</script>
      