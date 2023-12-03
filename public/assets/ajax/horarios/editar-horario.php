<?php
require_once "../../../../src/controllers/horarios.controlador.php";
require_once "../../../../src/models/horarios.modelo.php";

$datos = array(
   "id"  => $_POST["idHorarioEditar"],
   "materia"      => $_POST["editarMateria"],
   "docente"      => $_POST["editarDocente"]
);

$guardar = new ControladorHorarios();
$guardar-> ctrEditarHorario($datos);


?>


 