@extends('layouts.mainlayout')

@section('title', 'Login')

@section('content0')

<body class="bg-white">
    <div class="row">
        <div class="col text-center d-flex align-items-center justify-content-center" style="font-size: 94px; height: 85vh; font-weight:400">
            Login
        </div>
        <div class="col rounded-start-5 shadow-sm mb-4" style="height: 85vh; background-color: #EAFCE9">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="w-50 rounded px-3 py-3" style="box-shadow: none; background-color: #EAFCE9"">
                    <form action="{{ route('actionlogin') }}" method="POST">
                    @csrf
                        <div class="mb-3 p-3 rounded" style="border: none;">
                            <label class="mb-3">Email atau Nomor HP</label>
                            <input type="text" name="identifier" class="form-control" placeholder="Email atau Nomor HP" >
                            <div class="my-3">
                                <label>Tidak punya akun? <a href="#" class="text-success link-underline-light">Daftar disini</a></label>
                            </div>
                            <button name="submit" type="submit" class="btn btn-success btn-fixed">Login</button>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>    
</body>



@endsection

