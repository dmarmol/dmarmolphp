<?php
include("conexionBD.php");

//Creamos una query para poder mostrar la relación.
echo "ACTORES CON LA RELACION";
echo  '<br>';
$query ='SELECT people_id,people_fullname,movie_leadactor,movie_name 
            FROM people,movie
                WHERE people_id = movie_leadactor   
                    ORDER BY people_id';

$result = mysqli_query($db,$query) or die(mysqli_error($db));


//Creamos un bucle para que me lo printe en columna por cada vuelta, prointa la fila id de persona nombre completo de la persona actor principal y nombre de pelicula
while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
	echo $people_id . '-' . $people_fullname . '-' . $movie_leadactor . '-' . $movie_name . '<br>';
}

echo '<br>';
echo "Directores en relación";
echo  '<br>';

//Bucle para buscar la relación.
$query ='SELECT people_id,people_fullname,movie_leadactor,movie_name
            FROM people,movie
                WHERE people_id = movie_director  
                    ORDER BY people_id';

$result = mysqli_query($db,$query) or die(mysqli_error($db));

//Creamos un bucle para que me vaya pintando en columnas cada fila, como antes.
while ($row = mysqli_fetch_assoc($result)) {
	extract($row);
    
	echo $people_id .'-'. $people_fullname .'-'. $movie_leadactor .'-'. $movie_name .'<br>';
}

?>
