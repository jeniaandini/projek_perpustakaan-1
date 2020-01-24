<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku | SMK N 1 Denpasar</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- style internal -->
    <style>
        table tr td,
        table tr th {
            text-align: center;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
         <i class="fas fa-book-reader"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pepustakaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Feature
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="buku.php">
          <i class="fas fa-book"></i>
          <span> Daftar Buku</span>
        </a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link" href="./user.php">
          <i class="fas fa-users"></i>
          <span> Daftar User</span>
        </a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="peminjaman.php">
          <i class="rotate fas fa-outdent"></i>
          <span>Peminjaman</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
       <li class="nav-item">
        <a class="nav-link" href="pengembalian.php">
           <i class="fas fa-outdent"></i>
          <span>Pengembalian</span>
        </a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="repor.php">
          <i class="fas fa-download"></i>
          <span>Generate Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Wahyu Purnama</span>
                                <img class="img-profile rounded-circle" src="./img/wahyu.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <!-- Search form -->
                <div class="navigasi d-flex">
                    <div>
                        <form>
                            <input class="add-buku" type="search" placeholder="Search">
                        </form>
                    </div>
                    <div></div>
                     <!-- add user -->
                    <div class=" t-scale">
                        <button class="btn btn-primary shadow-lg">Tambah Buku &nbsp;<i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="row  px-3">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 single-item mix education">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block py-3 text-center text-decoration-none" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample ">
                                <h6 class="m-0 font-weight-bold text-primary my-3" style="font-size: 1.5em;">Matematika</h6>
                                <img src="./img/daftar-buku/1.jpg" alt="" style="width: 250px;">
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse" id="collapseCardExample">
                                <div class="card-body">
                                    <div class="data-buku">
                                        <ul style="list-style: none;">
                                            <li>Pengarang</li>
                                            <li>Kode</li>
                                            <li>Kategori</li>
                                        </ul>
                                        <ul style="list-style: none;">
                                            <li>: wahyu purnama</li>
                                            <li>: 001</li>
                                            <li>: Logika</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem cupiditate harum facere animi vero repellat labore, in, ad adipisci maxime.</p>
                                    <div class="text-center py-2">
                                        <button class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Edit</button>
                                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Collapsable Card Example -->
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 single-item mix biologi">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample2" class="d-block py-3 text-center  text-decoration-none" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample ">
                                <h6 class="m-0 font-weight-bold text-primary my-3" style="font-size: 1.5em;">Fisika</h6>
                                <img src="./img/daftar-buku/2.jpg" alt="" style="width: 250px;">
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse" id="collapseCardExample2">
                                <div class="card-body">
                                    <div class="data-buku">
                                        <ul style="list-style: none;">
                                            <li>Pengarang</li>
                                            <li>Kode</li>
                                            <li>Kategori</li>
                                        </ul>
                                        <ul style="list-style: none;">
                                            <li>: wahyu purnama</li>
                                            <li>: 001</li>
                                            <li>: Logika</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem cupiditate harum facere animi vero repellat labore, in, ad adipisci maxime.</p>
                                    <div class="text-center py-2">
                                        <button class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Edit</button>
                                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Collapsable Card Example -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 single-item mix education">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample3" class="d-block py-3 text-center text-decoration-none" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample3">
                                <h6 class="m-0 font-weight-bold text-primary my-3" style="font-size: 1.5em;">Matematika</h6>
                                <img src="./img/daftar-buku/1.jpg" alt="" style="width: 250px;">
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse" id="collapseCardExample3">
                                <div class="card-body">
                                    <div class="data-buku">
                                        <ul style="list-style: none;">
                                            <li>Pengarang</li>
                                            <li>Kode</li>
                                            <li>Kategori</li>
                                        </ul>
                                        <ul style="list-style: none;">
                                            <li>: wahyu purnama</li>
                                            <li>: 001</li>
                                            <li>: Logika</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem cupiditate harum facere animi vero repellat labore, in, ad adipisci maxime.</p>
                                    <div class="text-center py-2">
                                        <button class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Edit</button>
                                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Collapsable Card Example -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Perpustakaan SMKN 1 Denpasar 2020 By Kelompok 3</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>