<?php

/*=============================================
CALCULAR FECHA DE INICIO Y FIN DE LA SEMANA ACTUAL
=============================================*/

$diaSemana = date("w");
$tiempoDeInicioDeSemana = strtotime("-" . $diaSemana . " days");
$fechaInicioSemana = date("Y-m-d", $tiempoDeInicioDeSemana);
$tiempoDeFinDeSemana = strtotime("+" . $diaSemana . " days", $tiempoDeInicioDeSemana); 
$fechaFinSemana = date("Y-m-d", $tiempoDeFinDeSemana);

/*=============================================
ORDENAR LAS FECHAS
=============================================*/
$fechaInicio = $fechaInicioSemana;
$date = explode("-", $fechaInicio);
$fechaOrdenada = $date[2]."/".$date[1]."/".$date[0];

$fechaFin = $fechaFinSemana;
$date2 = explode("-", $fechaFin);
$fechaOrdenada2 = $date2[2]."/".$date2[1]."/".$date2[0];


$dia = date('d');
$mes = date('m');
$anio = date('Y');
$fecha = date("Y-m-d");

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$dias = array("Domingo","Sabado","Viernes","Jueves","Miercoles","Martes","Lunes");

/*=============================================
Facturación
=============================================*/
$facturacionDia = ControladorFacturacion::ctrMostrarFacturacionDia($fecha);
$facturacionSemana = ControladorFacturacion::ctrMostrarFacturacionSemana($fechaInicioSemana, $fechaFinSemana);
$facturacionMes = ControladorFacturacion::ctrMostrarFacturacionMes("valor1", $anio, "valor2", $mes);
$facturacionAnio = ControladorFacturacion::ctrMostrarFacturacionAnio("valor1", $anio);


?>

<div class="col-xl-6 xl-100 box-col-12">
  <div class="widget-joins card widget-arrow">
    <div class="row">
      <div class="col-sm-6 pe-0">
        <div class="media border-after-xs">
          <div class="align-self-center me-3 text-start"><span class="mb-1">Facturación de </span>
            <h5 class="mb-0"> HOY </h5>
          </div>
          <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
          <div class="media-body">
            <h5 class="mb-0">$<span><?= number_format($facturacionDia[0], 2, ",", "."); ?></span></h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 ps-0">
        <div class="media">
          <div class="align-self-center me-3 text-start"><span class="mb-1">Facturación del mes </span>
            <h5 class="mb-0"><?= $meses[$mes-1] ?> </h5>
          </div>
          <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
          <div class="media-body ps-2">
            <h5 class="mb-0">$<span><?= number_format($facturacionMes[0], 2, ",", "."); ?></span></h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 pe-0">
        <div class="media border-after-xs">
          <div class="align-self-center me-3 text-start"><span class="mb-1">Facturación de la </span>
            <h5 class="mb-0">SEMANA</h5>
          </div>
          <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
          <div class="media-body">
            <h5 class="mb-0">$<span><?= number_format($facturacionSemana[0], 2, ",", "."); ?></span></h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 ps-0">
        <div class="media">
          <div class="align-self-center me-3 text-start"><span class="mb-1">Facturación del año</span>
            <h5 class="mb-0"><?= $anio ?></h5>
          </div>
          <div class="media-body align-self-center ps-3"><i class="font-primary" data-feather="arrow-up"></i></div>
          <div class="media-body ps-2">
            <h5 class="mb-0">$<span><?= number_format($facturacionAnio[0], 2, ",", "."); ?></span></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>