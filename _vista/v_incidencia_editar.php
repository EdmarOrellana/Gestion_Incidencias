<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Incidencia</title>

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

$cli=$datos['nom_cliente']." ".$datos['ape_pat_cliente']." ".$datos['ape_mat_cliente'];
$usua=$datos['usu_asignado'];
$gru=$datos['nom_grupo'];
$cat=$datos['nom_categoria'];
$cat_det=$datos['nom_categoria_detalle'];
$urg=$datos['urg_incidencia'];
$imp=$datos['imp_incidencia'];
$prio=$datos['pri_incidencia'];
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
 <div class="panel-heading" >Editar Incidencia</div>
        
        
   <div class="modal-body">
   
   
 <form action="incidencia_editar.php" method="POST" name="incidencia" autocomplete="off" enctype="multipart/form-data">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
    <td width="10%" align="left"><strong>Afectado:&nbsp;</strong></td>
    <td width="40%" align="left"> 
    <input name="cli" type="text" value="<?php echo $cli; ?>" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Afectado" onClick="window.open('busca_cliente.php','busca_cliente','HEIGHT=350, WIDTH=600, menubar=no, scrollbars=yes, toolbar=yes, resizable=no,top=100,left=400');"   />
    </td>
    <td width="10%" align="left"><strong>Método:&nbsp;</strong></td>
    <td width="40%" align="left"><select name="met" class="form-control input-sm" >
    <?php foreach ($metodo as $row): 
	 if($row['id_metodo']==$id_metodo){$m1="selected='selected'";} else {$m1="";}
	?>
    <option value="<?php echo $row['id_metodo']; ?>" <?php echo $m1; ?> ><?php echo $row['nom_metodo']; ?></option>
	<?php endforeach; ?>
	 </select></td>
  </tr>
  
 
  <tr>
    <td width="10%" align="left"><strong>Asignado:&nbsp;</strong></td>
    <td width="40%" align="left"> 
    <input name="usua" type="text" value="<?php echo $usua; ?>" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Asignado" onClick="window.open('busca_usuario.php','busca_usuario','HEIGHT=350, WIDTH=600, menubar=no, scrollbars=yes, toolbar=yes, resizable=no,top=100,left=400');"   />
    <td width="10%" align="left"><strong>Grupo:&nbsp;</strong></td>
    <td width="40%" align="left" > 
    <input name="gru" type="text" value="<?php echo $gru; ?>"  class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Grupo" onClick="window.open('busca_usuario.php','busca_usuario','HEIGHT=350, WIDTH=600, menubar=no, scrollbars=yes, toolbar=yes, resizable=no,top=100,left=400');"   />
    </td>
  </tr>
  
    
   <tr>
    <td width="10%" align="left"><strong>Categoría:&nbsp;</strong></td>
    <td width="40%" align="left"> 
    <input name="cat" type="text" value="<?php echo $cat; ?>" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Categoría" onClick="window.open('busca_categoria_detalle.php','busca_categoria_detalle','HEIGHT=350, WIDTH=600, menubar=no, scrollbars=yes, toolbar=yes, resizable=no,top=100,left=400');"   />
    </td>
    <td width="10%" align="left"><strong>Subcategoría:&nbsp;</strong></td>
    <td width="40%" align="left" > 
    <input name="cat_det" type="text" value="<?php echo $cat_det; ?>" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Subcategoría" onClick="window.open('busca_categoria_detalle.php','busca_categoria_detalle','HEIGHT=350, WIDTH=600, menubar=no, scrollbars=yes, toolbar=yes, resizable=no,top=100,left=400');"   />
    </td>
  </tr>
  
<tr>
<td colspan="6"><hr /></td>
</tr>

      <?php 
	  if($urg=="1") {$u1="selected='selected'";} else {$u1="";} 
	  if($urg=="2") {$u2="selected='selected'";} else {$u2="";} 
	  if($urg=="3") {$u3="selected='selected'";} else {$u3="";} 
	  if($urg=="4") {$u4="selected='selected'";} else {$u4="";}
	  if($urg=="5") {$u5="selected='selected'";} else {$u5="";}
	  ?>

   <tr>
    <td width="10%" align="left"><strong>Urgencia:&nbsp;</strong></td>
    <td width="40%" align="left"><select name="urg" class="form-control input-sm" >
    <option value="1" <?php echo $u1; ?>>1</option>
    <option value="2" <?php echo $u2; ?>>2</option>
    <option value="3" <?php echo $u3; ?>>3</option>
    <option value="4" <?php echo $u4; ?>>4</option>
    <option value="5" <?php echo $u5; ?>>5</option>
	 </select></td>
     
      <?php 
	  if($act=="1") {$s1="selected='selected'";} else {$s1="";} 
	  if($act=="2") {$s2="selected='selected'";} else {$s2="";} 
	  if($act=="3") {$s3="selected='selected'";} else {$s3="";} 
	  if($act=="4") {$s4="selected='selected'";} else {$s4="";}
	  if($act=="5") {$s5="selected='selected'";} else {$s5="";}
	  if($act=="6") {$s6="selected='selected'";} else {$s6="";}
	  ?>
      
      <?php 
	  if($act=="1") {$estado="PENDIENTE";}
	  else if($act=="2") {$estado="EN PROCESO";}
	  if($act=="3") {$estado="RESUELTO";}
	  if($act=="4") {$estado="CERRADO";}
	  if($act=="5") {$estado="POR CERRAR";}
	  if($act=="6") {$estado="PROGRAMADO";}
	  ?>
     
    <td width="10%" align="left"><strong>Estado:&nbsp;</strong></td>
    
    

    <td width="40%" align="left">
 <input name="act" type="text" value="<?php echo $estado; ?>" class="form-control input-sm" readonly="readonly" style="cursor:pointer" placeholder="Estado" />
      </td>
      
      
        <!--
    <select name="act" class="form-control input-sm" >
    <option value="1" <?php echo $s1; ?>>PENDIENTE</option>
    <option value="2" <?php echo $s2; ?>>EN PROCESO</option>
    <option value="3" <?php echo $s3; ?>>RESUELTO</option>
    <option value="4" <?php echo $s4; ?>>CERRADO</option>
    <option value="5" <?php echo $s5; ?>>POR CERRAR</option>
    <option value="6" <?php echo $s6; ?>>PROGRAMADO</option>
	 </select>
        -->
   
 
     
   </tr>
   
   
      <?php 
	  if($imp=="1") {$i1="selected='selected'";} else {$i1="";} 
	  if($imp=="2") {$i2="selected='selected'";} else {$i2="";} 
	  if($imp=="3") {$i3="selected='selected'";} else {$i3="";} 
	  if($imp=="4") {$i4="selected='selected'";} else {$i4="";}
	  if($imp=="5") {$i5="selected='selected'";} else {$i5="";}
	  ?>
   
   <tr>  
    <td width="10%" align="left"><strong>Impacto:&nbsp;</strong></td>
    <td width="40%" align="left"><select name="imp" class="form-control input-sm" >
    <option value="1" <?php echo $i1; ?>>1</option>
    <option value="2" <?php echo $i2; ?>>2</option>
    <option value="3" <?php echo $i3; ?>>3</option>
    <option value="4" <?php echo $i4; ?>>4</option>
    <option value="5" <?php echo $i5; ?>>5</option>
	</select></td>  
    </tr>
    
      <?php 
	  if($prio=="1") {$p1="selected='selected'";} else {$p1="";} 
	  if($prio=="2") {$p2="selected='selected'";} else {$p2="";} 
	  if($prio=="3") {$p3="selected='selected'";} else {$p3="";} 
	  if($prio=="4") {$p4="selected='selected'";} else {$p4="";}
	  if($prio=="5") {$p5="selected='selected'";} else {$p5="";}
	  ?>
    
    <tr>
    <td width="10%" align="left"><strong>Prioridad:&nbsp;</strong></td>
    <td width="40%" align="left"><select name="prio" class="form-control input-sm" >
    <option value="1" <?php echo $p1; ?>>1</option>
    <option value="2" <?php echo $p2; ?>>2</option>
    <option value="3" <?php echo $p3; ?>>3</option>
    <option value="4" <?php echo $p4; ?>>4</option>
    <option value="5" <?php echo $p5; ?>>5</option>
	 </select></td>  
  </tr>

<tr>
<td colspan="6"><hr /></td>
</tr>

  <tr>
    <td width="10%" align="left"><strong>Resumen:&nbsp;</strong></td>
    <td colspan="6" width="40%" align="left"> 
    <input name="res" type="text" value="<?php echo $res; ?>" class="form-control input-sm" placeholder="Resumen" required="required"  />
    </td>
  </tr> 


  <tr>
    <td width="10%" align="left"><strong>Descripción:&nbsp;</strong></td>
    <td colspan="6" width="40%" align="left"> 
    <textarea name="des" rows="4" class="form-control input-sm" placeholder="Descripción" required="required"><?php echo $des; ?></textarea>
    </td>
  </tr> 
 
  

      
 
  <!-- 
      <tr>
    <td width="38%" align="right"><strong>Foto:&nbsp;</strong></td>
    <td width="62%" align="left"> <input type="file" name="foto" class="form-control input-sm" /></td>
  </tr>
 -->

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