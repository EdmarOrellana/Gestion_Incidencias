<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cambiar Estado Incidencia</title>

<!---->
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
</script>
</head>

<body>
<?php
foreach ($datos as $datos):

$id_incidencia=$datos['id_incidencia'];
$id_cliente=$datos['id_cliente'];
$id_asignado=$datos['id_asignado'];
$id_tipo_solicitud=$datos['id_tipo_solicitud'];
$id_modo=$datos['id_modo'];
$id_impacto=$datos['id_impacto'];
$id_prioridad=$datos['id_prioridad'];
$id_categoria_detalle=$datos['id_categoria_detalle'];
$niv_incidencia=$datos['niv_incidencia'];
$usu_asignado=$datos['usu_asignado'];
$cli=$datos['nom_cliente']." ".$datos['ape_pat_cliente']." ".$datos['ape_mat_cliente'];
$nom_categoria=$datos['nom_categoria'];
$nom_categoria_detalle=$datos['nom_categoria_detalle'];
$asu=$datos['asu_incidencia'];
$des=$datos['des_incidencia'];
$hora_ini=$datos['time_ini_incidencia'];
$act=$datos['act_incidencia'];
endforeach;
?>
<!-- -->
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>

				<div class="page-title">
					<span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
    Incidencias | <a href="incidencia_mostrar.php">Listado de Incidencias</a> | <a href="incidencia_nuevo.php">Nueva Incidencia</a>
				</div>
			</div>
  <!-- -->
           <div class="panel panel-success active">
 <div class="panel-heading" >Cambio de Estado - Incidencia Nro.<?php echo $id_incidencia;?></div>

   <div class="modal-body">

 <form action="incidencia_cambiar.php" method="POST" name="incidencia" autocomplete="off" enctype="multipart/form-data">
     <div class="form-group">

<!-- <p><strong>Ingrese Datos:</strong></p> -->
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

  <tr>
  		  <?php
          if($act=="1") {$a1="selected";} else {$a1="";}
          if($act=="2") {$a2="selected";} else {$a2="";}
          if($act=="3") {$a3="selected";} else {$a3="";}
          if($act=="4") {$a4="selected";} else {$a4="";}
          if($act=="5") {$a5="selected";} else {$a5="";}
          if($act=="6") {$a6="selected";} else {$a6="";}
          if($act=="7") {$a6="selected";} else {$a6="";}
          ?>

            <td width="10%" align="left"><strong>Estado:&nbsp;</strong></td>
            <td width="40%" align="left"><select name="act" class="form-control input-sm" >
            <option value="1" <?php echo $a1; ?>>Abierto</option>
            <option value="2" <?php echo $a2; ?>>Cerrado</option>
            <option value="3" <?php echo $a3; ?>>Detenido</option>
            <option value="4" <?php echo $a4; ?>>Espera</option>
            <option value="5" <?php echo $a5; ?>>Resuelto</option>
            <option value="6" <?php echo $a6; ?>>Reabierto</option>
            <option value="7" <?php echo $a6; ?>>Desaprobar Incidencia</option>
             </select></td>
  </tr>

<tr>
     <td width="10%" align="left"><strong>Detalle de Cambio:&nbsp;</strong></td>
    <td width="40%" align="left">
    <textarea name="det" rows="4" class="form-control input-sm" placeholder="Detalle del Cambio" required="required"></textarea>
    </td>
</tr>

<tr>
<td colspan="6"><hr /></td>
</tr>

   <tr>
    <td width="10%" align="left"><strong>Solicitante:&nbsp;</strong></td>
    <td width="40%" align="left">
    <input name="cli" type="text" value="<?php echo $cli; ?>"  class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Solicitante" disabled="disabled"  />
    </td>

    <?php
	if($niv_incidencia==0){$e1="selected";}else{$e1="";}
	if($niv_incidencia==1){$e1="selected";}else{$e1="";}
	if($niv_incidencia==2){$e2="selected";}else{$e2="";}
	if($niv_incidencia==3){$e3="selected";}else{$e3="";}

	?>
       <td width="10%" align="left"><strong>Nivel:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="niv" class="form-control input-sm" disabled="disabled">
        <option value="1" <?php echo $e1; ?>>1</option>
        <option value="2" <?php echo $e2; ?>>2</option>
        <option value="3" <?php echo $e3; ?>>3</option>
        </select></td>
   </tr>

<tr>

        <td width="10%" align="left"><strong>Tipo Solicitud:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="tip" class="form-control input-sm" disabled="disabled">
        <?php foreach ($tipo_solicitud as $row):
		if($id_tipo_solicitud==$row['id_tipo_solicitud']) {$m="selected";} else {$m="";}
		?>
        <option value="<?php echo $row['id_tipo_solicitud']; ?>" <?php echo $m; ?>><?php echo $row['nom_tipo_solicitud']; ?></option>
        <?php endforeach; ?>
         </select></td>

        <td width="10%" align="left"><strong>Modo:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="mod" class="form-control input-sm" disabled="disabled">
        <?php foreach ($modo as $row):
		if($id_modo==$row['id_modo']) {$m="selected";} else {$m="";}
		?>
        <option value="<?php echo $row['id_modo']; ?>" <?php echo $m; ?>><?php echo $row['nom_modo']; ?></option>
        <?php endforeach; ?>
         </select></td>
  </tr>

   <tr>
        <td width="10%" align="left"><strong>Impacto:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="imp" class="form-control input-sm" disabled="disabled">
        <?php foreach ($impacto as $row):
		if($id_impacto==$row['id_impacto']) {$m="selected";} else {$m="";}
		 ?>
        <option value="<?php echo $row['id_impacto']; ?>" <?php echo $m; ?>><?php echo $row['nom_impacto']; ?></option>
        <?php endforeach; ?>
         </select></td>

        <td width="10%" align="left"><strong>Prioridad:&nbsp;</strong></td>
        <td width="40%" align="left"><select name="pri" class="form-control input-sm" disabled="disabled">
        <?php foreach ($prioridad as $row):
		if($id_prioridad==$row['id_prioridad']) {$m="selected";} else {$m="";}
		?>
        <option value="<?php echo $row['id_prioridad']; ?>" <?php echo $m; ?>><?php echo $row['nom_prioridad']; ?></option>
        <?php endforeach; ?>
         </select></td>

   </tr>

   <tr>
        <td width="10%" align="left"><strong>Categoría:&nbsp;</strong></td>
        <td width="40%" align="left">
        <input name="cat" type="text" value="<?php echo $nom_categoria; ?>" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Categoría" disabled="disabled"  />
        </td>
        <td width="10%" align="left"><strong>Subcategoría:&nbsp;</strong></td>
        <td width="40%" align="left" >
        <input name="cat_det" type="text" value="<?php echo $nom_categoria_detalle; ?>" class="form-control input-sm alert-warning" style="cursor:pointer" placeholder="Subcategoría" disabled="disabled"   />
        </td>
  </tr>

<tr>
<td colspan="6"><hr /></td>
</tr>

  <tr>
        <td width="10%" align="left"><strong>Asunto:&nbsp;</strong></td>
        <td colspan="6" width="40%" align="left">
        <input name="asu" type="text" value="<?php echo $asu; ?>" class="form-control input-sm" placeholder="Resumen" required="required" disabled="disabled"  />
        </td>
  </tr>

  <tr>
        <td width="10%" align="left"><strong>Descripción:&nbsp;</strong></td>
        <td colspan="6" width="40%" align="left">
        <textarea name="des" rows="4" class="form-control input-sm" placeholder="Descripción" required="required" disabled="disabled"><?php echo $des; ?></textarea>
        </td>
  </tr>

</table>
<!--
<hr />
<p><strong>Historial de Cambios:</strong></p>
<table border="0" WIDTH=1000 class="table-responsive table-hover table-condensed " >
<tr>
<th>Fecha</th>
<th>Hora</th>
<th>Acción</th>
<th>Detalle</th>
<th>Descripción</th>
<th>Realizado por</th>
</tr>

 <?php
$c=0;
foreach ($datos_cambios as $row):
$c++;
$id_incidencia_cambio=$row['id_incidencia_cambio'];
$usuario=$row['usu_usuario'];
$tip=$row['tip_incidencia_cambio'];
$desc=$row['desc_incidencia_cambio'];
$fec=$row['fec_incidencia_cambio'];
$hor=$row['time_fin_incidencia_cambio'];

if($tip=="CAMBIO DE ESTADO")
{

$det=$row['det_incidencia_cambio'];

if($det==1){$estado="PENDIENTE";}
else if($det==2){$estado="EN PROCESO";}
else if($det==3){$estado="RESUELTO";}
else if($det==4){$estado="CERRADO";}
else if($det==5){$estado="POR CERRAR";}
else if($det==6){$estado="PROGRAMADA";}

$accion=$estado;
}

else if($tip=="TRANSFERENCIA")
{
	$usua=$row['usu_asignado'];
	$accion=$usua;
}
?>

<tr>
<td><?php echo $fec; ?></td>
<td><?php echo $hor; ?></td>
<td><?php echo $tip; ?></td>
<td><?php echo $accion; ?></td>
<td><?php echo $desc; ?></td>
<td><?php echo $usuario; ?></td>
</tr>

<?php
endforeach;
?>

</table>
-->
  </div>

<hr width="100%" />
		<table width="900">
        <tr><td>

        <button name="grabar" type="submit" class="btn btn-success btn-sm" aria-label="right Align" />
        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Cambiar</button>
  <!-- <a href="transporte_mostrar.php" class="btn" style="color:#060">Ir a listado</a> -->

         </td><tr>
         </table>
<!-- Codigos ocultos -->
	   <input type="text" name="id_incidencia" size="2"  value="<?php echo $id_incidencia; ?>" style="visibility:hidden"/>
       <input name="id_cliente" type="text"  size="2" value="<?php echo $id_cliente; ?>" style="visibility:hidden" required="required"  />
       <input name="id_categoria_detalle" type="text" value="<?php echo $id_categoria_detalle; ?>"  size="2" style="visibility:hidden" required="required"  />
       <input name="hora_ini" type="text" value="<?php echo $hora_ini; ?>"  size="2" style="visibility:hidden" required="required"  />
</form>

</div>
</div>

</body>
</html>
