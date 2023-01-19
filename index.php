<?php

// MEMULAI SESSION. AGAR DAPAT MENGGUNAKAN, MEMBUAT, ATAU MENGHAUNCURKAN SESSION
session_start(); 

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- =========== IMPORT COMPONENT HEAD =========== -->
    <?php include_once 'sections/head.php'; ?>

    <!-- =================== TITLE =================== -->
    <title>Girlbox</title>

  </head>
  
  <body>

    <?php 

      // MELAKUKAN PENGECEKAN APAKAH ADA SESSION LOGOUT
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
      } 
    
    ?>

      <!-- =========== IMPORT SECTION NAVBAR =========== -->
      <?php include_once 'sections/navbar.php'; ?>

      <!-- ==================== MAIN ===================== -->
      <main class="main">

        <!-- ==================== HERO SECTION ==================== -->
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

        <!-- =================== PRODUCT SECTION ================== -->
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

        <!-- =================== CAROUSEL SECTION ================= -->
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

        <!-- ==================== FOOTER SECTION ================== -->
        <footer class="footer">
          Copyright 2023. All Rights Reserved Girlbox by Della.
        </footer>

      </main>

      <!-- =========== IMPORT SECTION SCRIPTS ========== -->
      <?php include 'sections/scripts.php'; ?>

  </body>
  
</html>
