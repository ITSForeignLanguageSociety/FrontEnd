@extends('layouts.base')

@section('content')
<section class="clean-block container pt-5" style="background-image:url('img/contact/contact.png');background-size: cover;background-repeat: no-repeat;margin-top:17px;">
    <div class="row d-flex justify-content-center align-items-center mb-3">
        <h4><strong>Find more about us here</strong></h4>
    </div>
    <div class="row d-flex justify-content-center align-items-center mb-5">
        <div class="col-lg-4 mb-3 d-flex justify-content-center align-items-center">
            <div class="nilai-card" style="width: 18rem;">
                <div class="card-body text-center">
                    <h1 class="card-title mb-1"><i class="fab fa-line mr-1"></i></h1>
                    <p class="card-text">
                        <strong>@atc9575r</strong>
                    </p>
                </div>
              </div>
        </div>
        <div class="col-lg-4 mb-3 d-flex justify-content-center align-items-center">
            <div class="nilai-card" style="width: 18rem;">
                <div class="card-body text-center">
                    <h1 class="card-title mb-1"><i class="fa fa-facebook mr-3"></i><i class="fa fa-youtube-play mr-3"></i><i class="fa fa-spotify"></i></h1>
                    <p class="card-text">
                        <strong>ITS Foreign Language Society</strong>
                    </p>
                </div>
              </div>
        </div>
        <div class="col-lg-4 mb-3 d-flex justify-content-center align-items-center">
            <div class="nilai-card" style="width: 18rem;">
                <div class="card-body text-center">
                    <h1 class="card-title mb-1"><i class="fa fa-instagram mr-1"></i></h1>
                    <p class="card-text">
                        <strong>@ifls_its</strong>
                    </p>
                </div>
              </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center mb-3">
        <h4><strong>or You can contact us here</strong></h4>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-4 mb-3 d-flex justify-content-center align-items-center">
            <div class="nilai-card" style="width: 18rem;">
                <div class="card-body text-center">
                    <p class="card-text">
                        <strong>+62 812 345 6789</strong>
                        <strong>test@email.com</strong>
                    </p>
                </div>
              </div>
        </div>
    </div>
</section>
@endsection
