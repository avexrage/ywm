<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Wredha Mulya | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-light fixed-top navbar-white">
        <div class="container-fluid">
            <a><img src="{{ asset('ikon/ywm.jpg') }}" alt="Yayasan Wredha Mulya Logo" width="70" height="64" class="me-auto"></a>
            <a class="navbar-brand navbar-brand-vertical text-success custom-margin" href="/#beranda">
                <span class="brand-top">Yayasan</span>
                <span class="brand-bottom">Wredha Mulya</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav"> 
                    <li class="nav-item">
                        <a class="nav-link text-success" href="/#program">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-success" href="/#fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-success" href="/#kontakkami">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-success" href="/pilihan-program">Pendaftaran</a>
                    </li>
                </ul> 
            </div>
            <div class="button-container">
                <button type="button" class="btn btn-success btn-fixed" onclick="window.location='{{ route('login') }}'">Login</button>
                <button type="button" class="btn btn-outline-success btn-fixed">Register</button>
            </div>
        </div>
    </nav>
<div id="main-content">
    @yield('content1')
        <div class="pt-5 mt-5">
            @yield('content2')
                <div class="mt-1">
                @yield('content3')
                    <div class="mt-1">
                    @yield('content4')
                        <div class="mt-1">
                            @yield('content0')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kontak Kami -->
<section id="kontakkami" class="bg-white shadow">
  <div id="notification" style="display: none;">Email berhasil dicopy!</div>

  <div class="container ">
    <footer class="py-0">
      <div class="row">
        <!-- Navigasi di sisi kiri -->
        <div class="col-md-8">
          <ul class="nav">
            <li class="nav-item"><a href="https://www.youtube.com/@wredhamulyatv2114" class="nav-link px-2 text-body-secondary"><i class="bi bi-youtube"></i></a></li>
            <li class="nav-item"><a href="https://wa.me/+6282223550029" class="nav-link px-2 text-body-secondary"><i class="bi bi-whatsapp"></i></a></li>
            <li class="nav-item"><a href="https://www.instagram.com/ywm_yogyakarta2023" class="nav-link px-2 text-body-secondary"><i class="bi bi-instagram"></i></a></li>
            <li class="nav-item"><a href="#" id="copy-email" data-email="wredhamulya@gmail.com" class="nav-link px-2 text-body-secondary"><i class="bi bi-envelope-open"></i></a></li>
            <li class="nav-item"><a href="https://www.facebook.com/profile.php?id=61550851776071&locale=id_ID" class="nav-link px-2 text-body-secondary"><i class="bi bi-facebook"></i></a></li>
          </ul>
        </div>
        <!-- Google Maps di sisi kanan -->
        <div class="col-md-4">
            <div class="map-and-address d-flex">
                <div class="map-container flex-grow-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1607269115775!2d110.36800507500483!3d-7.772775492246635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58490c876c3b%3A0x9fff4c9758d746cc!2sYayasan%20Wredha%20Mulya%20Yogyakarta!5e0!3m2!1sid!2sid!4v1712739229389!5m2!1sid!2sid" frameborder="0" style="width: 100%; height: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"> </iframe>
                </div>
                <div id="teks-alamat" class="ms-3">
                Jl. Sendowo B G, RT.13/RW.56, Sendowo, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                </div>
            </div>
        </div>
      <p class="text-center text-body-secondary ">&copy; 2024 Created by Maulana Faris</p>
    </footer>
  </div>
</section>

<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>