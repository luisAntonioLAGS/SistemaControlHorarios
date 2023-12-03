<?php


?>

<div class="sidebar-wrapper">
  <div>
    <div class="logo-wrapper"><a href="dashboard">ITISTMO</a>
      <div class="back-btn"><i class="fa fa-angle-left"></i></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper">ITISTMO</a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn">ITISTMO</a>
            <div class="mobile-back text-end"><span>Atrás</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>
          <li class="sidebar-main-title">
            <div>
              <h6>Aplicación</h6>
            </div>
          </li>

          <!-- Perfil Docente sin cambiar password  -->

          <?php
            if($admin["perfil"] == "Docente" and $admin["cambio_password"] =="0") : ?>


            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="cambiar-password"> <i data-feather="home"></i> <span>Dashboard</span></a>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="cambiar-password"> <i data-feather="airplay"></i> <span>Salas</span></a>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="cambiar-password"> <i data-feather="repeat"></i> <span>Reportar Falla</span></a>
            </li>

          <?php endif ?>

          <!-- End Perfil Docente  -->


          <!-- Perfil Docente   -->

           <?php
            if($admin["perfil"] == "Docente" and $admin["cambio_password"] =="1") : ?>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="dashboard"> <i data-feather="home"></i> <span>Dashboard</span></a>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="salas"> <i data-feather="airplay"></i> <span>Salas</span></a>
            </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="clock"></i><span>Horarios</span></a>
              <ul class="sidebar-submenu">
                <li><a href="horario-s1">Sala 1</a></li>
                <li><a href="horario-s2">Sala 2</a></li>
                <li><a href="horario-s3">Sala 3</a></li>
              </ul>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="reportar-falla"> <i data-feather="repeat"></i> <span>Reportar Falla</span></a>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="cambiar-password"> <i data-feather="lock"></i> <span>Cambiar Contraseña</span></a>
            </li>

          <?php endif ?>

        <!-- End Perfil Docente  -->


          <!-- Perfil Administrador  -->
          <?php
            if($admin["perfil"] == "Administrador") : ?>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="dashboard"> <i data-feather="home"></i> <span>Dashboard</span></a>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="salas"> <i data-feather="airplay"></i> <span>Salas</span></a>
            </li>

            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="clock"></i><span>Horarios</span></a>
              <ul class="sidebar-submenu">
                <li><a href="horario-s1">Sala 1</a></li>
                <li><a href="horario-s2">Sala 2</a></li>
                <li><a href="horario-s3">Sala 3</a></li>
              </ul>
            </li>
          
            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="equipos"> <i data-feather="monitor"> </i> <span>Inventario de Equipos</span></a>
            </li>

            <li class="sidebar-list active">  
            <label class="badge badge-light-primary"><?php if($admin["perfil"] == "Administrador") { echo count($rnv); }  ?></label> <a class="sidebar-link sidebar-title link-nav" href="reporte-fallas"> <i data-feather="repeat"></i> <span>Reporte de Fallas</span></a>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="docentes"> <i data-feather="users"></i> <span>Docentes</span></a>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="materias"> <i data-feather="folder"></i> <span>Materias</span></a>
            </li>

            <li class="sidebar-list active">  
              <a class="sidebar-link sidebar-title link-nav" href="administradores"><i data-feather="lock"></i><span>Administradores</span></a>
            </li>

          <?php endif ?>
          
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
</div>