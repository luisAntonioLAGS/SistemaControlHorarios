<?php
require_once "../../../../src/controllers/reportes.controlador.php";
require_once "../../../../src/models/reportes.modelo.php";

$datos = array(
   "idDocente"      => $_POST["idDocente"],
   "reporte"  => $_POST["reporte"]
   
);

$guardar = new ControladorReportes();
$guardar-> ctrRegistroReporte($datos);


?>


 