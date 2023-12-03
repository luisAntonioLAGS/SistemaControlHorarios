<?php
require_once "../../../../src/controllers/reservas.controlador.php";
require_once "../../../../src/models/reservas.modelo.php";

$datos = array(
   "idSala"      => $_POST["idSala"],
   "idDocente"      => $_POST["idDocente"],
   "fecha"  => $_POST["fecha"],
   "hora"      => $_POST["hora"],
   "horaFin"      => $_POST["horaFin"],
   "observacion"      => $_POST["observacion"]
);

$guardar = new ControladorReservas();
$guardar-> ctrRegistroReserva($datos);


?>


 