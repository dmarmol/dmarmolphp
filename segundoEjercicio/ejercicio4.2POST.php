<?php
session_start(); //Inicia session_start
//Crea sesiones
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//Condicion si la sesion con dicho usuario y dicha contraseña es igual a dmarmol y 123, entra.
if (($_SESSION['username'] == 'dmarmol') and
    ($_SESSION['userpass'] == '123')) {
    $_SESSION['authuser'] = 1;
} else { //Sino, muestra mensaje de no entras y muestra enlace de retorno.
    echo 'No entras y punto.!';
    echo "<a href='ejercicio4POST.php'>";
    echo "Vuelve para loguearte"; 
    echo "</a>";
    exit();     
}
?>
<html>
 <head>
  <title>LoginPost!</title>
 </head>
 <body>
<?php
//Si entras, haz lo siguiente.
$myfavmovie = urlencode("Este String pertenece a p10 MovieLink ");
echo "<a href='ejercicio4POST.php?$myfavmovie'>";
echo "Vuelve para loguearte"; 
echo "</a>";
?>
 </body>
</html>



