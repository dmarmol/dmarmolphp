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


$guardar = $_POST['guardar']; //Recogemos el checkbox con Post

if($guardar == true){
    /*Si he clicado el boton de guardar */
echo "<font face = $fuente> ";
echo "<font color = $color>";
echo "<font size = $tamanyo> ";


//Mostramos mensaje de salida
echo "Siento el retraso de las practicas Jordi";
echo "</br>";
echo ":(";
}
else{
    
  echo "no has guardado"; //Si no marcas el checkbox, muestrsa mensje
}



?>