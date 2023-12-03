<?php

require_once "../../../../src/controllers/horarios.controlador.php";
require_once "../../../../src/models/horarios.modelo.php";

class AjaxHorarios{

	/*=============================================
	Editar Horario
	=============================================*/	

	public $idHorario;

	public function ajaxMostrarHorarios(){

		$item = "id";
		$valor = $this->idHorario;

		$respuesta = ControladorHorarios::ctrMostrarHorarios($item, $valor);

		echo json_encode($respuesta);

	}

	
	/*=============================================
	Eliminar Horario
	=============================================*/	

	public $idEliminar;

	public function ajaxEliminarHorario(){

		$respuesta = ControladorHorarios::ctrEliminarHorario($this->idEliminar);

		echo $respuesta;

	}

}

/*=============================================
Editar Horario
=============================================*/
if(isset($_POST["idHorario"])){

	$editar = new AjaxHorarios();
	$editar -> idHorario = $_POST["idHorario"];
	$editar -> ajaxMostrarHorarios();

}

/*=============================================
Eliminar Horario
=============================================*/	

if(isset($_POST["idEliminar"])){

	$eliminar = new AjaxHorarios();
	$eliminar -> idEliminar = $_POST["idEliminar"];
	$eliminar -> ajaxEliminarHorario();

}