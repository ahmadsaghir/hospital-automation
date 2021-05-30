@extends('layout')

@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Ana Sayfa</a></span> <span>İletişim</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">İletişim</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">İletişim Bilgileri</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Adres:</span> Adnan Kahveci mah, Beylikdüzü, İstanbul</p>
                </div>
                <div class="col-md-3">
                    <p><span>Telefon:</span> <a href="tel://1234567920">+(123) 456 78 90</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@hastanemiz.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Web Sitesi:</span> <a href="#">hastanemiz.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-12" id="map"></div>
            </div>
        </div>
    </section>

@endsection
