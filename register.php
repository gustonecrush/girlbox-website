<?php

// MEMULAI SESSION. AGAR DAPAT MENGGUNAKAN, MEMBUAT, ATAU MENGHAUNCURKAN SESSION
session_start();

// MELAKUKAN PENGECEKAN APAKAH ADA SESSION LOGIN
if (isset($_SESSION['login'])) {
    // JIKA ADA, MAKA LEMPAR USER KE HALAMAN DASHBOARD KARENA SUDAH LOGIN
    header('Location: /web-girlbox/dashboard.php');

    exit();
}

// IMPORT FILE FUNCTIONS, UNTUK CONNECT KE DATABASE, KARENA
// KONFIGURASI DATABASE TERDAPAT DI FILE TERSEBUT
require 'functions.php';

// JIKA TOMBOL REGISTER DITEKAN, EKSEKUSI PROGRAM BERIKUT
if (isset($_POST['register'])) {
    // JALANKAN FUNGSI REGISTER DI FILE FUNCTIONS,
    // APABILA FUNCTION MENGEMBALIKAN NILAI > 0
    // YANG ARTINYA USER BARU BERHASIL DITAMBAHKAN DI DATABASE
    // EKSEKUSI PROGRAM BERIKUT
    if (registrasi($_POST) > 0) {
        // JIKA BERHASIL, BUAT VARIABEL SESSION SEBAGAI BERIKUT
        // GUNANYA UNTUK MELAKUKAN PENGECEKAN DISETIAP HALAMAN
        // SUDAH LOGIN / BELUM
        // KARENA APABILA BERHASIL REGISTER AKAN OTOMATIS LOGIN
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['loginIsSuccess'] = true;

        // DATA USER BERHASIL DITAMBAHKAN, LEMPAR USER KE HALAMAN DASHBOARD (HALAMAN BERHASIL)
        header('Location: /web-girlbox/dashboard.php');

        // JIKA TIDAK BERHASIL MENAMBAHKAN USER BARU, LEMPAR USER KEHALAMAN UTAMA
    } else {
        $_SESSION["registerError"] = true;
        header('Location: /web-girlbox/');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- =========== IMPORT COMPONENT HEAD =========== -->
    <?php include_once 'sections/head.php'; ?>

    <!-- =================== CSS ===================== -->
    <link href="src/styles/login.css" rel="stylesheet" />

    <!-- ================== TITLE ==================== -->
    <title>Register</title>

  </head>

  <body>

    <div class="register-page">

      <div
        class="form register-page form-register"
        data-aos="fade-up"
        data-aos-duration="1000"
      >

        <!-- =========== FORM LOGIN =========== -->
        <form class="login-form" action="" method="POST" autocomplete="off">

          <img src="src/assets/logo.svg" alt="logo" class="logo-login" />

          <h1 class="login-title">Create New Account</h1>

           <!-- ============== INPUT USERNAME ============== -->
          <div class="mb-3">
            <input type="text" placeholder="username" name="username" class="form-control" required />
          </div>
          
          <!-- =============== INPUT EMAIL ================ -->
          <div class="mb-3">
            <input type="email" placeholder="email" name="email" class="form-control" required />
          </div>

          <!-- ============== INPUT PASSWORD ============== -->
          <div class="mb-3">
            <input type="password" placeholder="password" name="password" class="form-control" required />
          </div>

          <!-- =========== INPUT CONFIRM PASSWORD ========= -->
          <div class="mb-3">
            <input type="password" placeholder="confirm password" name="confirmPassword" class="form-control" required />
          </div>

          <!-- ============== BUTTON REGISTER ============= -->
          <button type="submit" name="register">Register</button>

          <!-- ================ LINK LOGIN ================ -->
          <p class="message">
            Have an account?
            <a style="cursor: pointer;" href="/web-girlbox/login.php">Log In</a>
          </p>

        </form>

      </div>

    </div>

    <!-- =============== IMAGE DECORATION ============== -->
    <img
      src="src/assets/union_decoration.png"
      alt="decoration"
      class="hero-decoration"
    />

    <!-- =========== IMPORT SECTION SCRIPTS ========== -->
    <?php include 'sections/scripts.php'; ?>

  </body>

</html>
