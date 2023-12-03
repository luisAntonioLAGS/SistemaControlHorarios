<?php
require_once("dompdf/dompdf_config.inc.php");

$id_cr = isset($_GET["id"]) ? (is_numeric($_GET["id"]) ? $_GET["id"] : 0) : 0;

ob_start();
include('inventario-dompdf-html.php');
$salida_html = ob_get_contents();
ob_end_clean();

$dompdf = new DOMPDF();
$old_limit = ini_set("memory_limit","256M");
$dompdf->load_html($salida_html);
$dompdf->set_paper('letter', 'legal', 'A4');
$dompdf->render();

$pdf = $dompdf->output();
$dompdf->stream("inventario.pdf",array("Attachment"=>false));
exit();
?>