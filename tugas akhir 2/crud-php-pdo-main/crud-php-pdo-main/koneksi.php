<?php
//  Koneksi ke database menggunakan PDO

function koneksi(): PDO
{
    $host      = "localhost";
    $port      = 3306;
    $database  = "todolist-new";
    $username  = "root";
    $password  = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}
