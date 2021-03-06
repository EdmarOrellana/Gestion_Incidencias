<!DOCTYPE html>
<html>
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
require('../_vista/v_incidencia_nuevo_cliente.php');

//-----------------------------------------------------

if(isset($_REQUEST['grabar']))
{
$id_usuario=0;
$id_cliente=$id;
$id_tipo_solicitud=strtoupper($_REQUEST['tip']);
$id_modo=0;
$id_impacto=0;
$id_prioridad=0;
$id_categoria_detalle=0;
$fec_ven=strtoupper($_REQUEST['fec_ven']);
$asu=strtoupper($_REQUEST['asu']);
$des=strtoupper($_REQUEST['des']);
$hora_ini=strtoupper($_REQUEST['hora_ini']);
$act=4;
$niv=0;

$rpta = GrabarIncidencia($id_cliente,$id_usuario,$id_tipo_solicitud,$id_modo,$id_impacto,$id_prioridad,$id_categoria_detalle,$fec_ven,$niv,$asu,$des,$hora_ini,$act);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Registrado exitosamente!!!");
location.href='incidencia_mostrar_cliente.php';
</script>
<?php }

else if($rpta=="NO")
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de servicio");
alert("Ya existe esta Incidencia");
location.href='incidencia_mostrar_cliente.php';
</script>
<?php }
}
//-----------------------------------------------------
?>

</div> <!-- Fin del Div  (Menu) -->

</body>
</html>
