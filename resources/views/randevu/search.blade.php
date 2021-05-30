@extends('layout')

@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image:  url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon/randevular">randevular</a></span> <span>Arama</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Arama Sonucu : {{$query}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">randevular</h2>
                </div>
                <div class="offset-8 col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box indexsearch">
                        <form method="GET" action="{{ route('randevu.search') }}" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" name="search" class="form-control" placeholder="Randevu Ara">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($randevular->isNotEmpty())
                    @foreach($randevular as $randevu)
                        <div class="col-md-3 ftco-animate">
                            <div class="pricing-entry pb-5 text-center">
                                <div>
                                    <p><span class="price">{{$randevu->id}}</span></p>
                                    <h3 class="mb-4">{{$randevu->hastaAd}} {{$randevu->hastaSad}}</h3>
                                </div>
                                <ul>
                                    <li>{{$randevu->hastaTC}}</li>
                                    <li>{{$randevu->randevuTarihi}}</li>
                                </ul>
                                <p class="button text-center"><a href="/otomasyon/randevular/{{$randevu->id}}" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12 text-center heading-section ftco-animate">
                        <h2 class="mb-3">Randevu Bulunmadı</h2>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
