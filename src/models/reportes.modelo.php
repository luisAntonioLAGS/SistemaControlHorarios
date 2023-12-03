<?php

require_once "conexion.php";

class ModeloReportes{

	/*=============================================
	Mostrar Reportes
	=============================================*/

	static public function mdlMostrarReportes($item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM reportes_fallas WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM reportes_fallas ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Mostrar Total de Reportes
	=============================================*/

	static public function mdlMostrarTotalReportes($datos){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM reportes_fallas WHERE visto = '$datos'");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Mostrar Mis Reportes
	=============================================*/

	static public function mdlMostrarMisReportes($idDocente){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM reportes_fallas WHERE id_docente = '$idDocente' ORDER BY id DESC ");

		$stmt -> execute();

		return $stmt -> fetchAll();

	
		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Crear Reporte
	=============================================*/

	static public function mdlRegistroReporte($datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO reportes_fallas (id_docente, reporte) VALUES (:idDocente, :reporte)");

		$stmt->bindParam(":idDocente", $datos["idDocente"], PDO::PARAM_STR);
		$stmt->bindParam(":reporte", $datos["reporte"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	Ver Reportes
	=============================================*/

	static public function mdlVerReportes(){

		
		$stmt = Conexion::conectar()->prepare("UPDATE reportes_fallas SET visto = 'si' ");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


}