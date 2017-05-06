<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Cliente</title>

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
<?php
foreach ($datos as $datos):
$id_cliente=$datos['id_cliente'];
$id_tipo_documento=$datos['id_tipo_documento'];
$id_area=$datos['id_area'];
$id_anexo=$datos['id_anexo'];
$nom=$datos['nom_cliente'];
$ap=$datos['ape_pat_cliente'];
$am=$datos['ape_mat_cliente'];
$numdoc=$datos['num_doc_cliente'];
$dir=$datos['dir_cliente'];
$tel=$datos['tel_cliente'];
$cel=$datos['cel_cliente'];
$email=$datos['email_cliente'];
$usu=$datos['usu_cliente'];
$pass=$datos['pass_cliente'];
$act=$datos['act_cliente'];
endforeach; 
?>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->    
 
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<i class="ion-person-stalker"></i>
                Clientes | <a href="cliente_mostrar.php">Listado de Clientes</a> | <a href="cliente_nuevo.php">Nuevo Cliente</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->     
           <div class="panel panel-danger active">
 <div class="panel-heading" >Editar Cliente</div>
        
   <div class="modal-body">
   
   
 <form action="cliente_editar.php" method="POST" name="cliente_editar" autocomplete="off" enctype="multipart/form-data">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

 
<tr>
    <td width="20%" align="left"><strong>Nombre(s):&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" type="text" value="<?php echo $nom; ?>" class="form-control input-sm"   placeholder="Nombre(s)" required="required" maxlength="50"  /></td>
  </tr>
  
     <tr>
    <td width="20%" align="left"><strong>Apellido Paterno:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="ap" type="text" value="<?php echo $ap; ?>" class="form-control input-sm"   placeholder="Apellido Paterno" required="required" maxlength="50"   /></td>
  </tr>
  
     <tr>
    <td width="20%" align="left"><strong>Apellido Materno:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="am" type="text" value="<?php echo $am; ?>" class="form-control input-sm"   placeholder="Apellido Materno"  required="required" maxlength="50" /></td>
  </tr>
  

            
  <tr>
    <td width="20%" align="left"><strong>Área:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="are" class="form-control input-sm" >
    
    <?php foreach($area as $row): 
	 if($row['id_area']==$id_area){$m1="selected='selected'";} else {$m1="";}
	?>
    <option value="<?php echo $row['id_area']; ?>" <?php echo $m1; ?>><?php echo $row['nom_area']; ?></option>
    <?php endforeach; ?>
    
    </select></td>
  </tr>
  
  
    <tr>
    <td width="20%" align="left"><strong>Anexo:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="anex" class="form-control input-sm" >
    
    <?php foreach($anexo as $row): 
	 if($row['id_anexo']==$id_anexo){$m1="selected='selected'";} else {$m1="";}
	?>
    <option value="<?php echo $row['id_anexo']; ?>" <?php echo $m1; ?>><?php echo $row['nom_anexo']; ?></option>
    <?php endforeach; ?>
    
    </select></td>
  </tr>
  
  
  <tr>
    <td width="20%" align="left"><strong>Docuemento:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="doc" class="form-control input-sm" onchange="d1(this)">
    
    <?php foreach($tipo_documento as $row): 
	 if($row['id_tipo_documento']==$id_tipo_documento){$m1="selected='selected'";} else {$m1="";}
	?>
    <option value="<?php echo $row['id_tipo_documento']; ?>" <?php echo $m1; ?>><?php echo $row['nom_tipo_documento']; ?></option>
    <?php endforeach; ?>
    
    </select></td>
  </tr
    
  
  
  ><tr>
    <td width="20%" align="left"><strong>Nº Documento:&nbsp;</strong></td> 
    <td width="80%" align="left"> <input name="numdoc" type="text" value="<?php echo $numdoc; ?>" class="form-control input-sm"   placeholder="Nº Documento"  maxlength="8" onKeyPress="return justNumbers(event);" required="required"  id="doc"  /></td>
  </tr>
  
  
     <tr>
    <td width="20%" align="left"><strong>Dirección:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="dir" type="text" value="<?php echo $dir; ?>" class="form-control input-sm"   placeholder="Direccion" required="required"  maxlength="100"  /></td>
  </tr>
  
  
             <tr>
    <td width="20%" align="left"><strong>Teléfono:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="tel" type="text" value="<?php echo $tel; ?>" class="form-control input-sm"   placeholder="Telefono" maxlength="7" required="required" onKeyPress="return justNumbers(event);"   /></td>
  </tr>
  
             <tr>
    <td width="20%" align="left"><strong>Celular:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="cel" type="text" value="<?php echo $cel; ?>" class="form-control input-sm"   placeholder="Celular" maxlength="9" required="required" onKeyPress="return justNumbers(event);"  /></td>
  </tr>

       <tr>
    <td width="20%" align="left"><strong>Email:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="email" type="email" value="<?php echo $email; ?>" class="form-control input-sm"   placeholder="Email" required="required" maxlength="50"   /></td>
  </tr>
  
  
     <tr>
    <td width="20%" align="left"><strong>Usuario:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="usu" type="text" value="<?php echo $usu; ?>" class="form-control input-sm"   placeholder="Usuario" required="required" maxlength="50"  /></td>
  </tr>
  
  
   <tr>
    <td width="20%" align="left"><strong>Contraseña:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="pass" type="text" value="<?php echo $pass; ?>" class="form-control input-sm"   placeholder="Contraseña" required="required" maxlength="50"  /></td>
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
<input type="text" name="id_cliente" size="2"  value="<?php echo $id_cliente; ?>" style="visibility:hidden"/>  
<input type="text" name="e" size="2"  value="<?php echo $numdoc; ?>" style="visibility:hidden"/>   
</form> 


</div>
</div>

			

</body>
</html>