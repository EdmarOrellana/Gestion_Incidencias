<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Usuario</title>

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
$id_usuario=$datos['id_usuario'];
$id_usuario_tipo=$datos['id_usuario_tipo'];
$nom=$datos['nom_usuario'];
$ap=$datos['ape_pat_usuario'];
$am=$datos['ape_mat_usuario'];
$usu=$datos['usu_usuario'];
$pass=$datos['pass_usuario'];
$act=$datos['act_usuario'];
endforeach; 
?>


<!-- ---------------------------------------------------------------------------------------------------------------------- -->    
 
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<i class="ion-person-stalker"></i> 
               Usuarios | <a href="usuario_mostrar.php">Listado de Usuarios</a> | <a href="usuario_nuevo.php">Nuevo Usuario</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->     
           <div class="panel panel-danger active">
 <div class="panel-heading" >Editar Usuario</div>
        
   <div class="modal-body">
   
   
 <form action="usuario_editar.php" method="POST" name="usuario_editar" autocomplete="off" enctype="multipart/form-data">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
    <td width="20%" align="left"><strong>Nombre(s):&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" value="<?php echo $nom; ?>" type="text" class="form-control input-sm"   placeholder="Nombre(s)" required="required" maxlength="50"  /></td>
  </tr>
  
     <tr>
    <td width="20%" align="left"><strong>Apellido Paterno:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="ap" value="<?php echo $ap; ?>" type="text" class="form-control input-sm"   placeholder="Apellido Paterno" required="required" maxlength="50"     /></td>
  </tr>
  
     <tr>
    <td width="20%" align="left"><strong>Apellido Materno:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="am" value="<?php echo $am; ?>" type="text" class="form-control input-sm"   placeholder="Apellido Materno"  required="required" maxlength="50"     /></td>
  </tr>
  


     <tr>
    <td width="20%" align="left"><strong>Tipo Usuario:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="tip" class="form-control input-sm" >
    <?php foreach ($usuariotipo as $row): 
			 if($row['id_usuario_tipo']==$id_usuario_tipo){$m1="selected='selected'";} else {$m1="";}
	?>
    <option value="<?php echo $row['id_usuario_tipo']; ?>" <?php echo $m1; ?> ><?php echo $row['nom_usuario_tipo']; ?></option>
	<?php endforeach; ?>
	 </select></td>
  </tr>




     <tr>
    <td width="20%" align="left"><strong>Usuario:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="usu" value="<?php echo $usu; ?>" type="text" class="form-control input-sm"   placeholder="Usuario" required="required"  maxlength="20"  /></td>
  </tr>
  
  
     <tr>
    <td width="20%" align="left"><strong>Contraseña:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="pass" value="<?php echo $pass; ?>" type="text" class="form-control input-sm"   placeholder="Contraseña" required="required" maxlength="20"  /></td>
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
    <td width="20%" align="left"><strong>Foto:&nbsp;</strong></td>
    <td width="80%" align="left"> <input type="file" name="foto" class="form-control input-sm" /></td>
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
<input type="text" name="id_usuario" size="2"  value="<?php echo $id_usuario; ?>" style="visibility:hidden"/>  
<input type="text" name="e" size="2"  value="<?php echo $usu; ?>" style="visibility:hidden"/>    
</form> 			



</div>
</div>




</body>
</html>