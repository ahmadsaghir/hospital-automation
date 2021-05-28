<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hastane Otomasyonu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="/">Hastane<span> Otomasyonu</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="/" class="nav-link">Ana Sayfa</a></li>
                        <li class="nav-item"><a href="/hakkimizda" class="nav-link">Hakkımızda</a></li>
                        <li class="nav-item"><a href="/iletisim" class="nav-link">İletişim</a></li>
                        <li class="nav-item"><a href="/otomasyon" class="nav-link">Otomasyon</a></li>
                        <li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Randevu Al</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-3">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Hastanemiz</h2>
                            <p>Hastanemizin gelişmiş teknolojileri ve denenmiş hizmetleri ile sizi en iyi şekilde tedavi edeceğiz.</p>
                        </div>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                            <li class="ftco-animate"><a href="#"><span class="icon-whatsapp"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Hızlı Linkler</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">Hakkımızda</a></li>
                                <li><a href="#" class="py-2 d-block">İletişim</a></li>
                                <li><a href="#" class="py-2 d-block">Otomasyon</a></li>
                                <li><a href="#" class="py-2 d-block">Randevu Al</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 pr-md-4">
                        {{--                <div class="ftco-footer-widget mb-4">--}}
                        {{--                    <h2 class="ftco-heading-2">Recent Blog</h2>--}}
                        {{--                    <div class="block-21 mb-4 d-flex">--}}
                        {{--                        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>--}}
                        {{--                        <div class="text">--}}
                        {{--                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>--}}
                        {{--                            <div class="meta">--}}
                        {{--                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>--}}
                        {{--                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>--}}
                        {{--                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="block-21 mb-4 d-flex">--}}
                        {{--                        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>--}}
                        {{--                        <div class="text">--}}
                        {{--                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>--}}
                        {{--                            <div class="meta">--}}
                        {{--                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>--}}
                        {{--                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>--}}
                        {{--                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                </div>--}}
                    </div>
                    <div class="col-md-3">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Hastane</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">Adnan Kahveci mah, Beylikdüzü, İstanbul</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+(123) 456 78 90</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@hastanemiz.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        <!-- Modal -->
        <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRequestLabel">Randevu Al</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                                <input type="text" class="form-control" id="appointment_name" placeholder="Ad">
                            </div>
                            <div class="form-group">
                                <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                                <input type="text" class="form-control" id="appointment_name" placeholder="Soyad">
                            </div>
                            <div class="form-group">
                                <!-- <label for="appointment_email" class="text-black">Email</label> -->
                                <input type="text" class="form-control" id="appointment_email" placeholder="Telefon">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label for="appointment_date" class="text-black">Date</label> -->
                                        <input type="text" class="form-control appointment_date" placeholder="Tarih">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label for="appointment_time" class="text-black">Time</label> -->
                                        <input type="text" class="form-control appointment_time" placeholder="Saat">
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
        </div>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/aos.js')}}"></script>
        <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
        <script src="{{asset('js/scrollax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{asset('js/google-map.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
