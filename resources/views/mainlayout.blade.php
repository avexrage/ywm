<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Yayasan Wredha Mulya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-white {
    background-color: white !important;
    }
    
    .navbar-brand-vertical {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    
    .navbar-brand-vertical .brand-top,
    .navbar-brand-vertical .brand-bottom {
        line-height: 1;
    }
    
    .navbar-brand-vertical .brand-top,
    .navbar-brand-vertical .brand-bottom {
        font-size: 1rem;
    }
    
    .custom-margin {
        margin-right: 50px; /* Jarak ke menu navigasi */
    }
    
    .navbar-nav {
        display: flex; /* Menjadikan ul sebagai flex container */
        align-items: center; /* Menyelaraskan item di tengah secara vertikal */
        gap: 20px; /* Memberikan jarak antar item menu */
    }
    .button-container {
    display: flex;
    gap: 10px; /* Menambahkan jarak antar tombol */
    }
    
    .btn-fixed {
        width: 120px; /* Atau gunakan min-width jika Anda ingin memastikan tombol tidak lebih kecil dari lebar tertentu tetapi bisa lebih besar jika isi teksnya membutuhkan */
        text-align: center; /* Membuat teks berada di tengah tombol */
    }
    .fullscreen-image {
    width: 100%; /* Menjadikan lebar gambar penuh sesuai viewport */
    height: 100vh; /* Menyetel tinggi gambar sesuai tinggi viewport */
    object-fit: cover; /* Memastikan gambar menutupi seluruh area yang tersedia */
    }
    .daftar-sekarang {
    position: absolute;
    top: 75%; /* Posisi dari atas ke tengah */
    left: 50%; /* Posisi dari kiri ke tengah */
    transform: translate(-50%, -50%); /* Menggeser button agar tepat berada di tengah */
    z-index: 10; /* Memastikan button berada di atas gambar */
    }
    .program-section {
    padding: 100px 100px 20px 100px;
    }
    .program-section .head-container {
    text-align: center;
    margin-bottom: 50px;
    }
    .program-section .head-container .title {
    font-size: 38px;
    font-family: "Playfair Display", serif;
    font-weight: 800;
    text-transform: capitalize;
    }
    .program-section .head-container .subtitle {
    font-size: 18px;
    }
    .program-section .body-container {
    display: flex;
    flex-direction: column;
    gap: 30px;
    }
    .program-section .body-container .program-item {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    }
    .custom-img-fit {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    }
    .program-section .body-container .program-item .image-box {
    width: 450px;
    height: 300px;
    border-radius: 20px;
    overflow: hidden;
    }
    .program-section .body-container .program-item .desc-box {
    min-width: 300px;
    width: 50%;
    display: flex;
    flex-direction: column;
    gap: 10px;
    }
    .program-section .body-container .program-item .desc-box .title {
    font-size: 24px;
    text-transform: capitalize;
    font-weight: 700;
    font-family: "Playfair Display", serif;
    }
    .program-section .body-container .program-item .desc-box .desc {
    font-size: 16px;
    display: -webkit-box;
    overflow: hidden;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 8;
    }
    .program-section .body-container .program-item .desc-box .program-item_btn {
    font-size: 16px;
    color: #33B5E5;
    }
    .program-section .body-container .program-item .desc-box .program-item_btn i {
    margin-left: 5px;
    }
    .program-section .body-container .program-item:nth-child(even) {
    flex-direction: row-reverse;
    }
    
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-light fixed-top navbar-white">
        <div class="container-fluid">
            <a href="/"><img src="{{ asset('ikon/ywm.jpg') }}" alt="Yayasan Wredha Mulya Logo" width="70" height="64" class="me-auto"></a>
            <a class="navbar-brand navbar-brand-vertical text-success custom-margin" href="/">
                <span class="brand-top">Yayasan</span>
                <span class="brand-bottom">Wredha Mulya</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#Program">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#Fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-success" href="#Kontak Kami">Kontak Kami</a>
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
    <section class="beranda">
        <div>
            <img src="{{ asset('ikon/beranda.jpeg') }}" class="d-block fullscreen-image" alt="Gambar Beranda">
        </div>
        <div class="daftar-sekarang">
        <button type="button" class="btn btn-success">Daftar Sekarang</button>
        </div>
    </section>
     <!-- Program Section Start -->
<section class="program-section" id="program">
    <div class="head-container">
        <div class="title">program kami</div>
        <div class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
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
                <div class="title">grha wredha mulya</div>
                <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio earum saepe impedit delectus doloribus? Aperiam dolore ducimus voluptatibus sapiente perspiciatis pariatur maxime numquam illum suscipit alias, at, deleniti molestiae consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore debitis quibusdam natus cupiditate deserunt iure voluptates molestias sed eum libero.</div>
                <a href="#" class="program-item_btn">learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="program-item">
            <div class="image-box">
                <img src="{{ asset('ikon/posyandu.jpeg') }}" alt="" class="custom-img-fit">
            </div>
            <div class="desc-box">
                <div class="title">grha wredha mulya</div>
                <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio earum saepe impedit delectus doloribus? Aperiam dolore ducimus voluptatibus sapiente perspiciatis pariatur maxime numquam illum suscipit alias, at, deleniti molestiae consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, itaque!</div>
                <a href="#" class="program-item_btn">learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="program-item">
            <div class="image-box">
                <img src="{{ asset('ikon/paguyuban.jpeg') }}" alt="" class="custom-img-fit">
            </div>
            <div class="desc-box">
                <div class="title">grha wredha mulya</div>
                <div class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio earum saepe impedit delectus doloribus? Aperiam dolore ducimus voluptatibus sapiente perspiciatis pariatur maxime numquam illum suscipit alias, at, deleniti molestiae consectetur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur exercitationem atque quasi eaque, hic dolorum facere ea vitae dolorem eligendi voluptas magni officiis modi mollitia?</div>
                <a href="#" class="program-item_btn">learn more <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
