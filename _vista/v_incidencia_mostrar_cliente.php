<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>Incidencia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body id="datatables">
<!-- ------------------------------------------------------------------------------------------------------- -->
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                

                
		<div class="page-title">
					<span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
         Incidencias | <a href="incidencia_mostrar_cliente.php">Listado de Incidencias</a> | <a href="incidencia_nuevo_cliente.php">Nueva Incidencia</a>
				</div>

			</div>
            


			<div class="content-wrapper">
				<form action="incidencia_editar.php" method="post"  name="cuatro" autocomplete="off">
				<table id="datatable-example">
                    <thead>
                        <tr>
                        	<th tabindex="0" rowspan="1" colspan="1">Nro</th>
                            <th tabindex="0" rowspan="1" colspan="1">Fec.</th>
                            <th tabindex="0" rowspan="1" colspan="1">Nivel</th>
                            <th tabindex="0" rowspan="1" colspan="1">Solicitante</th>
                            <th tabindex="0" rowspan="1" colspan="1">Tipo de Solicitud</th>
                            <th tabindex="0" rowspan="1" colspan="1">Modo</th>
                            <th tabindex="0" rowspan="1" colspan="1">Impacto</th>
                            <th tabindex="0" rowspan="1" colspan="1">Prioridad</th>
                            <th tabindex="0" rowspan="1" colspan="1">Sub Categoria</th>
                            <th tabindex="0" rowspan="1" colspan="1">Categoria</th>
                            <th tabindex="0" rowspan="1" colspan="1">Asignado</th>
                            <th tabindex="0" rowspan="1" colspan="1">Estado</th> 
     

                        </tr>
                    </thead>
          


                    
                    <tbody>
                    
                    <?php foreach ($consulta as $row):
					$nivel = $row['niv_incidencia'];
					if($nivel==0){$nivel="";} else {$nivel=$nivel;}
					 ?>
                        <tr>
                       
                        <td  ><?php echo $row['id_incidencia']; ?></td>   
                        <td  ><?php echo $row['time_ini_incidencia']; ?></td>
                        <td  ><?php echo $nivel; ?></td>
                        <td  ><?php echo $row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente']; ?></td>
                        <td  ><?php echo $row['nom_tipo_solicitud']; ?></td>
                        <td  ><?php echo $row['nom_modo']; ?></td>
                        <td  ><?php echo $row['nom_impacto']; ?></td>
                        <td  ><?php echo $row['nom_prioridad']; ?></td>
                        <td  ><?php echo $row['nom_categoria_detalle']; ?></td>
                        <td  ><?php echo $row['nom_categoria']; ?></td>
                        <td  ><?php echo $row['usu_asignado']; ?></td>
                        
                        <?php
						$act=$row['act_incidencia'];
						
						if($act==1){$estado="ABIERTO";}
						else if($act==2){$estado="CERRADO";}
						else if($act==3){$estado="DETENIDO";}
						else if($act==4){$estado="ESPERA";}
						else if($act==5){$estado="RESUELTO";}
						else if($act==6){$estado="REABIERTO";}						
						?>
                        
                        <td  ><?php echo $estado; ?></td>
                        

                          

                        
                        
                        </tr> 
					<?php endforeach; ?>


                   	</tbody>
                </table>
				</form>
			</div>
<!-- ------------------------------------------------------------------------------------------------------- -->            
<?php 
include("v_foot.php");
?>           

  

</body>
</html>