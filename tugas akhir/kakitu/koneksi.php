<?php

function koneksi(): PDO
{
    $host      = "localhost";
    $port      = 3306;
    $database  = "isna-todolist"; //nama db kita sendiri
    $username  = "root";
    $password  = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
