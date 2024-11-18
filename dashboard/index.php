
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Rumah Senasib</title>
    <Link rel="stylesheet" href="gaya.css"></Link>
</head>
<body>
<?php
    require('navbar/navbar.php');
    $baseUrl = "/3finalproject";
?>
<!--image-->
<section class="image">
  <img src="ilustrasi.jpg" alt="ilustrasi" class="hero-image">
</section>
<div>
    <!--Navbar-->
    <!--Tentang-->
    <section>
          <div class="tentang">
            <h3 class="tentang-title">Tentang</h3>
            <p class="tentang-text">Rumah Senasib adalah sebuah komunitas sosial yang berfokus pada mendukung anak-anak yatim piatu dan kaum dhuafa melalui berbagai program pendidikan, kesehatan, dan bantuan kesejahteraan. Rumah Senasib tidak hanya menggalang donasi, tetapi juga aktif membantu anak-anak belajar, memberikan pemeriksaan kesehatan, mendukung biaya pendidikan, dan menyelenggarakan kegiatan santunan maupun pengajian rutin.<a href="../dashboard/about/tentang.php">selengkapnya</a></p>
          </div>
        </div>
      </section>
      <!--Program-->
      <div class="container" id="program">
        <div class="impact-grid" >
          <div class="pendidikan-box">
            <h3 class="pendidikan-title">Pendidikan gratis</h3>
            <p class="pendidikan-text">Rumah Senasib menyediakan bimbingan belajar gratis setiap hari Rabu dan Kamis untuk anak-anak yatim piatu dan dhuafa, mencakup pendidikan dasar mulai dari pra-sekolah hingga SD. Program ini bertujuan meningkatkan pemahaman pelajaran dan membantu mereka mencapai prestasi akademik yang lebih baik.</p>
          </div>
          <div class="pendidikan-box">
            <h3 class="pendidikan-title">Kesehatan</h3>
            <p class="pendidikan-text">Setiap bulan, Rumah Senasib menyelenggarakan pemeriksaan kesehatan dan pengobatan gratis bekerja sama dengan Rumah Sakit Izha Cikampek, mahasiswa Horizon, serta tenaga medis seperti dokter praktek dan pegawai puskesmas. Program ini memberikan akses kesehatan kepada mereka yang membutuhkan, khususnya yang tidak mampu membayar biaya pemeriksaan medis./p>
          </div>
          <div class="pendidikan-box">
            <h3 class="pendidikan-title">Santunan</h3>
            <p class="pendidikan-text">RRumah Senasib secara rutin memberikan santunan berupa materi, barang, atau kebutuhan lain kepada anak yatim piatu dan dhuafa. Khusus saat momen besar seperti Ramadan dan Muharram, pembagian sembako dilakukan lebih intensif untuk membantu meringankan beban hidup mereka.</p>
            <div class="pendidikan-box">
            <h3 class="pendidikan-title">Program kegiatan ramadhan</h3>
            <p class="pendidikan-text">Selama bulan Ramadan, Rumah Senasib mengadakan berbagai kegiatan, seperti pembagian sembako di awal Ramadan, pesantren kilat dan tadarus Al-Quran pada minggu pertama hingga ketiga, serta pembagian parcel dan buka bersama di minggu keempat. Kegiatan ini bertujuan meningkatkan kebersamaan dan semangat beribadah selama Ramadan.</p>
          </div>
        </div>
      </div>
      <!--box-->
      <div class="section1">
        <div class="box">
          <i class="icon"></i>
          <h3>37</h3>
          <p>Yatim piatu</p>
        </div>
        <div class="box">
          <i class="icon"></i>
          <h3>4</h3>
          <p>Program Berjalan</p>
        </div>
        <div class="box">
          <i class="icon"></i>
          <h3>3</h3>
          <p>Relawan</p>
        </div>
        <div class="box">
          <i class="icon"></i>
          <h3>4</h3>
          <p>Jangkauan Wilayah</p>
        </div>
      </div>
      <!--Footer-->
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 square">
                    <div class="heading">Contact</div>
                    <ul class="contact">
                        <li><i class="fa-solid fa-envelope"></i>@rumahsenasib</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</b>
</html>