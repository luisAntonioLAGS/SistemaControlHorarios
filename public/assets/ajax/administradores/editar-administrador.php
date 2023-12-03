<?php
require_once "../../../../src/controllers/administradores.controlador.php";
require_once "../../../../src/models/administradores.modelo.php";

$datos = array(
    "editarId"  => $_POST["editarId"],
    "editarNombre"  => $_POST["editarNombre"],
    "editarUsuario"        => $_POST["editarUsuario"],
    "editarPassword"    => $_POST["editarPassword"],
    "passwordActual"    => $_POST["passwordActual"],
    "editarPerfil"  => $_POST["editarPerfil"]
);

$guardar = new ControladorAdministradores();
$guardar-> ctrEditarAdministrador($datos);


?>
