<?php

require_once "conexion.php";

class ModeloDocentes{

	/*=============================================
	Mostrar Docentes
	=============================================*/

	static public function mdlMostrarDocentes($item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM docentes WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM docentes");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}


	/*=============================================
	Registro de  Docentes
	=============================================*/

	static public function mdlRegistroDocente($datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO docentes (titulo, nombre, carrera, cedula) VALUES (:titulo, :nombre, :carrera, :cedula)");

		$stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":carrera", $datos["carrera"], PDO::PARAM_STR);
		$stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
	
		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	Editar Docente
	=============================================*/

	static public function mdlEditarDocente($datos){

		$id = $datos["id"];
		$cedula = $datos["cedula"];
		$nombre = $datos["nombre"];
		$titulo = $datos["titulo"];
		$carrera = $datos["carrera"];

		$stmt = Conexion::conectar()->prepare("UPDATE docentes SET nombre = '$nombre', titulo = '$titulo', carrera = '$carrera', cedula = '$cedula' WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


	/*=============================================
	Eliminar Docente
	=============================================*/

	static public function mdlEliminarDocente($id){

		$stmt = Conexion::conectar()->prepare("DELETE FROM docentes WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

}