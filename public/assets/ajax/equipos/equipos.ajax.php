<?php

require_once "../../../../src/controllers/equipos.controlador.php";
require_once "../../../../src/models/equipos.modelo.php";

class AjaxEquipos{

	/*=============================================
	Editar Equipo
	=============================================*/	

	public $idEquipo;

	public function ajaxMostrarEquipos(){

		$item = "id";
		$valor = $this->idEquipo;

		$respuesta = ControladorEquipos::ctrMostrarEquipos($item, $valor);

		echo json_encode($respuesta);

	}

	
	/*=============================================
	Eliminar Equipo
	=============================================*/	

	public $idEliminar;

	public function ajaxEliminarEquipo(){

		$respuesta = ControladorEquipos::ctrEliminarEquipo($this->idEliminar);

		echo $respuesta;

	}

}

/*=============================================
Editar Equipo
=============================================*/
if(isset($_POST["idEquipo"])){

	$editar = new AjaxEquipos();
	$editar -> idEquipo = $_POST["idEquipo"];
	$editar -> ajaxMostrarEquipos();

}

/*=============================================
Eliminar Equipo
=============================================*/	

if(isset($_POST["idEliminar"])){

	$eliminar = new AjaxEquipos();
	$eliminar -> idEliminar = $_POST["idEliminar"];
	$eliminar -> ajaxEliminarEquipo();

}