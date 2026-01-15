<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', $site->meta_title ?? $site->default_meta_title)</title>
    <meta name="description" content="@yield('meta_description', $site->meta_descr ?? $site->default_meta_descr)">
    <meta name="keywords" content="@yield('meta_keywords', $site->meta_keywords ?? $site->default_meta_keywords)">
    <meta name="google-site-verification" content="b4ou-sLla8wDu3s7-gAB9K_J5Hhlta_vKlWr5mFLZqo" />
    <meta name="ROBOTS" CONTENT="INDEX,FOLLOW">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- css files -->
    <link href="{{ asset('assets/css/css_slider.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/bellmedex.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@amdsol">
    <meta name="twitter:creator" content="@amdsol">
    <meta name="twitter:title" content="@yield('title', $site->meta_title ?? $site->default_meta_title)">
    <meta name="twitter:description" content="@yield('meta_description', $site->meta_descr ?? $site->default_meta_descr)">
    <meta property="og:title" content="@yield('title', $site->meta_title ?? $site->default_meta_title)">
    <meta property="og:site_name" content="amdsol.com">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="@yield('meta_description', $site->meta_descr ?? $site->default_meta_descr)">
    <meta property="og:type" content="website">
</head>
<body>

<!-- top header -->
<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <ul class="d-flex header-w3_pvt">
                    <li class="mr-4 text-white">
                        <span class="fa fa-envelope-open mr-2"></span>
                        <a href="mailto:{{ $site->email ?? '' }}" class="text-white">{{ $site->email ?? '' }}</a>
                    </li>
                    <li class="text-white">
                        <span class="fa fa-phone mr-2"></span>
                        Call Us {{ $site->phone ?? '' }}
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 text-right">
                <div class="icon-social">
                    <a href="{{ $site->facebook ?? '#' }}" class="text-white mx-2"><span class="fa fa-facebook"></span></a>
                    <a href="{{ $site->twitter ?? '#' }}" class="text-white mx-2"><span class="fa fa-twitter"></span></a>
                    <a href="{{ $site->linkedin ?? '#' }}" class="text-white mx-2"><span class="fa fa-linkedin"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="container d-flex align-items-center justify-content-between">
        <div id="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-height: 50px;"></a>
        </div>
        <nav class="d-none d-lg-block">
            <ul class="menu d-flex align-items-center mb-0">
                <li class="dropdown-li">
                    <a href="#" class="nav-link">Services <i class="fa fa-angle-down ml-1"></i></a>
                    <ul class="dropdown-custom">
                        @foreach($service_list as $il)
                        <li><a href="{{ url($il->seokey . '/') }}">{{ $il->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown-li">
                    <a href="#" class="nav-link">Specialties <i class="fa fa-angle-down ml-1"></i></a>
                </li>
                <li class="dropdown-li">
                    <a href="#" class="nav-link">Solutions <i class="fa fa-angle-down ml-1"></i></a>
                </li>
                <li class="dropdown-li">
                    <a href="#" class="nav-link">Pricing</a>
                </li>
                <li class="dropdown-li">
                    <a href="#" class="nav-link">For You <i class="fa fa-angle-down ml-1"></i></a>
                </li>
                <li class="dropdown-li">
                    <a href="#" class="nav-link">Resources <i class="fa fa-angle-down ml-1"></i></a>
                </li>
                <li>
                    <a href="{{ url('contact-us.php') }}" class="talk-btn">
                        Talk To An Expert <i class="fa fa-arrow-right ml-2"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Mobile Toggle -->
        <div class="d-lg-none">
            <i class="fa fa-bars font-24"></i>
        </div>
    </div>
</header>

@yield('content')

<footer class="bell-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('images/logo.png') }}" class="mb-4" style="max-height: 60px; filter: brightness(0) invert(1);">
                <p class="text-white-50">AMDSol is a premier medical billing organization dedicated to streamlining healthcare provider operations through innovative RCM solutions and expert support.</p>
                <div class="icon-social mt-4">
                    <a href="{{ $site->facebook ?? '#' }}" class="text-white mr-3"><span class="fa fa-facebook"></span></a>
                    <a href="{{ $site->twitter ?? '#' }}" class="text-white mr-3"><span class="fa fa-twitter"></span></a>
                    <a href="{{ $site->linkedin ?? '#' }}" class="text-white mr-3"><span class="fa fa-linkedin"></span></a>
                </div>
            </div>
            <div class="col-lg-2">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('blog') }}">Latest Blog</a></li>
                    <li><a href="{{ url('contact-us.php') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Our Services</h4>
                <ul class="list-unstyled">
                    @foreach($service_list as $il)
                        <li><a href="{{ url($il->seokey) }}">{{ $il->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Stay Connected</h4>
                <p><span class="fa fa-map-marker mr-2"></span> {{ $site->address ?? '' }}</p>
                <p><span class="fa fa-phone mr-2"></span> {{ $site->phone ?? '' }}</p>
                <p><span class="fa fa-envelope mr-2"></span> {{ $site->email ?? '' }}</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} AMDSol. All Rights Reserved. Built with Excellence.</p>
        </div>
    </div>
</footer>

<div class="move-top text-right">
    <a href="#home" class="move-top"> 
        <span class="fa fa-angle-up mb-3" aria-hidden="true"></span>
    </a>
</div>

</body>
</html>
