<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar Subcategoría</title>
</head>


<body>


<?php
//INICIAR SESION
include("../conexion/sesion.php");


//Llamar CABECERA - CRITERIO
require('../_vista/v_busca_categoria_detalle_cab.php');
//Llamar a MODELO
require_once('../_modelo/m_categoria_detalle.php');

//MOSTRAR INFORMACION
//---------------------------------------------------------
if(isset($_REQUEST['buscar']))
{ 
//por criterio
$desc=strtoupper($_REQUEST['desc']);

	$consulta = BuscarCategoriaDetalle1($desc);
}

else 
{
//por general
	$consulta = BuscarCategoriaDetalle();
}
//---------------------------------------------------------
// Llamar a VISTA
require('../_vista/v_busca_categoria_detalle.php');


//AL ELEGIR LA INFORMACION
//---------------------------------------------------------
if(isset($_REQUEST['ok']))
{ 
//por criterio
$cod=$_REQUEST['ok'];

	$select = SeleccionarCategoriaDetalle($cod);
	
	foreach ($select as $row): 
	$id_categoria_detalle=$row['id_categoria_detalle'];
	$subcategoria=$row['nom_categoria_detalle'];
	$categoria=$row['nom_categoria'];
	endforeach;
	
	?>
    <script language="javascript" type="text/javascript">
	var id_categoria_detalle="<?php echo $id_categoria_detalle; ?>" ;
	var subcategoria="<?php echo $subcategoria; ?>" ;
	var categoria="<?php echo $categoria; ?>" ;

	
    opener.document.incidencia.id_categoria_detalle.value = id_categoria_detalle;
	opener.document.incidencia.cat_det.value = subcategoria;
	opener.document.incidencia.cat.value = categoria;

    window.close();
	</script>
	<?php 
	
}

//---------------------------------------------------------


?>
</body>
</html>