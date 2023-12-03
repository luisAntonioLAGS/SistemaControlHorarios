<?php
/*=============================================
Sala 1
=============================================*/
$sala1 = ControladorSalas::ctrMostrarSalas("sala", "Sala 1");

/*=============================================
Sala 2
=============================================*/
$sala2 = ControladorSalas::ctrMostrarSalas("sala", "Sala 2");

/*=============================================
Sala 3
=============================================*/
$sala3 = ControladorSalas::ctrMostrarSalas("sala", "Sala 3");

/*=============================================
Reserva
=============================================*/
$reserva = ControladorReservas::ctrMostrarMisReservasActivas($admin["id"]);

?>
 <!-- Sala 1  -->
<?php
  if($sala1["status"] == "Ocupada") : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" onclick="salaOcupada()" >
      <div class="bg-success b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA2</span>
              <h4 class="mb-0"><?= $sala2["status"] ?></h4><i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

  <?php elseif($sala1["status"] == "Disponible" && @$reserva == "0" ) : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#modalSala1" data-whatever="@getbootstrap" >
      <div class="bg-primary b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA2</span>
              <h4 class="mb-0"><?= $sala1["status"] ?></h4> <i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

  <?php elseif(@$reserva > 0) : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" onclick="reservaActiva()" >
      <div class="bg-primary b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA2</span>
              <h4 class="mb-0"><?= $sala1["status"] ?></h4> <i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

<?php endif ?>

<!-- Sala 2  -->

<?php
  if($sala2["status"] == "Ocupada") : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" onclick="salaOcupada()" >
      <div class="bg-secondary b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA2</span>
              <h4 class="mb-0"><?= $sala1["status"] ?></h4><i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

  <?php elseif($sala2["status"] == "Disponible" && @$reserva == "0" ) : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#modalSala2" data-whatever="@getbootstrap" >
      <div class="bg-secondary b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA2</span>
              <h4 class="mb-0"><?= $sala2["status"] ?></h4> <i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

  <?php elseif(@$reserva > 0) : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" onclick="reservaActiva()" >
      <div class="bg-secondary b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA2</span>
              <h4 class="mb-0"><?= $sala2["status"] ?></h4> <i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

<?php endif ?>



<!-- Sala 3  -->

<?php
  if($sala3["status"] == "Ocupada") : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" onclick="salaOcupada()" >
      <div class="bg-success b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA3</span>
              <h4 class="mb-0"><?= $sala3["status"] ?></h4><i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

  <?php elseif($sala3["status"] == "Disponible" && @$reserva == "0" ) : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#modalSala3" data-whatever="@getbootstrap" >
      <div class="bg-success b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA2</span>
              <h4 class="mb-0"><?= $sala3["status"] ?></h4> <i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

  <?php elseif(@$reserva > 0) : ?>

  <div class="col-sm-6 col-xl-4 col-lg-6">
    <div class="card o-hidden" style="cursor:pointer" onclick="reservaActiva()" >
      <div class="bg-success b-r-4 card-body">
        <div class="media static-top-widget">
            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">SALA2</span>
              <h4 class="mb-0"><?= $sala3["status"] ?></h4> <i class="icon-bg" data-feather="user-plus"></i>
            </div>
        </div>
      </div>
    </div> 
  </div>

<?php endif ?>
