<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cambiar Contraseña</title>
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
{$cod=$_REQUEST['id_perfil'];}
else 
{$cod=$id;}
//---------------------------------------------
//Llamar a MODELO
require_once('../_modelo/m_perfil.php');
$datos = ConsultarPerfil($cod);
//-------------------------------------------------
//Llamar VISTA
require('../_vista/v_password_editar.php');
//-------------------------------------------------

if(isset($_REQUEST['grabar']))
{
//EXTRAER DATOS
$pass=strtoupper($_REQUEST['pass']);
$pass1=strtoupper($_REQUEST['pass1']);
$n1=strtoupper($_REQUEST['n1']);
$n2=strtoupper($_REQUEST['n2']);
$id_perfil=$_REQUEST['id_perfil'];

	$rpta = ActualizarPassword($id_perfil,$pass,$pass1,$n1,$n2);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
//location.href='usuario_mostrar.php';
alert("Se actualizó correctamente!!! Vuelva a iniciar sesión");
location.href='../conexion/cerrarsesion.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//window.close();
alert("No coinciden contraseñas!");
location.href='password_editar.php';
</script>	
<?php } 


}
?> 


</div> <!-- Fin del Div  (Menu) -->

</body>
</html>