@extends('layouts.base')

@section('content')
<section class="clean-block" style="min-height: 900px; background: center center fixed; background-image:url('/img/divisi/ids-banner.png'); margin-top:17px;">
    <div class="container" style="padding-top: 12em">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img class="divisi-img" src="{{ asset('img/divisi/ids.png') }}" alt="">
            </div>
            <div class="col-lg-5">
                <div class="row mb-4 px-4">
                    <h1 class="divisi-title divisi-title-blue text-uppercase">ITS Debating Society</h1>
                </div>
                <div class="row px-4">
                    <p class="divisi-desc">
                        IDS, singkatan dari ITS Debating Society, adalah divisi debat pada UKM ITS Foreign Language Society.
                        IDS sendiri merupakan divisi IFLS yang tertua dan paling pertama sehingga dapat dikatakan juga bahwa IDS sendiri
                        merupakan founding base untuk IFLS. Di IDS, debat dibagi menjadi dua kategori yakni debat berbahasa Inggris
                        dan juga debat berbahasa Indonesia.
                    </p>
                    <p class="divisi-desc">
                        Dalam UKM IFLS sendiri, IDS dapat dibilang sebagai salah satu divisi yang paling unik.
                        Hal ini dikarenakan IDS lebih mengedepankan latihan untuk lomba dibanding dengan kegiatan lainnya.
                        IDS memiliki dua proker yang bertujuan untuk mengasah kemampuan berdebat anggotanya,
                        yaitu Filibuster Sparring dan IDS Regular Practice.
                        Filibuster sparring adalah latihan debat yang dilaksanakan dengan anggota universitas di luar ITS,
                        sedangkan IDS Regular Practice merupakan kegiatan latihan rutin dalam bagaimana cara berargumentasi dengan baik dan
                        benar serta pembahasan isu yang ada dalam dunia debat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
