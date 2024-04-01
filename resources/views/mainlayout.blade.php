<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Yayasan Wredha Mulya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
     <!-- Program -->
<section class="program-section" id="program">
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
     <section class="facility-section" id="facility">
        <div class="head-container">
            <div class="title">fasilitas kami</div>
        </div>
        <div class="body-container">
            <div class="fac-item">
                <div class="head-title">
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, aut!</span>
                </div>
            </div>
            <div class="fac-item">
                <div class="head-title">
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, perspiciatis.</span>
                </div>
            </div>
            <div class="fac-item">
                <div class="head-title">
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, id corrupti! Accusamus, cum? Voluptatibus, adipisci!</span>
                </div>
            </div>
            <div class="fac-item">
                <div class="head-title">
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores corporis inventore minima assumenda? Aliquam labore voluptatem repellat reprehenderit assumenda nobis dolore totam, quibusdam rem maiores?</span>
                </div>
            </div>
            <div class="fac-item">
                <div class="head-title">
                    <h2>Lorem, ipsum.</h2>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, laudantium commodi possimus dolorem deleniti.</span>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
