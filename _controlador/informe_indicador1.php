<html>
<title>Eficacia de Solución de Incidencias</title>
<body>
    
       <?php 
	   
	   	require_once('../_modelo/m_indicador.php');
		$fecha_actual = FechaActual();
		$fecha_dia = FechaActualDiaUno();
	   	//--------------------------------------------------------------------
	    if(isset($_REQUEST['buscar']))
	    {
		$fd=$_POST['fd'];
		$fh=$_POST['fh'];


		}
		else 
		{
		//$fd=$fecha_dia;	
		//$fh=$fecha_actual;
		
		$fd="2016-11-07";
		$fh="2016-11-11";


		}	
		  //--------------------------------------------------------------------

		
		$consulta = Dias($fd,$fh);
		
		//--------------------------------------------------------------------
		//Menu de Opciones
		include("menu.php");
		//--------------------------------------------------------------------
		?>
    
   
<!-- ---------------------------------------------------------------------- -->  
<div id="content"> <!-- Inicio del Contenido (Menu) --> 
    
    <form action="informe_indicador1.php" method="post">
    
		<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<span class="glyphicon glyphicon-stats"></span> 
                 Eficacia de Solución de Incidencias |  

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
 
      <!------------------------------------------ GENERAL ------------------------------------------------------>
   <table class="table table-responsive">
            <tr>
            			<th >Indicador</th><td colspan="3">Eficacia de Solución de Incidencias</td>
            </tr>
             <tr class="warning">
            			<th >Fórmula</th><td colspan="3"><strong>E = ( R * TP ) / ( T / TR )</strong></td>
            </tr>
             <tr>
						<th >T</th><td>Total de Incidencias por Solucionar</td>             
            			<th >R</th><td>Incidencias Solucionadas</td>
                      
            </tr> 
             <tr>
            			<th >TR</th><td>Tiempo Real de Solución de Incidencias (min)</td>
                        <th >TP</th><td>Tiempo Planeado de Solución (min)</td>
            </tr> 

            
            
 
 </table>
 
 <br>
     <!------------------------------------------ DATOS ------------------------------------------------------>
      <table class="table table-responsive">
            <tr class="success">
                        	<th >N°</th>
                            <th >Fecha</th>
                            <th >T</th>
                            <th >R</th>
                            <th >TR</th>
                            <th >TP</th>
                            <th >E</th>
     
            </tr>
            
                    <?php 
						$c=0;
						foreach ($consulta as $row): 
						$c++;
						
							$fecha=$row['fecha'];
							
							//$nombre_dia = DiaTexto($fecha);	
							$r = IncidenciasSolucionadasSI($fecha);		
							$t = TotalIncidencias($fecha);	
							$tr = TimpoReal($fecha);if($tr==NULL){$tr=0;}else{$tr=$tr;}	
							$tp = TimpoPlaneado($fecha);if($tp==NULL){$tp=0;}else{$tp=$tp;}										
							$eficacia = Eficacia($r,$t,$tr,$tp);	
							
					

					 ?>
                     
                        <tr>
                        <td  ><?php echo $c; ?></td>
                        <td  ><?php echo $fecha; ?></td>
                        <td  ><?php echo $t; ?></td>
                        <td  ><?php echo $r; ?></td>
                        <td  ><?php echo $tr; ?></td>
                        <td  ><?php echo $tp; ?></td>

					                    
                        <?php if($eficacia == number_format($eficacia,0)){ ?>
                        <td class="warning"  ><strong><?php echo number_format($eficacia,0)." %"; ?></strong></td>
                        <?php } else { ?>
                         <td class="warning"  ><strong><?php echo number_format($eficacia,2)." %"; ?></strong></td>
                        <?php } ?>


                        </tr> 
            <?php endforeach;  ?>
            
      </table>
      
    </form>
          
</div> <!-- Fin del Div  (Menu) -->
<!-- ---------------------------------------------------------------------- -->        
        
</body>
</html>