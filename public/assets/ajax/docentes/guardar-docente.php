<?php
require_once "../../../../src/controllers/docentes.controlador.php";
require_once "../../../../src/models/docentes.modelo.php";

$datos = array(
   "cedula"  => $_POST["cedula"],
   "nombre"      => $_POST["nombre"],
   "titulo"      => $_POST["titulo"],
   "carrera"      => $_POST["carrera"]
);

$guardar = new ControladorDocentes();
$guardar-> ctrRegistroDocente($datos);


?>


 