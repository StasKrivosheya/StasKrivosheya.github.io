<?php
function databaseConnect() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'lab6';

    $link = mysqli_connect($host, $user, $password, $database);

    if (!$link) {
        return null;
    }

    return $link;
}
