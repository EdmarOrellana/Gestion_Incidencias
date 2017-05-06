<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Incidencia </title>
</head>


<body>


<?php

//Menu de Opciones
include("menu.php");
?>

	<div id="content"> <!-- Inicio del Contenido (Menu) --> 
   


<?php

//---------------------------------------------
//Valor a consultar
if(isset($_REQUEST['grabar']))
{$cod=$_REQUEST['id_incidencia'];}
else 
{$cod=$_REQUEST['editar'];}
//---------------------------------------------
//Datos por defecto
require_once('../_modelo/m_metodo.php');
$metodo = BuscarMetodo();
//Llamar a MODELO
require_once('../_modelo/m_incidencia.php');
$hora = HoraActual();
$datos = ConsultarIncidencia($cod);
//-------------------------------------------------
//Llamar VISTA
require('../_vista/v_incidencia_editar.php');
//-------------------------------------------------



if(isset($_REQUEST['grabar']))
{
//EXTRAER DATOS
$id_cliente=strtoupper($_REQUEST['id_cliente']);
$id_asignado=strtoupper($_REQUEST['id_usuario']);
$id_categoria_detalle=strtoupper($_REQUEST['id_categoria_detalle']);
$id_metodo=strtoupper($_REQUEST['met']);
$urg=strtoupper($_REQUEST['urg']);
$imp=strtoupper($_REQUEST['imp']);
$prio=strtoupper($_REQUEST['prio']);
$res=strtoupper($_REQUEST['res']);
$des=strtoupper($_REQUEST['des']);
$hora_ini=strtoupper($_REQUEST['hora_ini']);
$act=strtoupper($_REQUEST['act']);

$id_incidencia=$_REQUEST['id_incidencia'];


	$rpta = ActualizarIncidencia($id_incidencia,$id_cliente,$id_asignado,$id_categoria_detalle,$id_metodo,$id,$urg,$imp,$prio,$res,$des,$hora_ini,$act);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Se actualizó correctamente!!!");
location.href='incidencia_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de servicio");
//window.close();
alert("Ya existe esta Incidencia");
location.href='incidencia_mostrar.php';
</script>	
<?php } 


}
?> 

</div> <!-- Fin del Div  (Menu) -->

</body>
</html>