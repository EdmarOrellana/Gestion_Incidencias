<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Categoria </title>
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
{$cod=$_REQUEST['id_categoria'];}
else 
{$cod=$_REQUEST['editar'];}
//---------------------------------------------
//Llamar a MODELO
require_once('../_modelo/m_categoria.php');
$datos = ConsultarCategoria($cod);
//-------------------------------------------------
//Llamar VISTA
require('../_vista/v_categoria_editar.php');
//-------------------------------------------------



if(isset($_REQUEST['grabar']))
{
//EXTRAER DATOS
$nom=strtoupper($_REQUEST['nom']);
$tiempo=strtoupper($_REQUEST['tiempo']);
$act=$_REQUEST['act'];

$id_categoria=$_REQUEST['id_categoria'];
$e=$_REQUEST['e'];

	$rpta = ActualizarCategoria($id_categoria,$nom,$tiempo,$act,$e);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Se actualizó correctamente!!!");
location.href='categoria_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de servicio");
//window.close();
alert("Ya existe este Categoria");
location.href='categoria_mostrar.php';
</script>	
<?php } 


}
?> 

</div> <!-- Fin del Div  (Menu) -->

</body>
</html>