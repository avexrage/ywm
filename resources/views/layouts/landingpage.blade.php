@extends('layouts.mainlayout')
@section('title', 'Beranda')
@section('content1')
@include('layouts.pesan')

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
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2">
                <img src="{{ asset('ikon/a-bpjs.png') }}" class="img-fluid img-border " alt="asuransi 1">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2">
                <img src="{{ asset('ikon/a-jasin.jpg') }}" class="img-fluid img-border" alt="asuransi 2">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2">
                <img src="{{ asset('ikon/a-jmas.png') }}" class="img-fluid img-border" alt="asuransi 3">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2">
                <img src="{{ asset('ikon/a-jwsr.png') }}" class="img-fluid img-border" alt="asuransi 4">
            </div>
            <!-- Gambar 5-8 -->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2">
                <img src="{{ asset('ikon/a-prud.png') }}" class="img-fluid" alt="asuransi 5">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2">
                <img src="{{ asset('ikon/a-simas.png') }}" class="img-fluid" alt="asuransi 6">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2">
                <img src="{{ asset('ikon/a-videi.png') }}" class="img-fluid" alt="asuransi 7">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 p-2">
                <img src="{{ asset('ikon/a-astra.png') }}" class="img-fluid" alt="asuransi 8">
            </div>
        </div>
    </div>
</section>

@endsection
