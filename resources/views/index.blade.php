@extends('App.app')

@section('keyTitle', 'HomePage')

@section('MainContent')
    {{-- Carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carouselBanner" src="{{ asset('image/banner.jpg') }}">
            </div>
            <div class="carousel-item">
                <img class="carouselBanner" src="{{ asset('image/banner.jpg') }}">
            </div>
            <div class="carousel-item">
                <img class="carouselBanner" src="{{ asset('image/banner.jpg') }}">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Carosule end --}}

    {{-- Carosule Start --}}
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-size" src="{{ asset('image/banner.jpg') }}" alt="">
                    </div>
                    <div class="card-title">
                        <p>Headphone</p>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione tempora culpa, odit odio
                        accusantium. Molestiae iusto deserunt fugit modi.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-size" src="{{ asset('image/banner.jpg') }}" alt="">
                    </div>
                    <div class="card-title">
                        <p>Headphone</p>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione tempora culpa, odit odio
                        accusantium. Molestiae iusto deserunt fugit modi.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-size" src="{{ asset('image/banner.jpg') }}" alt="">
                    </div>
                    <div class="card-title">
                        <p>Headphone</p>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione tempora culpa, odit odio
                        accusantium. Molestiae iusto deserunt fugit modi.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-size" src="{{ asset('image/banner.jpg') }}" alt="">
                    </div>
                    <div class="card-title">
                        <p>Headphone</p>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione tempora culpa, odit odio
                        accusantium. Molestiae iusto deserunt fugit modi.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-size" src="{{ asset('image/banner.jpg') }}" alt="">
                    </div>
                    <div class="card-title">
                        <p>Headphone</p>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione tempora culpa, odit odio
                        accusantium. Molestiae iusto deserunt fugit modi.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-size" src="{{ asset('image/banner.jpg') }}" alt="">
                    </div>
                    <div class="card-title">
                        <p>Headphone</p>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione tempora culpa, odit odio
                        accusantium. Molestiae iusto deserunt fugit modi.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-size" src="{{ asset('image/banner.jpg') }}" alt="">
                    </div>
                    <div class="card-title">
                        <p>Headphone</p>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione tempora culpa, odit odio
                        accusantium. Molestiae iusto deserunt fugit modi.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img class="card-img-size" src="{{ asset('image/banner.jpg') }}" alt="">
                    </div>
                    <div class="card-title">
                        <p>Headphone</p>
                    </div>
                    <div class="card-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ratione tempora culpa, odit odio
                        accusantium. Molestiae iusto deserunt fugit modi.
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Carosule End --}}
@endsection
