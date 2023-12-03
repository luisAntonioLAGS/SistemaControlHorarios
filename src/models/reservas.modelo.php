<?php

require_once "conexion.php";

class ModeloReservas{

	/*=============================================
	Mostrar Reservas
	=============================================*/

	static public function mdlMostrarReservas($item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM salas WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM salas");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Mostrar Mis Reservas
	=============================================*/

	static public function mdlMostrarMisReservas($item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM reservas WHERE $item = :$item ORDER BY id DESC");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

	
		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Mostrar Mis Reservas Activas
	=============================================*/

	static public function mdlMostrarMisReservasActivas($idDocente){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM reservas WHERE id_docente = '$idDocente' AND status = '1' ");

		$stmt -> execute();

		return $stmt -> rowCount();

	
		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Mostrar Mis Reservas Activas2
	=============================================*/

	static public function mdlMostrarMisReservasActivas2($idDocente){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM reservas WHERE id_docente = '$idDocente' AND status = '1' ");

		$stmt -> execute();

		return $stmt -> fetch();

	
		$stmt-> close();

		$stmt = null;


	}





	/*=============================================
	Registrar Reserva
	=============================================*/

	static public function mdlRegistroReserva($datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO reservas (id_sala, id_docente, fecha, hora_inicio, hora_fin, observacion) VALUES (:idSala, :idDocente, :fecha, :hora, :horaFin, :observacion)");

		$stmt->bindParam(":idSala", $datos["idSala"], PDO::PARAM_STR);
		$stmt->bindParam(":idDocente", $datos["idDocente"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
		$stmt->bindParam(":horaFin", $datos["horaFin"], PDO::PARAM_STR);
		$stmt->bindParam(":observacion", $datos["observacion"], PDO::PARAM_STR);
	
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
	Cerrar Reserva
	=============================================*/

	static public function mdlCerrarReserva($id){

		$stmt = Conexion::conectar()->prepare("UPDATE reservas SET status = '0' WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

}