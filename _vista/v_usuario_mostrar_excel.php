<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Usuarios.xls");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<div class="table-responsive">
<table border="0" class="table table-bordered table-hover table-condensed " >

<tr>
<th bgcolor="#FFCC00" style="text-align: center">Datos</th>
<th bgcolor="#FFCC00" style="text-align: center">Tipo Usuario</th>
<th bgcolor="#FFCC00" style="text-align: center">Usuario</th>
<th bgcolor="#FFCC00" style="text-align: center">Contrasena</th>
<th bgcolor="#FFCC00" style="text-align: center">Estado</th>
</tr>


<?php


 foreach ($consulta as $row): ?>
<tr>
                        <td  ><?php echo $row['nom_usuario']." ".$row['ape_pat_usuario']." ".$row['ape_mat_usuario']; ?></td>
                        <td  ><?php echo $row['nom_usuario_tipo']; ?></td>
                        <td  ><?php echo $row['usu_usuario']; ?></td>
                        <td  ><?php echo $row['pass_usuario']; ?></td>
                        <td  ><?php echo $row['act_usuario']; ?></td>
</tr>

<?php endforeach;   ?>

</table>
</div>



</body>
</html>