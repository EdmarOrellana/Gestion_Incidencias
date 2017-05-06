<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar Cliente</title>
</head>


<body>


<?php
//INICIAR SESION
include("../conexion/sesion.php");


//Llamar CABECERA - CRITERIO
require('../_vista/v_busca_cliente_cab.php');
//Llamar a MODELO
require_once('../_modelo/m_cliente.php');

//MOSTRAR INFORMACION
//---------------------------------------------------------
if(isset($_REQUEST['buscar']))
{ 
//por criterio
$desc=strtoupper($_REQUEST['desc']);

	$consulta = BuscarCliente1($desc);
}

else 
{
//por general
	$consulta = BuscarCliente();
}
//---------------------------------------------------------
// Llamar a VISTA
require('../_vista/v_busca_cliente.php');


//AL ELEGIR LA INFORMACION
//---------------------------------------------------------
if(isset($_REQUEST['ok']))
{ 
//por criterio
$cod=$_REQUEST['ok'];

	$select = SeleccionarCliente($cod);
	
	foreach ($select as $row): 
	$id_cliente=$row['id_cliente'];
	$cliente=$row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente'];
	endforeach;
	
	?>
    <script language="javascript" type="text/javascript">
	var id_cliente="<?php echo $id_cliente; ?>" ;
	var cliente="<?php echo $cliente; ?>" ;
	
    opener.document.incidencia.id_cliente.value = id_cliente;
	opener.document.incidencia.cli.value = cliente;

    window.close();
	</script>
	<?php 
	
}

//---------------------------------------------------------


?>
</body>
</html>