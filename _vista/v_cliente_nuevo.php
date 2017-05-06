<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Cliente</title>

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
</script>
</head>

<body>
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>

				<div class="page-title">
					<i class="ion-person-stalker"></i>
               Clientes | <a href="cliente_mostrar.php">Listado de Clientes</a> | <a href="cliente_nuevo.php">Nuevo Cliente</a>
				</div>
			</div>

           <div class="panel panel-primary">
 <div class="panel-heading">Nuevo Cliente</div>

   <div class="modal-body">

 <form action="cliente_nuevo.php" method="POST" name="cliente_nuevo" autocomplete="off">
     <div class="form-group">

<!-- <p><strong>Ingrese Datos:</strong></p> -->
<table border="0" WIDTH=800 class="table-responsive table-hover table-condensed " >

 <tr>
    <td width="20%" align="left"><strong>Nombre(s):&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="nom" type="text" class="form-control input-sm"   placeholder="Nombre(s)" required="required" maxlength="50"  /></td>
  </tr>

  <tr>
    <td width="20%" align="left"><strong>Apellido Paterno:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="ap" type="text" class="form-control input-sm"   placeholder="Apellido Paterno" required="required" maxlength="50"   /></td>
  </tr>

  <tr>
    <td width="20%" align="left"><strong>Apellido Materno:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="am" type="text" class="form-control input-sm"   placeholder="Apellido Materno"  required="required" maxlength="50" /></td>
  </tr>

  <tr>
    <td width="20%" align="left"><strong>Área:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="are" class="form-control input-sm">
    <?php foreach($area as $row): ?>
    <option value="<?php echo $row['id_area']; ?>"><?php echo $row['nom_area']; ?></option>
    <?php endforeach; ?>
    </select>
    </td>
  </tr>

  <tr>
    <td width="20%" align="left"><strong>Cargo:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="anex" class="form-control input-sm" >

    <?php foreach($anexo as $row): ?>
    <option value="<?php echo $row['id_anexo']; ?>"><?php echo $row['nom_anexo']; ?></option>
    <?php endforeach; ?>

    </select></td>
  </tr>

  <tr>
    <td width="20%" align="left"><strong>Tipo de documento:&nbsp;</strong></td>
    <td width="80%" align="left"><select name="doc" class="form-control input-sm" onchange="d1(this)">

    <?php foreach($tipo_documento as $row): ?>
    <option value="<?php echo $row['id_tipo_documento']; ?>"><?php echo $row['nom_tipo_documento']; ?></option>
    <?php endforeach; ?>

    </select></td>
  </tr>

  <tr>
    <td width="20%" align="left"><strong>Nº Documento:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="numdoc" type="text" class="form-control input-sm"   placeholder="Nº Documento"  maxlength="8" onKeyPress="return justNumbers(event);" required="required"  id="doc"  /></td>
  </tr>

  <tr>
    <td width="20%" align="left"><strong>Anexo:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="tel" type="text" class="form-control input-sm"   placeholder="Anexo" maxlength="7" required="required" onKeyPress="return justNumbers(event);"   /></td>
  </tr>

  <tr>
    <td width="20%" align="left"><strong>Email:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="email" type="email" class="form-control input-sm"   placeholder="Email" required="required" maxlength="50"   /></td>
  </tr>

   <tr>
    <td width="20%" align="left"><strong>Usuario:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="usu" type="text" class="form-control input-sm"   placeholder="Usuario" required="required" maxlength="50"  /></td>
  </tr>

   <tr>
    <td width="20%" align="left"><strong>Contraseña:&nbsp;</strong></td>
    <td width="80%" align="left"> <input name="pass" type="password" class="form-control input-sm"   placeholder="Contraseña" required="required" maxlength="50"  /></td>
  </tr>
</table>

</div>

<hr width="100%"/>
		<table width="900">
        <tr>
          <td>
        <button name="grabar" type="submit" class="btn btn-primary btn-sm" aria-label="right Align" />
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span> Grabar</button>
        <!-- <a href="transporte_mostrar.php" class="btn" style="color:#060">Ir a listado</a> -->
         </td>
       </tr>
    </table>
</hr>
</form>
</div>
</div>
</body>
</html>
