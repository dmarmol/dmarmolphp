<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

echo $_POST['date']. " </br> " . $_POST['comentador']." </br> " .$_POST['submit']." </br> ".$_POST['valoracion']." </br> ";


$fecha = date("Y-m-d");
//$fecha = $_POST['date'];
$comentador = $_POST['comentador'];
$comentario = $_POST['comentario'];
$valoracion = $_POST['valoracion'];

$idMovie= $_GET['movie_id'];

$query = <<<ENDSQL

INSERT INTO reviews
	(review_movie_id, review_date, reviewer_name, review_comment, review_rating) 
VALUES
	("$idMovie","$fecha","$comentador","$comentario","$valoracion")

ENDSQL;
mysqli_query($db,$query) or die(mysqli_error($db));

echo "Valoración correctamente introducida";


?>