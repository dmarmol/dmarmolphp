<?php
session_start();
setcookie("usrname", "dmarmol", time()+60);
$_SESSION['usrname'] = "dmf";
$_SESSION['authuser'] = 0;
?>
<html>
 <head>
  <title>Ejemplo de session y cookie</title>
 </head>
 <body>


<?php
//Enlace a otra pag
//$myfavmovie = urlencode("Que pasa danielo ");
echo "<a href='ejercicio2.2SESSION .php?favmovie=ese'>";
echo "Probando sesiones"; 
echo "</a>";
?>
 </body>
</html>




