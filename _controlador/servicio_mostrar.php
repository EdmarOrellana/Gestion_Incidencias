<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Servicio</title>
</head>


<body>


<?php
//Menu de Opciones
include("menu.php");
?>

	<div id="content"> <!-- Inicio del Contenido (Menu) --> 


<?php
//Llamar a MODELO
require_once('../_modelo/m_servicio.php');

//---------------------------------------------------------
if(isset($_REQUEST['buscar']))
{ 
//por criterio
$por=strtoupper($_REQUEST['por']);
$desc=strtoupper($_REQUEST['desc']);
$activo=$_REQUEST['activo'];

	$consulta = MostrarServicio($por,$desc,$activo);
}

else 
{
//por general
	$consulta = MostrarServicio1();
}
//---------------------------------------------------------


// Llamar a VISTA
require('../_vista/v_servicio_mostrar.php');


?> 


</div> <!-- Fin del Div  (Menu) -->

</body>
</html>