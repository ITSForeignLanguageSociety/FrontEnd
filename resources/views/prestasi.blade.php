@extends('layouts.base')

@section('content')
    <section class="clean-block clean-hero section-blue mb-5" style="background: center center fixed; background-size:cover;  text-align: start; background-image:url('img/prestasi/Bg-05.png');color:rgba(0, 0, 0, 0);margin-top:17px;">
        <div class="container">
            <div class="text">
                <h1 class="title-text" style="font-size: 4rem"><strong>Precious</strong></h1>
                <h1 class="title-text" style="font-size: 5rem"><strong>Achievements</strong></h1>
            </div>
        </div>
    </section>
    <section class="section clean-block container pt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-2">
                <div class="row d-flex justify-content-end">
                    <p><strong>Omahira</strong></p>
                </div>
                <div class="row">
                    <img class="prestasi-card" src="{{ asset('img/prestasi/oma.png') }}" alt="">
                </div>
                <div class="row">
                    <img class="prestasi-circle" src="{{ asset('img/prestasi/circle.png') }}" alt="">
                </div>
            </div>
            <div class="col-8" style="text-align: center">
                <h4><strong>Quarterfinalist Asian English Olympiad</strong></h4>
                <h4 class="prestasi-divisi"><strong>ITS Debating Society</strong></h4>
            </div>
            <div class="col-2">
                <div class="row">
                    <img class="prestasi-circle" src="{{ asset('img/prestasi/circle.png') }}" alt="">
                </div>
                <div class="row">
                    <img class="prestasi-card" src="{{ asset('img/prestasi/krisna.png') }}" alt="">
                </div>
                <div class="row">
                    <p><strong>Putu Krisna</strong></p>
                </div>
            </div>
        </div>
    </section>
@endsection
