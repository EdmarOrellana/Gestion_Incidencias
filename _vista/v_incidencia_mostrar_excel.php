<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Incidencias.xls");
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
<th bgcolor="#FFCC00" style="text-align: center">Nro</th>
<th bgcolor="#FFCC00" style="text-align: center">Fec.</th>
<th bgcolor="#FFCC00" style="text-align: center">Afectado.</th>
<th bgcolor="#FFCC00" style="text-align: center">Incidente.</th>
<th bgcolor="#FFCC00" style="text-align: center">Asignado.</th>
<th bgcolor="#FFCC00" style="text-align: center">Grupo.</th>
<th bgcolor="#FFCC00" style="text-align: center">Urg.</th>
<th bgcolor="#FFCC00" style="text-align: center">Imp.</th>
<th bgcolor="#FFCC00" style="text-align: center">Pri.</th>
<th bgcolor="#FFCC00" style="text-align: center">Mov.</th>
<th bgcolor="#FFCC00" style="text-align: center">Metodo.</th>
<th bgcolor="#FFCC00" style="text-align: center">Reg.</th>
<th bgcolor="#FFCC00" style="text-align: center">Estado</th>
</tr>


<?php


 foreach ($consulta as $row): ?>
<tr>
                        <td  ><?php echo $row['id_incidencia']; ?></td>
                        <td  ><?php echo $row['time_ini_incidencia']; ?></td>
                        <td  ><?php echo $row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente']; ?></td>
                        <td  ><?php echo $row['nom_categoria_detalle']; ?></td>
                        <td  ><?php echo $row['usu_asignado']; ?></td>
                        <td  ><?php echo $row['nom_grupo']; ?></td>
                        <td align="center"   ><?php echo $row['urg_incidencia']; ?></td>
                        <td align="center"   ><?php echo $row['imp_incidencia']; ?></td>
                        <td align="center"   ><?php echo $row['pri_incidencia']; ?></td>
                        <td align="right" ><?php echo "S/.".number_format($row['mov_incidencia'],2); ?></td>
                        <td ><?php echo $row['nom_metodo']; ?></td>
                        <td  ><?php echo $row['usu_usuario']; ?></td>
                        
                        <?php
						$act=$row['act_incidencia'];
						if($act==1){$estado="PENDIENTE";}
						else if($act==2){$estado="EN PROCESO";}
						else if($act==3){$estado="RESUELTO";}
						else if($act==4){$estado="CERRADO";}
						else if($act==5){$estado="POR CERRAR";}
						else if($act==6){$estado="PROGRAMADA";}								
						?>
                        
                        <td  ><?php echo $estado; ?></td>
</tr>

<?php endforeach;   ?>

</table>
</div>



</body>
</html>