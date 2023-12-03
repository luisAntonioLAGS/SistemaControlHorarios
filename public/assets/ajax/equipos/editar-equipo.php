<?php
require_once "../../../../src/controllers/equipos.controlador.php";
require_once "../../../../src/models/equipos.modelo.php";

$datos = array(
    "id"              => $_POST["editarId"],
    "sala"            => $_POST["editarSala"],
    "equipo"          => $_POST["editarEquipo"],
    "serieTeclado"    => $_POST["editarSerieTeclado"],
    "modeloTeclado"   => $_POST["editarModeloTeclado"],
    "serieMouse"      => $_POST["editarSerieMouse"],
    "modeloMouse"     => $_POST["editarModeloMouse"],
    "seriePantalla"   => $_POST["editarSeriePantalla"],
    "modeloPantalla"  => $_POST["editarModeloPantalla"],
    "serieCpu"        => $_POST["editarSerieCpu"],
    "modeloCpu"       => $_POST["editarModeloCpu"],
    "adaptadorRed"    => $_POST["editarAdaptadorRed"],
    "ram"             => $_POST["editarRam"],
    "procesador"      => $_POST["editarProcesador"],
    "disco"           => $_POST["editarDisco"],
    "cd"              => $_POST["editarCd"],
    "observacion"     => $_POST["editarObservacion"]
 
 );

$guardar = new ControladorEquipos();
$guardar-> ctrEditarEquipo($datos);


?>
