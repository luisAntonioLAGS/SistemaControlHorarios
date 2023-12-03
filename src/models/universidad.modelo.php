<?php

require_once "conexion.php";

class ModeloUniversidad{

	/*=============================================
	Mostrar Universidad
	=============================================*/

	static public function mdlMostrarUniversidad($item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM universidad WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM universidad");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}

}