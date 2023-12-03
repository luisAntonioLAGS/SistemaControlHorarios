<?php

class ControladorEquipos{

	
	/*=============================================
	Mostrar Equipos
	=============================================*/

	static public function ctrMostrarEquipos($item, $valor){


		$respuesta = ModeloEquipos::mdlMostrarEquipos($item, $valor);

		return $respuesta;

	}

	/*=============================================
	Mostrar Equipos (Sala)
	=============================================*/

	static public function ctrMostrarEquiposSala($item, $valor){


		$respuesta = ModeloEquipos::mdlMostrarEquiposSala($item, $valor);

		return $respuesta;

	}

	/*=============================================
	Registro de equipos
	=============================================*/

	public function ctrRegistroEquipo($datos){

		if(isset($datos["registroEquipo"])){

			$datos = array(
				"equipo" => $datos["registroEquipo"],
				"sala" => $datos["registroSala"],
				"observacion" => $datos["registroObservacion"],
				"estado" =>  $datos["registroEstado"]
			);

			$respuesta = ModeloEquipos::mdlRegistroEquipo($datos);
			
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}

		}

	}

	/*=============================================
	Editar Equipo
	=============================================*/

	public function ctrEditarEquipo($datos){

		if(isset($datos["editarId"])){

			$datos = array(
				"id"=> $datos["editarId"],
				"equipo" => $datos["editarEquipo"],
				"sala" => $datos["editarSala"],
				"observacion" => $datos["editarObservacion"],
				"estado" =>  $datos["editarEstado"]
			);
	
			$respuesta = ModeloEquipos::mdlEditarEquipo($datos);
				
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}


		}

	}

	/*=============================================
	Eliminar Equipo
	=============================================*/

	static public function ctrEliminarEquipo($id){

		$respuesta = ModeloEquipos::mdlEliminarEquipo($id);

		return $respuesta;

	}
	

}