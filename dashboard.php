<?php

// MEMULAI SESSION. AGAR DAPAT MENGGUNAKAN, MEMBUAT, ATAU MENGHAUNCURKAN SESSION
session_start();

// MELAKUKAN PENGECEKAN APAKAH TIDAK ADA SESSION LOGIN
if (!isset($_SESSION['login'])) {

    // JIKA TIDAK ADA, MAKA LEMPAR USER KE HALAMAN INDEX KARENA BELUM LOGIN
    header('Location: /web-girlbox/');

    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- ====================== ICON ====================== -->
    <link href="src/assets/logo.svg" rel="icon" />

    <!-- Custom styles for this template-->
    <link href="src/styles/global.css" rel="stylesheet">
    <link href="src/styles/admin.min.css" rel="stylesheet">

    <!-- ====================== SWEETALERT ====================== -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .bg-gradient-primary {
        background: #132039;
        background-size: cover;
        }

        .btn-primary {
        color: #fff;
         background: #0A9F82;
        border: none;
        }

        .btn-primary:hover {
        color: #fff;
        background-color: #0A9F82;
        }

        * {
        font-family: 'Poppins';
        font-size: 1.15rem;
        }

        nav,
        #wrapper #content-wrapper #content {
        background: #fafafa !important;
        }

    </style>

</head>

<body id="page-top">

<?php if ($_SESSION['loginIsSuccess']) {
    echo "
        <script>
                        Swal.fire({
                            title: 'Login is success',
                            text: 'Enjoy your shopping!',
                            icon: 'success',
                            confirmButtonColor: '#0A9F82'
                        })
                    </script>
        ";
    $_SESSION['loginIsSuccess'] = false;
} ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <img src="src/assets/logo.svg" style="width: 50px; margin: 20px auto 0 auto;" />
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/web-girlbox/dashboard.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Girlbox</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/web-girlbox/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Homepage</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Features
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" style="margin-top: -.3rem;">
                <a class="nav-link collapsed" href="#" >
                    <i class="fas fa-fw fa-cog"></i>
                    <span>My Cart</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item" style="margin-top: -0.8rem;">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Payment</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION[
                                    'username'
                                ] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="src/assets/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard User</h1>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Girlbox 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/web-girlbox/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="src/vendor/jquery/jquery.min.js"></script>
    <script src="src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="src/script/admin.min.js"></script>

</body>

</html>