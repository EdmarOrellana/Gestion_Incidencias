<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>TipoSolicitud</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body id="datatables">
<!-- ------------------------------------------------------------------------------------------------------- -->
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					<i class="brankic-clipboard2"></i> 
         Mantenimiento | <a href="tipo_solicitud_mostrar.php">Listado de Tipo Solicitud</a> | <a href="tipo_solicitud_nuevo.php">Nuevo Tipo Solicitud</a>
				</div>

			</div>
            

<!-- ------------------------------------------------------------------------------------------------------- -->
<a href="tipo_solicitud_mostrar_excel.php" style="cursor:pointer; color:#060" target="_self" class="btn btn-xs btn-link" aria-label="Left Align" ><span class="glyphicon glyphicon-download" aria-hidden="true"></span><?php echo " Exportar a Excel" ?></a>
<!-- ------------------------------------------------------------------------------------------------------- -->

			<div class="content-wrapper">
			
				<table class="table">
                    <thead>
                        <tr>
                            <th tabindex="0" rowspan="1" colspan="1">Tipo Solicitud</th>
                            <th tabindex="0" rowspan="1" colspan="1">Estado</th>
                            <th tabindex="0" rowspan="1" colspan="1">Editar</th>
                            <th tabindex="0" rowspan="1" colspan="1">Eliminar</th>

                        </tr>
                    </thead>
          


                    
                    <tbody>
                    
                    <?php foreach ($consulta as $row): ?>
                        <tr>
                      
                      	<form action="tipo_solicitud_editar.php" method="post"  name="cuatro" autocomplete="off">  
                        
                        <td  ><?php echo $row['nom_tipo_solicitud']; ?></td>
                        <td  ><?php echo $row['act_tipo_solicitud']; ?></td>
                        <td>
                        <button type="submit" name="editar" value="<?php echo $row['id_tipo_solicitud']; ?>" class="btn btn-xs btn-link" aria-label="Left Align" >
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar
                        </button> 
                        </td>
                   
                  </form>        
                        
               <form action="tipo_solicitud_mostrar.php" method="post" autocomplete="off">
               
                   <td>
          <button type="submit" name="eliminar" style="color:#F00" value="<?php echo $row['id_tipo_solicitud']; ?>" class="btn btn-xs btn-link" aria-label="Left Align" >
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar
                        </button> 
                   </td>     
                
               </form>           
                        
                        
                        </tr> 
					<?php endforeach; ?>


                   	</tbody>
                </table>
			
			</div>
<!-- ------------------------------------------------------------------------------------------------------- -->            
<?php 
include("v_foot.php");
?>                   

  

</body>
</html>