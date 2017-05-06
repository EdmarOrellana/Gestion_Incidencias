<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Tipo de Usuario</title>
</head>


<body>


<?php

//Menu de Opciones
include("menu.php");
?>

	<div id="content"> <!-- Inicio del Contenido (Menu) --> 
<?php


//-----------------------------------------------------
//Llamar a MODELO
require_once('../_modelo/m_usuario_tipo.php');
//Llamar VISTA
require('../_vista/v_usuario_tipo_nuevo.php');

//-----------------------------------------------------

if(isset($_REQUEST['grabar']))
{

$nom=strtoupper($_REQUEST['nom']);
$t1=strtoupper($_REQUEST['1']);
$t2=strtoupper($_REQUEST['2']);
$t3=strtoupper($_REQUEST['3']);
$t4=strtoupper($_REQUEST['4']);
$t5=strtoupper($_REQUEST['5']);
$t6=strtoupper($_REQUEST['6']);
$t7=strtoupper($_REQUEST['7']);



$rpta = GrabarUsuarioTipo($nom,$t1,$t2,$t3,$t4,$t5,$t6,$t7);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Registrado exitosamente!!!");
location.href='usuario_tipo_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de usuario");
alert("Ya existe este Tipo de Usuario");
location.href='usuario_tipo_mostrar.php';
</script>	
<?php } 

} 

//-----------------------------------------------------
?>	


</div> <!-- Fin del Div  (Menu) -->



</body>
</html>