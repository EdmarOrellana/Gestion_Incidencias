<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<!-- -------------------------------------------------------------------------------------------------- -->
			<div class="menu-section">
				<h3><font size="-1">Perfil: <?php echo $tipo; ?></font></h3>
				<ul>

    
                    <!-- ----------------------- Incidencias ------------------------------- -->
                    <?php if($tx1==1) { ?>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
                            &nbsp; &nbsp;<span>Incidencias</span>
                            
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">

							<?php if($tipo!="ESPECIALISTA") { ?>
                            <li><a href="incidencia_nuevo.php">Nueva Incidencia</a></li>
                            <?php } ?>
                            
                            <li><a href="incidencia_mostrar.php">Listado de Incidencias</a></li>
							
                            
                            
						</ul>
					</li>
                    <?php  } ?>
                    
                    <!-- ----------------------- Categorias ------------------------------- -->
                    <?php if($tx2==1) { ?>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                            &nbsp; &nbsp;<span>Categorías</span>
                            
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">

							<li><a href="categoria_mostrar.php">Categorías</a></li>
                            <li><a href="categoria_detalle_mostrar.php">Subcategorías</a></li>
							
                            
                            
						</ul>
					</li>
                    <?php  } ?>
  


                <!-- ---------------------------- Clientes ------------------------------- -->
                    <?php if($tx3==1) { ?>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<i class="ion-person-stalker"></i> <span>Clientes</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="cliente_nuevo.php">Nuevo Cliente</a></li>
							<li><a href="cliente_mostrar.php">Listado de Clientes</a></li>
						</ul>
					</li>
                   <?php  } ?>


                    <!-- ----------------------- Usuarios ------------------------------- -->
                    <?php if($tx4==1) { ?>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<i class="ion-person-stalker"></i> <span>Usuarios</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="usuario_nuevo.php">Nuevo Usuario</a></li>
							<li><a href="usuario_mostrar.php">Listado de Usuarios</a></li>
						</ul>
					</li>
                   <?php  } ?> 
                    <!-- ----------------------- Informes ------------------------------- -->
                    <?php if($tx5==1) { ?>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<span class="glyphicon glyphicon-stats"></span>
                            &nbsp; &nbsp; &nbsp;<span>Informes</span>
							<i class="fa fa-chevron-down"></i>
						</a>
					
                    <!--
                    	<ul class="submenu">
              
              			  <li><a href="#" data-toggle="sidebar">Indicador x Incidencia<i class="fa fa-chevron-down"></i></a> 
                            	<ul class="submenu">
                                    <li><a href="informe_indicador1_dia.php">Eficacia de Solución de Incidencias</a></li>
                                    <li><a href="informe_indicador2_dia.php">Continuidad de Servicio</a></li>
								</ul>
                           </li> 
                         
                          <li><a href="#" data-toggle="sidebar">Indicador x Dia<i class="fa fa-chevron-down"></i></a> 
                            	<ul class="submenu">
                                    <li><a href="informe_indicador1.php">Eficacia de Solución de Incidencias</a></li>
                                    <li><a href="informe_indicador2.php">Continuidad de Servicio</a></li>
								</ul>
                           </li>  

						<li><a href="informe_incidencias.php">Incidencias por estado</a></li>
  				
						</ul>
                        
                       --> 
					</li>
                    <?php  } ?>
                      <!-- ----------------------- Mi Perfil ------------------------------- -->
                    <?php if($tx6==1) { ?>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<i class="brankic-smiley"></i> <span>Mi Perfil</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
                             <li><a href="perfil_editar.php">Editar Perfil</a></li>
                             <li><a href="password_editar.php">Cambiar Contraseña</a></li> 
						</ul>
					</li>
                    <?php  } ?>
                     <!-- ----------------------- Mantenimiento ------------------------------- -->
                    <?php if($tx7==1) { ?>
					<li>
						<a href="users.html" data-toggle="sidebar">
							<i class="brankic-clipboard2"></i> <span>Mantenimiento</span>
							<i class="fa fa-chevron-down"></i>
						</a>
						<ul class="submenu">
							<li><a href="tipo_solicitud_mostrar.php">Tipo de Solicitud</a></li>
                            <li><a href="modo_mostrar.php">Modo</a></li>
                            <li><a href="impacto_mostrar.php">Impacto</a></li>
                            <li><a href="prioridad_mostrar.php">Prioridad</a></li>
                            <li><a href="usuario_tipo_mostrar.php">Tipo de Usuario</a></li> 
                            <li><a href="empresa_datos.php">Datos de Empresa</a></li> 
						</ul>
					</li>
                    
                    <?php  } ?>
                       <!-- --------------------------------------------------------------- --> 
				</ul>    
			</div>
            

<!-- -------------------------------------------------------------------------------------------------- -->            

            
            



</body>
</html>