<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Incidencia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body id="datatables">

			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>

				<div class="page-title">
					<span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
         Incidencias | <a href="incidencia_mostrar.php">Listado de Incidencias</a>
         <?php if($tipo!="ESPECIALISTA") { ?>
         | <a href="incidencia_nuevo.php">Nueva Incidencia</a>
         <?php } ?>
				</div>
			</div>
<!--
<a href="incidencia_mostrar_excel.php" style="cursor:pointer; color:#060" target="_self" class="btn btn-xs btn-link" aria-label="Left Align" ><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo " Exportar a Excel" ?></a>
-->
			<div class="content-wrapper">
				<table id="datatable-example">
                    <thead>
                        <tr>
                        	<th tabindex="0" rowspan="1" colspan="1">Nro</th>
                            <th tabindex="0" rowspan="1" colspan="1">Fecha Creación</th>
                            <th tabindex="0" rowspan="1" colspan="1">Solicitante</th>
                            <th tabindex="0" rowspan="1" colspan="1">Tipo de Solicitud</th>
														<th tabindex="0" rowspan="1" colspan="1">Asunto</th>
                            <th tabindex="0" rowspan="1" colspan="1">Impacto</th>
                            <th tabindex="0" rowspan="1" colspan="1">Prioridad</th>
														<th tabindex="0" rowspan="1" colspan="1">Nivel</th>
                            <th tabindex="0" rowspan="1" colspan="1">Asignado</th>
                            <th tabindex="0" rowspan="1" colspan="1">Estado</th>
                            <th tabindex="0" rowspan="1" colspan="1">Opción</th>
                             <?php if($tipo!="ESPECIALISTA") { ?>
                            <th tabindex="0" rowspan="1" colspan="1">Eliminar</th>
							<?php } ?>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($consulta as $row):

										$nivel = $row['niv_incidencia'];
										if($nivel==0)	{
											$nivel="";
										} else {
											$nivel=$nivel;
										}

										$asunto = $row['asu_incidencia'];

						$act=$row['act_incidencia'];
						if($act==1){$estado="ABIERTO";}
						else if($act==2){$estado="CERRADO";}
						else if($act==3){$estado="DETENIDO";}
						else if($act==4){$estado="ESPERA";}
						else if($act==5){$estado="RESUELTO";}
						else if($act==6){$estado="REABIERTO";}
					 //	if($tipo!="ADMINISTRADOR" && $estado=="CERRADO")
					//	{

					//	}
					//	else
					//	{
					?>
                        <tr>
                       <form action="incidencia_editar.php" method="post"  name="cuatro" autocomplete="off">
                        <td  ><?php echo $row['id_incidencia']; ?></td>
                        <td  ><?php echo $row['time_ini_incidencia']; ?></td>                        
                        <td  ><?php echo $row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente']; ?></td>
                        <td  ><?php echo $row['nom_tipo_solicitud']; ?></td>
												<td  ><?php echo $asunto; ?></td>
                        <td  ><?php echo $row['nom_impacto']; ?></td>
                        <td  ><?php echo $row['nom_prioridad']; ?></td>
												<td  ><?php echo $nivel; ?></td>
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

   						<td>
                          <?php if($tipo!="ESPECIALISTA") { ?>
  						  <a href="incidencia_transferir.php?editar=<?php echo $row['id_incidencia']; ?>" target="_self" >Asignar</a>
                          <?php } ?>

                         <br>

                        <a href="incidencia_cambiar.php?editar=<?php echo $row['id_incidencia']; ?>" target="_self" style="color:#090" >Cambiar Estado</a>
                 		</td>

                </form>
                <form action="incidencia_mostrar.php" method="post" autocomplete="off">
						<?php if($tipo!="ESPECIALISTA") { ?>
                       <td>
                            <button type="submit" name="eliminar" style="color:#F00" value="<?php echo $row['id_incidencia']; ?>" class="btn btn-xs btn-link" aria-label="Left Align" >
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar
                            </button>
                       </td>
                       <?php } ?>
               </form>
            </tr>
					<?php
						//}
					 endforeach; ?>
                   	</tbody>
                </table>
			</div>

<?php
include("v_foot.php");
?>

</body>
</html>
