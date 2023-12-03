<?php

require_once "conexion.php";

class ModeloAdministradores{

	/*=============================================
	Mostrar Administradores
	=============================================*/

	static public function mdlMostrarAdministradores($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	Mostrar Administradores Docentes
	=============================================*/

	static public function mdlMostrarAdministradoresDocentes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}



	/*=============================================
	Registro administradores
	=============================================*/

	static public function mdlRegistroAdministradores($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, perfil, estado) VALUES (:nombre, :usuario, :password, :perfil, :estado)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
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
	Editar Administrador
	=============================================*/

	static public function mdlEditarAdministrador($tabla, $datos){

		$nombre = $datos["nombre"];
		$usuario = $datos["usuario"];
		$password = $datos["password"];
		$perfil = $datos["perfil"];	
		$id = $datos["id"];

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre =' $nombre', usuario = '$usuario', password = '$password', perfil = '$perfil' WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


	/*=============================================
	Activar o Desactivar Administrador
	=============================================*/

	static public function mdlActualizarAdministrador($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item2 = '$valor2' WHERE $item1 = '$valor1' ");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


	/*=============================================
	Eliminar Administrador
	=============================================*/

	static public function mdlEliminarAdministrador($tabla, $id){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = '$id'");

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}




}