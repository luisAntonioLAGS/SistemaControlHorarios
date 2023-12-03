<?php

class ControladorHorarios{

	
	/*=============================================
	Mostrar Horarios
	=============================================*/

	static public function ctrMostrarHorarios($item, $valor){


		$respuesta = ModeloHorarios::mdlMostrarHorarios($item, $valor);

		return $respuesta;

	}

	/*=============================================
	Mostrar Horario Personalizado
	=============================================*/

	static public function ctrMostrarHorarioPersonalizado($sala, $dia, $horaInicio, $horaFin){


		$respuesta = ModeloHorarios::mdlMostrarHorarioPersonalizado($sala, $dia, $horaInicio, $horaFin);

		return $respuesta;

	}

	/*=============================================
	Registro de Horario
	=============================================*/

	public function ctrRegistroHorario($datos){

		if(isset($datos["idSala"])){

			$datos = array(
				"idSala" => $datos["idSala"],
				"dia" =>  $datos["dia"],
				"horaInicio" =>  $datos["horaInicio"],
				"horaSalida" =>  $datos["horaSalida"],
				"materia" =>  $datos["materia"],
				"profesor" =>  $datos["profesor"],
			);

			$respuesta = ModeloHorarios::mdlRegistroHorario($datos);
			
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
	Eliminar Sala
	=============================================*/

	static public function ctrEliminarSala($id){

		$respuesta = ModeloSalas::mdlEliminarSala($id);

		return $respuesta;

	}
	

}