<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Tipo Solicitud </title>
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
{$cod=$_REQUEST['id_tipo_solicitud'];}
else 
{$cod=$_REQUEST['editar'];}
//---------------------------------------------
//Llamar a MODELO
require_once('../_modelo/m_tipo_solicitud.php');
$datos = ConsultarTipoSolicitud($cod);
//-------------------------------------------------
//Llamar VISTA
require('../_vista/v_tipo_solicitud_editar.php');
//-------------------------------------------------



if(isset($_REQUEST['grabar']))
{
//EXTRAER DATOS
$nom=strtoupper($_REQUEST['nom']);
$act=$_REQUEST['act'];

$id_tipo_solicitud=$_REQUEST['id_tipo_solicitud'];
$e=$_REQUEST['e'];

	$rpta = ActualizarTipoSolicitud($id_tipo_solicitud,$nom,$act,$e);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Se actualizó correctamente!!!");
location.href='tipo_solicitud_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de servicio");
//window.close();
alert("Ya existe este TipoSolicitud");
location.href='tipo_solicitud_mostrar.php';
</script>	
<?php } 


}
?> 

</div> <!-- Fin del Div  (Menu) -->

</body>
</html>