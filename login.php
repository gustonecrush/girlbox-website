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

// JIKA TOMBOL LOGIN DITEKAN, EKSEKUSI PROGRAM BERIKUT
if (isset($_POST['login'])) {
    // MENGAMBIL DATA USERNAME & PASSWORD DARI INPUT USER
    $username = $_POST['username'];
    $password = $_POST['password'];

    // MELAKUKAN QUERY KE DATABASE UNTUK MENCARI USERNAME, SESUAI DENGAN INPUT USER
    $result = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE username = '$username'"
    );

    // MELAKUKAN PENGKONDISIAN APAKAH QUERY YANG DILAKUKAN, MENGHASILKAN
    // BARIS = 1 YANG ARTINYA TERDAPAT USERNAME YANG DIMASUKKAN OLEH USER DI DATABASE
    if (mysqli_num_rows($result) === 1) {
        // JIKA ADA USERNAMENYA, QUERY DATA PASSWORD
        // DARI QUERY $RESULT DIATAS
        $passwordInDb = mysqli_fetch_assoc($result);

        // MELAKUKAN PENGECEKAN APAKAH PASSWORD INPUT USER
        // SAMA DENGAN PASSWORD DARI QUERY $RESULT YANG SEBELUMNYA
        // DILAKUKAN PENGECEKAN USERNAME
        if (password_verify($password, $passwordInDb['password'])) {
            // JIKA ADA, BUAT VARIABEL SESSION SEBAGAI BERIKUT
            // GUNANYA UNTUK MELAKUKAN PENGECEKAN DISETIAP HALAMAN
            // SUDAH LOGIN / BELUM
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['loginIsSuccess'] = true;

            // APABILA USERNAME & PASSWORD BENAR, LEMPAR USER KE HALAMAN DASHBOARD (HALAMAN BERHASIL)
            header('Location: /web-girlbox/dashboard.php');

            exit();
        }
    }

    // JIKA USERNAME TIDAK DITEMUKAN, BUAT VARIABLE ERROR = TRUE
    $error = true;
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
    <title>Log In</title>

  </head>

  <body>

    <div class="login-page">

      <div class="form width" data-aos="fade-up" data-aos-duration="1000">

        <!-- =========== FORM LOGIN =========== -->
        <form class="login-form" action="" method="POST" autocomplete="off">

          <!-- ============== LOGO ============== -->
          <img src="src/assets/logo.svg" alt="logo" class="logo-login" />

          <!-- ============= HEADER ============= -->
          <h1 class="login-title">Log In</h1>

          <!-- ============== INPUT USERNAME ============== -->
          <div class="mb-3">
            <input type="text" placeholder="username" name="username" class="form-control" />
          </div>

          <!-- ============== INPUT PASSWORD ============== -->
          <div class="mb-3">
            <input type="password" placeholder="password" name="password" class="form-control" />
          </div>

          <!-- =============== BUTTON LOGIN =============== -->
          <button type="submit" name="login">login</button>

          <!-- =============== LINK REGISTER ============== -->
          <p class="message">
            Not registered?
            <a style="cursor: pointer;" href="/web-girlbox/register.php">Create an account</a>
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
