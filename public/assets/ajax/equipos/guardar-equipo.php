<?php
require_once "../../../../src/controllers/equipos.controlador.php";
require_once "../../../../src/models/equipos.modelo.php";

$datos = array(
   "sala" => $_POST["registroSala"],
   "equipo" => $_POST["registroEquipo"],
   "serieTeclado" => $_POST["serieTeclado"],
   "modeloTeclado" => $_POST["modeloTeclado"],
   "serieMouse" => $_POST["serieMouse"],
   "modeloMouse" => $_POST["modeloMouse"],
   "seriePantalla" => $_POST["seriePantalla"],
   "modeloPantalla" => $_POST["modeloPantalla"],
   "serieCpu" => $_POST["serieCpu"],
   "modeloCpu" => $_POST["modeloCpu"],
   "adaptadorRed" => $_POST["adaptadorRed"],
   "ram" => $_POST["ram"],
   "procesador" => $_POST["procesador"],
   "disco" => $_POST["disco"],
   "cd" => $_POST["cd"],
   "observacion" => $_POST["observacion"]

);

$guardar = new ControladorEquipos();
$guardar-> ctrRegistroEquipo($datos);

?>


 