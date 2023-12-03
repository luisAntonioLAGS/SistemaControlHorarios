<?php
require_once "../../../../src/controllers/salas.controlador.php";
require_once "../../../../src/models/salas.modelo.php";

$datos = array(
    "editarId"  => $_POST["editarId"],
    "editarSala"  => $_POST["editarSala"],
    "editarEstado"  => $_POST["editarEstado"]
);

$guardar = new ControladorSalas();
$guardar-> ctrEditarSala($datos);


?>
