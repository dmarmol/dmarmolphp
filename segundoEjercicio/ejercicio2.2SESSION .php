<?php
session_start();
echo "</br>";
echo "Primera session ";
echo $_SESSION["usrname"]."</br>";
echo "La cookie es ";
echo $_COOKIE["usrname"];
echo "</br>";
echo "</br>";
//$myfavmovie = urlencode("Que pasa danielo ");
//echo $myfavmovie;
?>

<?php
echo "</br>";
echo "Segunda session ";
echo $_SESSION["usrname"]."</br>";
echo "La cookie es ";
echo $_COOKIE["usrname"];
echo "</br>";
echo "</br>";
?>

<?php
echo "</br>";
echo "Tercera session ";
echo $_SESSION["usrname"]."</br>";
echo "La cookie es ";
echo $_COOKIE["usrname"];
echo "</br>";
echo "</br>";
?>


