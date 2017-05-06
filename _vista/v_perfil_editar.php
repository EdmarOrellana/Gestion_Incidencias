<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Perfil</title>

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
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
//-----------------------------------------------------------------------------   
</script>


    
<!-- ---------------------------------------------------------------------------------------------------------------------- -->    

</head>

<body>


<?php
foreach ($datos as $datos):
$id_perfil=$datos['id_usuario'];
$tip=$datos['nom_usuario_tipo'];
$nom=$datos['nom_usuario'];
$ap=$datos['ape_pat_usuario'];
$am=$datos['ape_mat_usuario'];
$usu=$datos['usu_usuario'];
endforeach; 
?>


<!-- ---------------------------------------------------------------------------------------------------------------------- -->    
 
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<i class="brankic-smiley"></i> 
    Mi Perfil | <a href="perfil_editar.php">Editar Perfil</a> | <a href="password_editar.php">Cambiar Contraseña</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->     
           <div class="panel panel-danger active">
 <div class="panel-heading" >Editar Perfil</div>
        
        
   <div class="modal-body">
   
   
 <form action="perfil_editar.php" method="POST" name="perfil_editar" autocomplete="off" enctype="multipart/form-data">  
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
    <td width="80%" align="left"> <input name="am" value="<?php echo $am; ?>" type="text" class="form-control input-sm"   placeholder="Apellido Materno"  required="required" maxlength="50"   /></td>
  </tr>
  
       <tr>
    <td width="20%" align="left"><strong>Tipo Usuario:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="tip" value="<?php echo $tip; ?>" type="text" class="form-control input-sm"   placeholder="Tipo Usuario"    maxlength="50" readonly="readonly"  /></td>
  </tr>
  
     <tr>
    <td width="20%" align="left"><strong>Usuario:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="usu" value="<?php echo $usu; ?>" type="text" class="form-control input-sm"   placeholder="Usuario"  readonly="readonly"  maxlength="20"  /></td>
  </tr>


  <!-- 
      <tr>
    <td width="38%" align="right"><strong>Foto:&nbsp;</strong></td>
    <td width="80%" align="left"> <input type="file" name="foto" class="form-control input-sm" /></td>
  </tr>
 -->

</table>

 <!-- 
<p class="alert-danger active">
<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> La sesión se cerrará al actualizar sus datos.
</p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   	

 </div>
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   

<hr width="100%" />
		<table width="900">
        <tr><td>

        <button name="grabar" type="submit" class="btn btn-danger btn-sm" aria-label="right Align" />
        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Actualizar</button>
  <!-- <a href="usuario_mostrar.php" class="btn" style="color:#060">Ir a listado</a> -->

         </td><tr>
         </table>
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<!-- Codigos ocultos -->
<input type="text" name="id_perfil" size="2"  value="<?php echo $id_perfil; ?>" style="visibility:hidden"/>   
</form> 


</div>
</div>

<?php 
include("v_foot.php");
?>       

</body>
</html>