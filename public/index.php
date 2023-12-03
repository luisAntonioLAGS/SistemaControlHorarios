<?php 
@session_start();
$ruta = ControladorRuta::ctrRuta();


if(isset($_SESSION["idBackend"]) &&  $_SESSION["perfil"] == "Administrador" ){
	$admin = ControladorAdministradores::ctrMostrarAdministradores("id", $_SESSION["idBackend"]);

  /*=============================================
  Reportes No Vistos
  =============================================*/
  $rnv = ControladorReportes::ctrMostrarTotalReportes("no");

}
else if(isset($_SESSION["idBackend"]) &&  $_SESSION["perfil"] == "Docente" ) {
	
	$admin = ControladorDocentes::ctrMostrarDocentes("id", $_SESSION["idBackend"]);


}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#014e82">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/assets/images/logo/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="public/assets/images/logo/logo.png" type="image/x-icon">
    <title>Instituto Técnologico de Istmo</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="public/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="public/assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/font-awesome.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="public/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="public/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="public/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/vendors/datatable-extension.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="public/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="public/assets/css/mystyles.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive.css">
     <!-- JQuery -->
    <script src="public/assets/js/jquery-3.5.1.min.js"></script>
    <!-- SweetAlert 2 -->
	  <script src="public/assets/js/sweet-alert/sweetalert2@10.js"></script>

  </head>
  <body class="dark-sidebar">

  <?php if (!isset($_SESSION["validarSesionBackend"])): ?>
    
    <?php include "src/views/pages/login.php" ?>

    <?php else: ?>

        <div id="root">
            <?php include "src/index.php" ?>
        </div>

    <?php endif ?>

    <!-- latest jquery-->
    <!-- Bootstrap js-->
    <script src="public/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="public/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="public/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    
    <!-- Sidebar jquery-->
    <script src="public/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="public/assets/js/sidebar-menu.js"></script>
    <script src="public/assets/js/camera/camara-class.js"></script>
    <script src="public/assets/js/tooltip-init.js"></script>
    <script src="public/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="public/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="public/assets/js/counter/counter-custom.js"></script>
    <script src="public/assets/js/form-validation-custom.js"></script>
  
    <!-- Datatables -->
    <script src="public/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/jszip.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
    <script src="public/assets/js/datatable/datatable-extension/custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="public/assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>