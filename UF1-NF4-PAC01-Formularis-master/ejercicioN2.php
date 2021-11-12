<html>
 <head>
  <title>Say My Name</title>
 </head>
 <body>

<?php
$primerInput = $_POST['name1'];
$segundoInput = $_POST['name2'];
$tercerInput = $_POST['name3'];
$cuartoInput = $_POST['name4'];
$quintoInput = $_POST['name5'];
echo <<< ENDHTML
<select name="nombres">
	<option value="">--- Escoge una opcion ---</option>

		<option value="name1">$primerInput</option>
		<option value="name2">$segundoInput</option>
		<option value="name3">tercerInput</option>
		<option value="name4">cuartoInput</option>
		<option value="name5">quintoInput</option>

</select>
ENDHTML;
?>

  <pre>
<strong>DEBUG:</strong>
<?php
print_r($_POST);

?>
  </pre>
 </body>
</html>