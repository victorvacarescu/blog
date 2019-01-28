<?php

function conectareBD(){
    $server   = 'localhost';
    $username = 'menutro_victor';
    $password = 'victorie00';
    $database = 'menutro_blog';

    $db = mysqli_connect($server, $username, $password, $database);

    if (mysqli_connect_errno()){
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    }

    return $db;
}

?>