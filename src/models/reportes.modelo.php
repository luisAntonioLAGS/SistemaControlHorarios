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
	Editar Sala
	=============================================*/

	static public function mdlEditarSala($datos){

		$sala = $datos["sala"];
		$estado = $datos["estado"];
		$id = $datos["id"];

		$stmt = Conexion::conectar()->prepare("UPDATE salas SET status = '$estado' WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


	/*=============================================
	Eliminar Sala
	=============================================*/

	static public function mdlEliminarSala($id){

		$stmt = Conexion::conectar()->prepare("DELETE FROM salas WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

}