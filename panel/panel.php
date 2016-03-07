<html>
	<head>
		<title>Inicio</title>
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/index.css">
		<?php include_once("imports.php"); ?>
	</head>
	<body>
		<?php include_once("header.php"); ?>
    	<div id="piechart" style="width: 900px; height: 500px; margin-left: 20em;"></div> <!-- aqui se manda llamar la grafica-->
	
	
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	    <script type="text/javascript">
	      google.charts.load('current', {'packages':['corechart']});
	      google.charts.setOnLoadCallback(drawChart);
	      function drawChart() {
	
	        var data = google.visualization.arrayToDataTable([
	          ['Curso', 'Inscritos'],
	          ['Árboles',     11],
	          ['Métodos de ordenamiento',      2],
	          ['Sintaxis básica de PHP',  2],
	          ['Algoritmos de búqueda', 2],
	          ['Sintaxis básica de Java',    7]
	        ]);
	
	        var options = {
	          title: 'Los cursos más populares'
	        };
	
	        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	
	        chart.draw(data, options);
	      }
	    </script>
	</body>
</html>