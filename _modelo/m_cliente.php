<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

//---------------------------------------------Cliente----------------------------------------------------------
function MostrarCliente($p,$d,$a)
{
include("../conexion/conexion.php");

if($p=="NOM")
{
$sql="SELECT * FROM cliente 
INNER JOIN tipo_documento ON cliente.id_tipo_documento=tipo_documento.id_tipo_documento
INNER JOIN area ON cliente.id_area=area.id_area
INNER JOIN anexo ON cliente.id_anexo=anexo.id_anexo
WHERE nom_cliente LIKE '$d%' AND act_cliente='$a'
ORDER BY nom_cliente ASC";
}


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}

//-------------------------------------------------------------------------------------------------------

function MostrarCliente1()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM cliente 
INNER JOIN tipo_documento ON cliente.id_tipo_documento=tipo_documento.id_tipo_documento
INNER JOIN area ON cliente.id_area=area.id_area
INNER JOIN anexo ON cliente.id_anexo=anexo.id_anexo
ORDER BY nom_cliente ASC";


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}


//-------------------------------------------------------------------------------------------------------
function GrabarCliente($doc,$are,$anex,$nom,$ap,$am,$numdoc,$dir,$tel,$cel,$email,$usu,$pass)
{	
include("../conexion/conexion.php");

	//Verificar si existe este cliente 
	$sqlv="SELECT * FROM cliente 
	INNER JOIN tipo_documento ON cliente.id_tipo_documento=tipo_documento.id_tipo_documento
	INNER JOIN area ON cliente.id_area=area.id_area
	WHERE num_doc_cliente='$numdoc'";
	$resv=mysql_query($sqlv,$con);
	$rowv=mysql_fetch_array($resv);
	if($rowv['id_cliente']!=NULL)
	{
	return $rpta="NO";
	}

	else
	{
	$sql="INSERT INTO cliente() VALUES(NULL,'$doc','$are','$anex','$nom','$ap','$am','$numdoc','$dir','$tel','$cel','$email','$usu','$pass',1)";
	mysql_query($sql,$con);	
	return $rpta="SI";
	}

//Cerrar la conexión
mysql_close($con);

}

//-------------------------------------------------------------------------------------------------------
function ConsultarCliente($cod)
{
include("../conexion/conexion.php");

$sql="SELECT * FROM cliente 
INNER JOIN tipo_documento ON cliente.id_tipo_documento=tipo_documento.id_tipo_documento
INNER JOIN area ON cliente.id_area=area.id_area
INNER JOIN anexo ON cliente.id_anexo=anexo.id_anexo
WHERE id_cliente='$cod'"; 

$res=mysql_query($sql,$con);
$datos = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$datos[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $datos;
}


//-------------------------------------------------------------------------------------------------------

function ActualizarCliente($id_cliente,$doc,$are,$anex,$nom,$ap,$am,$numdoc,$dir,$tel,$cel,$email,$usu,$pass,$act,$e)
{
include("../conexion/conexion.php");

	//Verificar si existe este cliente 
	$sqlv="SELECT * FROM cliente WHERE num_doc_cliente='$numdoc'";
	$resv=mysql_query($sqlv,$con);
	$rowv=mysql_fetch_array($resv);
	$cp=$rowv['num_doc_cliente'];
	
	if($cp==NULL || ($cp==$e))
	{
	$sqlg="UPDATE cliente SET
	id_tipo_documento='$doc', 
	id_area='$are', 	
	id_anexo='$anex', 
	nom_cliente='$nom',
	ape_pat_cliente='$ap',
	ape_mat_cliente='$am',
	num_doc_cliente='$numdoc',
	dir_cliente='$dir',
	tel_cliente='$tel',
	cel_cliente='$cel',
	email_cliente='$email',
	usu_cliente='$usu',
	pass_cliente='$pass',
	act_cliente='$act'
	WHERE id_cliente='$id_cliente'";
	mysql_query($sqlg,$con);
	return $rpta="SI";
	}

	else
	{
	return $rpta="NO";
	}

//Cerrar la conexión
mysql_close($con);


}


//-------------------------------------------------------------------------------------------------------

function EliminarCliente($id_cliente)
{
include("../conexion/conexion.php");

	$sqlg="DELETE FROM cliente WHERE id_cliente='$id_cliente'";
	mysql_query($sqlg,$con);
	
	return $rpta="SI";
	
//Cerrar la conexión
mysql_close($con);


}

//--------------------------------------------------------------------------------------------------------------------------
function BuscarCliente()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM cliente 
INNER JOIN tipo_documento ON cliente.id_tipo_documento=tipo_documento.id_tipo_documento
INNER JOIN area ON cliente.id_area=area.id_area
INNER JOIN anexo ON cliente.id_anexo=anexo.id_anexo
WHERE act_cliente=1";


$res=mysql_query($sql,$con);
$consulta = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$consulta[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $consulta;
}

//--------------------------------------------------------------------------------------------------------------------------

function BuscarCliente1($d)
{
include("../conexion/conexion.php");

$sql="SELECT * 
FROM cliente
INNER JOIN tipo_documento ON cliente.id_tipo_documento=tipo_documento.id_tipo_documento
INNER JOIN area ON cliente.id_area=area.id_area
INNER JOIN anexo ON cliente.id_anexo=anexo.id_anexo
WHERE (
CONCAT(nom_cliente,' ',ape_pat_cliente,' ',ape_mat_cliente) LIKE '$d%'
OR num_doc_cliente LIKE '$d%'
)
AND act_cliente='1'
ORDER BY nom_cliente ASC";

$res=mysql_query($sql,$con);
$consulta = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$consulta[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $consulta;
}
//-------------------------------------------------------------------------------------------------------
function SeleccionarCliente($cod)
{
include("../conexion/conexion.php");

$sql="SELECT * FROM cliente
INNER JOIN tipo_documento ON cliente.id_tipo_documento=tipo_documento.id_tipo_documento
INNER JOIN area ON cliente.id_area=area.id_area
INNER JOIN anexo ON cliente.id_anexo=anexo.id_anexo
WHERE id_cliente='$cod'
ORDER BY nom_cliente ASC";

$res=mysql_query($sql,$con);
$consulta = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$consulta[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $consulta;
}

//--------------------------------------------------------------------------------------------------------------------------

?>





</body>
</html>