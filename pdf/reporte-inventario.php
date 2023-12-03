<?php
require_once("./dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$id_cr = isset($_GET["id"]) ? (is_numeric($_GET["id"]) ? $_GET["id"] : 0) : 0;

$equipos = isset($_GET['equipos']) ? $_GET['equipos'] : 'all';

ob_start();
if ($equipos == 'all') {
    include('inventario-dompdf-html.php');
} else {
    $arrayEquipos = explode(',', $equipos);
    foreach ($arrayEquipos as $key => $value) {
        $_GET['id'] = $value;
        include('equipo-dompdf-html.php');
    }
}
$salida_html = ob_get_contents();
ob_end_clean();

$dompdf = new Dompdf();
/* $old_limit = ini_set("memory_limit","256M"); */
$dompdf->loadHtml($salida_html);
$dompdf->setPaper('letter', 'legal', 'A4');
$dompdf->render();

$pdf = $dompdf->output();
$dompdf->stream("inventario.pdf", array("Attachment" => false));
exit();
