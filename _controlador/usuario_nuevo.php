<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Usuario</title>
</head>


<body>

<?php
//Menu de Opciones
include("menu.php");
?>

<div id="content"> <!-- Inicio del Contenido (Menu) --> 
<?php
//-----------------------------------------------------
//Datos por defecto
require_once('../_modelo/m_usuario_tipo.php');
$usuariotipo = BuscarUsuarioTipo();
//Llamar VISTA
require('../_vista/v_usuario_nuevo.php');
//Llamar a MODELO
require_once('../_modelo/m_usuario.php');


//-----------------------------------------------------

if(isset($_REQUEST['grabar']))
{

$nom=strtoupper($_REQUEST['nom']);
$ap=strtoupper($_REQUEST['ap']);
$am=strtoupper($_REQUEST['am']);
$tip=strtoupper($_REQUEST['tip']);
$usu=strtoupper($_REQUEST['usu']);
$pass=strtoupper($_REQUEST['pass']);

$rpta = GrabarUsuario($nom,$ap,$am,$tip,$usu,$pass);


//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Registrado exitosamente!!!");
location.href='usuario_mostrar.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este usuario");
alert("Ya existe este usuario");
location.href='usuario_mostrar.php';
</script>	
<?php } 

} 

//-----------------------------------------------------
?>	


</div> 
	<!-- Fin del Div  (Menu) -->


</body>
</html>