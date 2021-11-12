<?php

$idMovie=$_GET['movie_id']; //recogemos el valor de movie_id que en URL es 1

echo<<<ENDHTML

<html>
 <head>
  <title>Añade un comentario</title>
 </head>
 <body>

    <form action="http://localhost:8080/UF1-NF4-PAC01-Formularis-master/N4P111formprocess.php?movie_id=$idMovie" method="post">

    <table>
      <tr>
      <td>Comentador</td>
        <td>
          <input type="text" name="comentador"/>
        </td>
      </tr>

    <tr>
      <td>date</td>
        <td>
          <input type="date" name="date"/>
        </td>
      </tr>

      <tr>
       <td>Comentario</td>
        <td>
          <textarea name="comentario" rows="10" cols="30"></textarea>
        </td>
      </tr>

      <tr>
        <td>Valoracíon</td>
        <td><input type="number" name="valoracion" /></td>
      </tr>

      <tr>
      <td>Enviar</td>
      <td>
        <input type="submit" name="submit" value="add"/>
      </td>
      </tr>

    </table>

  </form>
 </body>
</html>
ENDHTML;
?>