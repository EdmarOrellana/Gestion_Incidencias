<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Busca Cliente</title>


<!-- ESTILO DE BOOTSTRUP -->
<link rel="stylesheet" href="../_controlador/assets/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../_controlador/assets/bootstrap/css/bootstrap.min.css">
<script src="../_controlador/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- <script src="../complemento/bootstrap/js/jquery.min.js"></script> -->


<style type="text/css">
.subtitulos {
	background-color: #FECFD7;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-weight: bold;
}
#apDiv1 {
	position: absolute;
	width: 388px;
	height: 39px;
	z-index: 1;
	left: 806px;
	top: 120px;
}
</style>
</head>
<!-- -----------------------------------------------------------------   -->
<body>
<div class="panel panel-success">
 <div class="panel-heading">Busca Cliente</div>
 <div class="panel-body">

 <form action="busca_cliente.php" method="post" name="3" autocomplete="off">
<table border="0">
<tr>
<td><input type="text" name="desc" size="50" placeholder="Escribe decripción" class="form-control input-sm"/></td>
<td><button type="submit" name="buscar" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button></td>
</tr>
</table>
 </form>

 </div>
</div>
</body>
<!-- -----------------------------------------------------------------   -->
</html>