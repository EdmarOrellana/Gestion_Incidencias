<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cambiar Estados Incidencia</title>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->  
<script language="javascript" type="text/javascript">
//-----------------------------------------------------------------------------   
function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
}	
//-----------------------------------------------------------------------------   

//-----------------------------------------------------------------------------   
</script>


    
<!-- ---------------------------------------------------------------------------------------------------------------------- -->    

</head>

<body>

<?php
foreach ($datos as $datos):
$id_incidencia=$datos['id_incidencia'];
$id_cliente=$datos['id_cliente'];
$id_usuario=$datos['id_asignado'];
$id_categoria_detalle=$datos['id_categoria_detalle'];
$id_metodo=$datos['id_metodo'];
$nom_metodo=$datos['nom_metodo'];

$cli=$datos['nom_cliente']." ".$datos['ape_pat_cliente']." ".$datos['ape_mat_cliente'];
$usua=$datos['usu_asignado'];
$gru=$datos['nom_grupo'];
$cat=$datos['nom_categoria'];
$cat_det=$datos['nom_categoria_detalle'];
$urg=$datos['urg_incidencia'];
$imp=$datos['imp_incidencia'];
$prio=$datos['pri_incidencia'];
$mov=$datos['mov_incidencia'];
$res=$datos['res_incidencia'];
$des=$datos['des_incidencia'];
$act=$datos['act_incidencia'];
endforeach; 
?>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->    
 
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
    Incidencias | <a href="incidencia_mostrar.php">Listado de Incidencias</a> | <a href="incidencia_nuevo.php">Nueva Incidencia</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->     
           <div class="panel panel-danger active">
 <div class="panel-heading" >Cambiar Estado - Incidencia Nro.<?php echo $id_incidencia;?></div>
        
        
   <div class="modal-body">
   
   
 <form action="incidencia_cambiar.php" method="POST" name="incidencia" autocomplete="off" enctype="multipart/form-data">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >


<tr>
      <?php 
	  if($act=="1") {$s1="selected='selected'";} else {$s1="";} 
	  if($act=="2") {$s2="selected='selected'";} else {$s2="";} 
	  if($act=="3") {$s3="selected='selected'";} else {$s3="";} 
	  if($act=="4") {$s4="selected='selected'";} else {$s4="";}
	  if($act=="5") {$s5="selected='selected'";} else {$s5="";}
	  if($act=="6") {$s6="selected='selected'";} else {$s6="";}
	  ?>

    <td width="10%" align="left"><strong>Estado:&nbsp;</strong></td>
    <td width="40%" align="left">
    <select name="act" class="form-control input-sm" >
    <option value="1" <?php echo $s1; ?>>PENDIENTE</option>
    <option value="6" <?php echo $s6; ?>>PROGRAMADO</option> 
    <option value="2" <?php echo $s2; ?>>EN PROCESO</option>
    <option value="3" <?php echo $s3; ?>>RESUELTO</option>
    <option value="5" <?php echo $s5; ?>>POR CERRAR</option>
    <option value="4" <?php echo $s4; ?>>CERRADO</option> 

    
	 </select>
      </td>
      
     <td width="10%" align="left"><strong>Detalle del cambio:&nbsp;</strong></td>
    <td width="40%" align="left"> 
    <textarea name="camb" rows="4" class="form-control input-sm" placeholder="Detalle del cambio" required="required"></textarea>
    </td>  
      
      
</tr>


<tr>
<td colspan="6"><hr /></td>
</tr>


   <tr>
    <td width="10%" align="left"><strong>Afectado:&nbsp;</strong></td>
    <td width="40%" align="left"> 
    <input name="cli" type="text" readonly="readonly" value="<?php echo $cli; ?>" class="form-control input-sm alert-warning"  placeholder="Afectado"  />
    </td>
    
    
    <td width="10%" align="left"><strong>Método:&nbsp;</strong></td>
    <td width="40%" align="left">
    <input name="met" type="text" readonly="readonly" value="<?php echo $nom_metodo; ?>" class="form-control input-sm alert-warning" placeholder="Metodo"  />
    </td>
     
  </tr>
  
 
  <tr>
    <td width="10%" align="left"><strong>Asignado:&nbsp;</strong></td>
    <td width="40%" align="left"> 
    <input name="usua" type="text" readonly="readonly" value="<?php echo $usua; ?>" class="form-control input-sm alert-warning" placeholder="Asignado"  />
    <td width="10%" align="left"><strong>Grupo:&nbsp;</strong></td>
    <td width="40%" align="left" > 
    <input name="gru" type="text" readonly="readonly" value="<?php echo $gru; ?>"  class="form-control input-sm alert-warning"  placeholder="Grupo"    />
    </td>
  </tr>
  
    
   <tr>
    <td width="10%" align="left"><strong>Categoría:&nbsp;</strong></td>
    <td width="40%" align="left"> 
    <input name="cat" type="text" readonly="readonly" value="<?php echo $cat; ?>" class="form-control input-sm alert-warning"  placeholder="Categoría"  />
    </td>
    <td width="10%" align="left"><strong>Subcategoría:&nbsp;</strong></td>
    <td width="40%" align="left" > 
    <input name="cat_det" type="text" readonly="readonly" value="<?php echo $cat_det; ?>" class="form-control input-sm alert-warning"  placeholder="Subcategoría"   />
    </td>
  </tr>
  
<tr>
<td colspan="6"><hr /></td>
</tr>



   <tr>
   
   
    <td width="10%" align="left"><strong>Urgencia:&nbsp;</strong></td>
   <td width="40%" align="left">
 <input name="urg" type="text" value="<?php echo $urg; ?>" class="form-control input-sm" readonly="readonly" style="cursor:pointer" placeholder="Estado" />
      </td>  
     
    <td width="10%" align="left"><strong>Movilidad S/.&nbsp;</strong></td>
    <td width="40%" align="left"> 
    <input name="mov" type="text" value="<?php echo $mov; ?>" class="form-control input-sm " placeholder="S/." maxlength="5" onKeyPress="return justNumbers(event);" required="required" />
    </td>     
      
     
   </tr>
   
   
 
   
   <tr>  
    <td width="10%" align="left"><strong>Impacto:&nbsp;</strong></td>
   <td width="40%" align="left">
 	<input name="imp" type="text" value="<?php echo $imp; ?>" class="form-control input-sm" readonly="readonly"  placeholder=	"Estado" />
      </td>  
    </tr>
    

    <tr>
    <td width="10%" align="left"><strong>Prioridad:&nbsp;</strong></td>
   <td width="40%" align="left">
 	<input name="prio" type="text" value="<?php echo $prio; ?>" class="form-control input-sm" readonly="readonly"  placeholder=	"Estado" />
      </td>  
  </tr>

<tr>
<td colspan="6"><hr /></td>
</tr>

  <tr>
    <td width="10%" align="left"><strong>Resumen:&nbsp;</strong></td>
    <td colspan="6" width="40%" align="left"> 
    <input name="res" type="text" readonly="readonly" value="<?php echo $res; ?>" class="form-control input-sm" placeholder="Resumen"   />
    </td>
  </tr> 


  <tr>
    <td width="10%" align="left"><strong>Descripción:&nbsp;</strong></td>
    <td colspan="6" width="40%" align="left"> 
    <textarea name="des" readonly="readonly" rows="4" class="form-control input-sm" placeholder="Descripción" ><?php echo $des; ?></textarea>
    </td>
  </tr> 
 

</table>

      
<hr />
<p><strong>Historial de Cambios:</strong></p>

<table border="0" WIDTH=1000 class="table-responsive table-hover table-condensed " >

<tr>
<th>Fecha</th>
<th>Hora</th>
<th>Acción</th>
<th>Detalle</th>
<th>Descripción</th>
<th>Realizado por</th>
</tr>


 <?php
$c=0; 
foreach ($datos_cambios as $row):
$c++;
$id_incidencia_cambio=$row['id_incidencia_cambio'];
$usuario=$row['usu_usuario'];
$tip=$row['tip_incidencia_cambio'];
$desc=$row['desc_incidencia_cambio'];
$fec=$row['fec_incidencia_cambio'];
$hor=$row['time_fin_incidencia_cambio'];
	

if($tip=="CAMBIO DE ESTADO")
{

$det=$row['det_incidencia_cambio'];

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
	$usua=$row['usu_asignado'];
	$accion=$usua;	
}
?>



<tr>
<td><?php echo $fec; ?></td>
<td><?php echo $hor; ?></td>
<td><?php echo $tip; ?></td>
<td><?php echo $accion; ?></td>
<td><?php echo $desc; ?></td>
<td><?php echo $usuario; ?></td>
</tr>


<?php
endforeach; 
?>


</table>
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   

  </div>
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   

<hr width="100%" />
		<table width="900">
        <tr><td>

        <button name="grabar" type="submit" class="btn btn-danger btn-sm" aria-label="right Align" />
        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Actualizar</button>
  <!-- <a href="transporte_mostrar.php" class="btn" style="color:#060">Ir a listado</a> -->

         </td><tr>
         </table>
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<!-- Codigos ocultos -->
<input type="text" name="id_incidencia" size="2"  value="<?php echo $id_incidencia; ?>" style="visibility:hidden"/>  

       <input name="id_cliente" type="text"  size="2" value="<?php echo $id_cliente; ?>" style="visibility:hidden" required="required"  />  
       <input name="id_usuario" type="text"  size="2" value="<?php echo $id_usuario; ?>" style="visibility:hidden" required="required"  />  
       <input name="id_categoria_detalle" type="text" value="<?php echo $id_categoria_detalle; ?>"  size="2" style="visibility:hidden" required="required"  />  
       
       <input name="hora_ini" type="text" value="<?php echo $hora; ?>"  size="2" style="visibility:hidden" required="required"  />  
 
</form> 


</div>
</div>



</body>
</html>