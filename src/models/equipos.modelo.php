<?php

require_once "conexion.php";

class ModeloEquipos{

	/*=============================================
	Mostrar Equipos
	=============================================*/

	static public function mdlMostrarEquipos($item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM equipos WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM equipos");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Mostrar Equipos (Sala)
	=============================================*/

	static public function mdlMostrarEquiposSala($item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM equipos WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;

	}


	/*=============================================
	Registro Equipos
	=============================================*/

	static public function mdlRegistroEquipo($datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO equipos (equipo, id_sala, observacion, status) VALUES (:sala, :sala, :observacion, :estado)");

		$stmt->bindParam(":sala", $datos["sala"], PDO::PARAM_STR);
		$stmt->bindParam(":equipo", $datos["equipo"], PDO::PARAM_STR);
		$stmt->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
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
	Editar Equipo
	=============================================*/

	static public function mdlEditarEquipo($datos){
		
		$equipo = $datos["equipo"];
		$sala = $datos["sala"];
		$estado = $datos["estado"];
		$observacion = $datos["observacion"];
		$id = $datos["id"];

		$stmt = Conexion::conectar()->prepare("UPDATE equipos SET equipo = '$equipo', id_sala =' $sala', observacion = '$observacion', status = '$estado' WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


	/*=============================================
	Eliminar Equipo
	=============================================*/

	static public function mdlEliminarEquipo($id){

		$stmt = Conexion::conectar()->prepare("DELETE FROM equipos WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

}