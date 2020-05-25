<?php

/*
internamente mira si viaja la cookie de sesión o el parámetro y
vuelca los datos contenidos en el fichero de sesión en la
variable $_SESSION
*/
session_start();

if (isset($_SESSION['edad'])) {
    echo "La edad es " . $_SESSION['edad'];
} else {
    $_SESSION['edad'] = 27;
}

/*
 * cuando termina el script serializa el contenido de $_SESSION y
 * lo vuelca nuevamente al fichero
 */
