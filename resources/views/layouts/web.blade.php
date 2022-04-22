<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicons -->
    <link href="" rel="icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables.css" rel="stylesheet" />

    <!--Css style-->
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .bgimg {
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #367dae;
        height: 20vh;
      }
    </style>
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <div class="logo-1">
              <img src="../img/logo.png" alt="Logo" />
              <p>Pelabuhan Mulia Raja Napitupulu</p>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{asset('/')}}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Profil </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{asset('/tentang')}}">Tentang</a></li>
                    <li><a class="dropdown-item" href="{{asset('/lokasi')}}">Lokasi</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{asset('/jadwal')}}">Pelayanan</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Publikasi </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{asset('/berita')}}">Berita</a></li>
                    <li><a class="dropdown-item" href="{{asset('/pengumuman')}}">Pengumuman</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{asset('/galeri')}}">Galeri</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-info" href="{{asset('#')}}">Masuk</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <!-- Page header with logo and tagline-->
      <header class="py-5 border-bottom bgimg header-judul mb-4" >
        <div class="container">
          <div class="row">
            <!-- <div class="col-lg-7 bg-hover1">
              <div class="text-start my-5">
                <h1 class="fw-bolder">Selamat Datang di Pelabuhan!</h1>
                <p class="lead mb-0">
                  Penetapan nama Pelabuhan Mulia Raja Napitupulu, berdasarkan Surat Kementerian Perhubungan Dirjen Perhubungan Darat Nomor Ap./0611/16/DRJD/2021 tertanggal 29 Juli 2021 yang diteken oleh Dirjen Perhubungan Darat Budi
                  Setiyadi.
                </p>
              </div>
            </div> -->
          </div>
        </div>
      </header>

      <section data-aos="fade-up">
          <div class="container">
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb')</li>
          </ol>
        </nav>
      </div>

      <!--Header-->
      <div class="container">
        <!-- Side widgets-->
        <div class="section-header mb-3 mt-3">
          <h1>@yield('judul')</h1>
        </div>
      </div>
      </section>

      @yield('content')
    
    </main>
    <!-- JavaScript Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
  </body>
</html>
