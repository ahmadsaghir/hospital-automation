@extends('layout')

@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Randevu Alın</h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hastane Online İşlem Merkezi ile dilediğiniz zaman Hastanemizden online randevu alabilirsiniz.</p>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Randevu Al</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sonuçlarınızı Öğrenin</h1>
                    <p class="mb-4">Medipol Online İşlem Merkezi ile Medipol Hastanlerinde yaptırmış olduğunuz test ve tetkik sonuçlarınızı öğrenebilirsiniz.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Sonuçları Öğren</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-intro">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 color-1 p-4">
                <h3 class="mb-4">Acil durumlar</h3>
                <p>Acil durumlarda bu nunmaraya arayınız.</p>
                <span class="phone-number">+ (123) 456 7890</span>
            </div>
            <div class="col-md-3 color-2 p-4">
                <h3 class="mb-4">Çalışma Saatlerimiz</h3>
                <p class="openinghours d-flex">
                    <span>Hafta içi </span>
                    <span> 8:00 - 19:00</span>
                </p>
                <p class="openinghours d-flex">
                    <span>Cumartesi</span>
                    <span>10:00 - 17:00</span>
                </p>
                <p class="openinghours d-flex">
                    <span>Pazar</span>
                    <span>10:00 - 16:00</span>
                </p>
            </div>
            <div class="col-md-6 color-3 p-4">
                <h3 class="mb-2">Randevu Al</h3>
                <form action="#" class="appointment-form">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Poliklinik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-user"></span></div>
                                <input type="text" class="form-control" id="appointment_name" placeholder="Ad">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-user"></span></div>
                                <input type="text" class="form-control" id="appointment_sname" placeholder="Soyad">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="ion-ios-calendar"></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Tarih">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="text" class="form-control appointment_time" placeholder="Saat">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-phone2"></span></div>
                                <input type="text" class="form-control" id="phone" placeholder="Telefon">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Randevu Al" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">Hastanemiz İle Sağlıkta Kalın</h2>
                <p>Hastanemizin gelişmiş teknolojileri ve denenmiş hizmetleri ile sizi en iyi şekilde tedavi edeceğiz.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <i class="far fa-ambulance"></i>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Sağlık</h3>
                        <p>Sağlık, sadece hastalık ve sakatlık durumunun olmayışı değil kişinin bedenen, ruhen ve sosyal yönden tam bir iyilik halinde olması bizim önceliğimiz.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <i class="far fa-ambulance"></i>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Tedavi</h3>
                        <p>Teşhis evresinde, hastalığın tam olarak tanımlanması, doğru tedavi yönteminin belirlenmesi ve kişiye özel uygulamalarla en doğru sonuca ulaşılması hedeflenir.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <i class="far fa-ambulance"></i>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Teşhis</h3>
                        <p>Hastalık teşhisi, tedavi evresinin ilk ve en önemli adımıdır. Özellikle erken teşhis, birçok ciddi hastalığın tedavi sürecini kısaltmaktadır.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <i class="far fa-ambulance"></i>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Doktorlarımız</h3>
                        <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-wrap mt-5">
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
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3">Doktorlarımız İle Tanışın</h2>
                <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(images/dr1.jpg);"></div>
                    <div class="info text-center">
                        <h3>Dr.Nazlı</h3>
                        <span class="position">Cerrah</span>
                        <div class="text">
                            <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(images/dr3.jpg);"></div>
                    <div class="info text-center">
                        <h3>Dr.Ahmet</h3>
                        <span class="position">Baş Hekim</span>
                        <div class="text">
                            <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(images/dr2.jpg);"></div>
                    <div class="info text-center">
                        <h3>Dr.Ayşe</h3>
                        <span class="position">Fizik Tedavi</span>
                        <div class="text">
                            <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url(images/dr4.jpg);"></div>
                    <div class="info text-center">
                        <h3>Dr.Ferman</h3>
                        <span class="position">Kardiyolojiı</span>
                        <div class="text">
                            <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row  mt-5 justify-conten-center">
            <div class="col-md-8 ftco-animate">
                <p>Tıbbın evrensel etik değerlerinden taviz vermeyen deneyimli hekim kadrosuyla, 7gün ve 24 saat İlke Hastanesi her an yanı başınızda.</p>
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
<div id="map"></div>
@endsection

