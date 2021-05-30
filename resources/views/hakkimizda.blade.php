@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Ana Sayfa</a></span> <span>Hakkımızda</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Hakkımızda</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">Hastanemiz</a>

                                <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Görevimiz</a>

                                <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Amacımız</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-4">Hastalarımızı İyileştirmeye Çalışırız</h2>
                                        <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                                        <p>Hastanemizin gelişmiş teknolojileri ve denenmiş hizmetleri ile sizi en iyi şekilde tedavi edeceğiz.</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                                    <div>
                                        <h2 class="mb-4">Hastalarımızı İyileştirmeye Çalışırız</h2>
                                        <p>Hastanemizin gelişmiş teknolojileri ve denenmiş hizmetleri ile sizi en iyi şekilde tedavi edeceğiz.</p>
                                        <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                                    <div>
                                        <h2 class="mb-4">Hastalarımızı İyileştirmeye Çalışırız</h2>
                                        <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                                        <p>Hastanemizin gelişmiş teknolojileri ve denenmiş hizmetleri ile sizi en iyi şekilde tedavi edeceğiz.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-2">
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img" style="background-image: url(images/about-2.jpg);">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="about-wrap">
                        <div class="heading-section heading-section-white mb-5 ftco-animate">
                            <h2 class="mb-2">Doktorlarımız</h2>
                            <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>Sağlık</h3>
                                <p>Sağlık, sadece hastalık ve sakatlık durumunun olmayışı değil kişinin bedenen, ruhen ve sosyal yönden tam bir iyilik halinde olması bizim önceliğimiz.</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>Tedavi</h3>
                                <p>Teşhis evresinde, hastalığın tam olarak tanımlanması, doğru tedavi yönteminin belirlenmesi ve kişiye özel uygulamalarla en doğru sonuca ulaşılması hedeflenir.</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>Teşhis</h3>
                                <p>Hastalık teşhisi, tedavi evresinin ilk ve en önemli adımıdır. Özellikle erken teşhis, birçok ciddi hastalığın tedavi sürecini kısaltmaktadır.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Tanıklık</h2>
                    <span class="subheading">İyileşen Hastalarımız Diyor</span>
                </div>
            </div>
            <div class="row justify-content-center ftco-animate">
                <div class="col-md-8">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                            <span class="quote d-flex align-items-center justify-content-center">
                              <i class="icon-quote-left"></i>
                            </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">Hayatımı Kurtardığınız için size minnetdarım.</p>
                                    <p class="name">Kerem Al</p>
                                    <span class="position">Emlakçi</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">Hayatımı Kurtardığınız için size minnetdarım.</p>
                                    <p class="name">Halit Celalettin</p>
                                    <span class="position">Tacir</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">Hayatımı Kurtardığınız için size minnetdarım.</p>
                                    <p class="name">Ahmet Yılmaz</p>
                                    <span class="position">Yazılım Mühendisi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 aside-stretch py-5">
                    <div class=" heading-section heading-section-white ftco-animate pr-md-4">
                        <h2 class="mb-3">Doktorlaımız</h2>
                        <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                    </div>
                </div>
                <div class="col-md-9 py-5 pl-md-5">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="10">0</strong>
                                    <span>Yılların Deneyimi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="500">0</strong>
                                    <span>Sağlık Ekipimiz</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="3000">0</strong>
                                    <span>Mutlu Hastamız</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Yıllık Hasta Sayısı</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
