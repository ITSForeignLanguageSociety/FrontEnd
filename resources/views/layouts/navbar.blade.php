<nav class="navbar navbar-light navbar-expand-lg fixed-top clean-navbar" style="padding-top: 3px;padding-bottom: 3px;background-color: #e3faff;">
    <div class="container"><a class="navbar-brand logo" href="#">
            <div class="row">
                <div class="col-3" style="padding: 0;"><img src={{ asset('img/logo/logo.png') }} style="width: 5rem;height: 5rem;"></div>
                <div class="col-6" style="padding-top: 22px;">
                    <div class="row">
                        <h6 style="margin-bottom: 0;font-weight: bold;">Kabinet Benzaiten</h6>
                    </div>
                    <div class="row">
                        <h6>ITS Foreign Language Society</h6>
                    </div>
                </div>
            </div>
        </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link {{ (Request::is('/')) ? 'active' : '' }}" style="text-transform: none; font-size: 0.9rem;" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ (Request::is('profile')) ? 'active' : '' }}" style="text-transform: none; font-size: 0.9rem;" href="{{ url('/profile') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link" style="text-transform: none; font-size: 0.9rem;" href="#">Divisi</a></li>
                <li class="nav-item"><a class="nav-link" style="text-transform: none; font-size: 0.9rem;" href="#">Prestasi</a></li>
                <li class="nav-item"><a class="nav-link" style="text-transform: none; font-size: 0.9rem;" href="#">Big Event</a></li>
                <li class="nav-item"><a class="nav-link" style="text-transform: none; font-size: 0.9rem;" href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
