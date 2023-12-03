<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Dashboard</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicio">                                       <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <!-- widgets -->
      <?php
        if($admin["perfil"] == "Administrador"){
          include_once "src/views/components/widgets.php";
        }else{
          include_once "src/views/components/widgets-docentes.php";
        }
      ?>
    </div>
  </div>
</div>