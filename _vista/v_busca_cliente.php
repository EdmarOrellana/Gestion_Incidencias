<html>
<body>
<!-- -------------------------------------------------------------- -->
<form action="busca_cliente.php" method="post" name="cuatro">
<div class="table-responsive">
<table border="0" class="table table-bordered table-hover table-condensed " >
<tr>
<th bgcolor="#B7B7FF" style="text-align: center">Cliente</th>
<th bgcolor="#B7B7FF" style="text-align: center">Seleccionar</th>
</tr>

<?php foreach ($consulta as $row): ?>
<tr>
<td align="left"><?php echo $row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente']; ?></td>
<td><center><button type="submit" name="ok" value="<?php echo $row['id_cliente']; ?>" class="btn btn-xs btn-link" aria-label="Left Align"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Ok</button></center></td>
</tr>

<?php endforeach; ?>

</table>
</div>
</form>
<!-- -------------------------------------------------------------- -->
</body>
</html>