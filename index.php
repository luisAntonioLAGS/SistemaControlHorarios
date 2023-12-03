<?php

require_once "src/controllers/plantilla.controlador.php";
require_once "src/controllers/ruta.controlador.php";
require_once "src/controllers/administradores.controlador.php";
require_once "src/controllers/salas.controlador.php";
require_once "src/controllers/materias.controlador.php";
require_once "src/controllers/docentes.controlador.php";
require_once "src/controllers/horarios.controlador.php";
require_once "src/controllers/equipos.controlador.php";
require_once "src/controllers/reservas.controlador.php";
require_once "src/controllers/reportes.controlador.php";

require_once "src/models/administradores.modelo.php";
require_once "src/models/salas.modelo.php";
require_once "src/models/materias.modelo.php";
require_once "src/models/docentes.modelo.php";
require_once "src/models/horarios.modelo.php";
require_once "src/models/equipos.modelo.php";
require_once "src/models/reservas.modelo.php";
require_once "src/models/reportes.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
