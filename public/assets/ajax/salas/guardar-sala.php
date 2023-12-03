<?php
require_once "../../../../src/controllers/salas.controlador.php";
require_once "../../../../src/models/salas.modelo.php";

$datos = array(
   "registroSala"  => $_POST["registroSala"],
   "registroEstado"      => $_POST["registroEstado"]
);

$guardar = new ControladorSalas();
$guardar-> ctrRegistroSala($datos);


?>


 