<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
?>