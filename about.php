<?php

// MEMULAI SESSION. AGAR DAPAT MENGGUNAKAN, MEMBUAT, ATAU MENGHAUNCURKAN SESSION
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- =========== IMPORT COMPONENT HEAD =========== -->
    <?php include_once 'sections/head.php'; ?>

    <!-- =================== TITLE =================== -->
    <title>Girlbox</title>

  </head>
  
  <body>

    <?php // MELAKUKAN PENGECEKAN APAKAH ADA SESSION LOGOUT
    if (isset($_SESSION['logoutIsSuccess'])) {
        // JIKA ADA BERARTI USER LOGOUT
        // DAN TAMPILKAN PESAN BERIKUT JIKA USER BERHASIL LOGIN
        echo "
            <script>
                Swal.fire({
                  title: 'Logout is success',
                  text: 'Thanks for shopping!',
                  icon: 'success',
                  confirmButtonColor: '#0A9F82'
                })
            </script>
            ";

        // HAPUS SESSION LOGOUT
        $_SESSION['logoutIsSuccess'] = false;
        $_SESSION = [];

        // HANCURKAN SESSION
        session_destroy();
    } ?>

      <!-- =========== IMPORT SECTION NAVBAR =========== -->
      <?php include_once 'sections/navbar.php'; ?>

      <!-- ==================== MAIN ===================== -->
      <main class="main">

      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="src/assets/products/p1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="src/assets/products/p2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="src/assets/products/p3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
     </div>

     <p class="container text-center mt-5" style="font-size: 1.5rem;">
        Girlbox is a website that was established to make it easier for our old customers to buy the best products we produce. Not only in this case, but we also want to expand the market by marketing our products online and it is hoped that we will be able to grow our international share. And become a domestic product that can make women more beautiful.
     </p>

      <!-- ==================== PROFILE ==================== -->
      <section class="product-2 section container" id="products" style="margin-bottom: 3rem; margin-top: -1rem;">
        <h1 class="title" data-aos="zoom-in-up" data-aos-duration="500">Girlbox Website Owner</h1>

        <div class="card w-75 mt-3 p-4">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center">
              <img src="src/assets/profile-della.jpeg" width="250" style="border-radius: 25px" />
              <h5 class="card-title mt-3">Arni Eriza</h5>
            </div>
           
            <ul class="list-group">
              <li class="list-group-item">Nama : Mardella Sari</li>
              <li class="list-group-item">Kelas : 5NG</li>
              <li class="list-group-item">Npm : 062030601548</li>
              <li class="list-group-item">Email : mardellapdg@gmail.com</li>
              <li class="list-group-item">Jurusan : Administrasi Bisnis</li>
              <li class="list-group-item">Universitas : Politeknik Negeri Sriwijaya</li>
            </ul>
          </div>
        </div>

      </section>

        <!-- ==================== FOOTER SECTION ================== -->
        <footer class="footer">
          Copyright 2023. All Rights Reserved Girlbox by Della.
        </footer>

      </main>

      <!-- =========== IMPORT SECTION SCRIPTS ========== -->
      <?php include 'sections/scripts.php'; ?>

      <?php // MELAKUKAN PENGECEKAN APAKAH ADA ERROR YANG DIBUAT APABILA REGISTER ERROR
      if (isset($_SESSION['registerError'])) {
          // JIKA ADA BERARTI ADA KESALAHAN PADA SAAT PROSES REGISTRASI
          // DAN TAMPILKAN PESAN BERIKUT JIKA USER GAGAL
          echo "
                            <script>
                                Swal.fire({
                                    title: 'Register is failed',
                                    text: 'Username or Email has been taken!',
                                    icon: 'error',
                                    confirmButtonColor: '#1f1f1f'
                                })
                            </script>
                        ";

          // HAPUS SESSION LOGOUT
          $_SESSION['registerError'] = false;
          $_SESSION = [];

          // HANCURKAN SESSION
          session_destroy();
      } ?>

  </body>
  
</html>
