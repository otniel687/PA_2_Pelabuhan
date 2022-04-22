<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="{{asset('Img/logo.png')}} " />
        <title>Pelabuhan Mulia Raja Napitupulu</title>
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
          background-image: url("/img/home1.jpg");
          height: 80vh;  
          }
      </style>
        {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

</head>
     <body>
    <main>
      <div class="big-wrapper light">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <div class="logo-1">
              <img src="./img/logo.png" alt="Logo" />
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
      <header class="py-5 border-bottom bgimg header-judul mb-4">
        <div class="container ">
          <div class="row ">
            <div class="col-lg-7 bg-hover1">
              <div class="text-start my-5 ">
                <h1 class="fw-bolder ">Selamat Datang di Pelabuhan!</h1>
                <p class="lead mb-0">
                  Penetapan nama Pelabuhan Mulia Raja Napitupulu, berdasarkan Surat Kementerian Perhubungan Dirjen Perhubungan Darat Nomor Ap./0611/16/DRJD/2021 tertanggal 29 Juli 2021 yang diteken oleh Dirjen Perhubungan Darat Budi
                  Setiyadi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Page content-->
      <div class="container">
        <div class="row">
          <!-- Side widgets-->
          <div class="col-lg-5">
            <!-- Side widget-->
            <div class="card mb-4">
              <div class="card-body">
                <img class="card-img-top" width="400" height="350" src="img/home2.jpg" alt="..." />
              </div>
            </div>
          </div>
          <!-- Blog entries-->
          <div class="col-lg-7">
            <!-- Featured blog post-->
            <div class="mb-4 text-end">
              <div class="card-body">
                <h2 class="card-title">Tentang Pelabuhan</h2>
                <hr />
                <p class="card-text">
                  Pelabuhan Balige di Kabupaten Toba, Provinsi Sumatera Utara yang sejak dulu namanya tidak asing di seluruh nusantara, sebagai salahsatu pelabuhan penyeberangan vital di Danau Toba, kini namanya berganti menjadi Pelabuhan
                  Mulia Raja Napitupulu Balige. Lewat nama Mulia Raja Napitupulu yang mengandung arti dan makna besar, Bupati Toba Poltak Sitorus berharap pelabuhan ini akan kelak membawa dampak positif dan besar mendorong aspek pembangunan
                  kepariwisataan di Toba. Di samping itu, juga membawa mulia bagi keturunan marga Mulia Raja Napitupulu dan kemuliaan bagi Tuhan Yang Maha Kuasa.
                </p>
                <a class="btn btn-primary" href="#!">Read more →</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Page content-->
      <div class="container">
        <div class="row">
          <!-- Blog entries-->
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-9">
                <h2>Berita Terbaru</h2>
              </div>
              <div class="col-lg-3">
                <a href=""><p class="text-end text-warning">Berita Lainnya</p></a>
              </div>
            </div>
            <hr />

            <!-- Nested row for non-featured blog posts-->
            <div class="row">
              <div class="col">
                <!-- Blog post-->
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="img/pelabuhan1.jpg" class="img-fluid rounded-start img-lg" alt="..." />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Pelabuhan Balige Berganti Nama Menjadi Pelabuhan Mulia Raja Napitupulu Balige</h5>
                        <p class="card-text">Pelabuhan Balige di Kabupaten Toba, Provinsi Sumatra Utara, sejak dulu terkenal pelabuhan penyeberangan di Danau Toba..</p>
                        <hr />
                        <div class="row">
                          <div class="col">
                            <p class="card-text"><small class="text-muted">3 Agustus 2022</small></p>
                          </div>
                          <div class="col">
                            <a href=""><p class="text-end text-primary">Lihat Selengkapnya</p></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <!-- Blog post-->
                <div class="mb-3">
                  <div class="row">
                    <div class="col-md-4">
                      <img src="img/pelabuhan1.jpg" class="img-fluid rounded-start img-lg" alt="..." />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Peresmian Dan Pengoperasian Tujuh Pelabuhan Serta Empat Kapal Motor Penyeberangan Di Kawasan Danau Toba</h5>
                        <p class="card-text">Peresmian Dan Pengoperasian Tujuh Pelabuhan Serta Empat Kapal Motor Penyeberangan Di Kawasan Danau Toba</p>
                        <hr />
                        <div class="row">
                          <div class="col">
                            <p class="card-text"><small class="text-muted">12 Februari 2019</small></p>
                          </div>
                          <div class="col">
                            <a href=""><p class="text-end text-primary">Lihat Selengkapnya</p></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Side widgets-->
          <div class="col-lg-4">
            <!-- Side widget-->
            <div class="card mb-4">
              <div class="container">
                <h4 class="mt-2">Pengumuman Terbaru</h4>
                <hr />
                <div class="mb-3" style="max-width: 540px">
                  <div class="row g-0">
                    <div class="col">
                      <img src="img/Pengumuman1.jpeg" class="img-fluid rounded-start" alt="..." />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
