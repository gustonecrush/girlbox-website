<?php

session_start(); ?>


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

    <!-- ====================== SWEETALERT ====================== -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ====================== TITLE ====================== -->
    <title>Girlbox</title>
  </head>
  <body>

  <?php if ($_SESSION['logoutIsSuccess']) {
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
      $_SESSION['logoutIsSuccess'] = false;
      $_SESSION = [];
      session_destroy();
  } ?>

    <!-- ====================== NAV ====================== -->
    <nav class="navbar navbar-expand-lg fixed-top bg-light py-3">
      <div class="container">
        <!-- Logo Section -->
        <a class="navbar-brand" href="#">
          <img src="src/assets/logo.svg" alt="Olshop's Logo" />
        </a>

        <div class="justify-content-center">
          <ul class="nav mb-2 mb-lg-0">
            <li class="nav-item me-2">
              <a class="nav-link active" aria-current="page" href="/web-olshop">
                Home
              </a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#">Featured</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="/web-olshop/about.php">About</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#">Catalog</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="#">Sales</a>
            </li>
          </ul>
        </div>

        <div class="btn-custom">
          <a href="/web-girlbox/login.php">Log In</a>
        </div>
      </div>
    </nav>

    <!-- ====================== MAIN ====================== -->
    <main class="main">
      <!-- ====================== HERO SECTION ====================== -->
      <section class="hero__section">
        <article
          class="container hero-content d-flex flex-column"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <h1 class="hero-title">
            Discover Your
            <br />
            Own Girl Stuff
            <br />
            Easy and Aeshtetic
          </h1>
          <p class="hero-desc">
            Exploring your interest by finding the match stuff
            <br />
            for your needs that will make you shine
          </p>
        </article>
        <img
          src="src/assets/union_decoration.png"
          alt="decoration"
          class="hero-decoration"
        />
        <img
          src="src/assets/hero-picture.png"
          alt="decoration"
          class="hero-girl-decoration"
          data-aos="zoom-in-up"
          data-aos-duration="1000"
        />
      </section>

      <!-- ====================== PRODUCTS SECTION ====================== -->
      <section class="about__section">
        <article
          class="container about-content d-flex flex-row justify-content-between align-items-center"
        >
          <h2 class="about-title">
            You're Probably
            <br />
            Gonna Love These
          </h2>

          <a href="" class="about-link">VIEW ALL RECOMMENDATION</a>
        </article>

        <aritcle
          class="products-list d-flex flex-row flex-wrap align-items-center justify-content-evenly mt-3"
        >
          <div
            class="product d-flex flex-column"
            data-aos="zoom-in-up"
            data-aos-duration="500"
          >
            <span class="product-img">
              <span class="product-category">Bag</span>
              <img src="src/assets/products/pic-1.png" class="" />
            </span>
            <div
              class="d-flex flex-row justify-content-between align-items-center"
            >
              <a>
                <h1>MILLIE LANYARD MAROON</h1>
                <p>Vegan Leather</p>
              </a>
              <span>IDR 149,000</span>
            </div>
          </div>
          <div
            class="product d-flex flex-column"
            data-aos="zoom-in-up"
            data-aos-duration="1000"
          >
            <span class="product-img">
              <span class="product-category">Bag</span>
              <img src="src/assets/products/pic-2.png" class="" />
            </span>
            <div
              class="d-flex flex-row justify-content-between align-items-center"
            >
              <a>
                <h1>MILLIE LANYARD SAGE GREEN</h1>
                <p>Vegan Leather</p>
              </a>
              <span>IDR 149,000</span>
            </div>
          </div>

          <div
            class="product d-flex flex-column"
            data-aos="zoom-in-up"
            data-aos-duration="1500"
          >
            <span class="product-img">
              <span class="product-category">Bag</span>
              <img src="src/assets/products/pic-3.png" class="" />
            </span>
            <div
              class="d-flex flex-row justify-content-between align-items-center"
            >
              <a>
                <h1>MILLIE LANYARD LATTE</h1>
                <p>Vegan Leather</p>
              </a>
              <span>IDR 149,000</span>
            </div>
          </div>

          <div
            class="product d-flex flex-column"
            data-aos="zoom-in-up"
            data-aos-duration="2000"
          >
            <span class="product-img">
              <span class="product-category">Bag</span>
              <img src="src/assets/products/pic.png" class="" />
            </span>
            <div
              class="d-flex flex-row justify-content-between align-items-center"
            >
              <a>
                <h1>MILLIE LANYARD BLACK</h1>
                <p>Vegan Leather</p>
              </a>
              <span>IDR 149,000</span>
            </div>
          </div>
        </aritcle>
      </section>

      <!-- ====================== CAROUSEL SECTION ====================== -->
      <section class="carousel__section d-flex flex-column mt-5 container">
        <article
          class="container about-content d-flex flex-row justify-content-center align-items-center"
        >
          <h2 class="about-title text-center mt-5 mb-5">
            The Most
            <br />
            Sold of The Year
          </h2>
        </article>

        <div class="d-flex flex-row justify-content-evenly">
          <div
            id="carouselExampleControlsNoTouching"
            class="carousel slide container"
            data-bs-touch="false"
            data-aos="zoom-in-up"
            data-aos-duration="1000"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="src/assets/products/product-1.jpeg"
                  class="d-block w-100"
                  alt="Product 1 Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="src/assets/products/product-3.jpeg"
                  class="d-block w-100"
                  alt="Product 3 Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="src/assets/products/product-5.jpeg"
                  class="d-block w-100"
                  alt="Product 5 Image"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControlsNoTouching"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControlsNoTouching"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div
            id="carouselExampleControlsNoTouching2"
            class="carousel slide container"
            data-bs-touch="false"
            data-aos="zoom-in-up"
            data-aos-duration="1000"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="src/assets/products/product-4.jpeg"
                  class="d-block w-100"
                  alt="Product 4 Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="src/assets/products/product-2.jpeg"
                  class="d-block w-100"
                  alt="Product 2 Image"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="src/assets/products/product-6.jpeg"
                  class="d-block w-100"
                  alt="Product 6 Image"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControlsNoTouching2"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControlsNoTouching2"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>

      <footer class="footer">
        Copyright 2023. All Rights Reserved Girlbox by Della.
      </footer>
    </main>

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