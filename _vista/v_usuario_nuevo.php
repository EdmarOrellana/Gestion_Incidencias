<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Usuario</title>

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
function d1(selectTag){
 if(selectTag.value == 'DNI'){	 
 document.getElementById('doc').setAttribute('maxlength','8');
  document.getElementById('doc').value = "";


 }else{	 
 document.getElementById('doc').setAttribute('maxlength','11');
 document.getElementById('doc').value = "";


 }
}
//-----------------------------------------------------------------------------   
</script>


    
<!-- ---------------------------------------------------------------------------------------------------------------------- -->    

</head>

<body>

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
           <div class="panel panel-primary">
 <div class="panel-heading">Nuevo Usuario</div>
        
        
        
   <div class="modal-body">
   
   
 <form action="usuario_nuevo.php" method="POST" name="usuario_nuevo" autocomplete="off">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
    <td width="20%" align="left"><strong>Nombre(s):&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" type="text" class="form-control input-sm"   placeholder="Nombre(s)" required="required" maxlength="50"  /></td>
  </tr>
  
     <tr>
    <td width="20%" align="left"><strong>Apellido Paterno:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="ap" type="text" class="form-control input-sm"   placeholder="Apellido Paterno" required="required" maxlength="50"     /></td>
  </tr>
  
     <tr>
    <td width="20%" align="left"><strong>Apellido Materno:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="am" type="text" class="form-control input-sm"   placeholder="Apellido Materno"  required="required" maxlength="50"     /></td>
  </tr>
  

     <tr>
    <td width="20%" align="left"><strong>Tipo Usuario:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="tip" class="form-control input-sm" >
    <?php foreach ($usuariotipo as $row): ?>
    <option value="<?php echo $row['id_usuario_tipo']; ?>"><?php echo $row['nom_usuario_tipo']; ?></option>
	<?php endforeach; ?>
	 </select></td>
  </tr>



     <tr>
    <td width="20%" align="left"><strong>Usuario:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="usu" type="text" class="form-control input-sm"   placeholder="Usuario" required="required"  maxlength="20"  /></td>
  </tr>
  
  
     <tr>
    <td width="20%" align="left"><strong>Contraseña:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="pass" type="text" class="form-control input-sm"   placeholder="Contraseña" required="required" maxlength="20"  /></td>
  </tr>
 
  <!-- 
      <tr>
    <td width="38%" align="left"><strong>Foto:&nbsp;</strong></td>
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

        <button name="grabar" type="submit" class="btn btn-primary btn-sm" aria-label="right Align" />
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span> Grabar</button>
        <!-- <a href="transporte_mostrar.php" class="btn" style="color:#060">Ir a listado</a> -->

         </td><tr>
         </table>
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
      
</form> 

</div>
</div>


</body>
</html>