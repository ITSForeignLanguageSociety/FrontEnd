@extends('layouts.base')

@section('content')
    <section class="clean-block clean-hero section-blue" style="background-image:url('img/profile/Asset Profil-08.png');color:rgba(0, 0, 0, 0);margin-top:17px;">
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
                    <div class="card">
                        <img class="pengurus-card" src="{{ asset('img/profile/pengurus/Yustinus_BPI_2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 px-5">
                    <div class="card">
                        <h2>Misi</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Fathimah Aulia_BPI_4.png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Vita VP_BPI_ (1).png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Arkan_03.png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/alhafiz 1.png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Fischa Indaya Bathari 01.png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Dyah Ayu Farah Anggraeni_Eksternal_1.png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Rosita Laili Udhiah_Kominfo_ 2.png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Aurelius Dilectio Y.D._MI_2.png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Omahira Al Kahfi_IDS_ (3).png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Aras_DC_ (1).png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Vira Varicha Rahmatya_Korea_2.png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Brahmasta Jalu Damara_IJCA_ (3).png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card">
                        <img src="{{ asset('img/profile/pengurus/Arianto Bagus W_IC_ (2).png') }}" alt="" class="pengurus-card">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
