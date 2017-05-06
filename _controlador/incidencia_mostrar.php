<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Incidencias</title>
</head>

<body>
<?php
//Menu de Opciones
include("menu.php");
?>
	<div id="content"> <!-- Inicio del Contenido (Menu) -->
<?php
//Llamar a MODELO
require_once('../_modelo/m_incidencia.php');
//---------------------------------------------------------
if(isset($_REQUEST['buscar']))
{
/*
//por criterio
$por=strtoupper($_REQUEST['por']);
$desc=strtoupper($_REQUEST['desc']);
$activo=$_REQUEST['activo'];
	$consulta = MostrarIncidencia($por,$desc,$activo);
*/
}
else
{
//por general
	$consulta = MostrarIncidencia1($id,$tipo);
}
//---------------------------------------------------------
// Llamar a VISTA
require('../_vista/v_incidencia_mostrar.php');
?>
</div> <!-- Fin del Div  (Menu) -->
</body>
</html>

<?php
if(isset($_REQUEST['eliminar']))
{
	$id_incidencia=$_REQUEST['eliminar'];


$rpta = EliminarIncidencia($id_incidencia);
//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Incidencia eliminada!");
location.href='incidencia_mostrar.php';
</script>
<?php }

else if($rpta=="NO")
{?>
<script Language="JavaScript">
//alert("Ya existe este presupuesto");
alert("");
location.href='incidencia_mostrar.php';
</script>
<?php }
}

?>
