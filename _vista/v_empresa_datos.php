<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datos de la Empresa</title>

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
$id_empresa=$datos['id_empresa'];
$nom=$datos['nom_empresa'];
$ruc=$datos['ruc_empresa'];
$dir=$datos['dir_empresa'];
$dist=$datos['dist_empresa'];
$dep=$datos['dep_empresa'];
$pais=$datos['pais_empresa'];
$logo=$datos['logo_empresa'];
$color=$datos['color_empresa'];
$desc=$datos['desc_empresa'];
$act=$datos['act_empresa'];
endforeach; 
?>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->    
 
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<i class="brankic-clipboard2"></i>
                Mantenimiento | Datos de la Empresa
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->     
           <div class="panel panel-danger active">
 <div class="panel-heading" >Datos de la Empresa</div>
        
   <div class="modal-body">
   
   
 <form action="empresa_datos.php" method="POST" name="empresa_datos" autocomplete="off" enctype="multipart/form-data">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

 
<tr>
    <td width="20%" align="left"><strong>Nombre:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" type="text" value="<?php echo $nom; ?>" class="form-control input-sm"   placeholder="Nombre" required="required" maxlength="50"  /></td>
</tr>

<tr>
    <td width="20%" align="left"><strong>RUC:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="ruc" type="text" value="<?php echo $ruc; ?>" class="form-control input-sm"   placeholder="RUC" required="required" maxlength="50"  /></td>
</tr>

<tr>
    <td width="20%" align="left"><strong>Dirección:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="dir" type="text" value="<?php echo $dir; ?>" class="form-control input-sm"   placeholder="Dirección" required="required" maxlength="50"  /></td>
</tr>

<tr>
    <td width="20%" align="left"><strong>Distrito:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="dist" type="text" value="<?php echo $dist; ?>" class="form-control input-sm"   placeholder="Distrito" required="required" maxlength="50"  /></td>
</tr>

<tr>
    <td width="20%" align="left"><strong>Departamento:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="dep" type="text" value="<?php echo $dep; ?>" class="form-control input-sm"   placeholder="Departamento" required="required" maxlength="50"  /></td>
</tr>

<tr>
    <td width="20%" align="left"><strong>País:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="pais" type="text" value="<?php echo $pais; ?>" class="form-control input-sm"   placeholder="País" required="required" maxlength="50"  /></td>
</tr>
  

<tr>
    <td width="20%" align="left"><strong>Logo:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="logo" type="file" value="<?php echo $logo; ?>"  class="form-control input-sm" /></td>
</tr>

<tr>
    <td width="20%" align="left"><strong>&nbsp;</strong></td>
    <td width="80%" align="left"><?php echo '<img src="../_controlador/'.$logo.'"width="150" heigth="250" class="img-rounded">'; ?></td>
</tr>
  
<tr>
    <td width="20%" align="left"><strong>Color:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="color" type="color" value="<?php echo $color; ?>"  class="form-control input-sm" /></td>
</tr>
  
 <tr>
    <td width="20%" align="left"><strong>Descripción:&nbsp;</strong></td>
    <td width="80%" align="left"><textarea name="desc" rows="7"  class="form-control input-sm"  placeholder="Descripción" required="required"   ><?php echo $desc; ?></textarea></td>
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
<input type="text" name="id_empresa" size="2"  value="<?php echo $id_empresa; ?>" style="visibility:hidden"/>  
<input name="logo1" type="text" value="<?php echo $logo; ?>" size="2" style="visibility:hidden"  />
</form> 


</div>
</div>

<?php 
include("v_foot.php");
?>			

</body>
</html>