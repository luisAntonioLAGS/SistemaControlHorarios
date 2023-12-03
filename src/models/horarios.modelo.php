<?php

require_once "conexion.php";

class ModeloHorarios{

	/*=============================================
	Mostrar Horario
	=============================================*/

	static public function mdlMostrarHorario($item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM horarios WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM horarios");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Mostrar Horario Personalizado
	=============================================*/

	static public function mdlMostrarHorarioPersonalizado($sala, $dia, $horaInicio, $horaFin){

		
		$stmt = Conexion::conectar()->prepare("SELECT * FROM horarios WHERE id_sala = '$sala' AND dia = '$dia' AND hora_inicio = '$horaInicio'");

		$stmt -> execute();

		return $stmt -> fetch();

		
		$stmt-> close();
	
		$stmt = null;

	}


	/*=============================================
	Registro de Horario
	=============================================*/

	static public function mdlRegistroHorario($datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO horarios (id_sala, id_materia, id_profesor, dia, hora_inicio, hora_fin) VALUES (:idSala, :materia, :profesor, :dia, :horaInicio, :horaSalida)");

		$stmt->bindParam(":idSala", $datos["idSala"], PDO::PARAM_STR);
		$stmt->bindParam(":materia", $datos["materia"], PDO::PARAM_STR);
		$stmt->bindParam(":profesor", $datos["profesor"], PDO::PARAM_STR);
		$stmt->bindParam(":dia", $datos["dia"], PDO::PARAM_STR);
		$stmt->bindParam(":horaInicio", $datos["horaInicio"], PDO::PARAM_STR);
		$stmt->bindParam(":horaSalida", $datos["horaSalida"], PDO::PARAM_STR);
	
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