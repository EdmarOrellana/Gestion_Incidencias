    <?php
		//INICIAR SESION
		include("../conexion/sesion.php");
		//-------------------------------------------------
		 ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Laser Perú SAC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../complemento/css/bootstrap.min.css" rel="stylesheet">
  <link href="../complemento/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="estilo/css/compiled/theme.css" />
	<link rel="stylesheet" type="text/css" href="estilo/css/vendor/animate.css" />
	<link rel="stylesheet" type="text/css" href="estilo/css/vendor/brankic.css" />
	<link rel="stylesheet" type="text/css" href="estilo/css/vendor/ionicons.min.css" />
	<link rel="stylesheet" type="text/css" href="estilo/css/vendor/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="estilo/css/vendor/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="estilo/css/vendor/morris.css" />
  <link rel="stylesheet" type="text/css" href="estilo/css/vendor/jquery.dataTables.css" />
	<!-- javascript -->
	<script src="estilo/js/bootstrap/jquery.min.js"></script>
	<script src="estilo/js/bootstrap/bootstrap.min.js"></script>
	<script src="estilo/js/vendor/jquery.cookie.js"></script>
	<script src="estilo/js/vendor/moment.min.js"></script>
	<script src="estilo/js/theme.js"></script>
	<script src="estilo/js/vendor/bootstrap-datepicker.js"></script>
	<script src="estilo/js/vendor/raphael-min.js"></script>
	<script src="estilo/js/vendor/morris.min.js"></script>
  <script src="estilo/js/vendor/jquery.dataTables.min.js"></script>

	<script src="estilo/js/vendor/jquery.flot/jquery.flot.js"></script>
	<script src="estilo/js/vendor/jquery.flot/jquery.flot.time.js"></script>
	<script src="estilo/js/vendor/jquery.flot/jquery.flot.tooltip.js"></script>

    	<script type="text/javascript">
        $(function() {
            $('#datatable-example').dataTable({
                "sPaginationType": "full_numbers",
                "iDisplayLength": 20,
    			"aLengthMenu": [[20, 50, 100, -1], [20, 50, 100, "All"]]
            });
        });
    	</script>

    <!-- Script JAVASCRIPT Grande -->
    	 <script type="text/javascript">
		     $(function () {
	        // Range Datepicker
	        $('.input-daterange').datepicker({
	        	autoclose: true,
	        	orientation: 'right top',
	        	endDate: new Date()
	        });

	        // Flot Charts
	        var chart_border_color = "#efefef";
			var chart_color = "#b0b3e3";

			var d = [[utils.get_timestamp(15), 1290], [utils.get_timestamp(14), 1050], [utils.get_timestamp(13), 1100], [utils.get_timestamp(12), 1300], [utils.get_timestamp(11), 1050], [utils.get_timestamp(10), 1521], [utils.get_timestamp(9), 950], [utils.get_timestamp(8), 1130], [utils.get_timestamp(7), 1100], [utils.get_timestamp(6), 1472], [utils.get_timestamp(5), 1410], [utils.get_timestamp(4), 1684], [utils.get_timestamp(3), 1410], [utils.get_timestamp(2), 1322], [utils.get_timestamp(1), 1050], [utils.get_timestamp(0), 1238]];

			var d2 = [[utils.get_timestamp(14), 1500], [utils.get_timestamp(13), 1600], [utils.get_timestamp(12), 1630], [utils.get_timestamp(11), 1310], [utils.get_timestamp(10), 1530], [utils.get_timestamp(9), 2050], [utils.get_timestamp(8), 2310], [utils.get_timestamp(7), 2050], [utils.get_timestamp(6), 2125], [utils.get_timestamp(5), 1400], [utils.get_timestamp(4), 1600], [utils.get_timestamp(3), 1930], [utils.get_timestamp(2), 2000], [utils.get_timestamp(1), 2320]];

			var options = {
				xaxis : {
					mode : "time",
					tickLength : 10
				},
				series : {
					lines : {
						show : true,
						lineWidth : 2,
						fill : true,
						fillColor : {
							colors : [{
								opacity : 0.04
							}, {
								opacity : 0.1
							}]
						}
					},
					shadowSize : 0
				},
				selection : {
					mode : "x"
				},
				grid : {
					hoverable : true,
					clickable : true,
					tickColor : chart_border_color,
					borderWidth : 0,
					borderColor : chart_border_color,
				},
				tooltip : true,
				colors : [chart_color]
			};

			var plot = $.plot($("#visitors-chart"), [d], $.extend(options, {
				tooltipOpts : {
					content : "Visitors on <b>%x</b>: <span class='value'>%y</span>",
					defaultTheme : false,
					shifts: {
						x: -75,
						y: -70
					}
				}
			}));

			var plot2 = $.plot($("#payments-chart"), [d2], $.extend(options, {
				tooltipOpts : {
					content : "Payments on <b>%x</b>: <span class='value'>$%y</span>",
					defaultTheme : false,
					shifts: {
						x: -75,
						y: -70
					}
				}
			}));

			var plot3 = $.plot($("#signups-chart"), [d], $.extend(options, {
				tooltipOpts : {
					content : "New signups on <b>%x</b>: <b class='value'>%y</b>",
					defaultTheme : false,
					shifts: {
						x: -78,
						y: -70
					}
				}
			}));

			// Bar chart (visitors)
			var dBar = [[utils.get_timestamp(30), 930], [utils.get_timestamp(29), 1200], [utils.get_timestamp(28), 980], [utils.get_timestamp(27), 950], [utils.get_timestamp(26), 1000], [utils.get_timestamp(25), 1050], [utils.get_timestamp(24), 1150], [utils.get_timestamp(23), 2300], [utils.get_timestamp(22), 1200], [utils.get_timestamp(21), 1300], [utils.get_timestamp(20), 1700], [utils.get_timestamp(19), 1450], [utils.get_timestamp(18), 1500], [utils.get_timestamp(17), 546], [utils.get_timestamp(16), 614], [utils.get_timestamp(15), 954], [utils.get_timestamp(14), 1700], [utils.get_timestamp(13), 1800], [utils.get_timestamp(12), 1900], [utils.get_timestamp(11), 2000], [utils.get_timestamp(10), 2100], [utils.get_timestamp(9), 2200], [utils.get_timestamp(8), 2300], [utils.get_timestamp(7), 2400], [utils.get_timestamp(6), 2550], [utils.get_timestamp(5), 2600], [utils.get_timestamp(4), 1800], [utils.get_timestamp(3), 2200], [utils.get_timestamp(2), 2350], [utils.get_timestamp(1), 2800], [utils.get_timestamp(0), 3245]];

			var options2 = {
				yaxes: {
			        min: 0
			    },
				xaxis : {
					mode : "time",
					timeformat: "%a %d"
				},
				series : {
					bars : {
						show : true,
						lineWidth: 0,
						barWidth: 47000000, // for bar charts, this is width in milliseconds (86400000 would be the width of a day)
						align: 'center',
						fillColor : {
							colors : [{ opacity : 0.7 }, { opacity : 0.7 }]
						}
					}
				},
				grid : {
					show: true,
					hoverable : true,
					clickable : true,
					tickColor : chart_border_color,
					borderWidth : 0,
					borderColor : chart_border_color,
				},
				tooltip : true,
				tooltipOpts : {
					content : "Visits on <b>%x</b>: <span class='value'>%y</span>",
					defaultTheme : false,
					shifts: {
						x: -65,
						y: -70
					}
				},
				colors : ["#4fa3d5"]
			};

			var plot4 = $.plot($("#bar-chart"), [dBar], options2);
		});
	    </script>
   <!-- Script JAVASCRIPT Grande -->
</head>

<body id="datatables">

		<div id="wrapper">
		<div id="sidebar-default" class="main-sidebar">

 <!--Usuario-->
<?php
include("menu_usuario.php");
 ?>
 <!--Menu Principal-->
<?php
include("menu_principal.php");
 ?>
 <!--Sub Menucitos-->
<?php
include("menu_submenu.php");
 ?>
<!--Colores de Menu-->
<?php
include("menu_colores.php");
 ?>
<!--Contenido-->
<?php
//include("menu_contenido.php");
 ?>
  <!--Fin Contenido-->
</body>
</html>
