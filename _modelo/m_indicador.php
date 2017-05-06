<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

//---------------------------------------------------INDICADOR 1-------------------------------------------------------------
function Eficacia($r,$t,$tr,$tp)
{
include("../conexion/conexion.php");

$sql="SELECT IFNULL((($r*$tp)/($t*$tr))*100,0) as eficacia";

$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$consulta=$row['eficacia'];


// Cerrar la conexión
mysql_close($con);
return $consulta;
}
//--------------------------------------------------------
function IncidenciasSolucionadasSI($fecha)
{
include("../conexion/conexion.php");

$sql="SELECT *,
IFNULL(COUNT(*),0) as cantidad
FROM incidencia
WHERE act_incidencia='4'
AND DATE_FORMAT(time_ini_incidencia,'%Y-%m-%d')='$fecha'";

$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$consulta=$row['cantidad'];


// Cerrar la conexión
mysql_close($con);
return $consulta;
}
//--------------------------------------------------------
function IncidenciasSolucionadasSI_dia($fecha)
{
include("../conexion/conexion.php");

$sql="SELECT *,
(
IFNULL(SUM(TIMESTAMPDIFF(MINUTE,time_ini_incidencia,time_fin_incidencia)),0) +  
( 
(IFNULL(SUM(TIMESTAMPDIFF(SECOND,time_ini_incidencia,time_fin_incidencia)),0) -
IFNULL(SUM(TIMESTAMPDIFF(MINUTE,time_ini_incidencia,time_fin_incidencia)),0) * 60) / 60
)
) 
as minutos

FROM incidencia
INNER JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
INNER JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria
WHERE act_incidencia='4'
AND DATE_FORMAT(time_ini_incidencia,'%Y-%m-%d')='$fecha'
GROUP BY id_incidencia";


$res=mysql_query($sql,$con);
$consulta = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$consulta[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $consulta;
}

//--------------------------------------------------------
function TotalIncidencias($fecha)
{
include("../conexion/conexion.php");

$sql="SELECT *,
IFNULL(COUNT(*),0) as cantidad
FROM incidencia
WHERE DATE_FORMAT(time_ini_incidencia,'%Y-%m-%d')='$fecha'";

$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$consulta=$row['cantidad'];


// Cerrar la conexión
mysql_close($con);
return $consulta;
}

//--------------------------------------------------------
function TimpoReal($fecha)
{
include("../conexion/conexion.php");

//IFNULL(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, time_ini_incidencia, time_fin_incidencia)),0) as horas

$sql="SELECT *,
IFNULL(SUM(TIMESTAMPDIFF(MINUTE,time_ini_incidencia,time_fin_incidencia)),0) as minutos
FROM incidencia
WHERE act_incidencia='4'
AND DATE_FORMAT(time_ini_incidencia,'%Y-%m-%d')='$fecha'";

$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$consulta=$row['minutos'];


// Cerrar la conexión
mysql_close($con);
return $consulta;
}

//--------------------------------------------------------
function TimpoPlaneado($fecha)
{
include("../conexion/conexion.php");

//IFNULL(SEC_TO_TIME(TIMESTAMPDIFF(SECOND, time_ini_incidencia, time_fin_incidencia)),0) as horas

$sql="SELECT *,
IFNULL(SUM(time_categoria),0) as minutos
FROM incidencia
INNER JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
INNER JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria
WHERE act_incidencia='4'
AND DATE_FORMAT(time_ini_incidencia,'%Y-%m-%d')='$fecha'";

$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$consulta=$row['minutos'];


// Cerrar la conexión
mysql_close($con);
return $consulta;
}



//--------------------------------------------------------
function Dias($fd,$fh)
{
include("../conexion/conexion.php");

$sql="select * from 
(select adddate('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) fecha from
 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t0,
 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t1,
 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t2,
 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t3,
 (select 0 i union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t4) v
where fecha between '$fd' and '$fh'";

 


$res=mysql_query($sql,$con);
$consulta = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$consulta[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $consulta;
}



//--------------------------------------------------------

function DiaTexto($fecha)
{
include("../conexion/conexion.php");

mysql_query( "SET lc_time_names = 'es_ES'" );

$sql="SELECT DAYNAME('$fecha') as dia;";

$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$consulta=$row['dia'];


// Cerrar la conexión
mysql_close($con);
return $consulta;
}

//---------------------------------------------------INDICADOR 2-------------------------------------------------------------

function Continuidad($tc,$c)
{
include("../conexion/conexion.php");

$sql="SELECT  IFNULL( ($tc/$c),0 ) as continuidad";

$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$consulta=$row['continuidad'];


// Cerrar la conexión
mysql_close($con);
return $consulta;
}

//----------------------------------------------FECHAS---------------------------------------------------------
function FechaActual()
{
include("../conexion/conexion.php");

$sql="SELECT DATE(NOW()) AS fecha";


$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);

$fecha=$row['fecha'];

// Cerrar la conexión
mysql_close($con);

return $fecha;
}

//-------------------------------------------------------------------------------------------------------
function FechaActualDiaUno()
{
include("../conexion/conexion.php");

$sql="SELECT CONCAT( DATE_FORMAT(DATE(NOW()),'%Y'),'-',DATE_FORMAT(DATE(NOW()),'%m'),'-','01' ) AS fecha";


$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);

$fecha=$row['fecha'];

// Cerrar la conexión
mysql_close($con);

return $fecha;
}


//-------------------------------------------------------------------------------------------------------

function PrimerUltimoDiaMes($ano,$mes)
{
include("../conexion/conexion.php");

//Primer dia
$sql="SELECT 
DATE(CONCAT('$ano','-','$mes','-','1')) as primer_dia,
LAST_DAY(CONCAT('$ano','-','$mes','-','1')) as ultimo_dia";

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
?>





</body>
</html>