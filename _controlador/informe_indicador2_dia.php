<html>
<title>Continuidad de Servicio</title>
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
    
    <form action="informe_indicador2_dia.php" method="post">
    
		<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<span class="glyphicon glyphicon-stats"></span> 
                 Continuidad de Servicio |  

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
            			<th >Indicador</th><td colspan="3">Continuidad de Servicio</td>
            </tr>
             <tr class="warning">
            			<th >Fórmula</th><td colspan="3"><strong>CS = TC / C</strong></td>
            </tr>
             <tr>
						<th >TC</th><td>Tiempo de Caídas (min)</td>             
            			<th >C</th><td>Caídas Presentadas</td>
                      
            </tr> 

            
            
 
 </table>
 
 <br>
     <!------------------------------------------ DATOS ------------------------------------------------------>
      <table class="table table-responsive">
            <tr class="success">
                        	<th >N°</th>
                            <th >Fecha</th>
                            <th >TC</th>
                            <th >C</th>
                            <th >CS</th>
     
            </tr>
            
                    <?php 
						$c=0;
						foreach ($consulta as $row): 
					
						
							$fecha=$row['fecha'];
							
						
													
							$consulta1 = IncidenciasSolucionadasSI_dia($fecha);														
							foreach ($consulta1 as $row1): 
							$c++;	
							
							$caidas=1;
							$tc=$row1['minutos'];if($tc==NULL){$tc=0;}else{$tc=$tc;}								
							$continuidad = Continuidad($tc,$caidas);	
							
					

					 ?>
                     
                        <tr>
                        <td  ><?php echo $c; ?></td>
                        <td  ><?php echo $fecha; ?></td>
                        <td  ><?php echo number_format($tc,1); ?></td>
                        <td  ><?php echo $caidas; ?></td>

					                    
                        <?php if($continuidad == number_format($continuidad,0)){ ?>
                        <td class="warning"  ><strong><?php echo number_format($continuidad,0); ?></strong></td>
                        <?php } else { ?>
                         <td class="warning"  ><strong><?php echo number_format($continuidad,2); ?></strong></td>
                        <?php } ?>


                        </tr> 
                                    <?php endforeach;  ?>
            <?php endforeach;  ?>
            
      </table>
      
    </form>
          
</div> <!-- Fin del Div  (Menu) -->
<!-- ---------------------------------------------------------------------- -->        
        
</body>
</html>