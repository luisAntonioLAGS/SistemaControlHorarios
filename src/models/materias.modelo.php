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
	Registro Materias
	=============================================*/

	static public function mdlRegistroMateria($datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO materias (materia) VALUES (:materia)");

		$stmt->bindParam(":materia", $datos["materia"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	Editar Materia
	=============================================*/

	static public function mdlEditarMateria($datos){

		$materia = $datos["materia"];
		$id = $datos["id"];

		$stmt = Conexion::conectar()->prepare("UPDATE materias SET materia = '$materia' WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


	/*=============================================
	Eliminar Materia
	=============================================*/

	static public function mdlEliminarMateria($id){

		$stmt = Conexion::conectar()->prepare("DELETE FROM materias WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

}