<?php

require_once "../../../../src/controllers/docentes.controlador.php";
require_once "../../../../src/models/docentes.modelo.php";

class AjaxDocentes{

	/*=============================================
	Editar Docente
	=============================================*/	

	public $idDocente;

	public function ajaxMostrarDocentes(){

		$item = "id";
		$valor = $this->idDocente;

		$respuesta = ControladorDocentes::ctrMostrarDocentes($item, $valor);

		echo json_encode($respuesta);

	}

	
	/*=============================================
	Eliminar Docente
	=============================================*/	

	public $idEliminar;

	public function ajaxEliminarDocente(){

		$respuesta = ControladorDocentes::ctrEliminarDocente($this->idEliminar);

		echo $respuesta;

	}

}

/*=============================================
Editar Docente
=============================================*/
if(isset($_POST["idDocente"])){

	$editar = new AjaxDocentes();
	$editar -> idDocente = $_POST["idDocente"];
	$editar -> ajaxMostrarDocentes();

}

/*=============================================
Eliminar Docente
=============================================*/	

if(isset($_POST["idEliminar"])){

	$eliminar = new AjaxDocentes();
	$eliminar -> idEliminar = $_POST["idEliminar"];
	$eliminar -> ajaxEliminarDocente();

}