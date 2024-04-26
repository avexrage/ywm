@extends('layouts.mainlayout')

@section('title', 'Login')

@section('content0')

<body class="bg-white">
    <div class="row">
        <div class="col text-center d-flex align-items-center justify-content-center" style="font-size: 100px; height: 85vh; font-weight:400">
            Login
        </div>
        <div class="col rounded-start-5 shadow-sm mb-4" style="height: 85vh; background-color: #EAFCE9">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="w-50 rounded px-3 py-3" style="box-shadow: none; background-color: #EAFCE9"">
                     <!-- Tampilkan kesalahan untuk 'email' -->
                     @if ($errors->any())
                     <div class="pt-1">
                         <div class="alert alert-danger">
                             <ul>
                                 @foreach ($errors->all() as $item)
                                     <li>{{ $item }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                     @endif

                    <form action="{{ route('actionlogin') }}" method="POST">
                    @csrf
                        <div class="mb-3  rounded" style="border: none;">
                            <label class=" form-label" for="email">Email</label>
                            <input type="email" value="{{ Session::get('email')}} " name="email" class="form-control" placeholder="Masukkan Email " >
                        </div>
                        <div class="mb-3 rounded" style="border: none;">
                            <label class="form-label" for="email">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password " >
                        </div>
                        <div></div>
                            <div class="my-3">
                                <label>Tidak punya akun? <a href="#" class="text-success link-underline-light">Daftar disini</a></label>
                            </div>
                            <button name="submit" type="submit" class="btn btn-success btn-fixed">Login</button>      
                    </form>
                </div>    
            </div>
        </div>
    </div>    
</body>



@endsection

