<?php

class ControladorMaterias{

	
	/*=============================================
	Mostrar Matrias
	=============================================*/

	static public function ctrMostrarMaterias($item, $valor){


		$respuesta = ModeloMaterias::mdlMostrarMaterias($item, $valor);

		return $respuesta;

	}

	/*=============================================
	Registro de Materias
	=============================================*/

	public function ctrRegistroSala($datos){

		if(isset($datos["registroSala"])){

			$datos = array(
				"sala" => $datos["registroSala"],
				"estado" =>  $datos["registroEstado"]
			);

			$respuesta = ModeloSalas::mdlRegistroSala($datos);
			
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