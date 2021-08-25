@extends('layouts.base')

@section('content')
<section class="clean-block section-blue" style="min-height: 900px; background: center center fixed; background-image:url('/img/divisi/ijca-banner.png'); margin-top:17px;">
    <div class="container" style="padding-top: 12em">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="row mb-4 px-4">
                    <h1 class="divisi-title divisi-title-white text-uppercase" style="font-size: 22px; ">IFLS Japanese Cultural Association</h1>
                </div>
                <div class="row px-4">
                    <p class="divisi-desc text-white">
                        IFLS Japanese Cultural Association, atau biasa dipanggil IJCA,
                        adalah salah satu divisi terbesar yang berada dalam naungan UKM ITS Foreign Language Society.
                        Nama spesial yang digunakan oleh IJCA ini rupanya baru diberikan pada tahun 2019 lalu.
                        Sebelum itu, IJCA hanya biasa disebut sebagai divisi Bahasa Jepang saja.
                    </p>
                    <p class="divisi-desc text-white">
                        Berdiri pada tahun 2010, IJCA ialah salah satu divisi tertua di IFLS
                        yang memiliki jumlah anggota paling banyak. Pada tahun 2020 lalu,
                        total anggota IJCA mencapai angka 325 anggota. Pada pembelajarannya,
                        IJCA sendiri dibagi menjadi beberapa kelas. Kelas di sini diklasifikasikan
                        berdasarkan kemampuan berbahasa Jepang dari tiap anggota sesuai dengan standar JLPT.
                        IJCA juga memiliki proker-proker yang keren - keren
                        seperti Isshoni Tanoshimi ni Mimashou (yang dalam bahasa Indonesia disebut nonton bareng) dan lain - lain.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <img class="divisi-img" src="{{ asset('img/divisi/ijca.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
