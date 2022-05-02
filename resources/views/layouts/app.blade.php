<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Custom fonts for this template -->
    <link href="{{asset('../vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('../css/sb-admin-2.min.css')}}" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="{{asset('../vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body id="page-top">
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center bg-info" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-user-large"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">STARTER</div>

        <!-- Nav Item - Profil-->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-circle-user"></i>
            <span>Profil</span>
          </a>
        </li>

        <!-- Nav Item -Jadwal-->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/kendaraans')}}">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Kendaraan</span></a
          >
        </li>

        <!-- Nav Item -  Penumpang-->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/penumpangs')}}">
            <i class="fa-solid fa-clipboard-list"></i>
            <span>Penumpang</span></a
          >
        </li>

        <!-- Nav Item - Pages Informasi -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-newspaper"></i>
            <span>Informasi</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{asset('/beritas')}}">Berita</a>
              <a class="collapse-item" href="{{asset('/informasis')}}">Pengumuman</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - User -->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-users"></i>
            <span>Akun</span>
          </a>
        </li>

        <!-- Nav Item - Galeri -->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-image"></i>
            <span>Galeri</span>
          </a>
        </li>

        <!-- Nav Item -  -->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-link"></i>
            <span>Link</span>
          </a>
        </li>

        <!-- Nav Item -  Back Up-->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fa-solid fa-cloud-arrow-down"></i>
            <span>Back Up</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
              <i class="fas fa-bars"></i>
            </button>

            <!-- Topbar Logo -->
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                  <img src="{{asset('../img/logo.png')}}" alt="profile" width="65px" />
                  <span class="nav-profile-name">Pelabuhan Mulia Raja Napitupulu</span>
                </a>
              </li>
            </ul>

            <!-- Navbar Search-->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow mt-3">
                <!-- Dropdown - User Information -->
                <a class="dropdown-item text-info" href="#" data-toggle="modal" data-target="#logoutModal"> Logout </a>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">@yield('judul')</h1>
            </div>
            @yield('content')
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2021</span>
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      

    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('../vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('../vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('../vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('../js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('../vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('../js/demo/datatables-demo.js')}}"></script>
  </body>
</html>
