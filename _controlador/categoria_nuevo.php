<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nueva Categoria</title>
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
require_once('../_modelo/m_categoria.php');
//Llamar VISTA
require('../_vista/v_categoria_nuevo.php');

//-----------------------------------------------------

if(isset($_REQUEST['grabar']))
{

$nom=strtoupper($_REQUEST['nom']);
$tiempo=strtoupper($_REQUEST['tiempo']);

$rpta = GrabarCategoria($nom,$tiempo);


//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Registrado exitosamente!!!");
location.href='categoria_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de servicio");
alert("Ya existe esta Categoria");
location.href='categoria_mostrar.php';
</script>	
<?php } 

} 

//-----------------------------------------------------
?>	


</div> <!-- Fin del Div  (Menu) -->



</body>
</html>