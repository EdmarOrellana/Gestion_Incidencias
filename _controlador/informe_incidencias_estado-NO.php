<html>
<title>Cantidad Envíos por Estado</title>
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
		}
		else 
		{
		$fd=$fecha_dia;	
		$fh=$fecha_actual;
		}	
		  //--------------------------------------------------------------------
		//include("informe_citas_medico_soles.php");
		include("informe_envios_estado_cantidad.php");
		
	
		$consulta = InformeEnviosEstado($fd,$fh);
		
		//--------------------------------------------------------------------
		//Menu de Opciones
		include("menu.php");
		//--------------------------------------------------------------------
		?>
    
   
<!-- ---------------------------------------------------------------------- -->  
<div id="content"> <!-- Inicio del Contenido (Menu) --> 
    
    <form action="informe_envios_estado.php" method="post">
    
		<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<span class="glyphicon glyphicon-stats"></span> 
                 Informes |  
                 Desde:  <input type="date" name="fd" value="<?php echo $fd; ?>" class="input-sm" > 
                 Hasta:  <input type="date" name="fh" value="<?php echo $fh; ?>" class="input-sm" >
 <button name="buscar" type="submit" class="btn btn-primary btn-sm" aria-label="right Align" /><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
              <!-- Contratos | <a href="contrato_mostrar.php">Listado de Contratos</a> | <a href="contrato_nuevo.php">Nuevo Contrato</a> -->
				</div>

			</div>
    
    <!------------------------------------------ GRAFICOS ------------------------------------------------------>
	  <table width="100%">
            <tr>
           <!-- <td width="50%"><div id="informe_citas_medico_soles" style="width:100%; height:500px;"></div></td> -->
            <td width="100%"><div id="informe_envios_estado_cantidad" style="width:100%; height:500px;"></div></td>
            </tr>
      </table>
     <!------------------------------------------ DATOS ------------------------------------------------------>
      <table class="table table-responsive">
            <tr>
			<th>Estado</th>
            <!-- <th>Soles</th> -->
            <th>Cantidad</th>
            </tr>
            
            <?php foreach ($consulta as $row):
			$est_envio=$row['est_envio'];
			if($est_envio=="INGRESO"){$estado="INGRESO";}
			else if($est_envio=="SALIDA"){$estado="SALIDA";}
			else if($est_envio=="REINGRESO"){$estado="REINGRESO";}
			 ?>
            <tr>
			<td><?php echo $estado; ?></td>
            <!-- <td><?php echo "S/.".$row['soles']; ?></td> -->
            <td><?php echo $row['cantidad']; ?></td>
            </tr>
            <?php endforeach;  ?>
            
      </table>
      
    </form>
          
</div> <!-- Fin del Div  (Menu) -->
<!-- ---------------------------------------------------------------------- -->        
        
</body>
</html>