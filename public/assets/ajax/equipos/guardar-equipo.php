<?php
require_once "../../../../src/controllers/equipos.controlador.php";
require_once "../../../../src/models/equipos.modelo.php";

$datos = array(
   "registroEquipo"  => $_POST["registroEquipo"],
   "registroSala"  => $_POST["registroSala"],
   "registroObservacion"  => $_POST["registroObservacion"],
   "registroEstado"      => $_POST["registroEstado"]
);

$guardar = new ControladorEquipos();
$guardar-> ctrRegistroEquipo($datos);


?>


 