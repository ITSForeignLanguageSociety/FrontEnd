@extends('layouts.base')

@section('content')
    <section class="clean-block clean-hero section-blue" style="min-height: 900px; background: center center fixed; background-image:url('img/profile/bg profil ifls.png');color:rgba(0, 0, 0, 0);margin-top:17px;">
        <div class="text">
            <h2 class="title-text" style="margin-bottom: 0;"><strong>Meet Our Team</strong></h2>
            <h1 class="title-text"><strong>Kabinet Benzaiten</strong></h1>
        </div>
    </section>
    <section class="section clean-block container pt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="mb-3">
                    <img src="{{ asset('img/logo/logo.png') }}" style="height: 100px; background: #436d9d; border-radius: 50%" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="text-align: center">
                <h3 class="mb-4"><strong>Benzaiten</strong></h3>
                <p>
                <strong>
                    Dewi bagi segala sesuatu yang mengalir dan yang melimpahkan keuntungan.
                    Diharapkan kepengurusan Benzaiten dapat menjadi kepengurusan yang adaptif sesuai keadaan
                    serta dapat terus mengalirkan berbagai kontribusi dan prestasi demi memperoleh keuntungan
                    yang direncanakan
                </strong>
                </p>
            </div>
        </div>
        <div class="row mt-5 mb-4">
            <div class="col-lg-3 mb-3 d-flex justify-content-center align-items-center">
                <div class="nilai-card" style="width: 18rem; height: 12em;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>Ular Putih</strong></h5>
                        <p class="card-text">
                            Perasaan dan niat yang baik dan warna putih melambangkan kemurnian dan kesucian
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 mb-3 d-flex justify-content-center align-items-center">
                <div class="nilai-card" style="width: 18rem; height: 12em;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>Kipas</strong></h5>
                        <p class="card-text">
                            Kesejukan, rasa nyaman, dan kekeluargaan
                            dan warna hijau merupakan warna IFLS
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 mb-3 d-flex justify-content-center align-items-center">
                <div class="nilai-card" style="width: 18rem; height: 12em;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>Tebing</strong></h5>
                        <p class="card-text">
                            Kekokohan dan profesionalitas serta warna abu-abu
                            melambangkan ketegasan
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 mb-3 d-flex justify-content-center align-items-center">
                <div class="nilai-card" style="width: 18rem; height: 12em;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>Awan</strong></h5>
                        <p class="card-text">
                            Persatuan dari keragaman minat dan bakat yang ada di IFLS
                        </p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-3 mb-3 d-flex justify-content-center align-items-center">
                <div class="nilai-card" style="width: 18rem; height: 16em;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>Air Terjun</strong></h5>
                        <p class="card-text">
                            Melambangkan kepengurusan yang terus bergerak dan
                            berkontribusi serta gerakan air kebawah melambangkan
                            rasa rendah hati
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 mb-3 d-flex justify-content-center align-items-center">
                <div class="nilai-card" style="width: 18rem; height: 16em;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>5 Kerangka Kipas</strong></h5>
                        <p class="card-text">
                            Melambangkan 5 divisi dan 5 departemen IFLS sebagai fondasi
                            rasa nyaman dan kekeluargaan di IFLS
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 mb-3 d-flex justify-content-center align-items-center">
                <div class="nilai-card" style="width: 18rem; height: 16em;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><strong>5 Aliran Air Terjun</strong></h5>
                        <p class="card-text">
                            Melambangkan 5 divisi dan 5 departemen IFLS yang bergerak
                            fleksibel dan adaptif mengikuti alur air terjun
                        </p>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <section class="clean-block section-blue pt-5" style="margin-top:17px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 px-5">
                    <div class="card">
                        <h2>Visi</h2>
                    </div>
                </div>
                <div class="col-lg-2">
                    <img class="pengurus-card" src="{{ asset('img/profile/pengurus/profil-10.png') }}" alt="">
                </div>
                <div class="col-lg-5 px-5">
                    <div class="card">
                        <h2>Misi</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-07.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-08.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-09.png') }}" alt="" class="pengurus-card">
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-20.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-19.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-18.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-17.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-16.png') }}" alt="" class="pengurus-card">
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-11.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-12.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-13.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-14.png') }}" alt="" class="pengurus-card">
                </div>
                <div class="col-lg-2">
                    <img src="{{ asset('img/profile/pengurus/profil-15.png') }}" alt="" class="pengurus-card">
                </div>
            </div>
        </div>
    </section>
@endsection
