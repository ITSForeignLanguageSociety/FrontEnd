@extends('layouts.base')

@section('content')
<section class="clean-block" style="min-height: 900px; background: center center fixed; background-image:url('/img/divisi/ids-banner.png'); margin-top:17px;">
    <div class="container" style="padding-top: 12em">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img class="divisi-img" src="{{ asset('img/divisi/ih.png') }}" alt="">
            </div>
            <div class="col-lg-5">
                <div class="row mb-4 px-4">
                    <h1 class="divisi-title divisi-title-blue text-uppercase">IFLS HANMUNHWAAE</h1>
                </div>
                <div class="row px-4">
                    <p class="divisi-desc">
                        Mulai tahun 2021, Divisi Korea IFLS memiliki nama, yaitu IFLS Hanmunhwaee. Nama ini memiliki arti yang unik
                        karena akronim dari 한국 문화 애호가 (Hanguk Munhwa Aehoga). Hanguk Munhwa Aehoga sendiri memiliki arti pecinta budaya Korea.
                        IFLS Hanmunhwaae cocok banget buat kamu yang tertarik dengan bahasa, kultur budaya, sejarah, drama Korea, K-Pop, dan kehidupan di Korea.
                    </p>
                    <p class="divisi-desc">
                        Kegiatan yang dilakukan di IFLS Hwamunhwaae, antara lain,  Korean Class  atau pembelajaran bahasa korea, Hallyu/Korean Wave,
                        Evaluation class atau tes penempatan kelas untuk Korean class nantinya, dan Talk with Native Speaker.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
