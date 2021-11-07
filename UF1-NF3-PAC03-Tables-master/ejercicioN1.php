<?php

//Conexion BD
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));




//Hacemos insercciónes de dastos en la tabla reviews
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 

    (4, "2021-01-24", "Leonardo Dicaprio.", "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor N. del T. persona que se dedica a la imprenta", 1),
    (4, "2021-01-24", "Leonardo Dicaprio.", "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor N. del T. persona que se dedica a la imprenta", 5),
    (4, "2021-01-24", "Leonardo Dicaprio.", "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor N. del T. persona que se dedica a la imprenta", 3),
    (5, "2021-01-24", "Leonardo Dicaprio.", "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor N. del T. persona que se dedica a la imprenta", 3),
    (5, "2021-01-24", "Leonardo Dicaprio.", "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor N. del T. persona que se dedica a la imprenta", 3),
    (1, "2021-01-24", "Leonardo Dicaprio.", "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor N. del T. persona que se dedica a la imprenta", 2),

    (1, "2021-01-24", "Leonardo Dicaprio.", "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor N. del T. persona que se dedica a la imprenta", 1) 
ENDSQL;
//echo $query;
mysqli_query($db,$query) or die(mysqli_error($db));


echo 'Introducción correcta';
?>