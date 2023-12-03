<?php

require_once "conexion.php";

class ModeloMaterias{

	/*=============================================
	Mostrar Materias
	=============================================*/

	static public function mdlMostrarMaterias($item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM materias WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM materias");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}


	/*=============================================
	Registro salas
	=============================================*/

	static public function mdlRegistroSala($datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO salas (sala, status) VALUES (:sala, :estado)");

		$stmt->bindParam(":sala", $datos["sala"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
	
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