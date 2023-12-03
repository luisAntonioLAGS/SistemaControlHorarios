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

			$encriptarPassword = md5($datos["cedula"]);

			$datos = array(
				"cedula" => $datos["cedula"],
				"nombre" =>  $datos["nombre"],
				"titulo" =>  $datos["titulo"],
				"usuario" => $datos["cedula"],
				"email" => $datos["email"],
				"password" => $encriptarPassword,
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
		ACTUALIZAR PASSWORD
	=============================================*/

	public function ctrActualizarPassword(){

		if(isset($_POST["id"])){

			$encriptarPassword = md5($_POST["nuevaContraseña"]);

			
			$id =  $_POST["id"];
			$password = $encriptarPassword;
			
			$respuesta = ModeloDocentes::mdlActualizarPassword($id, $password);
				
			if($respuesta == "ok"){

				echo"<script>

					Swal.fire(
						'¡EN HORA BUENA!',
						'¡Su contraseña ha sido cambiada con éxito!',
						'success'
					).then(function(result){
				
						if(result.value){   
							window.location = 'dashboard';
						} 
					});

				</script>";

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