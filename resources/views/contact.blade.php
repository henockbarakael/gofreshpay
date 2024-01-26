<!doctype html>
<html lang="zxx">
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
		<meta property="og:title" content="Contactez-nous">
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
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Contactez-nous</title>
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}">
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
    </head>
    <body>

        <!-- Start Navbar Area -->
        @include('layouts.navbar_contact')
        <!-- End Navbar Area -->

<!-- Start Page Title Area -->
<div class="page-title-area bg-color">
    <div class="container">
        <div class="page-title-content">
            <h2>Contactez-nous</h2>
            <ul>
                <li><a href="{{ route('welcome') }}">Accueil</a></li>
                <li>Contactez-nous</li>
            </ul>
        </div>
    </div>
    <div class="divider"></div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="banner-shape1"><img src="{{ asset('assets/img/shape/shape9.png')}}" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Contactez-nous</h2>
            <p>Besoin d’informations sur un produit ou d’assistance technique ? Retrouvez tous les moyens de rentrer en contact avec FreshPay sur cette page.</p>
        </div>
        <div class="contact-form">
            <form id="contactForm">
                <div class="row">
                    <div id="msgSubmit" class="h3 text-center hidden" style="margin-bottom: 20px"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" required="" data-error="Please enter your name" placeholder="Eg: Freshpay DRC">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" required="" data-error="Please enter your email" placeholder="user@domain.com">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control" id="phone_number" required="" data-error="Please enter your phone number" placeholder="Enter your phone number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Enter your subject" required="" data-error="Please enter your subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" cols="30" rows="6" required="" data-error="Please enter your message" placeholder="Enter message..."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button type="submit" class="default-btn"><i class='bx bx-paper-plane'></i> Send Message</button>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="maps">
        <iframe src="https://maps.google.com/maps?q=wagenia&t=k&z=17&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Contact Info Area -->
<div class="contact-info-area pb-100">
    <div class="container">
        <div class="contact-info-inner">
            <h2 style="font-size: 16px">Si vous avez des questions, veuillez nous appeler ou nous envoyer un courriel.</h2>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-contact-info-box">
                        <div class="icon bg1">
                            <i class="ri-customer-service-2-line"></i>
                        </div>
                        <h3 style="font-size: 14px"><a href="tel:(+243) 999-165-964">(+243) 999-165-964</a></h3>
                        <h3 style="font-size: 14px"><a href="tel:(+243) 999-165-964">(+243) 999-165-964</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class="ri-earth-line"></i>
                        </div>
                        <h3 style="font-size: 14px"><a href="mailto:info@gofreshpay.com"><span class="__cf_email__" data-cfemail="771f121b1b183707161c16075914181a">info@gofreshpay.com</span></a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-contact-info-box">
                        <div class="icon bg2">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <h3 style="font-size: 14px">218, Avenue Wagenia, Kinshasa-Gombe, République Démocratique du Congo.</h3>
                    </div>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Info Area -->
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