<?php
/*
Farhat Abdurachman Aldjaidi
203040060
https://github.com/FarhatA22/pw2021_203040060.git
Pertemuan 12 - 7 mei  2021
Membahas Tentang Live Searching & Upload Gambar
*/
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal dihapus!";
}
