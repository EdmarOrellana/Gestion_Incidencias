<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Usuario</title>
</head>


<body>


<?php
//Menu de Opciones
include("menu.php");
?>

	<div id="content"> <!-- Inicio del Contenido (Menu) --> 
<?php

//Valor a consultar
if(isset($_REQUEST['grabar']))
{$cod=$_REQUEST['id_usuario'];}
else 
{$cod=$_REQUEST['editar'];}

//---------------------------------------------
//Llamar a MODELO
require_once('../_modelo/m_usuario_tipo.php');
$usuariotipo = BuscarUsuarioTipo();
require_once('../_modelo/m_usuario.php');
$datos = ConsultarUsuario($cod);

//-------------------------------------------------
//Llamar VISTA
require('../_vista/v_usuario_editar.php');
//-------------------------------------------------


if(isset($_REQUEST['grabar']))
{

//EXTRAER DATOS
$nom=strtoupper($_REQUEST['nom']);
$ap=strtoupper($_REQUEST['ap']);
$am=strtoupper($_REQUEST['am']);
$tip=strtoupper($_REQUEST['tip']);
$usu=strtoupper($_REQUEST['usu']);
$pass=strtoupper($_REQUEST['pass']);
$act=$_REQUEST['act'];

$id_usuario=$_REQUEST['id_usuario'];
$e=$_REQUEST['e'];

	$rpta = ActualizarUsuario($id_usuario,$tip,$nom,$ap,$am,$usu,$pass,$act,$e);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Se actualizó correctamente!!!");
location.href='usuario_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este usuario");
//window.close();
alert("Ya existe este usuario");
location.href='usuario_mostrar.php';
</script>	
<?php } 


}
?> 

</body>
</html>