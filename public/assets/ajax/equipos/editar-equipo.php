<?php
require_once "../../../../src/controllers/equipos.controlador.php";
require_once "../../../../src/models/equipos.modelo.php";

$datos = array(
    "editarId"  => $_POST["editarId"],
    "editarEquipo"  => $_POST["editarEquipo"],
    "editarSala"  => $_POST["editarSala"],
    "editarObservacion"  => $_POST["editarObservacion"],
    "editarEstado"  => $_POST["editarEstado"]
);

$guardar = new ControladorEquipos();
$guardar-> ctrEditarEquipo($datos);


?>
