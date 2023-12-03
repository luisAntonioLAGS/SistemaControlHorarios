<?php

class ControladorUniversidad{

	
	/*=============================================
	Mostrar UniversidadSalas
	=============================================*/

	static public function ctrMostrarUniversidad($item, $valor){


		$respuesta = ModeloUniversidad::mdlMostrarUniversidad($item, $valor);

		return $respuesta;

	}


}