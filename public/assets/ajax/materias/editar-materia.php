<?php
require_once "../../../../src/controllers/materias.controlador.php";
require_once "../../../../src/models/materias.modelo.php";

$datos = array(
    "idEditar"  => $_POST["idEditar"],
    "materiaEditar"  => $_POST["materiaEditar"]
);

$guardar = new ControladorMaterias();
$guardar-> ctrEditarMateria($datos);


?>
