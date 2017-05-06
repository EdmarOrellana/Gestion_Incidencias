<?php
session_start();
include("conexion.php");
$usu=$_REQUEST['usu'];
$pass=$_REQUEST['pass'];


	$sql="SELECT * FROM usuario
	INNER JOIN usuario_tipo ON usuario.id_usuario_tipo=usuario_tipo.id_usuario_tipo
	WHERE usu_usuario='$usu' AND pass_usuario='$pass' AND act_usuario=1";
	$datos=mysql_query($sql,$con);
	$row=mysql_fetch_array($datos);
	
	if($row!=NULL)
	{
		
		$usuario=$row['nom_usuario']." ".$row['ape_pat_usuario']." ".$row['ape_mat_usuario'];
		$nom=$row['nom_usuario'];
		$ap=$row['ape_pat_usuario'];
		$am=$row['ape_mat_usuario'];
		$id=$row['id_usuario'];
		$usu=$row['usu_usuario'];
		$pass=$row['pass_usuario'];
		
		$tipo=$row['nom_usuario_tipo'];
		
		$tx1=$row['incidencias'];
		$tx2=$row['categorias'];
		$tx3=$row['clientes'];
		$tx4=$row['usuarios'];
		$tx5=$row['informes'];
		$tx6=$row['perfil'];
		$tx7=$row['mantenimiento'];
		
		$opc="A";
	}

	else
	{
		
		$sql="SELECT * FROM cliente
		WHERE usu_cliente='$usu' AND pass_cliente='$pass' AND act_cliente=1";
		$datos=mysql_query($sql,$con);
		$row=mysql_fetch_array($datos);
		
		if($row!=NULL)
		{
		
		$usuario=$row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente'];
		$nom=$row['nom_cliente'];
		$ap=$row['ape_pat_cliente'];
		$am=$row['ape_mat_cliente'];
		$id=$row['id_cliente'];
		$usu=$row['usu_cliente'];
		$pass=$row['pass_cliente'];
		
		$tipo="CLIENTE";
		
		$tx1="0";
		$tx2="0";
		$tx3="0";
		$tx4="0";
		$tx5="0";
		$tx6="0";
		$tx7="0";
		
		$opc="C";
		
		}
		
		else
		{
			
		$usu=NULL;
		$pass=NULL;
			
		}
	
	}




	



//-----------------------------------------------
if($usu!=NULL && $pass!=NULL)
{
$_SESSION['id']=$id;
$_SESSION['usuario']=$usuario;
$_SESSION['tipo']=$tipo;

$_SESSION['nom']=$nom;
$_SESSION['ap']=$ap;
$_SESSION['am']=$am;

$_SESSION['tx1']=$tx1;
$_SESSION['tx2']=$tx2;
$_SESSION['tx3']=$tx3;
$_SESSION['tx4']=$tx4;
$_SESSION['tx5']=$tx5;
$_SESSION['tx6']=$tx6;
$_SESSION['tx7']=$tx7;



$_SESSION['autentificado']=TRUE;
	if($opc=="A")
	{
	header("location: ../_controlador/incidencia_mostrar.php");
	}
	else if($opc=="C")
	{
	header("location: ../_controlador/incidencia_mostrar_cliente.php");	
	}
}
else
{
	
	header("location: ../_controlador/index.php");
}
	mysql_close($con);
?>