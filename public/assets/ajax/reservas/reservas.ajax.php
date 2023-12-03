<?php

require_once "../../../../src/controllers/reservas.controlador.php";
require_once "../../../../src/models/reservas.modelo.php";

class AjaxReservas{

	
	/*=============================================
	Cerrar Reserva
	=============================================*/	

	public $idEliminar;

	public function ajaxCerrarReserva(){

		$respuesta = ControladorReservas::ctrCerrarReserva($this->idEliminar);

		echo $respuesta;

	}

}


/*=============================================
Cerrar Reserva
=============================================*/	

if(isset($_POST["idEliminar"])){

	$eliminar = new AjaxReservas();
	$eliminar -> idEliminar = $_POST["idEliminar"];
	$eliminar -> ajaxCerrarReserva();

}