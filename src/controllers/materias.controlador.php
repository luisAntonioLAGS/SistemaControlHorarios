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

	public function ctrRegistroMateria($datos){

		if(isset($datos["materia"])){

			$datos = array(
				"materia" => $datos["materia"]
			);

			$respuesta = ModeloMaterias::mdlRegistroMateria($datos);
			
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}

		}

	}

	/*=============================================
	Editar Materia
	=============================================*/

	public function ctrEditarMateria($datos){

		if(isset($datos["materiaEditar"])){


			$datos = array(
				"id"=> $datos["idEditar"],
				"materia" => $datos["materiaEditar"]
			);
	
			$respuesta = ModeloMaterias::mdlEditarMateria($datos);
				
			if($respuesta == "ok"){

				$response = array("ok" => true);

				echo json_encode($response);
			}


		}

	}

	/*=============================================
	Eliminar Materia
	=============================================*/

	static public function ctrEliminarMateria($id){

		$respuesta = ModeloMaterias::mdlEliminarMateria($id);

		return $respuesta;

	}
	

}