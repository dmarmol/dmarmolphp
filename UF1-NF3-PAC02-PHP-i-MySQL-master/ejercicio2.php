<?php
include("conexionBD.php");

// Insertamos datos en tabla movie
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Origen", 1, 2010, 8, 2),
        (5, "Shutter Island", 1, 2010, 8, 6),
        (6, "Insidious", 1, 2010, 11, 6),
        (7, "Atrapame si puedes", 11, 2002, 8, 3)';
mysqli_query($db,$query) or die(mysqli_error($db));

// Insertamos datos en tabla movietype
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9,"Sci Fi"),
        (10, "Drama"),
        (11, "Terror"), 
        (12, "Adventure")';
        
mysqli_query($db,$query) or die(mysqli_error($db));

// Insertamos datos en tabla people
$query  =' INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Tom Cruise", 1, 0),
        (8, "Leonardo Dicaprio", 0, 1),
        (9, "Tom Hankds", 0, 1)';
        
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';

?>
