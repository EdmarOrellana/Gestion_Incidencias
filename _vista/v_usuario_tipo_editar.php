<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Tipo de Usuario</title>

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
$id_usuario_tipo=$datos['id_usuario_tipo'];
$nom=$datos['nom_usuario_tipo'];
$t1=$datos['incidencias'];
$t2=$datos['categorias'];
$t3=$datos['clientes'];
$t4=$datos['usuarios'];
$t5=$datos['informes'];
$t6=$datos['perfil'];
$t7=$datos['mantenimiento'];
$act=$datos['act_usuario_tipo'];
endforeach; 
?>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->    
 
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<i class="brankic-clipboard2"></i> 
    Mantenimiento | <a href="usuario_tipo_mostrar.php">Listado de Tipo de Usuario</a> | <a href="usuario_tipo_nuevo.php">Nuevo Tipo de Usuario</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->     
           <div class="panel panel-danger active">
 <div class="panel-heading" >Editar Tipo de Usuario</div>
        
        
   <div class="modal-body">
   
   
 <form action="usuario_tipo_editar.php" method="POST" name="usuario_tipo_editar" autocomplete="off" enctype="multipart/form-data">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
    <td width="20%" align="left"><strong>Nombre:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" value="<?php echo $nom; ?>" type="text" class="form-control input-sm"   placeholder="Nombre" required="required" maxlength="50"  /></td>
  </tr>
 
  
  <?php 
	  if($t1=="1") {$d1="selected='selected'";} else {$d1="";} 
	  if($t1=="0") {$d0="selected='selected'";} else {$d0="";} 
	  ?>
 
      <tr>
    <td width="20%" align="left"><strong>Incidencias:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="1" class="form-control input-sm" >
    <option value="1" <?php echo $d1; ?>>SI</option>
    <option value="0" <?php echo $d0; ?>>NO</option> 
    </select></td>
  </tr>


      <?php 
	  if($t2=="1") {$o1="selected='selected'";} else {$o1="";} 
	  if($t2=="0") {$o0="selected='selected'";} else {$o0="";} 
	  ?>
  
       <tr>
    <td width="20%" align="left"><strong>Categorías:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="2" class="form-control input-sm" >
    <option value="1" <?php echo $o1; ?>>SI</option>
    <option value="0" <?php echo $o0; ?>>NO</option> 
    </select></td>
  </tr>
  
      <?php 
	  if($t3=="1") {$c1="selected='selected'";} else {$c1="";} 
	  if($t3=="0") {$c0="selected='selected'";} else {$c0="";} 
	  ?>
  
       <tr>
    <td width="20%" align="left"><strong>Clientes:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="3" class="form-control input-sm" >
    <option value="1" <?php echo $c1; ?>>SI</option>
    <option value="0" <?php echo $c0; ?>>NO</option> 
    </select></td>
  </tr>
  
  
      <?php 
	  if($t4=="1") {$pc1="selected='selected'";} else {$pc1="";} 
	  if($t4=="0") {$pc0="selected='selected'";} else {$pc0="";} 
	  ?>
  
       <tr>
    <td width="20%" align="left"><strong>Usuarios:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="4" class="form-control input-sm" >
    <option value="1" <?php echo $pc1; ?>>SI</option>
    <option value="0" <?php echo $pc0; ?>>NO</option> 
    </select></td>
  </tr>
  
  
      <?php 
	  if($t5=="1") {$tt1="selected='selected'";} else {$tt1="";} 
	  if($t5=="0") {$tt0="selected='selected'";} else {$tt0="";} 
	  ?>
  
       <tr>
    <td width="20%" align="left"><strong>Informes:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="5" class="form-control input-sm" >
    <option value="1" <?php echo $tt1; ?>>SI</option>
    <option value="0" <?php echo $tt0; ?>>NO</option>  
    </select></td>
  </tr>
  
        <?php 
	  if($t6=="1") {$p1="selected='selected'";} else {$p1="";} 
	  if($t6=="0") {$p0="selected='selected'";} else {$p0="";} 
	  ?>
  
       <tr>
    <td width="20%" align="left"><strong>Mi Perfil:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="6" class="form-control input-sm" >
    <option value="1" <?php echo $p1; ?>>SI</option>
    <option value="0" <?php echo $p0; ?>>NO</option>  
    </select></td>
  </tr>

      <?php 
	  if($t7=="1") {$u1="selected='selected'";} else {$u1="";} 
	  if($t7=="0") {$u0="selected='selected'";} else {$u0="";} 
	  ?>
  
       <tr>
    <td width="20%" align="left"><strong>Mantenimiento:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="7" class="form-control input-sm" >
    <option value="1" <?php echo $u1; ?>>SI</option>
    <option value="0" <?php echo $u0; ?>>NO</option> 
    </select></td>
  </tr>
  
  
   
  
           <?php 
	  if($act=="1") {$s1="selected='selected'";} else {$s1="";} 
	  if($act=="0") {$s0="selected='selected'";} else {$s0="";} 
	  ?>
      
   <tr>
    <td width="25%" align="left"><strong>Activo:&nbsp;</strong></td>
    <td width="62%" align="left"><select name="act" class="form-control input-sm" >
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
  <!-- <a href="usuario_mostrar.php" class="btn" style="color:#060">Ir a listado</a> -->

         </td><tr>
         </table>
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<!-- Codigos ocultos -->
<input type="text" name="id_usuario_tipo" size="2"  value="<?php echo $id_usuario_tipo; ?>" style="visibility:hidden"/>  
<input type="text" name="e" size="2"  value="<?php echo $nom; ?>" style="visibility:hidden"/>  
</form> 


</div>
</div>



</body>
</html>