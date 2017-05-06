<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

//---------------------------------------------Area----------------------------------------------------------


function MostrarArea($p,$d,$a)
{
include("../conexion/conexion.php");

if($p=="NOM")
{
$sql="SELECT * FROM area 
WHERE nom_area LIKE '$d%' AND act_area='$a'
ORDER BY nom_area ASC";
}


$res=mysql_query($sql,$con);
$servicio = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$servicio[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $servicio;
}

//-------------------------------------------------------------------------------------------------------

function MostrarArea1()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM area 
ORDER BY nom_area ASC";


$res=mysql_query($sql,$con);
$servicio = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$servicio[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $servicio;
}


//-------------------------------------------------------------------------------------------------------
function GrabarArea($nom)
{
include("../conexion/conexion.php");

	//Verificar si existe este area 
	$sqlv="SELECT * FROM area WHERE nom_area='$nom'";
	$resv=mysql_query($sqlv,$con);
	$rowv=mysql_fetch_array($resv);
	if($rowv['id_area']!=NULL)
	{
	return $rpta="NO";
	}

	else
	{
	$sql="INSERT INTO area() VALUES(NULL,'$nom',1)";
	mysql_query($sql,$con);	
	return $rpta="SI";
	}

//Cerrar la conexión
mysql_close($con);


}

//-------------------------------------------------------------------------------------------------------
function ConsultarArea($cod)
{
include("../conexion/conexion.php");

$sql="SELECT * FROM area WHERE id_area='$cod'"; 

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

function ActualizarArea($id_area,$nom,$act,$e)
{
include("../conexion/conexion.php");

	//Verificar si existe este area 
	$sqlv="SELECT * FROM area WHERE nom_area='$nom'";
	$resv=mysql_query($sqlv,$con);
	$rowv=mysql_fetch_array($resv);
	$cp=$rowv['nom_area'];
	
	if($cp==NULL || ($cp==$e))
	{
	$sqlg="UPDATE area SET 
	nom_area='$nom',
	act_area='$act'
	WHERE id_area='$id_area'";
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

function EliminarArea($id_area)
{
include("../conexion/conexion.php");

	$sqlg="DELETE FROM area WHERE id_area='$id_area'";
	mysql_query($sqlg,$con);
	
	return $rpta="SI";
	
//Cerrar la conexión
mysql_close($con);


}

//--------------------------------------------------------------------------------------------------------------------------
function BuscarArea()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM area 
WHERE act_area=1";


$res=mysql_query($sql,$con);
$consulta = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$consulta[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $consulta;
}

/*

//--------------------------------------------------------------------------------------------------------------------------
function BuscarDocente()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM docente 
WHERE act_docente=1";


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
function BuscarTurno()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM turno 
WHERE act_turno=1";


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
function BuscarAula()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM aula 
WHERE act_aula=1";


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
function ConsultarHorario($cod)
{
include("../conexion/conexion.php");

$sql="SELECT * FROM horario
WHERE id_horario='$cod'"; 

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

function ActualizarServicioTipo($id_servicio_tipo,$nom,$ap,$am,$dni,$tel,$cel,$email,$dir,$desff1,$desff2,$act,$e)
{
include("../conexion/conexion.php");

	//Verificar si existe esta horario
	$sqlv="SELECT * FROM horario 
	WHERE id_curso='$cur' 
	AND id_curso='$doc'
	AND id_docente='$doc'
	AND id_turno='$tur'
	AND id_aula='$aul'
	AND fec_ini_horario='$fi'
	AND fec_fin_horario='$ff'";
	$resv=mysql_query($sqlv,$con);
	$rowv=mysql_fetch_array($resv);
	$cp1=$rowv['id_curso'];
	$cp2=$rowv['id_docente'];
	$cp3=$rowv['id_turno'];
	$cp4=$rowv['id_aula'];
	$cp5=$rowv['fec_ini_horario'];
	$cp6=$rowv['fec_fin_horario'];
	
	if($cp1==NULL || ($cp1==$e1 && $cp2==$e2 && $cp3==$e3 && $cp4==$e4 && $cp5==$e5 && $cp6==$e6 ))
	{
	$sqlg="UPDATE horario SET 
	id_curso='$cur',
	id_docente='$doc',
	id_turno='$tur',
	id_aula='$aul',
	fec_ini_horario='$fi',
	fec_fin_horario='$ff',
	act_horario='$act'
	WHERE id_horario='$id_horario'";
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



//---------------------------------------------TIPO HABITACION----------------------------------------------------------
function MostrarTipoHabitacion($p,$d,$a)
{
include("../conexion/conexion.php");

if($p=="TIP"){
$sql="SELECT * FROM tipo_habitacion
WHERE nom_tipo_habitacion LIKE '$d%' AND act_tipo_habitacion='$a'
ORDER BY nom_tipo_habitacion ASC"; }

$res=mysql_query($sql,$con);
$servicio = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$servicio[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $servicio;
}

//-------------------------------------------------------------------------------------------------------

function MostrarTipoHabitacion1()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM tipo_habitacion
WHERE act_tipo_habitacion=1
ORDER BY nom_tipo_habitacion ASC";

$res=mysql_query($sql,$con);
$servicio = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$servicio[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $servicio;
}



//--------------------------------------------------------------------------------------------------------------------------
function BuscarTipoHabitacion()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM tipo_habitacion 
WHERE act_tipo_habitacion=1";


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

function GrabarTipoHabitacion($nom,$hor,$pre,$foto,$des)
{
include("../conexion/conexion.php");

	//Verificar si existe esta habitacion
	$sqlv="SELECT * FROM tipo_habitacion WHERE nom_tipo_habitacion='$nom'";
	$resv=mysql_query($sqlv,$con);
	$rowv=mysql_fetch_array($resv);
	if($rowv['id_tipo_habitacion']!=NULL)
	{
	return $rpta="NO";
	}

	else
	{
	$sql="INSERT INTO tipo_habitacion() VALUES(NULL,'$nom','$hor','$pre','$foto','$des',1)";
	mysql_query($sql,$con);	
	return $rpta="SI";
	}

//Cerrar la conexión
mysql_close($con);


}



//-------------------------------------------------------------------------------------------------------

function  ActualizarTipoHabitacion($id_tipo_habitacion,$nom,$hor,$pre,$foto,$des,$act,$e)
{
include("../conexion/conexion.php");

	//Verificar si existe este tipo_habitacion
	$sqlv="SELECT * FROM tipo_habitacion WHERE nom_tipo_habitacion='$nom'";
	$resv=mysql_query($sqlv,$con);
	$rowv=mysql_fetch_array($resv);
	$cp=$rowv['nom_tipo_habitacion'];
	
	if($cp==NULL || ($cp==$e))
	{
	$sqlg="UPDATE tipo_habitacion SET 
	nom_tipo_habitacion='$nom',
	hor_tipo_habitacion='$hor',
	prec_tipo_habitacion='$pre',
	foto_tipo_habitacion='$foto',
	desc_tipo_habitacion='$des',
	act_tipo_habitacion='$act'
	WHERE id_tipo_habitacion='$id_tipo_habitacion'";
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

*/


?>





</body>
</html>