<html>
<title>Porcentaje de Incidencias Resueltas en Nivel 1</title>
<body>
       <?php
	   	require_once('../_modelo/m_indicador.php');
		$fecha_actual = FechaActual();
		$fecha_dia = FechaActualDiaUno();
	   	//--------------------------------------------------------------------
	    if(isset($_REQUEST['buscar']))
	    {
		$fd=$_POST['fd'];
		$fh=$_POST['fh'];

		}
		else
		{
		$fd=$fecha_dia;
		$fh=$fecha_actual;
		//$fd="2016-11-07";
		//$fh="2016-11-11";
		}
		  //--------------------------------------------------------------------
		$consulta = Dias($fd,$fh);
		//Menu de Opciones
		include("menu.php");
		//--------------------------------------------------------------------
		?>

<!---->
<div id="content"> <!-- Inicio del Contenido (Menu) -->
    <form action="informe_indicador1.php" method="post">
		<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>

				<div class="page-title">
					<span class="glyphicon glyphicon-stats"></span>
                 Porcentaje de Incidencias Resueltas en Nivel 1 |

                 Desde:  <input type="date" name="fd" value="<?php echo $fd; ?>" class="input-sm" >
                 Hasta:  <input type="date" name="fh" value="<?php echo $fh; ?>" class="input-sm" >

 <button name="buscar" type="submit" class="btn btn-primary btn-sm" aria-label="right Align" /><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
              <!-- Contratos | <a href="contrato_mostrar.php">Listado de Contratos</a> | <a href="contrato_nuevo.php">Nuevo Contrato</a> -->
				</div>
			</div>
      <!--GENERAL-->
   <table class="table table-responsive">
            <tr>
            			<th >Indicador</th><td colspan="3">Porcentaje de Incidencias Resueltas en Nivel 1</td>
            </tr>
             <tr class="warning">
            			<th >Fórmula</th><td colspan="3"><strong>PIRL = ( IRL / TI ) * 100</strong></td>
            </tr>
             <tr>
						<th >IRL</th><td>Incidencias resueltas en Nivel 1</td>
            			<th >TI</th><td>Total de incidencias.</td>
            </tr>
 </table>
 <br>
     <!--DATOS-->
      <table class="table table-responsive">
            <tr class="success">
                        	<th >N°</th>
                            <th >Fecha</th>
                            <th >IRL</th>
                            <th >TI</th>
                            <th >PIRL</th>
            </tr>

                    <?php
						$c=0;
						foreach ($consulta as $row):
						$c++;

							$fecha=$row['fecha'];
							//$nombre_dia = DiaTexto($fecha);
							$irl = IncidenciasResueltasNivel1($fecha);
							$ti = TotalIncidencias($fecha);

							if($ti==0){$pirl=0;} else {$pirl = ($irl/$ti)*100;}

					 ?>
                        <tr>
                        <td  ><?php echo $c; ?></td>
                        <td  ><?php echo $fecha; ?></td>
                        <td  ><?php echo $irl; ?></td>
                        <td  ><?php echo $ti; ?></td>
                        <td  ><?php echo $pirl."%"; ?></td>
					 <!--

                        <?php if($eficacia == number_format($eficacia,0)){ ?>
                        <td class="warning"  ><strong><?php echo number_format($eficacia,0)." %"; ?></strong></td>
                        <?php } else { ?>
                         <td class="warning"  ><strong><?php echo number_format($eficacia,2)." %"; ?></strong></td>
                        <?php } ?>
					-->
                        </tr>
            <?php endforeach;  ?>
      </table>
    </form>
</div> <!-- Fin del Div  (Menu) -->
</body>
</html>
