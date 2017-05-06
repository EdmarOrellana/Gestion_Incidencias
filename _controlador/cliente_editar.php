<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Cliente</title>
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
{$cod=$_REQUEST['id_cliente'];}
else 
{$cod=$_REQUEST['editar'];}
//---------------------------------------------
//Llamar a MODELO
require_once('../_modelo/m_cliente.php');
$datos = ConsultarCliente($cod);

require_once('../_modelo/m_tipo_documento.php');
require_once('../_modelo/m_area.php');
require_once('../_modelo/m_anexo.php');
$tipo_documento = BuscarTipoDocumento();
$area = BuscarArea();
$anexo = BuscarAnexo();

//-------------------------------------------------
//Llamar VISTA
require('../_vista/v_cliente_editar.php');
//-------------------------------------------------


if(isset($_REQUEST['grabar']))
{
//EXTRAER DATOS
$are=strtoupper($_REQUEST['are']);
$anex=strtoupper($_REQUEST['anex']);
$nom=strtoupper($_REQUEST['nom']);
$ap=strtoupper($_REQUEST['ap']);
$am=strtoupper($_REQUEST['am']);
$doc=strtoupper($_REQUEST['doc']);
$numdoc=strtoupper($_REQUEST['numdoc']);
$dir=strtoupper($_REQUEST['dir']);
$tel=strtoupper($_REQUEST['tel']);
$cel=strtoupper($_REQUEST['cel']);
$email=strtoupper($_REQUEST['email']);
$usu=strtoupper($_REQUEST['usu']);
$pass=strtoupper($_REQUEST['pass']);
$act=$_REQUEST['act'];

$id_cliente=$_REQUEST['id_cliente'];
$e=$_REQUEST['e'];

	$rpta = ActualizarCliente($id_cliente,$doc,$are,$anex,$nom,$ap,$am,$numdoc,$dir,$tel,$cel,$email,$usu,$pass,$act,$e);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Se actualizó correctamente!!!");
location.href='cliente_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de personal");
//window.close();
alert("Ya existe este cliente");
location.href='cliente_mostrar.php';
</script>	
<?php } 


}
?> 

</div> <!-- Fin del Div  (Menu) -->

</body>
</html>