<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Impacto</title>
</head>


<body>
<?php
//INICIAR SESION
include("../conexion/sesion.php");

//Llamar a MODELO
require_once('../_modelo/m_impacto.php');


//---------------------------------------------------------

	$consulta = MostrarImpacto1();

//---------------------------------------------------------

// Llamar a VISTA
require('../_vista/v_impacto_mostrar_excel.php');



?>
</body>
</html>