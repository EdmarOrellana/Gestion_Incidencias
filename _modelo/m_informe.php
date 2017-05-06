<?php

//---------------------------------------------Informe----------------------------------------------------------
/*
function InformePlan($fd,$fh)
{
include("../conexion/conexion.php");

$sql="SELECT *,
SUM(prec_plan) as soles,
COUNT(*) as cantidad
FROM contrato_detalle
INNER JOIN contrato ON contrato_detalle.id_contrato=contrato.id_contrato
INNER JOIN plan ON contrato_detalle.id_plan=plan.id_plan
WHERE act_contrato!='0' AND (fec_contrato BETWEEN '$fd' AND '$fh')
GROUP BY plan.id_plan";


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}
*/
//----------------------------------------------------------------------------------------------------------------
/*
function InformeCitasMedico($fd,$fh)
{
include("../conexion/conexion.php");

$sql="SELECT *,
COUNT(*) as cantidad
FROM cita

INNER JOIN horario ON cita.id_horario=horario.id_horario
INNER JOIN turno ON horario.id_turno=turno.id_turno
INNER JOIN medico ON horario.id_medico=medico.id_medico

INNER JOIN paciente ON cita.id_paciente=paciente.id_paciente

WHERE act_cita=2 AND (fec_cita BETWEEN '$fd' AND '$fh')
GROUP BY medico.id_medico";


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}

//----------------------------------------------------------------------------------------------------------------

function InformeCitasPaciente($fd,$fh)
{
include("../conexion/conexion.php");

$sql="SELECT *,
COUNT(*) as cantidad
FROM cita

INNER JOIN horario ON cita.id_horario=horario.id_horario
INNER JOIN turno ON horario.id_turno=turno.id_turno
INNER JOIN medico ON horario.id_medico=medico.id_medico

INNER JOIN paciente ON cita.id_paciente=paciente.id_paciente

WHERE act_cita=2 AND (fec_cita BETWEEN '$fd' AND '$fh')
GROUP BY paciente.id_paciente";


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}

*/
//----------------------------------------------------------------------------------------------------------------

function InformeIncidenciasEstado($fd,$fh,$act)
{
include("../conexion/conexion.php");

$sql="SELECT *,SEC_TO_TIME(TIMESTAMPDIFF(SECOND, time_ini_incidencia, time_fin_incidencia)) horas,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia 

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
INNER JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
INNER JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
INNER JOIN metodo ON incidencia.id_metodo=metodo.id_metodo
INNER JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario

INNER JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria
INNER JOIN grupo ON categoria_detalle.id_grupo=grupo.id_grupo

WHERE act_incidencia='$act'
AND (DATE(time_ini_incidencia) BETWEEN '$fd' AND '$fh')

ORDER BY id_incidencia ASC";



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
function ConsultarIncidenciaCambios($id_incidencia)
{
include("../conexion/conexion.php");

$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia_cambio

INNER JOIN incidencia ON incidencia_cambio.id_incidencia=incidencia.id_incidencia
INNER JOIN usuario USU ON incidencia_cambio.id_usuario=USU.id_usuario

LEFT JOIN usuario ASIGNADO ON incidencia_cambio.det_incidencia_cambio=ASIGNADO.id_usuario

WHERE incidencia_cambio.id_incidencia='$id_incidencia'

ORDER BY time_ini_incidencia DESC"; 

$res=mysql_query($sql,$con);
$datos = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$datos[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $datos;
}

//----------------------------------------------------------------------------------------------------------------

function MostrarIncidenciaIndividual($id_incidencia)
{
include("../conexion/conexion.php");

$sql="SELECT *,SEC_TO_TIME(TIMESTAMPDIFF(SECOND, time_ini_incidencia, time_fin_incidencia)) horas,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia 

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
INNER JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
INNER JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
INNER JOIN metodo ON incidencia.id_metodo=metodo.id_metodo
INNER JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario

INNER JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria
INNER JOIN grupo ON categoria_detalle.id_grupo=grupo.id_grupo

WHERE incidencia.id_incidencia='$id_incidencia'";



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
function MostrarEmpresa()
{
include("../conexion/conexion.php");

$sql="SELECT * FROM empresa";

$res=mysql_query($sql,$con);
$consulta = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$consulta[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $consulta;
}
//------------------------------------------------------------------------------------------------

function MostrarFechaActual1($fecha_crea)
{
include("../conexion/conexion.php");

/* 
$sql="SET lc_time_names = 'es_UY';
SELECT
CONCAT(DATE_FORMAT(DATE(NOW()),'%d'),' de ', UPPER(DATE_FORMAT(DATE(NOW()),'%M')),', ',DATE_FORMAT(DATE(NOW()),'%Y')) AS fecha,
DATE_FORMAT(DATE(NOW()),'%d') AS dia,
UPPER(DATE_FORMAT(DATE(NOW()),'%M')) AS mes,
DATE_FORMAT(DATE(NOW()),'%Y') AS anno";
*/

mysql_query( "SET lc_time_names = 'es_ES'" );

$sql="
SELECT
CONCAT(DATE_FORMAT('$fecha_crea','%d'),' de ', 
UPPER(LEFT(DATE_FORMAT('$fecha_crea','%M'),1)),SUBSTR(DATE_FORMAT('$fecha_crea','%M'),2),', ',
DATE_FORMAT('$fecha_crea','%Y')) AS fecha";


$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$fecha=$row['fecha'];

// Cerrar la conexión
mysql_close($con);
return $fecha;

}

//------------------------------------------------------------------------------------------------

function MostrarFechaActual()
{
include("../conexion/conexion.php");

/* 
$sql="SET lc_time_names = 'es_UY';
SELECT
CONCAT(DATE_FORMAT(DATE(NOW()),'%d'),' de ', UPPER(DATE_FORMAT(DATE(NOW()),'%M')),', ',DATE_FORMAT(DATE(NOW()),'%Y')) AS fecha,
DATE_FORMAT(DATE(NOW()),'%d') AS dia,
UPPER(DATE_FORMAT(DATE(NOW()),'%M')) AS mes,
DATE_FORMAT(DATE(NOW()),'%Y') AS anno";
*/

mysql_query( "SET lc_time_names = 'es_ES'" );

$sql="
SELECT
CONCAT(DATE_FORMAT(DATE(NOW()),'%d'),' de ', 
UPPER(LEFT(DATE_FORMAT(DATE(NOW()),'%M'),1)),SUBSTR(DATE_FORMAT(DATE(NOW()),'%M'),2),', ',
DATE_FORMAT(DATE(NOW()),'%Y')) AS fecha";


$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$fecha=$row['fecha'];

// Cerrar la conexión
mysql_close($con);
return $fecha;

}
//----------------------------------------------------------------------------------------------------------------
/*
function InformeAtencionSocio($fd,$fh)
{
include("../conexion/conexion.php");

$sql="SELECT *,
COUNT(*) as cantidad
FROM atencion
INNER JOIN socio ON atencion.id_socio=socio.id_socio
WHERE act_atencion!='0' AND (fec_atencion BETWEEN '$fd' AND '$fh')
GROUP BY socio.id_socio";


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}

//----------------------------------------------------------------------------------------------------------------

function InformeAtencionTransporte($fd,$fh)
{
include("../conexion/conexion.php");

$sql="SELECT *,
COUNT(*) as cantidad
FROM atencion
INNER JOIN transporte ON atencion.id_transporte=transporte.id_transporte
INNER JOIN transporte_tipo ON transporte.id_transporte_tipo=transporte_tipo.id_transporte_tipo
WHERE act_atencion!='0' AND (fec_atencion BETWEEN '$fd' AND '$fh')
GROUP BY transporte.id_transporte";


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}

//----------------------------------------------------------------------------------------------------------------------

function InformeSocio($fd,$fh)
{
include("../conexion/conexion.php");

$sql="SELECT *,
SUM(prec_plan) as soles
FROM contrato_detalle
INNER JOIN contrato ON contrato_detalle.id_contrato=contrato.id_contrato
INNER JOIN plan ON contrato_detalle.id_plan=plan.id_plan
INNER JOIN socio ON contrato.id_socio=socio.id_socio
WHERE act_contrato!='0' AND (fec_contrato BETWEEN '$fd' AND '$fh')
GROUP BY socio.id_socio";


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}

//----------------------------------------------------------------------------------------------------------------------

function InformeSocio1($fd,$fh,$id_socio)
{
include("../conexion/conexion.php");

$sql="SELECT *,
COUNT(*) as cantidad
FROM contrato
INNER JOIN socio ON contrato.id_socio=socio.id_socio
WHERE act_contrato!='0' AND (fec_contrato BETWEEN '$fd' AND '$fh') AND contrato.id_socio='$id_socio'
GROUP BY socio.id_socio";


$res=mysql_query($sql,$con);
$personal = array();
while($row=mysql_fetch_array($res, MYSQL_ASSOC)){
$personal[] = $row;		
}
// Cerrar la conexión
mysql_close($con);
return $personal;
}


*/
//-------------------------------------------------------------------------------------------------------
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



?>