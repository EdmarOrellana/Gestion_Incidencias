<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
//---------------------------------------------Incidencia----------------------------------------------------------
function MostrarIncidencia($p,$d,$a)
{
include("../conexion/conexion.php");

if($p=="NOM")
{
$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
LEFT JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
LEFT JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario
INNER JOIN tipo_solicitud ON incidencia.id_tipo_solicitud=tipo_solicitud.id_tipo_solicitud
LEFT JOIN modo ON incidencia.id_modo=modo.id_modo
LEFT JOIN impacto ON incidencia.id_impacto=impacto.id_impacto
LEFT JOIN prioridad ON incidencia.id_prioridad=prioridad.id_prioridad
LEFT JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
LEFT JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria

ORDER BY time_ini_incidencia DESC";
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
function MostrarIncidencia1($id_usuario,$tipo)
{
include("../conexion/conexion.php");

if($tipo=="ADMINISTRADOR")
{

$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
LEFT JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
LEFT JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario
INNER JOIN tipo_solicitud ON incidencia.id_tipo_solicitud=tipo_solicitud.id_tipo_solicitud
LEFT JOIN modo ON incidencia.id_modo=modo.id_modo
LEFT JOIN impacto ON incidencia.id_impacto=impacto.id_impacto
LEFT JOIN prioridad ON incidencia.id_prioridad=prioridad.id_prioridad
LEFT JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
LEFT JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria

ORDER BY time_ini_incidencia DESC";

}
else
{
$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
LEFT JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
LEFT JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario
INNER JOIN tipo_solicitud ON incidencia.id_tipo_solicitud=tipo_solicitud.id_tipo_solicitud
LEFT JOIN modo ON incidencia.id_modo=modo.id_modo
LEFT JOIN impacto ON incidencia.id_impacto=impacto.id_impacto
LEFT JOIN prioridad ON incidencia.id_prioridad=prioridad.id_prioridad
LEFT JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
LEFT JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria

WHERE incidencia.id_asignado='$id_usuario'

ORDER BY time_ini_incidencia DESC";
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
function MostrarIncidenciaCliente($id_cliente)
{
include("../conexion/conexion.php");

$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
LEFT JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
LEFT JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario
INNER JOIN tipo_solicitud ON incidencia.id_tipo_solicitud=tipo_solicitud.id_tipo_solicitud
LEFT JOIN modo ON incidencia.id_modo=modo.id_modo
LEFT JOIN impacto ON incidencia.id_impacto=impacto.id_impacto
LEFT JOIN prioridad ON incidencia.id_prioridad=prioridad.id_prioridad

LEFT JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
LEFT JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria

WHERE incidencia.id_cliente='$id_cliente'

ORDER BY time_ini_incidencia DESC";

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
function GrabarIncidencia($id_cliente,$id_usuario,$id_tipo_solicitud,$id_modo,$id_impacto,$id_prioridad,$id_categoria_detalle,$niv,$asu,$des,$hora_ini,$fec_ven,$act)
{
include("../conexion/conexion.php");

$sql="INSERT INTO incidencia() VALUES
	(
	NULL,
	'$id_cliente',
	0,
	'$id_tipo_solicitud',
	'$id_modo',
	'$id_impacto',
	'$id_prioridad',
	'$id_categoria_detalle',
	'$id_usuario',
	'$niv',
	'$asu',
	'$des',
	NOW(),
	0,
	'$fec_ven',
	'$act'
	)
	";

	mysql_query($sql,$con);
	return $rpta="SI";
//Cerrar la conexión
mysql_close($con);
}
//-------------------------------------------------------------------------------------------------------
function ConsultarIncidencia($cod)
{
include("../conexion/conexion.php");

$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario,
ASIGNADO.id_usuario AS id_asignado

FROM incidencia

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
LEFT JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
LEFT JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario
INNER JOIN tipo_solicitud ON incidencia.id_tipo_solicitud=tipo_solicitud.id_tipo_solicitud
LEFT JOIN modo ON incidencia.id_modo=modo.id_modo
LEFT JOIN impacto ON incidencia.id_impacto=impacto.id_impacto
LEFT JOIN prioridad ON incidencia.id_prioridad=prioridad.id_prioridad

LEFT JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
LEFT JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria

WHERE id_incidencia='$cod'";

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
function ConsultarIncidenciaCambios($cod)
{
include("../conexion/conexion.php");

$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia_cambio

INNER JOIN incidencia ON incidencia_cambio.id_incidencia=incidencia.id_incidencia
INNER JOIN usuario USU ON incidencia_cambio.id_usuario=USU.id_usuario

LEFT JOIN usuario ASIGNADO ON incidencia_cambio.det_incidencia_cambio=ASIGNADO.id_usuario

WHERE incidencia_cambio.id_incidencia='$cod'

ORDER BY fec_incidencia_cambio DESC";

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
/*
function ActualizarIncidencia($id_incidencia,$id_cliente,$id_asignado,$id_categoria_detalle,$id_modo,$id_usuario,$urg,$imp,$prio,$res,$des,$hora_ini,$act)
{
include("../conexion/conexion.php");

	if($act==4){$time_fin="TIME(NOW())";}else{$time_fin="0";}

	$sqlg="UPDATE incidencia SET
	id_cliente='$id_cliente',
	id_asignado='$id_asignado',
	id_categoria_detalle='$id_categoria_detalle',
	id_modo='$id_modo',
	id_usuario='$id_usuario',
	urg_incidencia='$urg',
	imp_incidencia='$imp',
	pri_incidencia='$prio',
	res_incidencia='$res',
	des_incidencia='$des',
	time_ini_editar_incidencia=0,
	time_fin_editar_incidencia='$time_fin',
	act_incidencia='$act'
	WHERE id_incidencia='$id_incidencia'";
	mysql_query($sqlg,$con);
	return $rpta="SI";

//Cerrar la conexión
mysql_close($con);

}
*/
//-------------------------------------------------------------------------------------------------------
function ActualizarIncidenciaEstado($id_incidencia,$id_cliente,$det,$id_usuario,$id_tipo_solicitud,$id_modo,$id_impacto,$id_prioridad,$id_categoria_detalle,$niv,$asu,$des,$hora_ini,$act)
{
include("../conexion/conexion.php");

	if($act==2) //Cuando es CERRADO
	{
	$sqlg="UPDATE incidencia SET
	act_incidencia='$act',
	time_fin_incidencia=NOW()
	WHERE id_incidencia='$id_incidencia'";
	mysql_query($sqlg,$con);
	}
	else
	{
	$sqlg="UPDATE incidencia SET
	act_incidencia='$act'
	WHERE id_incidencia='$id_incidencia'";
	mysql_query($sqlg,$con);
	}

	//Registra en tabala de cambios
$sqlx="INSERT INTO incidencia_cambio()
VALUES (NULL,'$id_incidencia','$id_usuario','CAMBIO DE ESTADO','$act','$camb','$hora_ini',TIME(NOW()),DATE(NOW()) )";
	mysql_query($sqlx,$con);

	return $rpta="SI";
//Cerrar la conexión
mysql_close($con);
}
//-------------------------------------------------------------------------------------------------------
function ActualizarIncidenciaTransferencia($id_incidencia,$id_cliente,$id_asignado,$det,$id_usuario,$id_tipo_solicitud,$id_modo,$id_impacto,$id_prioridad,$id_categoria_detalle,$niv,$asu,$des,$hora_ini,$act)
{
include("../conexion/conexion.php");

	$sqlg="UPDATE incidencia SET
	id_cliente='$id_cliente',
	id_asignado='$id_asignado',
	id_tipo_solicitud='$id_tipo_solicitud',
	id_modo='$id_modo',
	id_impacto='$id_impacto',
	id_prioridad='$id_prioridad',
	id_categoria_detalle='$id_categoria_detalle',
	id_usuario='$id_usuario',
	niv_incidencia='$niv',
	asu_incidencia='$asu',
	des_incidencia='$des'
	WHERE id_incidencia='$id_incidencia'";
	mysql_query($sqlg,$con);

	//Registra en tabala de cambios
$sqlx="INSERT INTO incidencia_cambio()
VALUES (NULL,'$id_incidencia','$id_usuario','ASIGNACIÓN','$id_asignado','$det','$hora_ini',TIME(NOW()),DATE(NOW()) )";
	mysql_query($sqlx,$con);

	return $rpta="SI";
//Cerrar la conexión
mysql_close($con);
}
//-------------------------------------------------------------------------------------------------------
function EliminarIncidencia($id_incidencia)
{
include("../conexion/conexion.php");
	$sqlg="DELETE FROM incidencia WHERE id_incidencia='$id_incidencia'";
	mysql_query($sqlg,$con);

	$sqlx="DELETE FROM incidencia_cambio WHERE id_incidencia='$id_incidencia'";
	mysql_query($sqlx,$con);

	return $rpta="SI";
//Cerrar la conexión
mysql_close($con);
}
//--------------------------------------------------------------------------------------------------------------------------
function BuscarIncidencia()
{
include("../conexion/conexion.php");

$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
LEFT JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
LEFT JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario
INNER JOIN tipo_solicitud ON incidencia.id_tipo_solicitud=tipo_solicitud.id_tipo_solicitud
LEFT JOIN modo ON incidencia.id_modo=modo.id_modo
LEFT JOIN impacto ON incidencia.id_impacto=impacto.id_impacto
LEFT JOIN prioridad ON incidencia.id_prioridad=prioridad.id_prioridad

LEFT JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
LEFT JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria

WHERE act_incidencia=1";

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
function BuscarIncidencia1($d)
{
include("../conexion/conexion.php");

$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
LEFT JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
LEFT JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario
INNER JOIN tipo_solicitud ON incidencia.id_tipo_solicitud=tipo_solicitud.id_tipo_solicitud
LEFT JOIN modo ON incidencia.id_modo=modo.id_modo
LEFT JOIN impacto ON incidencia.id_impacto=impacto.id_impacto
LEFT JOIN prioridad ON incidencia.id_prioridad=prioridad.id_prioridad

LEFT JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
LEFT JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria

WHERE nom_categoria_detalle LIKE '%$d%' AND act_incidencia=1";

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
function SeleccionarIncidencia($cod)
{
include("../conexion/conexion.php");

$sql="SELECT *,
CONCAT(ASIGNADO.nom_usuario,' ',ASIGNADO.ape_pat_usuario,' ',ASIGNADO.ape_mat_usuario) AS usu_asignado,
CONCAT(USU.nom_usuario,' ',USU.ape_pat_usuario,' ',USU.ape_mat_usuario) AS usu_usuario

FROM incidencia

INNER JOIN cliente ON incidencia.id_cliente=cliente.id_cliente
LEFT JOIN usuario ASIGNADO ON incidencia.id_asignado=ASIGNADO.id_usuario
LEFT JOIN usuario USU ON incidencia.id_usuario=USU.id_usuario
INNER JOIN tipo_solicitud ON incidencia.id_tipo_solicitud=tipo_solicitud.id_tipo_solicitud
LEFT JOIN modo ON incidencia.id_modo=modo.id_modo
LEFT JOIN impacto ON incidencia.id_impacto=impacto.id_impacto
LEFT JOIN prioridad ON incidencia.id_prioridad=prioridad.id_prioridad

LEFT JOIN categoria_detalle ON incidencia.id_categoria_detalle=categoria_detalle.id_categoria_detalle
LEFT JOIN categoria ON categoria_detalle.id_categoria=categoria.id_categoria

WHERE id_incidencia='$cod'
ORDER BY fec_incidencia DESC";

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
function HoraActual()
{
include("../conexion/conexion.php");
$sql="SELECT TIME(NOW()) as hora";
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$hora=$row['hora'];
return $hora;
// Cerrar la conexión
mysql_close($con);
}
?>
</body>
</html>
