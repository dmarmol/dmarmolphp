<html>
 <head>
  <title>PrimeroDeParbulitos</title>
 </head>
 <body>
<?php
date_default_timezone_set('Europe/Madrid');
$meses = date('n');
if ($meses ==  1) { echo '31'; }
if ($meses ==  2) { echo '28 (Visiesto)'; }
if ($meses ==  3) { echo '31'; }
if ($meses ==  4) { echo '30'; }
if ($meses ==  5) { echo '31'; }
if ($meses ==  6) { echo '30'; }
if ($meses ==  7) { echo '31'; }
if ($meses ==  8) { echo '31'; }
if ($meses ==  9) { echo '30'; }
if ($meses == 10) { echo '31-Es el mes en el que estamos. Octubre.'; }
if ($meses == 11) { echo '30'; }
if ($meses == 12) { echo '31'; }
?>
 </body>
</html>


