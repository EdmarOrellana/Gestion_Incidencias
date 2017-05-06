<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Cliente</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body id="datatables">

			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>

				<div class="page-title">
					<i class="ion-person-stalker"></i>
               Clientes | <a href="cliente_mostrar.php">Listado de Clientes</a> | <a href="cliente_nuevo.php">Nuevo Cliente</a>
				</div>

			</div>

<a href="cliente_mostrar_excel.php" style="cursor:pointer; color:#060" target="_self" class="btn btn-xs btn-link" aria-label="Left Align" ><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo " Exportar a Excel" ?></a>

			<div class="content-wrapper">

				<table id="datatable-example">
                    <thead>
                        <tr>
                            <th tabindex="0" rowspan="1" colspan="1">Cliente</th>
                            <th tabindex="0" rowspan="1" colspan="1">Área</th>
                            <th tabindex="0" rowspan="1" colspan="1">Cargo</th>
                            <th tabindex="0" rowspan="1" colspan="1">Nro.Documento</th>
                            <th tabindex="0" rowspan="1" colspan="1">Anexo</th>
                            <th tabindex="0" rowspan="1" colspan="1">Email</th>
                            <th tabindex="0" rowspan="1" colspan="1">Usuario</th>
                            <th tabindex="0" rowspan="1" colspan="1">Estado</th>
                            <th tabindex="0" rowspan="1" colspan="1">Editar</th>
                            <th tabindex="0" rowspan="1" colspan="1">Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php foreach ($consulta as $row): ?>
                        <tr>

                  <form action="cliente_editar.php" method="post"  name="cuatro" autocomplete="off">
                        <td  ><?php echo $row['nom_cliente']." ".$row['ape_pat_cliente']." ".$row['ape_mat_cliente']; ?></td>
                        <td  ><?php echo $row['nom_area']; ?></td>
                        <td  ><?php echo $row['nom_anexo']; ?></td>
                        <td  ><?php echo $row['num_doc_cliente']; ?></td>
                        <td  ><?php echo $row['tel_cliente']; ?></td>
                        <td  ><?php echo $row['email_cliente']; ?></td>
                        <td  ><?php echo $row['usu_cliente']; ?></td>
                        <td  ><?php echo $row['act_cliente']; ?></td>
                        <td>
                        <button type="submit" name="editar" value="<?php echo $row['id_cliente']; ?>" class="btn btn-xs btn-link" aria-label="Left Align" >
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar
                        </button>
                        </td>
                  </form>

               <form action="cliente_mostrar.php" method="post" autocomplete="off">
                   <td>
          						<button type="submit" name="eliminar" style="color:#F00" value="<?php echo $row['id_cliente']; ?>" class="btn btn-xs btn-link" aria-label="Left Align" >
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar
                      </button>
                   </td>
               </form>

                        </tr>
					<?php endforeach; ?>
                   	</tbody>
                </table>
			</div>

<?php
include("v_foot.php");
?>
</body>
</html>
