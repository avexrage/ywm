@extends('layouts.mainlayout')

@section('title', 'Pilihan Program')

@section('content2')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Grha Wredha Mulya</h5>
          <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sunt illum, ad deleniti maxime pariatur tempore ipsa rem incidunt perferendis, exercitationem nobis voluptates itaque similique, eum animi delectus minima. Eius?</p>
          <a href="{{ route('form.create', ['program' => 'Grha Wredha Mulya']) }}" id="daftargrha" class="btn btn-success">Daftar Sekarang</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Day Care</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequuntur, similique quibusdam cum possimus odio repudiandae illo sapiente saepe officiis, accusamus perferendis magnam sequi eligendi enim vitae pariatur corporis non?</p>
          <a href="{{ route('form.create', ['program' => 'Day Care']) }}" id="daftarday" class="btn btn-success">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</div>
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
