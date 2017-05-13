<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Subcategoría</title>

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
$id_categoria_detalle=$datos['id_categoria_detalle'];
$id_categoria=$datos['id_categoria'];
$nom=$datos['nom_categoria_detalle'];
$act=$datos['act_categoria_detalle'];
endforeach; 
?>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->    
 
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
    Categorías | <a href="categoria_detalle_mostrar.php">Listado de Subcategorías</a> | <a href="categoria_detalle_nuevo.php">Nueva Subcategoría</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->     
           <div class="panel panel-danger active">
 <div class="panel-heading" >Editar Subcategoría</div>
        
        
   <div class="modal-body">
   
   
 <form action="categoria_detalle_editar.php" method="POST" name="categoria_detalle_editar" autocomplete="off" enctype="multipart/form-data">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
    <td width="20%" align="left"><strong>Subcategoría:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" value="<?php echo $nom; ?>" type="text" class="form-control input-sm"   placeholder="Subcategoría" required="required" maxlength="50"  /></td>
  </tr>
 
 
  <tr>
    <td width="20%" align="left"><strong>Categoría:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="cat" class="form-control input-sm" >
    <?php foreach ($categoria as $row): 
			 if($row['id_categoria']==$id_categoria){$m1="selected='selected'";} else {$m1="";}
	?>
    <option value="<?php echo $row['id_categoria']; ?>" <?php echo $m1; ?> ><?php echo $row['nom_categoria']; ?></option>
	<?php endforeach; ?>
	 </select></td>
  </tr>
 

 
  
           <?php 
	  if($act=="1") {$s1="selected='selected'";} else {$s1="";} 
	  if($act=="0") {$s0="selected='selected'";} else {$s0="";} 
	  ?>
      
   <tr>
    <td width="20%" align="left"><strong>Activo:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="act" class="form-control input-sm" >
    <option value="1" <?php echo $s1; ?>>SI</option>
    <option value="0" <?php echo $s0; ?>>NO</option>
    </select></td>
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
<input type="text" name="id_categoria_detalle" size="2"  value="<?php echo $id_categoria_detalle; ?>" style="visibility:hidden"/>  
<input type="text" name="e" size="2"  value="<?php echo $nom; ?>" style="visibility:hidden"/>  
</form> 


</div>
</div>



</body>
</html>