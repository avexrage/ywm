<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Yayasan Wredha Mulya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-light fixed-top navbar-white">
        <div class="container-fluid">
            <a href="/"><img src="{{ asset('ikon/ywm.jpg') }}" alt="Yayasan Wredha Mulya Logo" width="70" height="64" class="me-auto"></a>
            <a class="navbar-brand navbar-brand-vertical text-success custom-margin" href="#beranda">
                <span class="brand-top">Yayasan</span>
                <span class="brand-bottom">Wredha Mulya</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav"> 
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#program">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#kontakkami">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#Pendaftaran">Pendaftaran</a>
                    </li>
                </ul> 
            </div>
            <div class="button-container">
                <button type="button" class="btn btn-success btn-fixed">Login</button>
                <button type="button" class="btn btn-outline-success btn-fixed">Register</button>
            </div>
        </div>
    </nav>

  <!-- Beranda -->
  <section class="beranda" id="beranda">
        <div>
            <img src="{{ asset('ikon/beranda.jpeg') }}" class="d-block fullscreen-image" alt="Gambar Beranda">
        </div>
        <div class="daftar-sekarang">
            <button type="button" class="btn btn-success">Daftar Sekarang</button>
        </div>
  
      </section>

  <!-- Program -->
    <section class="program-section bg-light" id="program">
        <div class="head-container">
            <div class="title">program kami</div>
        </div>
        <div class="body-container">
            <div class="program-item">
                <div class="image-box">
                    <img src="{{ asset('ikon/grha.jpeg') }}" alt="" class="custom-img-fit">
                </div>
                <div class="desc-box">
                    <div class="title">grha wredha mulya</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio earum saepe impedit delectus doloribus? Aperiam dolore ducimus voluptatibus sapiente perspiciatis pariatur maxime numquam illum suscipit alias, at, deleniti molestiae consectetur.</div>
                    <a href="#" class="program-item_btn">learn more <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-item">
                <div class="image-box">
                    <img src="{{ asset('ikon/daycare.jpeg') }}" alt="" class="custom-img-fit">
                </div>
                <div class="desc-box">
                    <div class="title">day care</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio earum saepe impedit delectus doloribus? Aperiam dolore ducimus voluptatibus sapiente perspiciatis pariatur maxime numquam illum suscipit alias, at, deleniti molestiae consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore debitis quibusdam natus cupiditate deserunt iure voluptates molestias sed eum libero.</div>
                    <a href="#" class="program-item_btn">learn more <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-item">
                <div class="image-box">
                    <img src="{{ asset('ikon/posyandu.jpeg') }}" alt="" class="custom-img-fit">
                </div>
                <div class="desc-box">
                    <div class="title">posyandu</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio earum saepe impedit delectus doloribus? Aperiam dolore ducimus voluptatibus sapiente perspiciatis pariatur maxime numquam illum suscipit alias, at, deleniti molestiae consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque!</div>
                    <a href="#" class="program-item_btn">learn more <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="program-item">
                <div class="image-box">
                    <img src="{{ asset('ikon/paguyuban.jpeg') }}" alt="" class="custom-img-fit">
                </div>
                <div class="desc-box">
                    <div class="title">paguyuban</div>
                    <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio earum saepe impedit delectus doloribus? Aperiam dolore ducimus voluptatibus sapiente perspiciatis pariatur maxime numquam illum suscipit alias, at, deleniti molestiae consectetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur exercitationem atque quasi eaque, hic dolorum facere ea vitae dolorem eligendi voluptas magni officiis modi mollitia?</div>
                    <a href="#" class="program-item_btn">learn more <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
    </div>
</section>
  <!-- Fasilitas -->
<section class="fasilitas-section bg-light" id="fasilitas">
    <div class="head-container">
        <div class="title">fasilitas kami</div></div>
<div class="container">
  <div class="d-flex flex-wrap justify-content-center">
        <div class="flex-fill p-2">
          <img src="{{ asset('ikon/convention.png') }}" class="img-fluid " alt="Fasilitas 1">
          <p class="text-center">Aula</p>
        </div>
        <div class="flex-fill p-2">
          <img src="{{ asset('ikon/bookshelf.png') }}" class="img-fluid" alt="Fasilitas 2">
          <p class="text-center">Perpustakaan</p>
        </div>
        <div class="flex-fill p-2">
          <img src="{{ asset('ikon/guesthouse.png') }}" class="img-fluid" alt="Fasilitas 3">
          <p class="text-center">Guest House</p>
        </div>
        <div class="flex-fill p-2">
          <img src="{{ asset('ikon/garden.png') }}" class="img-fluid" alt="Fasilitas 4">
          <p class="text-center">Taman Hijau</p>
        </div>
        <div class="flex-fill p-2">
          <img src="{{ asset('ikon/free-wifi (1).png') }}" class="img-fluid" alt="Fasilitas 5">
          <p class="text-center">Free Wi-Fi</p>
        </div>
  </div>
</div>
    </section>
<!-- Asuransi -->
<section class="asuransi-section mb-5" id="asuransi">
    <div class="head-container">
        <div class="title text-center mb-5">Kami Menerima Segala Jenis Asuransi</div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Gambar 1-4 -->
            <div class="col-3 p-2">
                <img src="{{ asset('ikon/a-bpjs.png') }}" class="img-fluid img-border" alt="asuransi 1">
            </div>
            <div class="col-3 p-2">
                <img src="{{ asset('ikon/a-jasin.jpg') }}" class="img-fluid img-border" alt="asuransi 2">
            </div>
            <div class="col-3 p-2">
                <img src="{{ asset('ikon/a-jmas.png') }}" class="img-fluid img-border" alt="asuransi 3">
            </div>
            <div class="col-3 p-2">
                <img src="{{ asset('ikon/a-jwsr.png') }}" class="img-fluid img-border" alt="asuransi 4">
            </div>
            <!-- Gambar 5-8 -->
            <div class="col-3 p-2">
                <img src="{{ asset('ikon/a-prud.png') }}" class="img-fluid" alt="asuransi 5">
            </div>
            <div class="col-3 p-2">
                <img src="{{ asset('ikon/a-simas.png') }}" class="img-fluid" alt="asuransi 6">
            </div>
            <div class="col-3 p-2">
                <img src="{{ asset('ikon/a-videi.png') }}" class="img-fluid" alt="asuransi 7">
            </div>
            <div class="col-3 p-2">
                <img src="{{ asset('ikon/a-astra.png') }}" class="img-fluid" alt="asuransi 8">
            </div>
            <!-- Tambahkan 3 gambar lagi di sini dengan kelas col-3 untuk masing-masing -->
        </div>
    </div>
</section>

<!-- Kontak Kami -->
<section id="kontakkami">
<div id="notification" style="display: none;">Email berhasil dicopy!</div>

<div class="container-fluid bg-light">
    <footer class="py-5">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="https://www.youtube.com/@wredhamulyatv2114" class="nav-link px-2 text-body-secondary"><i class="bi bi-youtube"></i></a></li>
            <li class="nav-item"><a href="https://wa.me/+6282223550029" class="nav-link px-2 text-body-secondary"><i class="bi bi-whatsapp"></i></a></li>
            <li class="nav-item"><a href="https://www.instagram.com/ywm_yogyakarta2023" class="nav-link px-2 text-body-secondary"><i class="bi bi-instagram"></i></a></li>
            <li class="nav-item"><a href="#" id="copy-email" data-email="wredhamulya@gmail.com" class="nav-link px-2 text-body-secondary"><i class="bi bi-envelope-open"></i></a></li>
            <li class="nav-item"><a href="https://www.facebook.com/profile.php?id=61550851776071&locale=id_ID" class="nav-link px-2 text-body-secondary"><i class="bi bi-facebook"></i></a></li>
        </ul>

        <p class="text-center text-body-secondary">&copy; 2024 Created by Maulana Faris</p>
    </footer>
</div>
</section>

<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

FC

'tlahir' => $request->tlahir,
'tgllhr' => $request->tgllhr,
'kelamin' => $request->kelamin,
'agama' => $request->agama,
'statusNikah' => $request->statusNikah,
'pekerjaan' => $request->pekerjaan,
'hobi' => $request->hobi,
'keahlian' => $request->keahlian,
'bahasa' => $request->bahasa,

DP



Mgrt

$table->string('tempat_lahir', 30)->nullable();
$table->date('tanggal_lahir')->nullable();
$table->string('jenis_kelamin')->default(Kelamin::Male->value);
$table->string('agama')->default(Agama::Islam->value);
$table->string('status')->default(StatusKawin::Single->value);
$table->string('pekerjaan', 30)->nullable();
$table->string('hobi', 30)->nullable();
$table->string('keahlian', 30)->nullable();
$table->string('bahasa', 30)->nullable();