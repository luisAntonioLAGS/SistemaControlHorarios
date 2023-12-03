<?php
require_once "../../../../src/controllers/materias.controlador.php";
require_once "../../../../src/models/materias.modelo.php";

$datos = array(
   "materia"  => $_POST["materia"]
);

$guardar = new ControladorMaterias();
$guardar-> ctrRegistroMateria($datos);


?>


 