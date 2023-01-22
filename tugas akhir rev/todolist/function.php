<?php

require_once __DIR__ . "/koneksi.php";


function ambilData()
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM `tugas_isna`";
    $result = $koneksi->query($sql);

    return $result;

    // foreach ($result as $data) {
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    // }
}

function ambilSatuData($id)
{
    $koneksi = koneksi();
    $sql = "DELETE FROM `tugas_isna` WHERE id = $id";
    $result = $koneksi->exec($sql);

    return $result;
}

function tambahData($tugas, $deadline)
{
    $koneksi = koneksi();
    $sql = "INSERT INTO `tugas_isna`(`id`, `nama_tugas`, `deadline`) VALUES ('$tugas','$deadline')";
    $result = $koneksi->exec($sql);

    return $result;
}

function hapusData($id)
{
    $koneksi = koneksi();
    $sql = "DELETE FROM `tugas_isna` WHERE id = $id";
    $result = $koneksi->exec($sql);

    return $result;
}

function editData($id)
{
    $koneksi = koneksi();
    $sql = "DELETE FROM `tugas_isna` WHERE id = $id";
    $result = $koneksi->exec($sql);

    return $result;
}
