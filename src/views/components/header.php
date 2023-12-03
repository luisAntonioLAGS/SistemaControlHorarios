<div class="page-header" style="background-color:#014e82">
    <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
        <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
            <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
            </div>
            <div class="Typeahead-menu"></div>
            </div>
        </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
        <div class="logo-wrapper"><a href="dashboard"><img class="img-fluid" src="public/assets/images/logo/logo.png" alt=""></a></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
        <ul class="horizontal-menu">
            <li class="mega-menu outside">
                <a class="nav-link" href="#!"><i data-feather="layers"></i><span>Instituto Técnologico de Istmo</span></a>
            </li>
        </ul>
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
        <ul class="nav-menus">
            <?php
            if($admin["perfil"] == "Administrador") : ?>
            <li class="onhover-dropdown">
              <a href="reporte-fallas"><div class="notification-box" style="color:#fff"><img src="public/assets/images/bell.svg"> </i><span class="badge rounded-pill badge-secondary"><?php echo count($rnv); ?> </span></div></a>
            </li>
            <?php endif ?>

            <li class="profile-nav onhover-dropdown p-0 me-0">
            <div class="media profile-media"><img class="b-r-10" src="public/assets/images/dashboard/profile.png" alt="">
                <div class="media-body"><span class="fb"><?= $admin["nombre"]?></span>
                <p class="mb-0 font-roboto" style="color:#fff"> <?= $admin["perfil"]?> </p>
                </div>
            </div>
            </li>
            <li>
                <a href="salir"> <div class="mode"><i data-feather="log-in"></i></div> </a>
            </li>
        </ul>
</div>
    </div>
</div>