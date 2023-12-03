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

?>

<div class="col-sm-6 col-xl-4 col-lg-6">
  <a href="index.php?pagina=sala&id=1">
    <div class="card o-hidden">
        <div class="bg-primary b-r-4 card-body">
            <div class="media static-top-widget">
                <div class="align-self-center text-center"><i data-feather="users"></i></i></div>
                <div class="media-body"><span class="m-0">SALA 1</span>
                <h4 class="mb-0"><?= $sala1["status"] ?></h4><i class="icon-bg" data-feather="users"></i>
                </div>
            </div>
        </div>
    </div>
  </a>
</div>


<div class="col-sm-6 col-xl-4 col-lg-6">
  <a href="index.php?pagina=sala&id=2">
    <div class="card o-hidden">
        <div class="bg-success b-r-4 card-body">
            <div class="media static-top-widget">
                <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                <div class="media-body"><span class="m-0">SALA2</span>
                  <h4 class="mb-0"><?= $sala2["status"] ?></h4><i class="icon-bg" data-feather="user-plus"></i>
                </div>
            </div>
        </div>
    </div>
  </a>
</div>

<div class="col-sm-6 col-xl-4 col-lg-6">
  <a href="index.php?pagina=sala&id=3">
    <div class="card o-hidden">
      <div class="bg-secondary b-r-4 card-body">
        <div class="media static-top-widget">
          <div class="align-self-center text-center"><i data-feather="user-x"></i></div>
          <div class="media-body"><span class="m-0">SALA 3</span>
            <h4 class="mb-0"><?= $sala3["status"] ?></h4><i class="icon-bg" data-feather="user"></i>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>
      