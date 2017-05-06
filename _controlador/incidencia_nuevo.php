<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nueva Incidencia</title>
</head>


<body>


<?php

//Menu de Opciones
include("menu.php");
?>

	<div id="content"> <!-- Inicio del Contenido (Menu) --> 
<?php


//-----------------------------------------------------
//Por defecto
require_once('../_modelo/m_tipo_solicitud.php');
require_once('../_modelo/m_modo.php');
require_once('../_modelo/m_impacto.php');
require_once('../_modelo/m_prioridad.php');


$tipo_solicitud = BuscarTipoSolicitud();
$modo = BuscarModo();
$impacto = BuscarImpacto();
$prioridad = BuscarPrioridad();


//Llamar a MODELO
require_once('../_modelo/m_incidencia.php');
$hora = HoraActual();
//Llamar VISTA
require('../_vista/v_incidencia_nuevo.php');

//-----------------------------------------------------

if(isset($_REQUEST['grabar']))
{
$id_usuario=$id;		
$id_cliente=strtoupper($_REQUEST['id_cliente']);
$id_tipo_solicitud=strtoupper($_REQUEST['tip']);
$id_modo=strtoupper($_REQUEST['mod']);
$id_impacto=strtoupper($_REQUEST['imp']);
$id_prioridad=strtoupper($_REQUEST['pri']);
$id_categoria_detalle=strtoupper($_REQUEST['id_categoria_detalle']);
$asu=strtoupper($_REQUEST['asu']);
$des=strtoupper($_REQUEST['des']);
$hora_ini=0;
$act=strtoupper($_REQUEST['act']);

$niv=strtoupper($_REQUEST['niv']);

$rpta = GrabarIncidencia($id_cliente,$id_usuario,$id_tipo_solicitud,$id_modo,$id_impacto,$id_prioridad,$id_categoria_detalle,$niv,$asu,$des,$hora_ini,$act);



//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Registrado exitosamente!!!");
location.href='incidencia_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de servicio");
alert("Ya existe esta Incidencia");
location.href='incidencia_mostrar.php';
</script>	
<?php } 

} 

//-----------------------------------------------------
?>	


</div> <!-- Fin del Div  (Menu) -->



</body>
</html>