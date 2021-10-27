<?php
// Obntener el valor de $_GET['usuario'] y devolver 'nadie'
// si no existe.
$nombre_usuario = $_GET['usuario'] ?? 'Patillada, no existe el user';
// Esto equivale a:
$nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'Patillada';

// La fusión se puede encadenar: esto devolverá el primer
// valor definido de $_GET['usuario'], $_POST['usuario'],
// y 'nadie'.
$nombre_usuario = $_GET['usuario'] ?? $_POST['usuario'] ?? 'Patillada.com, entra en la ultima condicion.';

echo $nombre_usuario;
?>
