<?php
require_once "../../../../src/controllers/docentes.controlador.php";
require_once "../../../../src/models/docentes.modelo.php";

$datos = array(
    "id"  => $_POST["idEditar"],
    "cedula"  => $_POST["cedulaEditar"],
    "nombre"  => $_POST["nombreEditar"],
    "titulo"        => $_POST["tituloEditar"],
    "carrera"    => $_POST["carreraEditar"]
    
);

$guardar = new ControladorDocentes();
$guardar-> ctrEditarDocente($datos);


?>
