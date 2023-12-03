<?php

require_once "../../../../src/controllers/salas.controlador.php";
require_once "../../../../src/models/salas.modelo.php";

class AjaxSalas{

	/*=============================================
	Editar Sala
	=============================================*/	

	public $idSala;

	public function ajaxMostrarSalas(){

		$item = "id";
		$valor = $this->idSala;

		$respuesta = ControladorSalas::ctrMostrarSalas($item, $valor);

		echo json_encode($respuesta);

	}

	
	/*=============================================
	Eliminar Sala
	=============================================*/	

	public $idEliminar;

	public function ajaxEliminarSala(){

		$respuesta = ControladorSalas::ctrEliminarSala($this->idEliminar);

		echo $respuesta;

	}

}

/*=============================================
Editar Sala
=============================================*/
if(isset($_POST["idSala"])){

	$editar = new AjaxSalas();
	$editar -> idSala = $_POST["idSala"];
	$editar -> ajaxMostrarSalas();

}

/*=============================================
Eliminar Sala
=============================================*/	

if(isset($_POST["idEliminar"])){

	$eliminar = new AjaxSalas();
	$eliminar -> idEliminar = $_POST["idEliminar"];
	$eliminar -> ajaxEliminarSala();

}