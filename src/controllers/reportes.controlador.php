<?php

class ControladorReportes{

	
	/*=============================================
	Mostrar Reportes
	=============================================*/

	static public function ctrMostrarReportes($item, $valor){


		$respuesta = ModeloReportes::mdlMostrarReportes($item, $valor);

		return $respuesta;

	}

	/*=============================================
	Mostrar Mis Reportes
	=============================================*/

	static public function ctrMostrarMisReportes($idDocente){


		$respuesta = ModeloReportes::mdlMostrarMisReportes($idDocente);

		return $respuesta;

	}


	/*=============================================
	Crear Reporte
	=============================================*/

	public function ctrRegistroReporte($datos){

		if(isset($datos["idDocente"])){

			$datos = array(	
				"idDocente"   => $datos["idDocente"],
				"reporte"       => $datos["reporte"]
			);

			$respuesta = ModeloReportes::mdlRegistroReporte($datos);
			
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