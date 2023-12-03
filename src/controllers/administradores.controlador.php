<?php

class ControladorAdministradores{

	/*=============================================
	Ingreso Administradores
	=============================================*/

	public function ctrIngresoAdministradores(){

		if(isset($_POST["ingresoUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresoUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresoPassword"])){

			   	$encriptarPassword = md5($_POST["ingresoPassword"]);

			   	$tabla = "administradores";
			    $item = "usuario";
			    $valor = $_POST["ingresoUsuario"];

				$respuesta = ModeloAdministradores::mdlMostrarAdministradores($tabla, $item, $valor);
				
				if(@$respuesta["usuario"] == $_POST["ingresoUsuario"] && @$respuesta["password"] == $encriptarPassword){

					if($respuesta["estado"] == 1){

						$_SESSION["validarSesionBackend"] = "ok";
				 		$_SESSION["idBackend"] = $respuesta["id"];

				 		echo '<script>

							window.location = "'.$_SERVER["REQUEST_URI"].'";

				 		</script>';

			 		}else{

			 			echo "<div class='alert alert-danger mt-3 small'>ERROR: El usuario está desactivado</div>";

			 		}

				}else{

					echo "<div class='alert alert-danger mt-3 small'>ERROR: Usuario y/o contraseña incorrectos</div>";
				}	

			}else{

				echo "<div class='alert alert-danger mt-3 small'>ERROR: No se permiten caracteres especiales</div>";

			}

		}

	}

	/*=============================================
	Mostrar Administradores
	=============================================*/

	static public function ctrMostrarAdministradores($item, $valor){

		$tabla = "administradores";

		$respuesta = ModeloAdministradores::mdlMostrarAdministradores($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	Mostrar Administradores Docentes
	=============================================*/

	static public function ctrMostrarAdministradoresDocentes($item, $valor){

		$tabla = "administradores";

		$respuesta = ModeloAdministradores::mdlMostrarAdministradoresDocentes($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	Registro de administrador
	=============================================*/

	public function ctrRegistroAdministrador($datos){

		if(isset($datos["registroNombre"])){

			   	$encriptarPassword = md5($datos["registroPassword"]);

				$tabla = "administradores";

				$datos = array(
					"nombre" => $datos["registroNombre"],
					"usuario" =>  $datos["registroUsuario"],
					"password" => $encriptarPassword,
					"perfil" => $datos["registroPerfil"],
					"estado" => 1
				);

				$respuesta = ModeloAdministradores::mdlRegistroAdministradores($tabla, $datos);
				
				if($respuesta == "ok"){

					$response = array("ok" => true);

					echo json_encode($response);
				}

		}


	}

	/*=============================================
	Editar administrador
	=============================================*/

	public function ctrEditarAdministrador($datos){

		if(isset($datos["editarNombre"])){

			if(preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $datos["editarNombre"]) ){

			   	if($datos["editarPassword"] != ""){

			   		if(preg_match('/^[a-zA-Z0-9]+$/', $datos["editarPassword"])){

			   			$password = md5($datos["editarPassword"]);  			

			   		}else{

			   			echo "<div class='alert alert-danger mt-3 small'>ERROR: No se permiten caracteres especiales</div>";

			   			return;

			   		}

			   	}else{

			   		$password = $datos["passwordActual"];
			   	}

				$tabla = "administradores";

				$datos = array(
					"id"=> $datos["editarId"],
					"nombre" => $datos["editarNombre"],
					"usuario" =>  $datos["editarUsuario"],
					"password" => $password,
					"perfil" => $datos["editarPerfil"]
				);

				
				$respuesta = ModeloAdministradores::mdlEditarAdministrador($tabla, $datos);
				
				if($respuesta == "ok"){

					$response = array("ok" => true);

					echo json_encode($response);
				}

			}else{

				echo "<div class='alert alert-danger mt-3 small'>ERROR: No se permiten caracteres especiales</div>";
			}

		}

	}

	/*=============================================
	Eliminar Administrador
	=============================================*/

	static public function ctrEliminarAdministrador($id){

		$tabla = "administradores";

		$respuesta = ModeloAdministradores::mdlEliminarAdministrador($tabla, $id);

		return $respuesta;

	}
	
}