<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nueva Subcategoría</title>

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
           <div class="panel panel-primary">
 <div class="panel-heading">Nuevo Subcategoría</div>
        
        
   <div class="modal-body">
   
   
 <form action="categoria_detalle_nuevo.php" method="POST" name="categoria_detalle_nuevo" autocomplete="off">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
    <td width="20%" align="left"><strong>Subcategoría:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" type="text" class="form-control input-sm"   placeholder="Subcategoría" required="required" maxlength="50"  /></td>
  </tr>
  
   <tr>
    <td width="20%" align="left"><strong>Categoría:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="cat" class="form-control input-sm" >
    <?php foreach ($categoria as $row): ?>
    <option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['nom_categoria']; ?></option>
	<?php endforeach; ?>
	 </select></td>
  </tr>
  
     <tr>
    <td width="20%" align="left"><strong>Grupo:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="gru" class="form-control input-sm" >
    <?php foreach ($grupo as $row): ?>
    <option value="<?php echo $row['id_grupo']; ?>"><?php echo $row['nom_grupo']; ?></option>
	<?php endforeach; ?>
	 </select></td>
  </tr>
  

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