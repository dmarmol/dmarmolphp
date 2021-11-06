<?php
include("conexionBD.php");

//conectar table movie con people
$query = 'ALTER TABLE movie
ADD FOREIGN KEY (movie_leadactor) REFERENCES people(people_id)';

mysqli_query($db,$query) or die(mysqli_error($db));

Echo "Relacion creada correctamente";
?>