<?php
//Recojo fuente y muestro fuente
	//Por defecto mostrara arial.
$fuente = $_POST['fuente'];
echo "<font face = $fuente> ";

//Recojo el color y muestro color
$color = $_POST['color'];
echo "<font color = $color>";

//Recojo tamaño y muestro tamaño
$tamanyo = $_POST['tamanyo'];
echo "<font size = $tamanyo> ";

//Mostramos mensaje de salida
echo "Siento el retraso de las practicas Jordi";
echo "</br>";
echo ":(";

?>