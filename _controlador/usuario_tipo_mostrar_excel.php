<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuario Tipo</title>
</head>


<body>
<?php
//INICIAR SESION
include("../conexion/sesion.php");

//Llamar a MODELO
require_once('../_modelo/m_usuario_tipo.php');


//---------------------------------------------------------

	$consulta = MostrarUsuarioTipo1();

//---------------------------------------------------------

// Llamar a VISTA
require('../_vista/v_usuario_tipo_mostrar_excel.php');



?>
</body>
</html>