<html>
<head>
<title> Welcome!</title>
</head>
<body>
<div style="text-align: center">
<p> Bienvenido a mi lugar de fechas<br/>
<?php
date_default_timezone_set("Europe/Madrid");

	$mes=date('m');

	if ($mes<=3){
		echo "Winter is now";
	}
	else if ($mes<=6){
		echo "Primavera florida y hermosa";
	}
	else if ($mes<=9){
		echo "Verano que te veo";
	}
	else if ($mes<=12){
		echo "Es invierno";
	}

?>
<br/>
</div>
</body>
</html>



