<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datos de la Empresa</title>
</head>


<body>


<?php

//Menu de Opciones
include("menu.php");
?>

	<div id="content"> <!-- Inicio del Contenido (Menu) --> 
    
    
<?php
//---------------------------------------------
//Llamar a MODELO
require_once('../_modelo/m_empresa.php');
$datos = ConsultarEmpresa();
//-------------------------------------------------
//Llamar VISTA
require('../_vista/v_empresa_datos.php');
//-------------------------------------------------

if(isset($_REQUEST['grabar']))
{
//EXTRAER DATOS
$id_empresa=$_REQUEST['id_empresa'];
$nom=strtoupper($_REQUEST['nom']);
$ruc=strtoupper($_REQUEST['ruc']);
$dir=strtoupper($_REQUEST['dir']);
$dist=strtoupper($_REQUEST['dist']);
$dep=strtoupper($_REQUEST['dep']);
$pais=strtoupper($_REQUEST['pais']);
$color=strtoupper($_REQUEST['color']);
$desc=$_REQUEST['desc'];

$logo1=$_REQUEST['logo1'];

//LOGO----------------------------------------
$nomff1=$_FILES['logo']['name'];
$rutff1=$_FILES['logo']['tmp_name'];
if($rutff1!=NULL) {$desff1="img/logo/".$nomff1;
copy($rutff1,$desff1);}
else {$desff1=$logo1;}
//------------------------------------------

	$rpta = ActualizarEmpresa($id_empresa,$nom,$ruc,$dir,$dist,$dep,$pais,$desff1,$color,$desc);

//MOSTRAR MENSAJES
if($rpta=="SI")
{?>
<script Language="JavaScript">
//window.opener.location.reload();
//window.close();
alert("Se actualizó correctamente!!!");
location.href='empresa_datos.php';
</script>	
<?php } 

else if($rpta=="NO") 
{?>
<script Language="JavaScript">
//alert("Ya existe este tipo de personal");
//window.close();
alert("Ya existe este cliente");
location.href='empresa_datos.php';
</script>	
<?php } 


}
?> 

</div> <!-- Fin del Div  (Menu) -->

</body>
</html>