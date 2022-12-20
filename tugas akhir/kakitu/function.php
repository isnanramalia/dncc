<?php

require_once __DIR__ . "/koneksi.php";


function ambilData()
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM tugas_isna";
    $result = $koneksi->query($sql);
    return $result;
}

function ambilSatuData($id)
{
    $koneksi = koneksi();
    $sql = "SELECT * FROM tugas_isna WHERE id=$id";
    $result = $koneksi->query($sql);
    return $result;
}

function tambahData($tugas, $deadline)
{
    $koneksi = koneksi();
    $sql = "INSERT INTO `tugas_isna`(`nama_tugas`, `deadline`) VALUES ('$tugas','$deadline')";
    $result = $koneksi->exec($sql);
    return $result;
}

function editData($id, $tugas, $deadline)
{
    $koneksi = koneksi();
    $sql = "UPDATE `tugas_isna` SET `nama_tugas`='$tugas',`deadline`='$deadline' WHERE id = $id";
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
