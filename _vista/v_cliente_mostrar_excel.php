<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Clientes.xls");
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
<th bgcolor="#FFCC00" style="text-align: center">Cliente</th>
<th bgcolor="#FFCC00" style="text-align: center">Area</th>
<th bgcolor="#FFCC00" style="text-align: center">Anexo</th>
<th bgcolor="#FFCC00" style="text-align: center">Documento</th>
<th bgcolor="#FFCC00" style="text-align: center">Nro.Documento</th>
<th bgcolor="#FFCC00" style="text-align: center">Direccion</th>
<th bgcolor="#FFCC00" style="text-align: center">Telefono</th>
<th bgcolor="#FFCC00" style="text-align: center">Celular</th>
<th bgcolor="#FFCC00" style="text-align: center">Email</th>
<th bgcolor="#FFCC00" style="text-align: center">Usuario</th>
<th bgcolor="#FFCC00" style="text-align: center">Contrasena</th>
<th bgcolor="#FFCC00" style="text-align: center">Estado</th>
</tr>


<?php


 foreach ($consulta as $row): ?>
<tr>
                        <td  ><?php echo $row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente']; ?></td>
                        <td  ><?php echo $row['nom_area']; ?></td>
                        <td  ><?php echo $row['nom_anexo']; ?></td>
                        <td  ><?php echo $row['nom_tipo_documento']; ?></td>
                        <td  ><?php echo $row['num_doc_cliente']; ?></td>
                        <td  ><?php echo $row['dir_cliente']; ?></td>
                        <td  ><?php echo $row['tel_cliente']; ?></td>
                        <td  ><?php echo $row['cel_cliente']; ?></td>
                        <td  ><?php echo $row['email_cliente']; ?></td>
                        <td  ><?php echo $row['usu_cliente']; ?></td>                        
                        <td  ><?php echo $row['pass_cliente']; ?></td>                    
                        <td  ><?php echo $row['act_cliente']; ?></td>
</tr>

<?php endforeach;   ?>

</table>
</div>



</body>
</html>