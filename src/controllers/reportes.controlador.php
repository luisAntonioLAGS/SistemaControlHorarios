<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
	Mostrar Total de Reportes
	=============================================*/

	static public function ctrMostrarTotalReportes($datos){


		$respuesta = ModeloReportes::mdlMostrarTotalReportes($datos);

		return $respuesta;

	}

	/*=============================================
	Ver Reportes
	=============================================*/

	static public function ctrVerReportes(){


		$respuesta = ModeloReportes::mdlVerReportes();

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
	Enviar Email
	=============================================*/

	public function ctrEnviarEmail(){

		if(isset($_POST["email"])){

			$path = 'public/assets/documents/' . $_FILES["resume"]["name"];
			move_uploaded_file($_FILES["resume"]["tmp_name"], $path);

			//Create an instance; passing `true` enables exceptions
			$mail = new PHPMailer(true);

			try {
				//Server settings
				$mail->SMTPDebug = 2;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'luisenriqueweb.com';                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = 'soporte@luisenriqueweb.com';                     //SMTP username
				$mail->Password   = '123456';                               //SMTP password
				$mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
				$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('soporte@luisenriqueweb.com', 'Instituto Tecnologico de Istmo');
				$mail->addAddress($_POST["email"]);     //Add a recipient

				//Attachments
				$mail->AddAttachment($path);
						  
				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = 'Archivo';
				$mail->Body    = '<h1>Reporte De Fallas</h1>';
			

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
						'¡EL CORREO HA SIDO ENVIADO!',
						'¡Por favor revise la bandeja de entrada o la carpeta de SPAM del correo electrónico ".$_POST["email"]."  !',
						'success'
					).then(function(result){
				
						if(result.value){   
							window.location = '".$ruta."';
						} 
					});

				</script>";

			}	



		}

	}

	
	

}