@extends('layouts.web')
@section('title', 'Berita | Pelabuhan Mulia Raja Napitupulu')
@section('breadcrumb', 'Berita')
@section('judul', 'Berita Pelabuhan')
@section('content')
        <div class="container">
      <div class="row justify-content-md-center">
        <!-- Blog entries-->
        <div class="col-lg-10 ">
          <!-- Nested row for non-featured blog posts-->
          <div class="row">
            <div class="col-lg-6">
              <!-- Blog post-->
              <div class="card mb-4">
                <a href="#!"><img class="card-img-top" width="400" height="250"  src="img/pelabuhan1.jpg" alt="..." /></a>
                <div class="card-body mb-3">
                  <div class="small text-muted">3 Agustus 2021</div>
                  <h2 class="card-title h4">Pelabuhan Balige Berganti Nama Menjadi Pelabuhan Mulia Raja Napitupulu Balige</h2>
                  <p class="card-text">Pelabuhan Balige di Kabupaten Toba, Provinsi Sumatra Utara, sejak dulu terkenal pelabuhan penyeberangan di Danau Toba,berganti nama menjadi Pelabuhan Mulia Raja Napitupulu Balige.</p>
                  <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
              </div>
              <!-- Blog post-->
              <div class="card mb-4">
                <a href="#!"><img class="card-img-top" width="400" height="250"  src="img/pelabuhan2.jpg" alt="..." /></a>
                <div class="card-body mb-3">
                  <div class="small text-muted">18 Desember 2021</div>
                  <h2 class="card-title h4">Pembangunan Terminal Pelabuhan Mulia Raja Napitupulu Balige, Mulai Rampung</h2>
                  <p class="card-text">Toba.Internationalmedia.id.-Pembangunan gedung terminal pelabuhan Mulia Raja Napitupulu Balige tahap III di Kabupaten Toba Provinsi Sumatra Utara, akan segera rampung akhir tahun ini. </p>
                  <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Blog post-->
              <div class="card mb-4" >
                <a href="#!"><img class="card-img-top" width="400" height="250"  src="img/pelabuhan3.jpg" alt="..." /></a>
                <div class="card-body mb-3">
                  <div class="small text-muted">2 Februari 2022</div>
                  <h2 class="card-title h4">Peresmian Dan Pengoperasian Tujuh Pelabuhan Serta Empat Kapal Motor Penyeberangan Di Kawasan Danau Toba</h2>
                  <p class="card-text">Hari ini, tujuh pelabuhan penyeberangan di Kawasan Danau Toba sudah selesai dibangun dan bisa dimanfaatkan oleh masyarakat. </p>
                  <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
              </div>
              <!-- Blog post-->
              <div class="card mb-4">
                <a href="#!"><img class="card-img-top" width="400" height="250" src="img/pelabuhan4.jpeg" alt="..." /></a>
                <div class="card-body mb-3">
                  <div class="small text-muted">November 19, 2019</div>
                  <h2 class="card-title h4">Pelabuhan Penyeberangan Balige Terus Dikerjakan</h2>
                  <p class="card-text">TOBA SAMOSIR (BeritaTrans.com) - Pembangunan pelabuhan penyeberangan di Balige terus dikerjakan. Pelabuhan akan menjadi tempat sandaran salah satu kapal penyeberangan yang dibuat di galangan kapal di Desa Parparean, Kecamatan Porsea, Kabupaten Toba Samosir (Tobasa).</p>
                  <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Pagination-->
          <nav aria-label="Pagination">
            <hr class="my-0" />
            <ul class="pagination justify-content-center my-4">
              <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
              <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
              <li class="page-item"><a class="page-link" href="#!">15</a></li>
              <li class="page-item"><a class="page-link" href="#!">Older</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
@endsection