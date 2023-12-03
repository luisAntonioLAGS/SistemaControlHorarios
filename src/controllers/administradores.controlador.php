<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ControladorAdministradores{

	/*=============================================
	Ingreso Administradores
	=============================================*/

	public function ctrIngresoAdministradores(){

		if(isset($_POST["ingresoUsuario"])){

			$encriptarPassword = md5($_POST["ingresoPassword"]);

			$tabla = "administradores";
			$item = "usuario";
			$valor = $_POST["ingresoUsuario"];

			$administrador = ModeloAdministradores::mdlMostrarAdministradores($tabla, $item, $valor);
			$docente = ModeloDocentes::mdlMostrarDocentes($item, $valor);

			
			if(@$administrador["usuario"] == $_POST["ingresoUsuario"] && @$administrador["password"] == $encriptarPassword){

				if($administrador["estado"] == 1){

					$_SESSION["validarSesionBackend"] = "ok";
					$_SESSION["idBackend"] = $administrador["id"];
					$_SESSION["perfil"] = "Administrador";

					echo '<script>

						window.location = "dashboard";

					</script>';

				}else if($administrador["estado"] == 0){

					echo '<script>
						Swal.fire({
							type:"error",
							title: "¡ERROR!",
							text: "¡El usuario está desactivado!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						})
					</script>';	

				}

			}

			else if(@$administrador["usuario"] !== $_POST["ingresoUsuario"] && @$administrador["password"] !== $encriptarPassword){	

				if(@$docente["usuario"] == $_POST["ingresoUsuario"] && @$docente["password"] == $encriptarPassword){

					if($docente["estado"] == 1 and @$docente["cambio_password"] == 1){
	
						$_SESSION["validarSesionBackend"] = "ok";
						$_SESSION["idBackend"] = $docente["id"];
						$_SESSION["perfil"] = "Docente";
	
						echo '<script>
	
							window.location = "dashboard";
	
						</script>';
	
					}
					
					else if($docente["estado"] == 1 and @$docente["cambio_password"] == 0){
	
						$_SESSION["validarSesionBackend"] = "ok";
						$_SESSION["idBackend"] = $docente["id"];
						$_SESSION["perfil"] = "Docente";
	
						echo '<script>
	
							window.location = "cambiar-password";
	
						</script>';
	
					}
					
					
					else if($analista["estado"] == 0){
	
						echo '<script>
							Swal.fire({
								type:"error",
								title: "¡ERROR!",
								text: "¡El usuario está desactivado!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"
							})
						</script>';	

	
					}
					
	
				}

				else{

					echo '<script>
						Swal.fire({
							type:"error",
							title: "¡ERROR!",
							text: "¡Los datos ingresados no son correctos!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						})
					</script>';	

				}

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
	RECUPERAR CONTRASEÑA
	=============================================*/

	public function ctrRecuperarPassword(){
	
		if(isset($_POST["emailRecuperarPassword"])){

			if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["emailRecuperarPassword"])){

				/*=============================================
				GENERAR CONTRASEÑA ALEATORIA
				=============================================*/

				function generarPassword($longitud){

					$password = "";
					$patron = "1234567890abcdefghijklmnopqrstuvwxyz";

					$max = strlen($patron)-1;

					for($i = 0; $i < $longitud; $i++){

						$password .= $patron[mt_rand(0,$max)];

					}

					return $password;

				}

				$nuevaPassword = generarPassword(11);

				$encriptar = md5($nuevaPassword);

				$item = "email";
				$valor = $_POST["emailRecuperarPassword"];

				$traerUsuario = ModeloDocentes::mdlMostrarDocentes($item, $valor);

				if($traerUsuario){

					$id = $traerUsuario["id"];
					$item = "password";
					$valor = $encriptar;

					$actualizarPassword = ModeloDocentes::mdlActualizarPassword($id, $valor);

					if($actualizarPassword  == "ok"){
					    
					    //Create an instance; passing `true` enables exceptions
						$mail = new PHPMailer(true);

						try {
							//Server settings
							$mail->SMTPDebug = 2;                      //Enable verbose debug output
							$mail->isSMTP();                                            //Send using SMTP
							$mail->Host       = 'luisenriqueweb.com';                     //Set the SMTP server to send through
							$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
							$mail->Username   = 'soporte@luisenriqueweb.com';                     //SMTP username
							$mail->Password   = '1223456';                               //SMTP password
							$mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
							$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

							//Recipients
							$mail->setFrom('soporte@luisenriqueweb.com', 'Instituto Tecnologico de Istmo');
							$mail->addAddress($_POST["emailRecuperarPassword"]);     //Add a recipient
							              
							//Content
							$mail->isHTML(true);                                  //Set email format to HTML
							$mail->Subject = 'Cambio de Clave';
							$mail->Body    = '<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
	
	
							<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
							
								<center>
								
								<img style="padding:20px; width:15%" src="luisenriqueweb.com/salacomputo/public/assets/images/reset-password.png">

								<h3 style="font-weight:100;">SOLICITUD DE NUEVA CONTRASEÑA</h3>

								<hr style="border:1px solid #ccc; width:80%">

								<h4 style="font-weight:100; padding:0 20px"><strong>Su nueva contraseña: </strong>'.$nuevaPassword.'</h4>

								<a href="luisenriqueweb.com/salacomputo/"_blank" style="text-decoration:none">

								<div style="line-height:30px; background:#0aa; width:60%; padding:20px; color:white">			
									Haz click aquí
								</div>

								</a>

								<h4 style="font-weight:100; color:#999; padding:0 20px">Ingrese nuevamente al sitio con esta contraseña y recuerde cambiarla en el panel de perfil de usuario</h4>

								<br>

								<hr style="border:1px solid #ccc; width:80%">

								<h5 style="font-weight:100; color:#999">Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y la cuenta se eliminará.</h5>

								</center>

							</div>

						</div>';
						

							$envio = $mail->send();
							echo 'Enviado correctamente';
						} catch (Exception $e) {
							echo "Error al enviar. Mailer Error: {$mail->ErrorInfo}";
						}

						if(!$envio){

							echo"<script>

								Swal.fire(
									'ERROR!',
									'¡Ha ocurrido un problema enviando verificación de correo electrónico a ".$_POST["emailRecuperarPassword"].$mail->ErrorInfo.", por favor inténtelo nuevamente',
									'error'
								).then(function(result){
							
									if(result.value){   
										window.location = '".$ruta."';
									} 
								});

							</script>";


						}else{

							echo"<script>

								Swal.fire(
									'¡SU SOLICITUD HA SIDO RECIBIDA!',
									'¡Por favor revise la bandeja de entrada o la carpeta de SPAM de su correo electrónico ".$_POST["emailRecuperarPassword"]." para su cambio de contraseña!',
									'success'
								).then(function(result){
							
									if(result.value){   
										window.location = '".$ruta."';
									} 
								});

							</script>";

						}	


					}


				}else{

					echo"<script>

						Swal.fire(
							'ERROR',
							'¡El correo ".$_POST["emailRecuperarPassword"]." no existe en el sistema!',
							'error'
						).then(function(result){
					
							if(result.value){   
								window.location = '".$ruta."';
							} 
						});

					</script>";

				}

			}else{

				echo"<script>

						Swal.fire(
							'ERROR',
							'¡Introduzca un correo electrónico válido!',
							'error'
						).then(function(result){
					
							if(result.value){   
								window.location = '".$ruta."';
							} 
						});

					</script>";

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