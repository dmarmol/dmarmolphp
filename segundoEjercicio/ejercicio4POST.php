<?php
session_unset();
?>
<html>
 <head>
  <title>Entra muchacho!</title>
 </head>
 <body>
  <form method="post" action="ejercicio4.2POST.php">
   <p>Tu nombre compadre!: 
    <input type="text" name="user"/>
   </p>
   <p>Muestra esa contraseña!: 
    <input type="password" name="pass"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Entra"/>
   </p>
  </form>
 </body>
</html>



