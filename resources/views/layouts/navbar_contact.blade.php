<div class="navbar-area navbar-style-two">
    <div class="pakap-responsive-nav">
        <div class="container">
            <div class="pakap-responsive-menu">
                <div class="logo">
                    <a href="{{ route('welcome') }}"><img src="{{ asset('assets/img/FreshPay logo_revised.png')}}" width="150px" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="pakap-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('assets/img/FreshPay logo_revised.png')}}"  width="300px"  alt="logo"></a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">À-propos</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">Développeurs</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link active">FreshPay Gateway</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">FreshPay Sandbox</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">FreshPay Woocommerce</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">FreshPay Documentation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link active">Contact</a></li>
                    </ul>
                    <div class="others-option">
                        <a href="https://merchants.gofreshpay.com/" target="_blank" class="default-btn">FreshPay Merchant</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>