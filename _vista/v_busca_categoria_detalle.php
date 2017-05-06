<html>
<body>
<!-- -------------------------------------------------------------- -->
<form action="busca_categoria_detalle.php" method="post" name="cuatro">
<div class="table-responsive">
<table border="0" class="table table-bordered table-hover table-condensed " >
<tr>
<th bgcolor="#B7B7FF" style="text-align: center">Subcategoría</th>
<th bgcolor="#B7B7FF" style="text-align: center">Categoría</th>
<th bgcolor="#B7B7FF" style="text-align: center">Seleccionar</th>
</tr>

<?php foreach ($consulta as $row): ?>
<tr>
<td align="left"><?php echo $row['nom_categoria_detalle']; ?></td>
<td align="center"><?php echo $row['nom_categoria']; ?></td>
<td><center><button type="submit" name="ok" value="<?php echo $row['id_categoria_detalle']; ?>" class="btn btn-xs btn-link" aria-label="Left Align"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Ok</button></center></td>
</tr>

<?php endforeach; ?>

</table>
</div>
</form>
<!-- -------------------------------------------------------------- -->
</body>
</html>