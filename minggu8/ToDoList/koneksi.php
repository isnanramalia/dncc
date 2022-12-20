<?php

//  Koneksi ke database menggunakan PDO

function koneksi()
{
    $host      = "localhost";
    $port      = 3306;
    $database  = "todolist";
    $username  = "root";
    $password  = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

    // try {
    //     $con =  new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    //     echo "sukses";
    // } catch (\PDOException $th) {
    //     $con =  new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    //     echo "gagal";
    // }
}

koneksi();
