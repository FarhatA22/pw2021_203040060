<?php

/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060
Praktikum Jum'at 10:00-11:00
*/

?>

<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20060", "#Akun#203040060#");
    mysqli_select_db($conn, "pw20060_tubes_203040060");


    return $conn;
}
// fungsi untuk melakukan query dan memasukannya ke dalam aray
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $Merk = htmlspecialchars($data['Merk']);
    $Nama = htmlspecialchars($data['Nama']);
    $Warna = htmlspecialchars($data['Warna']);
    $Harga = htmlspecialchars($data['Harga']);
    $Jenis = htmlspecialchars($data['Jenis']);
    $Kondisi = htmlspecialchars($data['Kondisi']);
    $Tahun = htmlspecialchars($data['Tahun Pembuatan']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "INSERT INTO `garasi dut`
                            VALUES
                            ('', '$merk', '$Nama', '$Warna', '$Harga', '$Jenis','$Kondisi','$Tahun', '$Gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($Id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM `garasi dut` WHERE Id = $Id");

    return mysqli_affected_rows($conn);
}
