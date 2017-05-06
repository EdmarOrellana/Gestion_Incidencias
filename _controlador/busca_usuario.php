<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar Especialista</title>
</head>


<body>


<?php
//INICIAR SESION
include("../conexion/sesion.php");


//Llamar CABECERA - CRITERIO
require('../_vista/v_busca_usuario_cab.php');
//Llamar a MODELO
require_once('../_modelo/m_usuario.php');

//MOSTRAR INFORMACION
//---------------------------------------------------------
if(isset($_REQUEST['buscar']))
{ 
//por criterio
$desc=strtoupper($_REQUEST['desc']);

	$consulta = BuscarUsuario1($desc);
}

else 
{
//por general
	$consulta = BuscarUsuario();
}
//---------------------------------------------------------
// Llamar a VISTA
require('../_vista/v_busca_usuario.php');


//AL ELEGIR LA INFORMACION
//---------------------------------------------------------
if(isset($_REQUEST['ok']))
{ 
//por criterio
$cod=$_REQUEST['ok'];

	$select = SeleccionarUsuario($cod);
	
	foreach ($select as $row): 
	$id_usuario=$row['id_usuario'];
	$usuario=$row['nom_usuario']." ".$row['ape_pat_usuario']." ".$row['ape_mat_usuario'];
	endforeach;
	
	?>
    <script language="javascript" type="text/javascript">
	var id_usuario="<?php echo $id_usuario; ?>" ;
	var usuario="<?php echo $usuario; ?>" ;
	
    opener.document.incidencia.id_usuario.value = id_usuario;
	opener.document.incidencia.usua.value = usuario;

    window.close();
	</script>
	<?php 
	
}

//---------------------------------------------------------


?>
</body>
</html>