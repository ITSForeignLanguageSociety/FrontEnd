@extends('layouts.base')

@section('content')
    <section class="clean-block clean-hero" style="background-image:url(&quot;img/heading.jpg&quot;);color:rgba(0, 0, 0, 0);margin-top:17px;">
        <div class="text">
            <h2 class="title-text" style="margin-bottom: 0;">Welcome To</h2>
            <h1 class="title-text">ITS Foreign Language Society</h1>
            <div class="row">
                <div class="col-3">
                    <hr class="heading-line">
                </div>
                <div class="col-6">
                    <h2 class="title-text">Official Website</h2>
                </div>
                <div class="col-3">
                    <hr class="heading-line">
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info" style="background-color: #436d9d;">
        <div class="container">
            <div class="block-heading">
                <h2 class="mb-5 section-title">Tentang IFLS</h2>
                <div class="row">
                    <div class="col-2"><img class="about-decor" src="img/decor/decor1.png"></div>
                    <div class="col-8">
                        <p class="section-para" id="about-text">ITS Foreign Language Society atau IFLS merupakan sebuah Unit Kegiatan Mahasiswa ITS yang bergerak dalam bidang pengembangan kemampuan bahasa dan budaya asing yang meliputi Bahasa dan budaya dari negara Inggris, Korea, dan Jepang. IFLS juga mengadakan beberapa acara eksternal seperti K-Fest dan Inochi serta berbagai kegiatan internal yang bertujuan dalam pengembangan anggota.</p>
                    </div>
                    <div class="col-2"><img class="about-decor" src="img/decor/decor2.png"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block" style="padding-top: 100px;">
        <div class="container">
            <div class="simple-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row slide-content-wrapper">
                                <div class="col-lg-7 justify-content-center align-items-center d-flex mb-5">
                                    <img class="slide-content-img" src="img/blog/dueling.png">
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <h2 style="font-weight: bold;">Pertemuan Rutin Dueling Cards</h2>
                                    </div>
                                    <div class="row">
                                        <h4>Dueling cards atau yang biasa disingkat dengan DC merupakan salah satu divisi dari ITS Foreign Language Society (IFLS)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row slide-content-wrapper">
                                <div class="col-lg-7 justify-content-center align-items-center d-flex mb-5">
                                    <img class="slide-content-img" src="img/blog/ijca.png"></div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <h2 style="font-weight: bold;">Tak Hanya Kelas, IJCA juga Adakan Workshop</h2>
                                    </div>
                                    <div class="row">
                                        <h4>Bahasa Jepang adalah salah satu bahasa yang paling dikenal di dunia. Besarnya pengaruh yang dimiliki oleh negara Jepang disebabkan oleh media anime, manga</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row slide-content-wrapper">
                                <div class="col-lg-7 justify-content-center align-items-center d-flex mb-5">
                                    <img class="slide-content-img" src="img/blog/ids.png"></div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <h2 style="font-weight: bold;">IDS: Prestasi Tak Berhenti Walau Masa Pandemi</h2>
                                    </div>
                                    <div class="row">
                                        <h4>Pandemi Covid-19 yang melanda dunia sejak 2019 lalu dan masih menjadi isu yang relevan hingga sekarang memberi impak yang sangat besar</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row slide-content-wrapper">
                                <div class="col-lg-7 justify-content-center align-items-center d-flex mb-5">
                                    <img class="slide-content-img" src="img/blog/korean.png"></div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <h2 style="font-weight: bold;">Know More About IFLS Hanmuanhwaae (한문화애)</h2>
                                    </div>
                                    <div class="row">
                                        <h4>Mulai tahun 2021, Divisi Korea IFLS memiliki nama, yaitu IFLS Hanmunhwaee. Nama ini memiliki arti yang unik karena akronim dari 한국 문화 애호가 (Hanguk Munhwa Aehoga)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block" style="background-color: #436d9d;">
        <div class="container">
            <div class="block-heading">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center mb-3" style="background-image:url(&quot;img/decor/lokasi.png&quot;);color:rgba(0, 0, 0, 0);background-repeat: no-repeat;height: 400px;">
                        <div>
                            <h2 class="section-title">Alamat IFLS</h2>
                            <p class="section-para">Institut Teknologi Sepuluh Nopember</p>
                            <p class="section-para">Gedung SCC Lantai 3</p>
                            <p class="section-para">Ruang No. 308</p>
                            <p class="section-para">Sukolilo, Surabaya</p>
                            <p class="section-para">Indonesia 60111</p>
                        </div>
                    </div>
                    <div class="col-md-6"><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyBDKQF8DPcwDhIKXC9eWO5QFBLKoKRNDQ4&amp;center=-7.2833779%2C112.7934303&amp;zoom=19" width="100%" height="400"></iframe></div>
                </div>
            </div>
        </div>
    </section>
@endsection
