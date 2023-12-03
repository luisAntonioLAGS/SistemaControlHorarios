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
				"docente" =>  $datos["docente"],
			);

			$respuesta = ModeloHorarios::mdlRegistroHorario($datos);
			
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}

		}

	}

	/*=============================================
	Editar Horario
	=============================================*/

	public function ctrEditarHorario($datos){

		if(isset($datos["id"])){

			$respuesta = ModeloHorarios::mdlEditarHorario($datos);
				
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}


		}

	}

	/*=============================================
	Eliminar Horario
	=============================================*/

	static public function ctrEliminarHorario($id){

		$respuesta = ModeloHorarios::mdlEliminarHorario($id);

		return $respuesta;

	}
	

}