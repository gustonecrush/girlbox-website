<?php

session_start();

require 'functions.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek apakah ada username di database
    $result = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE username = '$username'"
    );

    if (mysqli_num_rows($result) === 1) {
        // kalo ada usernamenya, cek password
        // ambil data password di database
        $passwordInDb = mysqli_fetch_assoc($result);

        if (password_verify($password, $passwordInDb['password'])) {
            // set session
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['loginIsSuccess'] = true;

            header('Location: /web-girlbox/dashboard.php');
            exit();
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ====================== META TAGS ====================== -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ====================== BOOTSTRAP CSS ====================== -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- ====================== ICON ====================== -->
    <link href="src/assets/logo.svg" rel="icon" />

    <!-- ====================== CSS ====================== -->
    <link href="src/styles/styles.css" rel="stylesheet" />
    <link href="src/styles/login.css" rel="stylesheet" />

    <!-- ====================== SWEETALERT ====================== -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ====================== TITLE ====================== -->
    <title>Log In</title>
  </head>
  <body>
    <div class="login-page">
      <div class="form width" data-aos="fade-up" data-aos-duration="1000">
        <form class="login-form" action="" method="POST" autocomplete="off">
          <img src="src/assets/logo.svg" alt="logo" class="logo-login" />
          <h1 class="login-title">Log In</h1>
          <div class="mb-3">
            <input
              type="text"
              placeholder="username"
              name="username"
              class="form-control"
            />
          </div>
          <div class="mb-3">
            <input
              type="password"
              placeholder="password"
              name="password"
              class="form-control"
            />
          </div>
          <button type="submit" name="login">login</button>
          <p class="message">
            Not registered?
            <a
              style="cursor: pointer;"
              href="/web-girlbox/register.php"
            >
              Create an account
            </a>
          </p>
        </form>
      </div>
    </div>

    <img
      src="src/assets/union_decoration.png"
      alt="decoration"
      class="hero-decoration"
    />

    <!-- ====================== BOOTSTRAP JS ====================== -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>

    <!-- ====================== AOS JS ====================== -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ====================== INTERNAL JS ====================== -->
    <script>
      AOS.init()
    </script>
  </body>
</html>
