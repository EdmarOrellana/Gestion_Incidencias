<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Grupo</title>

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
$id_grupo=$datos['id_grupo'];
$nom=$datos['nom_grupo'];
$act=$datos['act_grupo'];
endforeach; 
?>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->    
 
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<i class="brankic-clipboard2"></i> 
    Mantenimiento | <a href="grupo_mostrar.php">Listado de Grupo</a> | <a href="grupo_nuevo.php">Nuevo Grupo</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->     
           <div class="panel panel-danger active">
 <div class="panel-heading" >Editar Grupo</div>
        
        
   <div class="modal-body">
   
   
 <form action="grupo_editar.php" method="POST" name="grupo_editar" autocomplete="off" enctype="multipart/form-data">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
    <td width="20%" align="left"><strong>Grupo:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" value="<?php echo $nom; ?>" type="text" class="form-control input-sm"   placeholder="Grupo" required="required" maxlength="50"  /></td>
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
<input type="text" name="id_grupo" size="2"  value="<?php echo $id_grupo; ?>" style="visibility:hidden"/>  
<input type="text" name="e" size="2"  value="<?php echo $nom; ?>" style="visibility:hidden"/>  
</form> 


</div>
</div>



</body>
</html>