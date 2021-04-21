<?php 
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060
Praktikum Jum'at 10:00-11:00
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

$Id = $_GET['Id'];

if (hapus($Id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!!');
          document.location.href = 'admin.php';
          </script>";
} else {
  echo "<script>
    alert('Data gagal dihapus!!');
    document.location.href = 'admin.php';
    </script>";
}
