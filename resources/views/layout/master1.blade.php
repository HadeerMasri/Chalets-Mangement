<!DOCTYPE html>
<html lang="en">
<head>
    <title>Siaf Kiaf</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('cozy/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('cozy/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/custom.css')}}">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">صَيّف كَيّف</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">الصفحة الرئيسية</a></li>
                <li class="nav-item"><a href="/offers" class="nav-link">اخر العروض</a></li>
                <li class="nav-item"><a  href="/about"class="nav-link">من نحن</a></li>
                <li class="nav-item"><a  href="/condition" class="nav-link">الأحكام والشروط</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">تواصل معنا </a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('{{asset('cozy/images/bg_1.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-start">
                <div class="col-md-12 col-sm-12 ftco-animate">
                    <h1 class="mb-4 title-right ">يلا شو بتستنى إحجز يومك من هلقيت لتقضي أجمل الأوقات</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('{{asset('cozy/images/bg_2.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-start">
                <div class="col-md-12 col-sm-12 ftco-animate">
                    <h1 class="mb-4 title-right">زهقان ..
                        شوبان ..
                        ومن الحر تعبان..
                        ميل صيفك أحلى معنا</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url('{{asset('cozy/images/bg_3.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-start">
                <div class="col-md-12 col-sm-12 ftco-animate">
                    <h1 class="mb-4 title-right">تمتع بجلسة هادئة و بروعة المنظر</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

@yield('userContent')

<section class="instagram">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>  انستغرام <span class="icon-instagram"></span></h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('cozy/images/image_2.jpg')}}" class="insta-img image-popup" style="background-image: url('{{asset('cozy/images/image_2.jpg')}}')">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('cozy/images/drink-4.jpg')}}" class="insta-img image-popup" style="background-image: url('{{asset('cozy/images/drink-4.jpg')}}')">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('cozy/images/room-2.jpg')}}" class="insta-img image-popup" style="background-image: url('{{asset('cozy/images/room-2.jpg')}}')">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('cozy/images/insta-4.jpg')}}" class="insta-img image-popup" style="background-image: url('{{asset('cozy/images/insta-4.jpg')}}')">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('cozy/images/insta-5.jpg')}}" class="insta-img image-popup" style="background-image: url('{{asset('cozy/images/insta-5.jpg')}}')">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">صَيّف كَيّف</h2>
                    <p>إذا كنت تبحث عن شاليه أو جناح خاصّ لقضاء إجازتك القريبة، فأنت في المكان الأمثل لذلك
                        موقعنا يطلعك على كلّ ما تجب معرفته في الطّريق لرحلات من تصميمك الخاصّ؛ تلائم توقّعاتك وتضمن لك الخصوصيّة والتّوفير.
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">الروابط السريعة</h2>
                    <ul class="list-unstyled">
                        <li ><a href="/"class="py-2 d-block">الصفحة الرئيسية</a></li>
                        <li><a href="/offers"class="py-2 d-block">اخر العروض</a></li>
                        <li><a href="/about" class="py-2 d-block">من نحن</a></li>
                        <li><a href="/condition"class="py-2 d-block">الأحكام والشروط</a></li>
                        <li><a href="/contact"class="py-2 d-block">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">تواصل معنا</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block"> العنوان/ فلسطين - قطاع غزة - ديرالبلح</a></li>
                        <li><a href="#" class="py-2 d-block">رقم الجوال/ 972594329731+</a></li>
                        <li><a href="#" class="py-2 d-block"> الايميل/ haderhasan904@gmail.com</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     جميع الحقوق محفوظة &copy;  <script>document.write(new Date().getFullYear());</script>| لصَيّف كَيّف   <i class="fa fa-heart" aria-hidden="true"></i> برمجة <a>هدير المصري </a>

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('cozy/js/jquery.min.js')}}"></script>
<script src="{{asset('cozy/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('cozy/js/popper.min.js')}}"></script>
<script src="{{asset('cozy/js/bootstrap.min.js')}}"></script>
<script src="{{asset('cozy/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('cozy/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('cozy/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('cozy/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('cozy/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('cozy/js/aos.js')}}"></script>
<script src="{{asset('cozy/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('cozy/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('cozy/js/jquery.timepicker.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('cozy/js/google-map.js')}}"></script>
<script src="{{asset('cozy/js/main.js')}}"></script>

</body>
</html>