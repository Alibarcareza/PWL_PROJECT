@extends('layout.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-5.png)">
                <div class="carousel-container">
                    <div class="container">
                        <img src="{{ url('assets/img/logo.png') }}" class="animate__animated animate__fadeInDown" style="height: 300px; width: 300px;">
                        <h2 class="animate__animated animate__fadeInDown mt-3">Selamat Datang <span>@if (Auth::user()) {{ Auth::user()->nama_lengkap }} @endif</span></h2>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

          <div class="row content">
              <center>
                  <h2>Galery</h2>
              </center>
          </div>

        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-6">
                <h3>
                    test
                </h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <center>
                    <img src="{{ url('assets/img/activity-1.png') }}" alt="">
                </center>
            </div>
          </div>
          <hr>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-6">
                <center>
                    <img src="{{ url('assets/img/activity-2.png') }}" alt="">
                </center>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
            </div>
          </div>
          <hr>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-6">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <center>
                    <img src="{{ url('assets/img/activity-3.png') }}" alt="">
                </center>
            </div>
          </div>
        </div>
    </section>

     <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Ganendra Giri</h3>
              <p>
                Alamat <br>
                Alamat 2<br><br>
                <strong>Phone:</strong> nomor telepon<br>
                <strong>Email:</strong> email<br>
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Kontak</h3>
              <p>
                  <strong>Phone :</strong> nomor telepon<br>
                  <strong>Email :</strong> email<br>
                  <strong>Web   :</strong><a href="ganendragiri.web.id/"> Ganendra Giri web</a>
              </p>
            </div>
          </div>
          <div class="col-md-6">
              <div class="footer-info">
                  <h3 >Social Media</h3>
                  <div class="social-links mt-3">
                    <a href="https://mobile.twitter.com/ganendragiri" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://facebook.com/ganendra.giri.1?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/ganendragiripolinema" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCaE4Fa7cGnTFXBId9a5gu5A" class="youtube"><i class="bx bxl-youtube"></i></a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
@endsection
