<html>
<head>
<title> Welcome!</title>
</head>
<body>
<div style="text-align: center">
<p> Bienvenido a mi lugar de fechas<br/>
<?php
date_default_timezone_set("Europe/Madrid");

	echo "Yesterday it was =  ";
	echo $dia_anterior = date('d', strtotime('-1 day'));

	echo "</br>";
	echo "The previous month is ";
	$mes_anterior = date('m', strtotime('-1 month'));
	echo $mes_anterior; 

	echo "</br>";
	echo "There are";
	//Días que quedan del mes
	echo $dia_anterior = date('d', strtotime('-1 day'));
	echo " days left in this month ";

	$diasAhora= date("d");
	$diasMes=date("t");
	$diferenciaDias=$diasMes - $diasAhora;

	echo "</br>";
	echo " There are ";
	//Días que quedan para acabar el mes
	$mes_quedan = date('m', strtotime('+2 month'));
	echo $mes_quedan; 
	echo " months left in the current year ";
	echo date("Y");
?>
<br/>
</div>
</body>
</html>



