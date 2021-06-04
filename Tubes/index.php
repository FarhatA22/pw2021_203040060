<?php
//  menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$mobil = query("SELECT * FROM `garasi dut`");

//cari
if (isset($_GET["cari"])) {
  $mobil = cari($_GET["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- css style -->
  <link rel="stylesheet" href="css/index.css">
  <title>Garasi Dut</title>
</head>

<body id="home" class="scrollspy">

  <div class="navbar-fixed">
    <nav class="green lighten-3">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">Garasi Dut</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#koleksi">Koleksi</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="php/login.php" class="waves-effect waves-light blue btn">Login Disini</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <ul class="sidenav" id="mobile-nav">
    <li><a href="#koleksi">Koleksi</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="php/login.php" class="waves-effect waves-light blue btn-small">Login</a></li>
  </ul>

  <section id="home" class="home scrollspy">
    <style>
      .slider h3,
      .slider h5 {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
      }
    </style>
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="assets/slider/1.jpg">
          <div class="caption left-align">
            <h3>Garasi Dut</h3>
            <h5 class="light grey-text text-lighten-3">Selamat Datang di Website ini!</h5>
          </div>
        </li>
        <li>
          <img src="assets/slider/2.jpg">
          <div class="caption right-align">
            <h3>Garasi Dut</h3>
            <h5 class="light grey-text text-lighten-3">Selamat Datang di Website ini!</h5>
          </div>
        </li>
        <li>
          <img src="assets/slider/3.jpg">
          <div class="caption center-align">
            <h3>Garasi Dut</h3>
            <h5 class="light grey-text text-lighten-3">Selamat Datang di Website ini! </h5>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section id="koleksi" class="koleksi light-green lighten-5 scrollspy">
    <style>
      .container h3 {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
      }
    </style>
    <div class="container">
      <h3 class="light center black-text text-lighten-2">Koleksi</h3>
      <div class="row"><br><br>
        <form action="" method="GET">
          <input class="black-text" type="text" name="keyword" autofocus placeholder="masukkan pencarian....." autocomplete="off">
          <button class="waves-effect waves-light blue btn-small" type="submit" name="cari">Search</button>
        </form>
        <div id="container">
          <?php if (empty($mobil)) : ?>
            <tr>
              <td colspan="7">
                <h1>Data tidak ditemukan</h1>
              </td>
            </tr>
          <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($mobil as $mbl) : ?>
              <div class="col m4 s12">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="assets/img/<?= $mbl["Gambar"]; ?>">
                  </div>
                  <div class="card-content">
                    <span class="card-tittle activator black-text"><?= $mbl["Merk"]; ?></span>
                    <span class="card-tittle activator black-text"><?= $mbl["Nama"]; ?></span>
                    <p class="card-tittle activator black-text"><?= $mbl["Harga"]; ?></p>
                    <p>
                      <a href="php/detail.php?id_mbl=<?= $mbl['Id']; ?>">Lihat Produk</a>
                    </p>
                  </div>
                </div>
              </div>
              <?php $i++; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section id="contact" class="contact light-green lighten-5 scrollspy">
    <style>
      .container h3 {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
      }
    </style>
    <div class="container">
      <h3 class="light center grey-text text-darken-2">Contact</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel blue-grey darken-1 center white-text">
            <i class="material-icons">phone</i>
            <h5>Contact</h5>
            <p>Instagram: @farhataldjaidi</p>
            <p>Email: farhataldjaidi@gmail.com</p>
            <p>Nomor Telepon: 0819-9154-1206</p>
          </div>

        </div>
        <div class="col m7 s12">
          <form>
            <div class="card-panel">
              <h5>Silahkan Isi Form Dibawah ini</h5>
              <div class="input-field">
                <input type="text" name="nama" id="nama" required class="validate">
                <label for="nama">Nama</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="nomor" id="nomor">
                <label for="nomor">Nomor Telepon</label>
              </div>
              <div class="input-field">
                <textarea name="pesan" id="pesan" class="materialize-textarea"></textarea>
                <label for="pesan">Pesan</label>
              </div>
              <button type="kirim" class="btn blue-grey darken-1">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="N/A transparent white-text center">
    <p class="flow-text">Farhat Abdurachman Aldjaidi. Copyright 2020</p>
  </footer>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 450,
      transition: 600,
      interval: 3000
    });

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 65
    });
  </script>
</body>

</html>