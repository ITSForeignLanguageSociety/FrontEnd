@extends('layouts.base')

@section('content')
<section class="clean-block section-blue" style="min-height: 900px; background: center center fixed; background-image:url('/img/divisi/ijca-banner.png'); margin-top:17px;">
    <div class="container" style="padding-top: 12em">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="row mb-4 px-4">
                    <h1 class="divisi-title divisi-title-white text-uppercase">Dueling Cards</h1>
                </div>
                <div class="row px-4">
                    <p class="divisi-desc text-white">
                        Dueling Card atau yang biasa disingkat dengan DC merupakan salah satu divisi dari ITS Foreign Languange Society (IFLS),
                        dimana divisi tersebut ditujukan untuk saling bertukar kegemaran dan pengetahuan tentang permainan kartu antara para anggota dan staff.
                        Dalam setiap pertemuan, divisi Dueling Card melakukan berdiskusi dengan durasi selama kurang lebih dua jam.
                        Untuk saat ini, dikarenakan harus melakukan pertemuan secara online,
                        maka divisi ini bertemu dengan menggunakan platform Discord dan Google Meet.
                    </p>
                    <p class="divisi-desc text-white">
                        Kegiatan Dueling Card ngapain saja? Nah, sesuai dengan namanya, para anggota dan staff saling berbagi tentang permainan kartu,
                        yang disebut dengan Trading Card Game. Selain demo dan pelatihan, juga terkadang diberi pengetahuan umum tersebut mencakup pengertian,
                        alasan kenapa diberikan nama itu, dan juga jenis-jenis permainan kartu.
                        Untuk informasi tambahan, trading card game terdapat dua jenis, yakni kartu fisik asli dan permainan aplikasi kartu.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <img class="divisi-img" src="{{ asset('img/divisi/dc.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
