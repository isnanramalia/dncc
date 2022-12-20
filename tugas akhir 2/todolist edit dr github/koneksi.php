<?php
//  Koneksi ke database menggunakan PDO

function koneksi()
{
    $host      = "localhost";
    $port      = 3306;
    $database  = "isna-todolist";
    $username  = "root";
    $password  = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}

    //TRY CATCH: utk mengecek function berjalan atau tidak
    // try {
    //     $con =  new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    //     echo "sukses";
    // } catch (\PDOException $th) {
    //     $con =  new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    //     echo "gagal";
    // }
