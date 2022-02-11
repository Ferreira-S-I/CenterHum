@extends('Site.Layout._theme')
@section('title','Certer Hum | Home')
@section('description','Certer Hum')
@section('keywords','Certer Hum')

@section('styles')
@endsection

@section('content')
<div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/banners/teste.jpg') }}" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banners/teste.jpg') }}" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/banners/teste.jpg') }}" class="d-block w-100" alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Certer Hum</h1>
            <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Donec euismod, nisi vel consectetur interdum,
                nisl nunc egestas nisi, euismod aliquam nisl nunc egestas nisi,
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">
                <span class="fw-bold">Nossos</span> Serviços
            </h2>
            <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Donec euismod, nisi vel consectetur interdum,
                nisl nunc egestas nisi, euismod aliquam nisl nunc egestas nisi,
            </p>
        </div>
    </div>
</div>
<!-- clearfix -->
<div class="clearfix"></div>

@endsection

@section('script')
@endsection
