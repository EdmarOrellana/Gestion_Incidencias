<html>
<title>Informe de Incidencias</title>
<body>
    
       <?php 
	   	require_once('../_modelo/m_informe.php');
		$fecha_actual = FechaActual();
		$fecha_dia = FechaActualDiaUno();
	   	//--------------------------------------------------------------------
	    if(isset($_REQUEST['buscar']))
	    {
		$fd=$_POST['fd'];
		$fh=$_POST['fh'];
		$act=strtoupper($_POST['act']);	
		
	  if($act=="1") {$s1="selected='selected'";} else {$s1="";} 
	  if($act=="2") {$s2="selected='selected'";} else {$s2="";} 
	  if($act=="3") {$s3="selected='selected'";} else {$s3="";} 
	  if($act=="4") {$s4="selected='selected'";} else {$s4="";}
	  if($act=="5") {$s5="selected='selected'";} else {$s5="";}
	  if($act=="6") {$s6="selected='selected'";} else {$s6="";}
		
		
		}
		else 
		{
		//$fd=$fecha_dia;	
		//$fh=$fecha_actual;
		
		$fd="2016-11-07";
		$fh="2016-11-11";
		
		$act="1";
		
	  if($act=="1") {$s1="selected='selected'";} else {$s1="";} 
	  if($act=="2") {$s2="selected='selected'";} else {$s2="";} 
	  if($act=="3") {$s3="selected='selected'";} else {$s3="";} 
	  if($act=="4") {$s4="selected='selected'";} else {$s4="";}
	  if($act=="5") {$s5="selected='selected'";} else {$s5="";}
	  if($act=="6") {$s6="selected='selected'";} else {$s6="";}


		}	
		  //--------------------------------------------------------------------

		
		$consulta = InformeIncidenciasEstado($fd,$fh,$act);
		
		//--------------------------------------------------------------------
		//Menu de Opciones
		include("menu.php");
		//--------------------------------------------------------------------
		?>
    
   
<!-- ---------------------------------------------------------------------- -->  
<div id="content"> <!-- Inicio del Contenido (Menu) --> 
    
    <form action="informe_incidencias.php" method="post">
    
		<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<span class="glyphicon glyphicon-stats"></span> 
                 Informes |  
                 Estado:      
                 <select name="act" class="input-sm" >
                   <option value="1" <?php echo $s1; ?>>PENDIENTE</option>
                   <option value="6" <?php echo $s6; ?>>PROGRAMADO</option> 
                   <option value="2" <?php echo $s2; ?>>EN PROCESO</option>
                   <option value="3" <?php echo $s3; ?>>RESUELTO</option>
                   <option value="5" <?php echo $s5; ?>>POR CERRAR</option> 
                   <option value="4" <?php echo $s4; ?> selected>CERRADO</option>
  
                    
                  </select>
                 Desde:  <input type="date" name="fd" value="<?php echo $fd; ?>" class="input-sm" > 
                 Hasta:  <input type="date" name="fh" value="<?php echo $fh; ?>" class="input-sm" >
                 
 <button name="buscar" type="submit" class="btn btn-primary btn-sm" aria-label="right Align" /><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
              <!-- Contratos | <a href="contrato_mostrar.php">Listado de Contratos</a> | <a href="contrato_nuevo.php">Nuevo Contrato</a> -->
				</div>

			</div>
    
    <!------------------------------------------ GRAFICOS ------------------------------------------------------>
<!--	  <table width="100%">
            <tr>
           <!-- <td width="50%"><div id="informe_citas_medico_soles" style="width:100%; height:500px;"></div></td> 
            <td width="100%"><div id="informe_envios_estado_cantidad" style="width:100%; height:500px;"></div></td>
            </tr>
      </table>
 -->     
     <!------------------------------------------ DATOS ------------------------------------------------------>
      <table class="table table-responsive">
            <tr class="success">
                        	<th >Nro</th>
                            <th >Fec Ini.</th>
                            <th >Fec Fin.</th>
                            <th >Tiempo</th>
                            <th >Afectado</th>
                            <th >Incidente</th>
                            <th >Asignado</th>
                            <th >Grupo</th>
                            <th >Urg.</th>
                            <th >Imp.</th>
                            <th >Pri.</th>
                            <th >Mov.</th>
                            <th >Método</th>
                            <th >Reg.</th>
                            <th >Estado</th> 
                            <th >Detalle</th> 
            </tr>
            
                    <?php 
						foreach ($consulta as $row): 
						
							$id_incidencia=$row['id_incidencia'];

						$act=$row['act_incidencia'];
						if($act==1){$estado="PENDIENTE";}
						else if($act==2){$estado="EN PROCESO";}
						else if($act==3){$estado="RESUELTO";}
						else if($act==4){$estado="CERRADO";}
						else if($act==5){$estado="POR CERRAR";}
						else if($act==6){$estado="PROGRAMADA";}		
						
				
					 ?>
                     
                        <tr>
                        <td  ><?php echo $row['id_incidencia']; ?></td>
                        <td  ><?php echo $row['time_ini_incidencia']; ?></td>
                        <td  ><?php echo $row['time_fin_incidencia']; ?></td>
                        <td  ><?php echo $row['horas']; ?></td>
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
                                                
                        <td>
<a href="../_controlador/informe_incidencias_ver.php?id_incidencia=<?php echo $id_incidencia; ?>" style="cursor:pointer; color:#800" target="_self" class="btn btn-ms btn-link" aria-label="Left Align" >
<span class="glyphicon glyphicon-search" aria-hidden="true"></span><strong> Ver</strong></a>
                        </td>

                        </tr> 
            <?php endforeach;  ?>
            
      </table>
      
    </form>
          
</div> <!-- Fin del Div  (Menu) -->
<!-- ---------------------------------------------------------------------- -->        
        
</body>
</html>