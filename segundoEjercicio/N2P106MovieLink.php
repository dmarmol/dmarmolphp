<?php
session_start();
$_SESSION['username'] = "Joel12345";
$_SESSION['authuser'] = 1;
?>
<html>
 <head>
  <title>Find my Favorite Movie!</title>
 </head>
 <body>
<?php
$myfavmovie = urlencode("Variable myfavmovie06 ");
echo "<a href='N2P107MovieSite.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favorite movie!"; 
echo "</a>";
?>
 </body>
</html>




