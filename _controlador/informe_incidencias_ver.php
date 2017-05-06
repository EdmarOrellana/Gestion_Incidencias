<?php
require_once("../complemento/dompdf/dompdf_config.inc.php");
//_----------------------------------------------------------
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informe de Incidencias</title>
</head>

<body>

<?php
//Menu de Opciones
include("menu.php");
?>

	<div id="content"> <!-- Inicio del Contenido (Menu) --> 


<?php
//INICIAR SESION
//include("../conexion/sesion.php");
//_----------------------------------------------------------
$id_incidencia=$_GET['id_incidencia'];
//------------------------------------------------------------------------------
//Llamar a MODELO
require_once('../_modelo/m_informe.php');
$detalle = MostrarIncidenciaIndividual($id_incidencia);
$consulta = ConsultarIncidenciaCambios($id_incidencia);

//$consultaT = ConsultarIncidenciaTotal($id_incidencia);
$fecha = MostrarFechaActual();

$empresa = MostrarEmpresa();
	foreach ($empresa as $datos):
	$id_empresa=$datos['id_empresa'];
	$nom=$datos['nom_empresa'];
	$ruc=$datos['ruc_empresa'];
	$dir=$datos['dir_empresa'];
	$dist=$datos['dist_empresa'];
	$dep=$datos['dep_empresa'];
	$pais=$datos['pais_empresa'];
	$logo=$datos['logo_empresa'];
	$color=$datos['color_empresa'];
	$desc=$datos['desc_empresa'];
	$act=$datos['act_empresa'];
	endforeach; 
//------------------------------------------------------------------------------
//Llamar CABECERA - CRITERIO
require('../_vista/v_informe_incidencias_ver.php');
//------------------------------------------------------------------------------
//GENERAR PDF
/*
$CodigoHTML=utf8_decode($CodigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($CodigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("INC-".$id_incidencia.".pdf");
*/
?>
</div> <!-- Fin del Div  (Menu) -->

</body>
</html>