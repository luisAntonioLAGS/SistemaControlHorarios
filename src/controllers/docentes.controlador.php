<?php

class ControladorDocentes{

	
	/*=============================================
	Mostrar Docentes
	=============================================*/

	static public function ctrMostrarDocentes($item, $valor){


		$respuesta = ModeloDocentes::mdlMostrarDocentes($item, $valor);

		return $respuesta;

	}

	/*=============================================
	Registro de Docentes
	=============================================*/

	public function ctrRegistroDocente($datos){

		if(isset($datos["cedula"])){

			$datos = array(
				"cedula" => $datos["cedula"],
				"nombre" =>  $datos["nombre"],
				"titulo" =>  $datos["titulo"],
				"carrera" =>  $datos["carrera"]
			);

			$respuesta = ModeloDocentes::mdlRegistroDocente($datos);
			
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}

		}

	}

	/*=============================================
	Editar Docente
	=============================================*/

	public function ctrEditarDocente($datos){

		if(isset($datos["id"])){
			
			$respuesta = ModeloDocentes::mdlEditarDocente($datos);
				
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}


		}

	}

	/*=============================================
	Eliminar Docente
	=============================================*/

	static public function ctrEliminarDocente($id){

		$respuesta = ModeloDocentes::mdlEliminarDocente($id);

		return $respuesta;

	}
	

}