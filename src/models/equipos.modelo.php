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

		$stmt = Conexion::conectar()->prepare("INSERT INTO equipos (id_sala, equipo, serie_teclado,	modelo_teclado,	serie_mouse, modelo_mouse, serie_pantalla, modelo_pantalla,	serie_cpu, modelo_cpu, adaptador_red, ram, procesador, disco_duro, cd_rom, observacion) VALUES (:sala, :equipo, :serieTeclado, :modeloTeclado, :serieMouse, :modeloMouse, :seriePantalla, :modeloPantalla, :serieCpu, :modeloCpu, :adaptadorRed, :ram, :procesador, :disco, :cd, :observacion)");

		$stmt->bindParam(":sala", $datos["sala"], PDO::PARAM_STR);
		$stmt->bindParam(":equipo", $datos["equipo"], PDO::PARAM_STR);
		$stmt->bindParam(":serieTeclado", $datos["serieTeclado"], PDO::PARAM_STR);
		$stmt->bindParam(":modeloTeclado", $datos["modeloTeclado"], PDO::PARAM_STR);
		$stmt->bindParam(":serieMouse", $datos["serieMouse"], PDO::PARAM_STR);
		$stmt->bindParam(":modeloMouse", $datos["modeloMouse"], PDO::PARAM_STR);
		$stmt->bindParam(":seriePantalla", $datos["seriePantalla"], PDO::PARAM_STR);
		$stmt->bindParam(":modeloPantalla", $datos["modeloPantalla"], PDO::PARAM_STR);
		$stmt->bindParam(":serieCpu", $datos["serieCpu"], PDO::PARAM_STR);
		$stmt->bindParam(":modeloCpu", $datos["modeloCpu"], PDO::PARAM_STR);
		$stmt->bindParam(":adaptadorRed", $datos["adaptadorRed"], PDO::PARAM_STR);
		$stmt->bindParam(":ram", $datos["ram"], PDO::PARAM_STR);
		$stmt->bindParam(":procesador", $datos["procesador"], PDO::PARAM_STR);
		$stmt->bindParam(":disco", $datos["disco"], PDO::PARAM_STR);
		$stmt->bindParam(":cd", $datos["cd"], PDO::PARAM_STR);
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
	Editar Equipo
	=============================================*/

	static public function mdlEditarEquipo($datos){
		
	$id =  $datos["id"];
	$sala = $datos["sala"];
	$equipo = $datos["equipo"];
	$serieTeclado = $datos["serieTeclado"];
	$modeloTeclado =  $datos["modeloTeclado"];
	$serieMouse = $datos["serieMouse"];
	$modeloMouse = $datos["modeloMouse"];
	$seriePantalla = $datos["seriePantalla"];
	$modeloPantalla = $datos["modeloPantalla"];
	$serieCpu = $datos["serieCpu"];
	$modeloCpu = $datos["modeloCpu"];
	$adaptadorRed =  $datos["adaptadorRed"];
	$ram = $datos["ram"];
	$procesador = $datos["procesador"];
	$disco = $datos["disco"];
	$cd = $datos["cd"];
	$observacion = $datos["observacion"];

		$stmt = Conexion::conectar()->prepare("UPDATE equipos SET id_sala = '$sala', equipo = '$equipo', serie_teclado = '$serieTeclado', modelo_teclado = '$modeloTeclado', serie_mouse ='$serieMouse', modelo_mouse = '$modeloMouse', serie_pantalla = '$seriePantalla', modelo_pantalla = '$modeloPantalla',	serie_cpu = '$serieCpu', modelo_cpu = '$modeloCpu', adaptador_red = '$adaptadorRed', ram = '$ram', procesador = '$procesador', disco_duro = '$disco', cd_rom = '$cd', observacion = '$observacion' WHERE id = '$id'");

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