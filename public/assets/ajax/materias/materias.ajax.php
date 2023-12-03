<?php

require_once "../../../../src/controllers/materias.controlador.php";
require_once "../../../../src/models/materias.modelo.php";

class AjaxMaterias{

	/*=============================================
	Editar Materia
	=============================================*/	

	public $idMateria;

	public function ajaxMostrarMaterias(){

		$item = "id";
		$valor = $this->idMateria;

		$respuesta = ControladorMaterias::ctrMostrarMaterias($item, $valor);

		echo json_encode($respuesta);

	}

	
	/*=============================================
	Eliminar Materia
	=============================================*/	

	public $idEliminar;

	public function ajaxEliminarMateria(){

		$respuesta = ControladorMaterias::ctrEliminarMateria($this->idEliminar);

		echo $respuesta;

	}

}

/*=============================================
Editar Materia
=============================================*/
if(isset($_POST["idMateria"])){

	$editar = new AjaxMaterias();
	$editar -> idMateria = $_POST["idMateria"];
	$editar -> ajaxMostrarMaterias();

}

/*=============================================
Eliminar Materia
=============================================*/	

if(isset($_POST["idEliminar"])){

	$eliminar = new AjaxMaterias();
	$eliminar -> idEliminar = $_POST["idEliminar"];
	$eliminar -> ajaxEliminarMateria();

}