<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nueva Incidencia</title>
<script language="javascript" type="text/javascript">
//-----------------------------------------------------------------------------
function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;

return /\d/.test(String.fromCharCode(keynum));
}
</script>
</head>
<body>

			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>

				<div class="page-title">
					<span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
    Incidencias | <a href="incidencia_mostrar.php">Listado de Incidencias</a> | <a href="incidencia_nuevo.php">Nueva Incidencia</a>
				</div>

			</div>

           <div class="panel panel-primary">
 <div class="panel-heading">Nueva Incidencia</div>

   <div class="modal-body">

 <form action="incidencia_nuevo.php" method="POST" name="incidencia" autocomplete="off">
     <div class="form-group">

<!-- <p><strong>Ingrese Datos:</strong></p> -->
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

   <tr>
        <td width="10%" align="left"><strong>Tipo Solicitud:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="tip" class="form-control input-sm" >
        <?php foreach ($tipo_solicitud as $row): ?>
        <option value="<?php echo $row['id_tipo_solicitud']; ?>"><?php echo $row['nom_tipo_solicitud']; ?></option>
        <?php endforeach; ?>
         </select></td>

        <td width="10%" align="left"><strong>Modo:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="mod" class="form-control input-sm" >
        <?php foreach ($modo as $row): ?>
        <option value="<?php echo $row['id_modo']; ?>"><?php echo $row['nom_modo']; ?></option>
        <?php endforeach; ?>
         </select></td>
  </tr>

   <tr>
        <td width="10%" align="left"><strong>Impacto:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="imp" class="form-control input-sm" >
        <?php foreach ($impacto as $row): ?>
        <option value="<?php echo $row['id_impacto']; ?>"><?php echo $row['nom_impacto']; ?></option>
        <?php endforeach; ?>
         </select></td>

        <td width="10%" align="left"><strong>Prioridad:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="pri" class="form-control input-sm" >
        <?php foreach ($prioridad as $row): ?>
        <option value="<?php echo $row['id_prioridad']; ?>"><?php echo $row['nom_prioridad']; ?></option>
        <?php endforeach; ?>
         </select></td>
   </tr>

   <tr>
        <td width="10%" align="left"><strong>Categoría:&nbsp;</strong></td>
        <td width="40%" align="left">
        <input name="cat" type="text" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Categoría" onClick="window.open('busca_categoria_detalle.php','busca_categoria_detalle','HEIGHT=350, WIDTH=800, menubar=no, scrollbars=yes, toolbar=yes, resizable=no,top=100,left=400');"   />
        </td>
        <td width="10%" align="left"><strong>Subcategoría:&nbsp;</strong></td>
        <td width="40%" align="left" >
        <input name="cat_det" type="text" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Subcategoría" onClick="window.open('busca_categoria_detalle.php','busca_categoria_detalle','HEIGHT=350, WIDTH=800, menubar=no, scrollbars=yes, toolbar=yes, resizable=no,top=100,left=400');"   />
        </td>
  </tr>


   <tr>
    <td width="10%" align="left"><strong>Solicitante:&nbsp;</strong></td>
    <td width="40%" align="left">
    <input name="cli" type="text" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Solicitante" onClick="window.open('busca_cliente.php','busca_cliente','HEIGHT=350, WIDTH=600, menubar=no, scrollbars=yes, toolbar=yes, resizable=no,top=100,left=400');"   />
    </td>


        <td width="10%" align="left"><strong>Estado:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="act" class="form-control input-sm" >
        <option value="1">ABIERTO</option>
        <option value="2">CERRADO</option>
        <option value="3">DETENIDO</option>
        <option value="4">ESPERA</option>
        <option value="5">RESUELTO</option>
        <option value="6">REABIERTO</option>
         </select></td>
   </tr>

   <tr>
     <td width="10%" align="left"><strong>Nivel:&nbsp;</strong></td>
     <td width="40%" align="left"><select name="niv" class="form-control input-sm" >
     <option value="Nivel 1">Nivel 1</option>
     <option value="Nivel 2">Nivel 2</option>
     <option value="Nivel 3">Nivel 3</option>
      </select></td>

      <td width="10%" align="left"><strong>Vencimiento:&nbsp;</strong></td>
      <td colspan="6" width="40%" align="left">
      <input name="fec_ven" type="datetime-local" class="form-control input-sm" required="required"  />
      </td>
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
</div>

<hr width="100%" />
		<table width="900">
        <tr><td>

        <button name="grabar" type="submit" class="btn btn-primary btn-sm" aria-label="right Align" />
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span> Grabar</button>
        <!-- <a href="transporte_mostrar.php" class="btn" style="color:#060">Ir a listado</a> -->

         </td><tr>
         </table>

       <input name="id_cliente" type="text"  size="2" style="visibility:hidden" required="required"  />
       <input name="id_categoria_detalle" type="text"  size="2" style="visibility:hidden" required="required"  />
       <input name="hora_ini" type="text" value="<?php echo $hora; ?>"  size="2" style="visibility:hidden" required="required"  />
</form>

</div>
</div>



</body>
</html>
