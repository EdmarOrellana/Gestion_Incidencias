<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nueva Servicio</title>
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
require_once('../_modelo/m_servicio.php');
//Llamar VISTA
require('../_vista/v_servicio_nuevo.php');

//-----------------------------------------------------

if(isset($_REQUEST['grabar']))
{

$nom=strtoupper($_REQUEST['nom']);


$rpta = GrabarServicio($nom);


//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Registrado exitosamente!!!");
location.href='servicio_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de servicio");
alert("Ya existe esta Servicio");
location.href='servicio_mostrar.php';
</script>	
<?php } 

} 

//-----------------------------------------------------
?>	


</div> <!-- Fin del Div  (Menu) -->



</body>
</html>