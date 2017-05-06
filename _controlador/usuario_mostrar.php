<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios</title>
</head>


<body>


<?php
//Menu de Opciones
include("menu.php");
?>

	<div id="content"> <!-- Inicio del Contenido (Menu) --> 

<?php
//Llamar a MODELO
require_once('../_modelo/m_usuario.php');

//---------------------------------------------------------
if(isset($_REQUEST['buscar']))
{ 
//por criterio
$por=strtoupper($_REQUEST['por']);
$desc=strtoupper($_REQUEST['desc']);
$activo=$_REQUEST['activo'];

	$consulta = MostrarUsuario($por,$desc,$activo);
}

else 
{
//por general
	$consulta = MostrarUsuario1();
}
//---------------------------------------------------------


// Llamar a VISTA
require('../_vista/v_usuario_mostrar.php');




?> 

</div> <!-- Fin del Div  (Menu) -->

</body>
</html>

<?php 
if(isset($_REQUEST['eliminar']))
{

$id_usuario=$_REQUEST['eliminar'];
	
	
$rpta = EliminarUsuario($id_usuario);


//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Usuario eliminado!");
location.href='usuario_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este presupuesto");
alert("");
location.href='usuario_mostrar.php';
</script>	
<?php } 

} 

?>
