<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nueva Incidencia</title>

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
					<span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> 
    Incidencias | <a href="incidencia_mostrar_cliente.php">Listado de Incidencias</a> | <a href="incidencia_nuevo_cliente.php">Nueva Incidencia</a>
				</div>
            

			</div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->      
           <div class="panel panel-primary">
 <div class="panel-heading">Nueva Incidencia</div>
        
        
   <div class="modal-body">
   
   
 <form action="incidencia_nuevo_cliente.php" method="POST" name="incidencia" autocomplete="off">  
     <div class="form-group">
        
<!-- <p><strong>Ingrese Datos:</strong></p> -->
   <!-- ----------------------------------------------------------------------------------------------------------------- -->   
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

 
   <tr>

        <td width="10%" align="left"><strong>Tipo Solicitud:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="tip" class="form-control input-sm" >
        <?php foreach ($tipo_solicitud as $row): ?>
        <option value="<?php echo $row['id_tipo_solicitud']; ?>"><?php echo $row['nom_tipo_solicitud']; ?></option>
        <?php endforeach; ?>
         </select></td>

  </tr>
  
 
  
<tr>
<td colspan="6"><hr /></td>
</tr>


  <tr>
        <td width="10%" align="left"><strong>Asunto:&nbsp;</strong></td>
        <td colspan="6" width="40%" align="left"> 
        <input name="asu" type="text" class="form-control input-sm" placeholder="Resumen" required="required"  />
        </td>
  </tr> 


  <tr>
        <td width="10%" align="left"><strong>Descripción:&nbsp;</strong></td>
        <td colspan="6" width="40%" align="left"> 
        <textarea name="des" rows="4" class="form-control input-sm" placeholder="Descripción" required="required"></textarea>
        </td>
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
  
        
       <input name="hora_ini" type="text" value="<?php echo $hora; ?>"  size="2" style="visibility:hidden" required="required"  />  
</form> 

</div>
</div>



</body>
</html>