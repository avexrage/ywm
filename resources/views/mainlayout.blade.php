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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
