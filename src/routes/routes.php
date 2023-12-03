<?php

if(isset($_GET["pagina"])){
			
    if(
        $_GET["pagina"] == "dashboard" ||
        $_GET["pagina"] == "salas" ||
        $_GET["pagina"] == "sala" ||
        $_GET["pagina"] == "horario-s1" ||
        $_GET["pagina"] == "horario-s2" ||
        $_GET["pagina"] == "horario-s3" ||
        $_GET["pagina"] == "equipos" ||
        $_GET["pagina"] == "equipo" ||
        $_GET["pagina"] == "reservar-sala" ||
        $_GET["pagina"] == "mis-reservas" ||
        $_GET["pagina"] == "reportar-falla" ||
        $_GET["pagina"] == "reporte-fallas" ||
        $_GET["pagina"] == "docentes" ||
        $_GET["pagina"] == "administradores" ||
        $_GET["pagina"] == "salir"
    ){

        include "src/views/pages/".$_GET["pagina"].".php";

    }else{

        include "src/views/pages/error404.php";

    }


}else{

    include "src/views/pages/dashboard.php";

}



?>