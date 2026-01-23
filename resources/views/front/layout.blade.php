<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AMAAC - American Muslim and Arab
        Affairs Council</title>

    <meta name="keywords" content="AMAAC WebSite" />
    <meta name="description" content="AMAAC - American Muslim and Arab Affairs Council ">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front/img/home/amaac_logo-removebg-preview_cut.png') }}"
        type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('front/img/home/amaac_logo-removebg-preview_cut.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->


    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('front/css/theme.css') }}"> --}}
    @if (app()->getLocale() == 'ar')
     <link rel="stylesheet" href="{{ asset('front/css/theme-elements-rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/theme_ar.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/my-style-ar.css') }}">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Cairo:wght@200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,400;0,500;1,300&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    @else
     <link rel="stylesheet" href="{{ asset('front/css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/theme_old.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/my-style.css') }}">
          <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">
    @endif


    <link rel="stylesheet" href="{{ asset('front/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/theme-shop.css') }}">


    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('front/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
    @yield('css')
</head>

<body data-plugin-page-transition>
    <div class="body">
        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 90}">
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="{{ route('front.home') }}">
                                        <img alt="Porto" width="250" height="80" data-sticky-width="200"
                                            data-sticky-height="70"
                                            src="{{ asset('front/img/home/amaac_logo-removebg-preview.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div
                                    class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse ">
                                            <ul class="nav nav-pills  w-100" id="mainNav">
                                                <li>
                                                    <a class="dropdown-item {{ $home ? 'active' : '' }}"
                                                        href="{{ route('front.home') }}">
                                                        {{ __('navigation.home') }}
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item {{ $about ? 'active' : '' }}"
                                                        href="{{ route('front.about') }}">
                                                        {{ __('navigation.about') }}
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item {{ $goals ? 'active' : '' }}"
                                                        href="{{ route('front.goals') }}">
                                                        {{ __('navigation.goals') }}
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item {{ $team ? 'active' : '' }}"
                                                        href="{{ route('front.team') }}">
                                                        {{ __('navigation.team') }}
                                                    </a>
                                                </li>
                                                 <li>
                                                    <a class="dropdown-item {{ $team ? 'active' : '' }}"
                                                        href="{{ route('front.gallery') }}">
                                                        {{ __('general.Gallery') }}
                                                    </a>
                                                </li>
                                                <li class="dropdown ">
														<a class="dropdown-item dropdown-toggle active current-page-active" href="{{ route('front.gaza_academy') }}">
															{{ __('navigation.initiative') }}
														<i class="fas fa-chevron-down"></i></a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="{{ route('front.gaza_academy') }}">
																	Rushd Academy
																</a>
															</li>
														</ul>
													</li>

                                                <li>
                                                    <a class="dropdown-item {{ $work ? 'active' : '' }}"
                                                        href="{{ route('front.works') }}">
                                                        {{ __('navigation.work') }}
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item {{ $involved ? 'active' : '' }}"
                                                        href="{{ route('front.involved') }}">
                                                        {{ __('navigation.involved') }}
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item {{ $contact ? 'active' : '' }}"
                                                        href="{{ route('front.contact') }}">
                                                        {{ __('navigation.contact') }}
                                                    </a>
                                                </li>
                                                @if (app()->getLocale() == 'ar')
                                                    <li>
                                                        <a class="dropdown-item {{ $contact ? 'active' : '' }}"
                                                            href="{{ route('lang.switch', 'en') }}">
                                                            EN
                                                        </a>

                                                    </li>
                                                @else
                                                    <li>
                                                        <a class="dropdown-item {{ $contact ? 'active' : '' }}"
                                                            href="{{ route('lang.switch', 'ar') }}">
                                                            AR
                                                        </a>

                                                    </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div class="header-nav-features order-1 order-lg-2 d-none d-lg-block">
                                    <div class="header-nav-feature header-nav-features-social-icons d-inline-flex"
                                        style="width:210px">
                                        <ul
                                            class="header-social-icons social-icons d-none d-sm-block social-icons-clean ms-0">
                                            <li class="social-icons-facebook"><a
                                                    href="https://www.facebook.com/amaac.global" target="_blank"
                                                    title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-x"><a href="https://x.com/amaacglobal"
                                                    target="_blank" title="X"><i
                                                        class="fab fa-x-twitter"></i></a></li>
                                            <li class="social-icons-linkedin"><a
                                                    href="https://www.linkedin.com/company/amaac-global/"
                                                    target="_blank" title="Linkedin"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li class="social-icons-tiktok">
                                                <a href="https://www.tiktok.com/@amaac.global" target="_blank"
                                                    title="TikTok">
                                                    <i class="fab fa-tiktok"></i>
                                                </a>
                                            </li>

                                            <li class="social-icons-instagram">
                                                <a href="https://www.instagram.com/amaac.global" target="_blank"
                                                    title="Instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>

                                            <li class="social-icons-youtube">
                                                <a href="https://www.youtube.com/@amaac.global" target="_blank"
                                                    title="YouTube">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">

            @yield('content')

        </div>
        @php
            $isRtl = app()->getLocale() === 'ar';
        @endphp
        <footer id="footer" class="border-0" style="background : var(--secondary)">
            <div class="container">

                <div class="row pt-5 ">
                    <div class="col-md-5 mb-4 mb-lg-0 text-center {{ $isRtl ? 'text-md-end' : 'text-md-start' }}">
                        <a href="index.html" class="logo pe-0 pe-lg-3">
                            <img alt="Porto Website Template"
                                src="{{ asset('front/img/home/amaac_logo-removebg-preview.png') }}" class="mb-4 mt-1"
                                height="80">
                        </a>
                        <p class="mt-2 mb-2 text-color-primary"> {{ __('footer.description') }}</p>
                    </div>

                    @php
                        $textAlign = $isRtl ? 'text-md-end' : 'text-md-start';
                        $iconDir = $isRtl ? 'left' : 'right';
                        $linkSpace = $isRtl ? 'me-1' : 'ms-1';
                    @endphp

                    <div class="col-sm-4 col-md-3 text-center {{ $textAlign }}">
                        <h5 class="text-3 mb-3 mt-4 mt-sm-0 text-color-primary">
                            {{ __('footer.useful_links') }}
                        </h5>

                        <ul class="list list-icons list-icons-sm text-color-primary d-inline-block d-md-block">
                            <li>
                                <i class="fas fa-angle-{{ $iconDir }}"></i>
                                <a href="{{ route('front.about') }}"
                                    class="link-hover-style-1 {{ $linkSpace }} text-color-primary">
                                    {{ __('footer.about') }}
                                </a>
                            </li>

                            <li>
                                <i class="fas fa-angle-{{ $iconDir }}"></i>
                                <a href="{{ route('front.goals') }}"
                                    class="link-hover-style-1 {{ $linkSpace }} text-color-primary">
                                    {{ __('footer.goals') }}
                                </a>
                            </li>

                            <li>
                                <i class="fas fa-angle-{{ $iconDir }}"></i>
                                <a href="{{ route('front.team') }}"
                                    class="link-hover-style-1 {{ $linkSpace }} text-color-primary">
                                    {{ __('footer.team') }}
                                </a>
                            </li>

                            <li>
                                <i class="fas fa-angle-{{ $iconDir }}"></i>
                                <a href="{{ route('front.works') }}"
                                    class="link-hover-style-1 {{ $linkSpace }} text-color-primary">
                                    {{ __('footer.work') }}
                                </a>
                            </li>

                            <li>
                                <i class="fas fa-angle-{{ $iconDir }}"></i>
                                <a href="{{ route('front.involved') }}"
                                    class="link-hover-style-1 {{ $linkSpace }} text-color-primary">
                                    {{ __('footer.involved') }}
                                </a>
                            </li>

                            <li>
                                <i class="fas fa-angle-{{ $iconDir }}"></i>
                                <a href="{{ route('front.contact') }}"
                                    class="link-hover-style-1 {{ $linkSpace }} text-color-primary">
                                    {{ __('footer.contact') }}
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div
                        class="col-sm-8 col-md-4 mb-4 mb-lg-0 text-center {{ $isRtl ? 'text-md-end' : 'text-md-start' }}">
                        <h5 class="text-3 mb-3 text-color-primary"> {{ __('footer.recent_posts') }}</h5>
                        <div class="row lightbox mt-2 mx-0 justify-content-center {{ $isRtl ? 'justify-content-md-end' : 'justify-content-md-start' }} "
                            data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                            <div class="col-4 col-md-6 pe-2 ps-0 mb-2">
                                <div class="image-gallery-item">
                                    <a href="{{ route('news.future') }}" class="image-zoom">
                                        <img src="{{ asset('front/img/home/article1thumbnail.jpg') }}"
                                            class="img-fluid" style="height: 120px !important;" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-4 col-md-6 pe-2 ps-0 mb-2">
                                <div class="image-gallery-item">
                                    <a href="{{ route('news.rights') }}" class="image-zoom">
                                        <img src="{{ asset('front/img/home/article2thumbnail.jpg') }}"
                                            class="img-fluid" style="height: 120px !important;" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <p class="mt-3 mb-0 text-center {{ $isRtl ? 'text-lg-end' : 'text-lg-start' }}">
                            <i class="fab fa-whatsapp text-color-primary"></i>
                            <span class="opacity-7 {{ $isRtl ? 'pe-2' : 'ps-2' }} text-color-primary">
                                +1 312-622-6666
                            </span>

                            <i
                                class="far fa-envelope text-color-primary {{ $isRtl ? 'ms-0 me-4' : 'ms-4 me-0' }}"></i>
                            <a href="mailto:info@amaac.com"
                                class="text-color-primary opacity-7 {{ $isRtl ? 'pe-2' : 'ps-2' }}">
                                info@amaacouncil.com
                            </a>
                        </p>
                    </div>
                    <div class="footer-copyright footer-copyright-style-2 bg-transparent footer-top-light-border mt-3">
                        <div class="container py-2">
                            <div class="row py-2">
                                <div class="col d-flex align-items-center justify-content-center mb-lg-0">
                                    <p>{{ __('footer.copyright') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <!-- Vendor -->
    <script src="{{ asset('front/vendor/plugins/js/plugins.min.js') }}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('front/js/theme.js') }}"></script>
    <!-- Theme Custom -->
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ asset('front/js/theme.init.js') }}"></script>
    @yield('js')
</body>

</html>
