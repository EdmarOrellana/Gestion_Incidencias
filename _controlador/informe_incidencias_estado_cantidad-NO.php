<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<html>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.arrayToDataTable([ 
	  
	  ['Estado','Cantidad'],
	  

<?php

include("../conexion/conexion.php");


$sql="SELECT *,
COUNT(*) as t
FROM envio
WHERE (fec_man_envio BETWEEN '$fd' AND '$fh')
GROUP BY envio.est_envio";



$res=mysql_query($sql,$con);

while($row=mysql_fetch_array($res))
{ 
			$est_envio=$row['est_envio'];
			if($est_envio=="INGRESO"){$estado="INGRESO";}
			else if($est_envio=="SALIDA"){$estado="SALIDA";}
			else if($est_envio=="REINGRESO"){$estado="REINGRESO";}


$cont=1;
$cont=$cont+1;
if($cont==1){
?>
	
	 ['<?php echo $estado; ?>',<?php echo $row['t']; ?>]
	 
<?php } 
else if($cont>1){ ?>

      ['<?php echo $estado; ?>',<?php echo $row['t']; ?>],


<?php  } }	?>


	  
	  ]);



      var options = {
        title: 'Cantidad de Envíos por Estado  <?php //echo $fd ." - ". $fh; ?>',
        hAxis: {
          title: 'Estado',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Cantidad'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('informe_envios_estado_cantidad'));
		chart.draw(data, options);

    }
	
	</script>


</body>
</html>