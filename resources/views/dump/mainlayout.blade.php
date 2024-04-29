<div class="button-container">
    @guest
        <button type="button" class="btn btn-success btn-fixed" onclick="window.location='{{ route('login') }}'">Login</button>
        <button type="button" class="btn btn-outline-success btn-fixed">Register</button>
    @endguest
    @auth
        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user"></i> {{ Auth::user()->email }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item">Riwayat</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
        </div>
    @endauth
</div>