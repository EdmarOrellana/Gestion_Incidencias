<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Tipo de Usuario</title>

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
					<i class="brankic-clipboard2"></i> 
    Mantenimiento | <a href="usuario_tipo_mostrar.php">Listado de Tipo de Usuario</a> | <a href="usuario_tipo_nuevo.php">Nuevo Tipo de Usuario</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->      
           <div class="panel panel-primary">
 <div class="panel-heading">Nuevo Tipo de Usuario</div>
        
        
   <div class="modal-body">
   
   
 <form action="usuario_tipo_nuevo.php" method="POST" name="usuario_tipo_nuevo" autocomplete="off">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
    <td width="20%" align="left"><strong>Nombre:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" type="text" class="form-control input-sm"   placeholder="Nombre" required="required" maxlength="50"  /></td>
  </tr>
  
  
       <tr>
    <td width="20%" align="left"><strong>Incidencias:&nbsp;</strong></td>

    <td width="80%" align="left">
    <select name="1" class="form-control input-sm" >
    <option value="1">SI</option>
    <option value="0">NO</option> 
    </select></td>
  </tr>
  
       <tr>
    <td width="20%" align="left"><strong>Categorias:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="2" class="form-control input-sm" >
    <option value="1">SI</option>
    <option value="0">NO</option> 
    </select></td>
  </tr>
  
       <tr>
    <td width="20%" align="left"><strong>Clientes:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="3" class="form-control input-sm" >
    <option value="1">SI</option>
    <option value="0">NO</option> 
    </select></td>
  </tr>
  
  
       <tr>
    <td width="20%" align="left"><strong>Usuarios:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="4" class="form-control input-sm" >
    <option value="1">SI</option>
    <option value="0">NO</option> 
    </select></td>
  </tr>
  
       <tr>
    <td width="20%" align="left"><strong>Informes:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="5" class="form-control input-sm" >
    <option value="1">SI</option>
    <option value="0">NO</option>  
    </select></td>
  </tr>
  
       <tr>
    <td width="20%" align="left"><strong>Mi Perfil:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="6" class="form-control input-sm" >
    <option value="1">SI</option>
    <option value="0">NO</option>  
    </select></td>
  </tr>
  
       <tr>
    <td width="20%" align="left"><strong>Mantenimiento:&nbsp;</strong></td>
    <td width="80%" align="left"> <select name="7" class="form-control input-sm" >
    <option value="1">SI</option>
    <option value="0">NO</option> 
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

        <button name="grabar" type="submit" class="btn btn-primary btn-sm" aria-label="right Align" />
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span> Grabar</button>
        <!-- <a href="usuario_mostrar.php" class="btn" style="color:#060">Ir a listado</a> -->

         </td><tr>
         </table>
   <!-- ----------------------------------------------------------------------------------------------------------------- -->    
      
</form> 

</div>
</div>



</body>
</html>