<?php 
$CodigoHTML='
<html>
<head>
<title>Incidencia</title>
</head>

<body id="datatables" style="color:'.$color.'" >



<!-- ------------------------------------------------------------------------------------------------------- -->
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<span class="glyphicon glyphicon-stats"></span> 
               Informes | <a href="informe_incidencias.php">Incidencias por Estado</a>
				</div>

			</div>
			
<!-- ------------------------------------------------------------------------------------------------------- -->
<a href="../_controlador/informe_incidencias_pdf.php?id_incidencia='.$id_incidencia.'" style="cursor:pointer; color:#800" target="_self" class="btn btn-ms btn-link" aria-label="Left Align" >
<span class="glyphicon glyphicon-download" aria-hidden="true"></span><strong> Exportar a PDF</strong></a>

&nbsp;			

<!-- ------------------------------------------------------------------------------------------------------- -->
<div>

	  
	  <div align="right">
	  <strong><font face="Helvetica" size="6"  >Incidencia</font></strong><br>
	  <strong><font face="Helvetica" size="3"  >Nro.'."INC-".$id_incidencia.'</font></strong>
	  </div>
	  

		<div>
	  
	 	 <img src="../_controlador/'.$logo.'"width="250" heigth="150" class="img-rounded"><br>
			  

		  <font face="Helvetica" size=2 >
		  <strong>'.$nom.'</strong>
		  </font><br>
		  
		  <font face="Helvetica" size=2 >
		  RUC '.$ruc.'</font>
		  
	  </div>
	  
	  <br>
	  
	  <div>
  
		  <font face="Helvetica" size=2 >'.
		  $dir.'<br>'.
		  $dist.'<br>'.
		  $dep.'<br>'.
		  $pais.'
		  </font>
		  
	 </div>
	  
	  <br><br>
  
</div>



<table  width="550" class="table table-responsive" border="0" >';
    
	foreach ($detalle as $row):
	
	$id_incidencia=$row['id_incidencia'];
	$afectado=$row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente']; 
	$incidente=$row['nom_categoria_detalle']; 
	$asignado=$row['usu_asignado'];                      
	
	$grupo=$row['nom_grupo']; 
	$urgencia=$row['urg_incidencia']; 
	$impacto=$row['imp_incidencia']; 
	$prioridad=$row['pri_incidencia']; 
	$movilidad="S/.".number_format($row['mov_incidencia'],2);
	
	$metodo=$row['nom_metodo'];
	$registrador=$row['usu_usuario'];

	
	$act=$row['act_incidencia'];
	if($act==1){$estado="PENDIENTE";}
	else if($act==2){$estado="EN PROCESO";}
	else if($act==3){$estado="RESUELTO";}
	else if($act==4){$estado="CERRADO";}
	else if($act==5){$estado="POR CERRAR";}
	else if($act==6){$estado="PROGRAMADA";}		
	

	
	$time_ini_incidencia=$row['time_ini_incidencia'];
	$time_fin_incidencia=$row['time_fin_incidencia'];
	$horas=$row['horas'];
	
		
	endforeach; 

	
	
	if($time_fin_incidencia=="0000-00-00 00:00:00"){$time_fin_incidencia="-";$horas="-";}
	

	


$CodigoHTML.='
   
   <tr>
    <td width="40%" align="left"><font face="Helvetica" size="2" ><strong>Afectado:</strong><br>'.$afectado.'</font></td>
	<td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Incidente:</strong><br>'.$incidente.'</font></td>
    <td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Método:</strong><br>'.$metodo.'</font></td>
  </tr>

   <tr>
    <td width="40%" align="left"><font face="Helvetica" size="2" ><strong>Asignado:</strong><br>'.$asignado.'</font></td>
	<td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Grupo:</strong><br>'.$grupo.'</font></td>
    <td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Estado:</strong><br>'.$estado.'</font></td>
  </tr>
  
   <tr>
    <td width="40%" align="left"><font face="Helvetica" size="2" ><strong>Urgencia:</strong><br>'.$urgencia.'</font></td>
	<td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Impacto:</strong><br>'.$impacto.'</font></td>
    <td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Prioridad:</strong><br>'.$prioridad.'</font></td>
  </tr>
  
  <tr>
    <td width="40%" align="left"><font face="Helvetica" size="2" ><strong>Inicio:</strong><br>'.$time_ini_incidencia.'</font></td>
	<td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Fin:</strong><br>'.$time_fin_incidencia.'</font></td>
    <td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Tiempo:</strong><br>'.$horas.'</font></td>
  </tr>
  
  
    <tr>
    <td width="40%" align="left"><font face="Helvetica" size="2" ><strong>Movilidad:</strong><br>'.$movilidad.'</font></td>
	<td width="30%" align="left"><font face="Helvetica" size="2" ><strong>Registrado por:</strong><br>'.$registrador.'</font></td>
  </tr>
  

</table>

<br>

<h2><strong><font face="Helvetica">Historial de Cambios:</font></strong></h2>
<table width="550" class="table table-responsive"  border="0">


	 <tr style="color:#FFF; background-color:'.$color.'">
     <td width="10%" align="center"><strong>Fecha</strong></td>
     <td width="10%" align="center"><strong>Hora</strong></td>
	 <td width="10%" align="center"><strong>Acción</strong></td>
     <td width="20%" align="center"><strong>Detalle</strong></td>
	 <td width="30%" align="center"><strong>Descripción</strong></td>
	 <td width="20%" align="center"><strong>Realizado por</strong></td>
     </tr>';


	$c=0;
    foreach ($consulta as $row1):
	$c++;
	$id_incidencia_cambio=$row1['id_incidencia_cambio'];
	$usuario=$row1['usu_usuario'];
	$tip=$row1['tip_incidencia_cambio'];
	$desc=$row1['desc_incidencia_cambio'];
	$fec=$row1['fec_incidencia_cambio'];
	$hor=$row1['time_fin_incidencia_cambio'];
	  
	
	if($tip=="CAMBIO DE ESTADO")
	{
	
	$det=$row1['det_incidencia_cambio'];
	
	if($det==1){$estado="PENDIENTE";}
	else if($det==2){$estado="EN PROCESO";}
	else if($det==3){$estado="RESUELTO";}
	else if($det==4){$estado="CERRADO";}
	else if($det==5){$estado="POR CERRAR";}
	else if($det==6){$estado="PROGRAMADA";}		
	
	$accion=$estado;	
	}
	
	else if($tip=="TRANSFERENCIA")
	{
	  $usua=$row1['usu_asignado'];
	  $accion=$usua;	
	}
		  
		  

$CodigoHTML.='
	
    <tr>
     <td width="10%" align="center"><font face="Helvetica" size="2" >'.$fec.'</font></td>
     <td width="10%" align="left">  <font face="Helvetica" size="2" >'.$hor.'</font></td>
	 <td width="10%" align="center"><font face="Helvetica" size="2" >'.$tip.'</font></td>
     <td width="20%" align="center"><font face="Helvetica" size="2" >'.$accion.'</font></td>
     <td width="30%" align="center"><font face="Helvetica" size="2" >'.$desc.'</font></td>
     <td width="20%" align="center"><font face="Helvetica" size="2" >'.$usuario.'</font></td>
    </tr>';

	
	 endforeach; 
	 
	 

$CodigoHTML.='



</table>


<HR width=100% align="center"><br>

<!--
<p><font face="Helvetica" size="2" >'.$desc.'</font></p>
-->

</div>

</body>
</html>';

echo $CodigoHTML;

?>