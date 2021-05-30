@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div  class="slider-item bread-item" style="background-image: url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon/doktorlar">doktorlar</a></span> <span>doktor Güncelle</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">doktor Güncelle</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-12 pr-md-5">
                    <form class="form-contact contact_form" method="POST" action="/otomasyon/doktorlar/{{$doktor->id}}" id="contactForm" novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="doktorTc" id="doktorTc" placeholder="doktor TC Kimlik No">                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="doktorTel" id="doktorTel" placeholder="Telefon">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="doktorAd" id="doktorAd" placeholder="doktor Adı">                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="doktorSad" id="doktorSad" placeholder="doktor Soyadı">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="doktorAdres" id="doktorAdres" placeholder="Adres">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Güncelle" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
