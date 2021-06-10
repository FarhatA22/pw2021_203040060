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
    $Tahun = htmlspecialchars($data['Tahun_Pembuatan']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "INSERT INTO `garasi dut`
                            VALUES
                            ('', '$Merk', '$Nama', '$Warna', '$Harga', '$Jenis','$Kondisi','$Tahun', '$Gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($Id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM `garasi dut` WHERE Id = $Id");

    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();
    $Id = ($data['Id']);
    $Merk = htmlspecialchars($data['Merk']);
    $Nama = htmlspecialchars($data['Nama']);
    $Warna = htmlspecialchars($data['Warna']);
    $Harga = htmlspecialchars($data['Harga']);
    $Jenis = htmlspecialchars($data['Jenis']);
    $Kondisi = htmlspecialchars($data['Kondisi']);
    $Tahun = htmlspecialchars($data['Tahun_Pembuatan']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "UPDATE `garasi dut` SET `Merk`='$Merk',`Nama`='$Nama',`Warna`='$Warna',`Harga`='$Harga',`Jenis`='$Jenis',`Kondisi`='$Kondisi',`Tahun Pembuatan`='$Tahun',`Gambar`='$Gambar' WHERE `Id` = $Id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// fungsi cari
function cari($keyword)
{
    $query = "SELECT * FROM `garasi dut`
    WHERE
    `Merk` LIKE '%$keyword%' OR
    `Nama` LIKE '%$keyword%' OR
    `Warna` LIKE '%$keyword%' OR
    `Harga` LIKE '%$keyword%' OR
    `Jenis` LIKE '%$keyword%' OR
    `Kondisi` LIKE '%$keyword%' OR
    `Tahun Pembuatan` LIKE '%$keyword%' 
    ";
    return query($query);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //  cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES(NULL, '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}