<?php
require_once "../../../../src/controllers/administradores.controlador.php";
require_once "../../../../src/models/administradores.modelo.php";

$datos = array(
   "registroNombre"  => $_POST["registroNombre"],
   "registroUsuario"      => $_POST["registroUsuario"],
   "registroPassword"      => $_POST["registroPassword"],
   "registroPerfil"      => $_POST["registroPerfil"]
);

$guardar = new ControladorAdministradores();
$guardar-> ctrRegistroAdministrador($datos);


?>


 