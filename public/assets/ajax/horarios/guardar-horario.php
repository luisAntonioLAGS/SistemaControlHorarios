<?php
require_once "../../../../src/controllers/horarios.controlador.php";
require_once "../../../../src/models/horarios.modelo.php";

$datos = array(
   "idSala"  => $_POST["idSala"],
   "dia"      => $_POST["dia"],
   "horaInicio"      => $_POST["hora"],
   "horaSalida"      => $_POST["horas"],
   "materia"      => $_POST["materia"],
   "docente"      => $_POST["docente"]
);

$guardar = new ControladorHorarios();
$guardar-> ctrRegistroHorario($datos);


?>


 