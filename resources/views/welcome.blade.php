<!doctype html>
<html lang="fr">
    <head>
		<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-14KP2D0MN6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-14KP2D0MN6');
</script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="robots" content="index, follow">
        <meta property="og:locale" content="fr_FR">
        <meta http-equiv="Content-Language" content="fr">
		<meta property="og:type" content="article">
		<meta property="og:title" content="FreshPay">
		<meta property="og:url" content="https://gofreshpay.com/">
		<meta property="og:site_name" content="FreshPay">
		<link rel="canonical" href="https://gofreshpay.com/">
        <meta property="og:description" content="Meilleure solution de paiement en ligne en République Démocratique du Congo. Premier agrégateur de paiement en activité depuis 2017.">
        <meta name="keywords" content="FreshPay, GoFreshPay, Fintech, Plateforme de paiement, API de paiement, Mobile money, Transactions sécurisées, Méthodes de paiement, Portefeuille électronique, Payment Gateway, Solution de paiement, Paiement en ligne, Agrégateur de paiement, République Démocratique du Congo">
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

        <title>FreshPay - Premier agrégateur de paiement en République Démocratique du Congo</title>
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
		<script>
            (function() {
            var siteMapUrl = 'https://gofreshpay.com/sitemap.xml';
            var script = document.createElement('script');
            script.src = 'https://www.google.com/ping?sitemap=' + encodeURIComponent(siteMapUrl);
            script.type = 'text/javascript';
            script.async = true;
            var entry = document.getElementsByTagName('script')[0];
            entry.parentNode.insertBefore(script, entry);
            })();
        </script>
    </head>
    <body>

        <!-- Start Navbar Area -->
        @include('layouts.navbar')
        <!-- End Navbar Area -->

        <!-- Start Banner Wrapper Area -->
        <div class="banner-wrapper-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="banner-wrapper-content">
                            <span class="sub-title">Agrégateur #1 de solutions de paiement en ligne en RDC</span>
                            <h1>Meilleure solution de paiement en ligne.</h1>
                            <p>Premier agrégateur de paiement en activité en République Démocratique du Congo. Nous sommes là depuis 2016.</p>
                            <a href="#" class="default-btn">Devenir marchand</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="banner-wrapper-image">
                            <img src="{{ asset('assets/img/banner/banner-img1.png')}}" alt="banner-img">
                            <img src="{{ asset('assets/img/banner/banner-img2.png')}}" data-aos="fade-left" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape13"><img src="{{ asset('assets/img/shape/shape15.png')}}" alt="shape"></div>
            <div class="shape14"><img src="{{ asset('assets/img/shape/shape17.png')}}" alt="shape"></div>
            <div class="shape15"><img src="{{ asset('assets/img/shape/shape18.png')}}" alt="shape"></div>
        </div>
        <!-- End Banner Wrapper Area -->

        

        <!-- Start Overview Area -->
        <div class="overview-area ptb-100">
            <div class="container-fluid">
                <div class="row m-0">
                    <div class="col-xl-6 col-lg-12 col-md-12 p-0">
                        <div class="overview-content">
                            <h2>Qui sommes-nous?</h2>
                            <p><strong>FreshPay</strong>, fait partie d'un très grand réseau des africains passionnés par l'innovation technologique en offrant au monde les outils technologiques appropriés pour mener à bien leurs différents projets tout en contribuant à l'économie globale. </p>
                            <p><strong>FreshPay</strong> permet aux organisations marchandes et aux e-commerçants d'effectuer des transactions via différents operateurs Mobiles et avec des services de Cartes bancaires de manière simple et sécurisée.</p>
                            <ul class="features-list">
                                <li>
                                    <div class="icon">
                                        <i class=" ri-bank-card-2-fill"></i>
                                    </div>
                                    <h3>FreshPay</h3>
                                    <p>FreshPay offre un système de paiment en ligne dans le monde entier. La plateforme sert d'alternative au paiment par chèque ou par carte bancaire.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ri-award-line"></i>
                                    </div>
                                    <h3>AirTime</h3>
                                    <p>Simplifiez-vous la vie et effectuez vos achats de crédits sur l'application FreshPay(AirTime) peut importe votre réseau téléphonique.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ri-apps-fill"></i>
                                    </div>
                                    <h3>FreshPayOne</h3>
                                    <p>Notre application vous permettra d'acheter et de payer vos factures plus simplement et plus rapidement.</p>
                                </li>
                            </ul>
                            <div class="btn-box">
                                <a href="{{ route('about') }}" class="default-btn">En savoir plus</a>
                                <a href="features-1.html" class="link-btn">Nos Solutions</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 p-0">
                        <div class="overview-image bg1">
                            <img style="border-left: 1px solid orange; border-top: 1px solid orange;" src="{{ asset('assets/img/about.png')}}" alt="overview">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview Area -->

        <!-- Start Features Area -->
        {{-- <div class="features-area pt-100 pb-75">
            <div class="container">
                <ul class="features-boxes-list">
                    <li>
                        <div class="features-list-box">
                            <div class="icon">
                                <i class="ri-smartphone-line"></i>
                            </div>
                            <h3>User Friendly</h3>
                        </div>
                    </li>
                    <li>
                        <div class="features-list-box">
                            <div class="icon bg2">
                                <i class="ri-award-line"></i>
                            </div>
                            <h3>Award Winning App</h3>
                        </div>
                    </li>
                    <li>
                        <div class="features-list-box">
                            <div class="icon bg3">
                                <i class="ri-fingerprint-line"></i>
                            </div>
                            <h3>Privacy Protected</h3>
                        </div>
                    </li>
                    <li>
                        <div class="features-list-box">
                            <div class="icon">
                                <i class="ri-vip-diamond-fill"></i>
                            </div>
                            <h3>Lifetime Update</h3>
                        </div>
                    </li>
                    <li>
                        <div class="features-list-box">
                            <div class="icon bg4">
                                <i class="ri-customer-service-2-line"></i>
                            </div>
                            <h3>24/7 Support</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}
        <!-- End Features Area -->

        <!-- Start Software Integrations Area -->
        <div class="screenshots-area ptb-100 bg-black-color">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 mb-2">
                        <div class="software-integrations-content">
                            <span class="sub-title">SOLUTION DE PAIEMENT MOBILE</span>
                            <h2 class="text-white">La révolution du paiement mobile.</h2>
                            <p class="text-white">Avec FreshPay, recevez des paiements partout en RDC sur votre site de E-commerce avec M-pesa, Airtel money, Orange money et Afrimoney</p>
                            <p class="text-white">FreshPay fournit des solutions innovantes et nécessaires au marché pour résoudre les problèmes locaux et fournir des solutions à vie aux PME et aux utilisateurs finaux en proposant des solutions de paiement proactives.</p>
                            {{-- <a href="{{ route('contact') }}" class="default-btn">Get Started</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="video-box">
                            <video class="w-100 popup-video" loop muted controls>
                                <source src="{{ asset('assets/img/video/freshpay.mp4')}}" type="video/mp4" />
                            </video>
                            <div class="shape">
                                <img class="shape1" src="{{ asset('assets/img/shape/shape1.png')}}" alt="shape1">
                                <img class="shape2" src="{{ asset('assets/img/shape/shape2.png')}}" alt="shape2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="shape6"><img src="{{ asset('assets/img/shape/shape5.png')}}" alt="shape"></div> --}}
        </div>
        <!-- End Software Integrations Area -->

        <!-- Start Features Area -->
        <div class="features-area pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">NOS SOLUTIONS</span>
                    <h2>Solution de paiement tout-en-un!</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="features-item">
                            <div class="icon">
                                <i class=" ri-exchange-funds-line"></i>
                            </div>
                            <h3>Transfert d'Argent</h3>
                            <p>Un transfert d'argent devrait être aussi simple que l'envoi d'un message. Avec FreshPay, vous pouvez envoyer et recevoir de l'argent via notre application.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="features-item">
                            <div class="icon bg2">
                                <i class="ri-money-dollar-box-fill"></i>
                            </div>
                            <h3>Paiement Factures</h3>
                            <p>Avec FreshPay, effectuer vos règlements en utilisant notre service de Paiement Factures sur l'Appli FreshPay, sans effectuer le moindre déplacement</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="features-item">
                            <div class="icon bg3">
                                <i class=" ri-phone-fill"></i>
                            </div>
                            <h3>Achat Crédit</h3>
                            <p>Simplifiez-vous la vie et effectuez vos achats de crédit sur l'application FreshPay avec n'importe quel réseaux de téléphonie et des données mobiles en RDC.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="features-item">
                            <div class="icon bg4">
                                <i class=" ri-money-dollar-box-fill"></i>
                            </div>
                            <h3>Paiement Marchand</h3>
                            <p>Si vous recherchez une solution robuste et sécurisée permettant à vos clients ou usagers de payer par mobile money ou carte bancaire, FreshPay est le partenaire idéal pour vous</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Area -->

        <!-- Start Screenshots Area -->
        <div class="screenshots-area bg-black-color ptb-100">
            <div class="container">
                <div class="section-title color-white">
                    <span class="sub-title">CAPTURES D'ECRAN</span>
                    {{-- <h2>Toutes les captures d'écran de l'application</h2> --}}
                </div>
                <div class="screenshots-slides owl-carousel owl-theme">
                    <div class="single-screenshot-item">
                        <img src="{{ asset('assets/img/screenshots/screenshots1.png')}}" alt="screenshots">
                    </div>
                    <div class="single-screenshot-item">
                        <img src="{{ asset('assets/img/screenshots/screenshots2.png')}}" alt="screenshots">
                    </div>
                    <div class="single-screenshot-item">
                        <img src="{{ asset('assets/img/screenshots/screenshots3.png')}}" alt="screenshots">
                    </div>
                    <div class="single-screenshot-item">
                        <img src="{{ asset('assets/img/screenshots/screenshots4.png')}}" alt="screenshots">
                    </div>
                    <div class="single-screenshot-item">
                        <img src="{{ asset('assets/img/screenshots/screenshots5.png')}}" alt="screenshots">
                    </div>
                    <div class="single-screenshot-item">
                        <img src="{{ asset('assets/img/screenshots/screenshots4.png')}}" alt="screenshots">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Screenshots Area -->

        

        <!-- Start App Download Area -->
        <div class="app-download-area pb-100">
            <div class="container">
                <div class="app-download-inner bg-gray">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="app-download-content">
                                <span class="sub-title">DOWNLOAD APP</span>
                                <h2>Téléchargez gratuitement FreshPayOne sur Apple et Play Store.</h2>
                                <p>Téléchargez notre application et commencez avec vos transactions dès maintenant.</p>
                                <div class="btn-box">
                                    <a href="#" class="playstore-btn" target="_blank">
                                        <img src="{{ asset('assets/img/play-store.png')}}" alt="image">
                                        Get It On
                                        <span>Google Play</span>
                                    </a>
                                    <a href="#" class="applestore-btn" target="_blank">
                                        <img src="{{ asset('assets/img/apple-store.png')}}" alt="image">
                                        Download on the
                                        <span>Apple Store</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="app-download-image" data-aos="fade-up">
                                <img src="{{ asset('assets/img/app/app-img4.png')}}" alt="app-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End App Download Area -->


        <!-- Start Partner Area -->
       @include('layouts.partners')
        <!-- End Partner Area -->

        <!-- Start Footer Area -->
        @include('layouts.footer')
        <!-- End Footer Area -->

        <div class="go-top"><i class="ri-arrow-up-s-line"></i></div>

        <!-- Link of JS files -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assets/js/meanmenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/appear.min.js')}}"></script>
        <script src="{{ asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{ asset('assets/js/ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('assets/js/aos.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>
</html>