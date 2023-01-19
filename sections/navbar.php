<!-- ======================== NAVBAR ======================== -->
<nav class="navbar navbar-expand-lg fixed-top bg-light py-4">

  <div class="container">
    <!-- =============== LOGO =============== -->
    <a class="navbar-brand" href="#">
      <img src="src/assets/logo.svg" alt="Olshop's Logo" />
    </a>

    <!-- ========== NAVBAR COLLAPSE ========= -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <!-- ========== LINK HOME ========= -->
        <li class="nav-item me-3">
          <a class="nav-link active" aria-current="page" href="/web-girlbox">Home</a>
        </li>
        <!-- ======= LINK FEATURED ======== -->
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Featured</a>
        </li>
        <!-- ========= LINK ABOUT ========= -->
        <li class="nav-item me-3">
          <a class="nav-link" href="/web-girlbox/about.php">About</a>
        </li>
        <!-- ======== LINK CATALOG ======== -->
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Catalog</a>
        </li>
        <!-- ========= LINK SALES ========= -->
        <li class="nav-item me-4">
          <a class="nav-link" href="#">Sales</a>
        </li>

      </ul>

    </div>

    <!-- 
      JIKA TIDAK ADA SESSION LOGIN, MAKA TAMPILKAN TOMBOL LOGIN
      JIKA ADA SESSION LOGIN, MAKA TAMPILKAN TOMBOL DASHBOARD
    -->
    <?php 
      if (!isset($_SESSION['login'])) {
        echo "
                  <div class='btn-custom'>
                    <a href='/web-girlbox/login.php'>Log In</a>
                  </div>
              ";
      } else {
          echo "
                    <div class='btn-custom'>
                      <a href='/web-girlbox/dashboard.php'>Go to Dashboard</a>
                    </div>
                ";
      } 
    ?>

  </div>

</nav>