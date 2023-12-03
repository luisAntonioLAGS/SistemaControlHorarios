<?php

class ControladorReservas{

	
	/*=============================================
	Mostrar Reservas
	=============================================*/

	static public function ctrMostrarReservas($item, $valor){


		$respuesta = ModeloReservas::mdlMostrarReservas($item, $valor);

		return $respuesta;

	}

	/*=============================================
	Mostrar Mis Reservas
	=============================================*/

	static public function ctrMostrarMisReservas($item, $valor){


		$respuesta = ModeloReservas::mdlMostrarMisReservas($item, $valor);

		return $respuesta;

	}

	/*=============================================
	Mostrar Mis Reservas Activas
	=============================================*/

	static public function ctrMostrarMisReservasActivas($idDocente){


		$respuesta = ModeloReservas::mdlMostrarMisReservasActivas($idDocente);

		return $respuesta;

	}

	/*=============================================
	Registrar Reserva
	=============================================*/

	public function ctrRegistroReserva($datos){

		if(isset($datos["fecha"])){

			$datos = array(
				"idSala"      => $datos["idSala"],
				"idDocente"   => $datos["idDocente"],
				"fecha"       => $datos["fecha"],
				"hora"        => $datos["hora"],
				"horaFin"        => $datos["horaFin"],
				"observacion" => $datos["observacion"]
			);

			$respuesta = ModeloReservas::mdlRegistroReserva($datos);
			
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}

		}

	}

	/*=============================================
	Editar sala
	=============================================*/

	public function ctrEditarSala($datos){

		if(isset($datos["editarSala"])){


			$datos = array(
				"id"=> $datos["editarId"],
				"sala" => $datos["editarSala"],
				"estado" =>  $datos["editarEstado"]
			);
	
			$respuesta = ModeloSalas::mdlEditarSala($datos);
				
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}


		}

	}

	/*=============================================
	Cerrar Reserva
	=============================================*/

	static public function ctrCerrarReserva($id){

		$respuesta = ModeloReservas::mdlCerrarReserva($id);

		return $respuesta;

	}
	

}