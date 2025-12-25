@extends('front.layout', ['home' => true, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    <style>
        .animated-text .word {
            display: inline-block;
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.3s, transform 0.3s;
            white-space: nowrap;
            /* يمنع كسر الكلمات */
        }

        .animated-text .word.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .porto-big-title {
            font-size: 3rem;
        }
                /* Modal Overlay */
        .amaa-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(11, 58, 83, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        /* Modal Box */
        .amaa-modal {
            background: #ffffff;
            max-width: 460px;
            width: 90%;
            padding: 35px 30px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            animation: scaleIn 0.35s ease;
        }

        /* Icon */
        .amaa-modal-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #0B3A53;
            color: #fff;
            font-size: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Title */
        .amaa-modal h3 {
            color: #0B3A53;
            font-size: 22px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        /* Text */
        .amaa-modal p {
            color: #555;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        /* Animation */
        @keyframes scaleIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
@endsection
@section('content')
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside
                   dots-horizontal-center dots-light show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
        data-plugin-options="{'autoplayTimeout': 20000}" data-dynamic-height="['670px','670px','670px','550px','500px']"
        style="height: 670px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                    style="background-image: url({{ asset('front/img/home/IMG-20251206-WA0004.jpg') }}); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">

                                    <h1 class="text-color-secondary font-weight-extra-bold text-center text-10 mb-3 appear-animation animated blurIn appear-animation-visible"
                                        data-appear-animation="blurIn" data-appear-animation-delay="1000"
                                        data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">
                                        {{ __('general.hero1_title') }}
                                    </h1>
                                    <h3 class="position-relative text-color-secondary text-center text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                        data-appear-animation="fadeInDownShorterPlus"
                                        data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                        {{ __('general.hero1_subtitle') }}
                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    </h3>

                                    <p class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0">
                                        {{ __('general.hero1_description') }}
                                    </p>

                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                        data-appear-animation-delay="5000">
                                        <div class="d-flex align-items-center mt-2">
                                            {{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
                                            <a href="{{ route('front.about') }}"
                                                class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
                                                {{ __('general.hero1_button') }}
                                                {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                    style="background-image: url({{ asset('front/img/home/Slide2.jpg') }}); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">

                                    <h1 class="text-color-secondary font-weight-extra-bold text-center text-10 mb-3 appear-animation animated blurIn appear-animation-visible"
                                        data-appear-animation="blurIn" data-appear-animation-delay="1000"
                                        data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">
                                        {{ __('general.hero2_title') }}
                                    </h1>
                                    <h3 class="position-relative text-color-secondary text-center text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                        data-appear-animation="fadeInDownShorterPlus"
                                        data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                        {{ __('general.hero2_subtitle') }}

                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    </h3>

                                    <p class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0">
                                        {{ __('general.hero2_description') }}
                                    </p>

                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                        data-appear-animation-delay="5000">
                                        <div class="d-flex align-items-center mt-2">
                                            {{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
                                            <a href="#mission"
                                                class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
                                                {{ __('general.hero2_button') }}
                                                {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                    style="background-image: url({{ asset('front/img/home/slide3.jpg') }});
                                background-size: cover; background-position: center; width: 100%;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">

                                    <h1 class="text-color-secondary font-weight-extra-bold text-center text-10 mb-3 appear-animation animated blurIn appear-animation-visible"
                                        data-appear-animation="blurIn" data-appear-animation-delay="1000"
                                        data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">
                                        {{ __('general.hero3_title') }}</h1>
                                    <h3 class="position-relative text-color-secondary text-4 text-center line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                        data-appear-animation="fadeInDownShorterPlus"
                                        data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                        {{ __('general.hero3_subtitle') }}
                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    </h3>

                                    <p
                                        class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0">
                                        {{ __('general.hero3_description') }}
                                    </p>

                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                        data-appear-animation-delay="5000">
                                        <div class="d-flex align-items-center mt-2">
                                            {{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
                                            <a href="{{ route('front.works') }}"
                                                class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
                                                {{ __('general.hero3_button') }}
                                                {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                    style="background-image: url({{ asset('front/img/home/slide4.jpg') }}); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">

                                    <h1 class="text-color-secondary font-weight-extra-bold text-center text-10 mb-3 appear-animation animated blurIn appear-animation-visible"
                                        data-appear-animation="blurIn" data-appear-animation-delay="1000"
                                        data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">
                                        {{ __('general.hero4_title') }}
                                    </h1>
                                    <h3 class="position-relative text-color-secondary text-4 text-center line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                        data-appear-animation="fadeInDownShorterPlus"
                                        data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                        {{ __('general.hero4_subtitle') }}
                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    </h3>

                                    <p
                                        class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0">
                                        {{ __('general.hero4_description') }}
                                    </p>

                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                        data-appear-animation-delay="5000">
                                        <div class="d-flex align-items-center mt-2">
                                            {{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
                                            <a href="{{ route('front.goals') }}"
                                                class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
                                                {{ __('general.hero4_button') }}
                                                {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                    style="background-image: url({{ asset('front/img/home/IMG-20251206-WA0002.jpg') }}); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">

                                    <h1 class="text-color-secondary font-weight-extra-bold text-10 mb-3 text-center appear-animation animated blurIn appear-animation-visible"
                                        data-appear-animation="blurIn" data-appear-animation-delay="1000"
                                        data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">
                                        {{ __('general.hero5_title') }}</h1>
                                    <h3 class="position-relative text-color-secondary text-center text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                        data-appear-animation="fadeInDownShorterPlus"
                                        data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                        {{ __('general.hero5_subtitle') }}
                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    </h3>

                                    <p
                                        class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0">
                                        {{ __('general.hero5_description') }}

                                    </p>

                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                        data-appear-animation-delay="5000">
                                        <div class="d-flex align-items-center mt-2">
                                            {{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
                                            <a href="{{ route('front.involved') }}"
                                                class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
                                                {{ __('general.hero5_button') }}
                                                {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <div class="owl-dots mb-3">
            <button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
        </div>
    </div>

    <div class="home-intro mb-0" id="home-intro" style="background-color: var(--secondary);">
        <div class="container">
            @php
                $isArabic = app()->getLocale() === 'ar';
            @endphp
            <div class="row align-items-center {{ $isArabic ? 'text-end' : '' }}">

                <div class="col-lg-8">
                    <p class="text-color-primary {{ $isArabic ? 'text-end' : '' }}">
                        {{ __('general.subhero_text') }}
                        <span class="highlighted-word text-color-primary font-weight-semibold text-5">
                            AMAAC
                        </span>
                        <span class="text-color-primary">
                            {{ __('general.subhero_desc') }}
                        </span>
                    </p>
                </div>

                <div class="col-lg-4">
                    <div class="get-started {{ $isArabic ? 'text-lg-start' : 'text-lg-end' }}">
                        <a href="{{ route('front.about') }}"
                            class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3 text-color-secondary">
                            {{ __('general.subhero_button') }}
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- data-image-src="{{ asset('front/img/home/pexels-josh-hild-1270765-12096173.jpg') }}" -->
    <section class="section section-no-border section-angled bg-color-primary m-0">

        <div class="container">
            <div class="row align-items-center text-center my-3">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-10 mb-0 appear-animation text-secondary animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        data-appear-animation-duration="750" style="animation-delay: 200ms;">
                        {{ __('general.about_title') }}
                    </h2>
                    <p class="font-weight-semibold text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible text-color-secondary"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                        data-appear-animation-duration="750" style="animation-delay: 600ms;">
                        {{ __('general.about_name') }}</p>
                    <p class="pb-2 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible text-color-secondary borderd-primary"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                        data-appear-animation-duration="750" style="animation-delay: 800ms;">
                        {{ __('general.about_description') }}
                    </p>
                    <a href="{{ route('front.contact') }}"
                        class="btn btn-secondary  btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible "
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                        data-appear-animation-duration="750" target="_blank" style="animation-delay: 1000ms;">
                        {{ __('general.about_button') }}</a>

                </div>
                <div class="col-md-6 position-relative py-5">
                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn"
                        data-appear-animation-delay="500" style="animation-delay: 500ms;">
                        <img loading="lazy" src="{{ asset('front/img/landing/porto_dots2.png') }}" alt=""
                            width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
                    </div>
                    <div class="appear-animation animated fadeInLeftShorter appear-animation-visible"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0"
                        data-appear-animation-duration="750" style="animation-delay: 0ms;">
                        <div class="strong-shadow rounded strong-shadow-top-right image-zoom">
                            <img loading="lazy" src="{{ asset('front/img/home/IMG-20251206-WA0007.jpg') }}"
                                class="img-fluid border border-width-10 border-color-light rounded box-shadow-3"
                                alt="Porto Admin" style="height : 550px ; width: 100%">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-no-border section-angled bg-color-secondary m-0">

        <div class="container">
            <div class="row align-items-center text-center my-5">

                <div class="col-md-6 position-relative order-2 order-md-1 ">
                    <div class="appear-animation animated fadeInLeftShorter appear-animation-visible"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0"
                        data-appear-animation-duration="750" style="animation-delay: 0ms;">
                        <div class="strong-shadow rounded strong-shadow-top-left image-zoom">
                            <img loading="lazy"
                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.32_54795eeb.jpg') }}"
                                class="img-fluid border border-width-10 border-color-light rounded box-shadow-3"
                                alt="Porto Admin" style="height : 550px ; width: 100%">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-5 order-1 order-md-2">
                    <h2 class="font-weight-bold text-10 mb-0 appear-animation text-primary animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        data-appear-animation-duration="750" style="animation-delay: 200ms;">
                        {{ __('general.president_title') }}
                    </h2>

                    <p class="pb-2 mb-4 mt-3 appear-animation animated fadeInUpShorter appear-animation-visible text-color-primary borderd-secondary"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                        data-appear-animation-duration="750" style="animation-delay: 800ms;">
                        {{ __('general.president_description') }}

                    </p>
                    <a href="{{ route('front.contact') }}"
                        class="btn btn-primary btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible test-color-secondary"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                        data-appear-animation-duration="750" target="_blank" style="animation-delay: 1000ms;">
                        {{ __('general.president_button') }}</a>

                </div>
            </div>
        </div>
    </section>


    <section class="section bg-color-primary section-height-3 border-0 m-0" id="mission">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-normal text-center text-color-secondary text-6 pb-3">
                        {{ __('general.mission_title') }}</h2>
                </div>
            </div>

            <div class="row mb-5 pb-3" bis_skin_checked="1">

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" bis_skin_checked="1"
                    style="animation-delay: 200ms;">
                    <div class="card flip-card text-center rounded-0 bg-secondary" bis_skin_checked="1">
                        <div class="flip-front p-5 bg-secondary" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon">
                                    <i class="icons icon-support text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">
                                    {{ __('general.mission_card1_title') }}</h4>
                                <p class="text-color-primary"> {{ __('general.mission_card1_description') }}</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url({{ asset('front/img/home/missioatglance1.jpg') }}); background-size: cover; background-position: center;"
                            bis_skin_checked="1">
                            {{-- <div class="flip-content my-4" bis_skin_checked="1">
                                <h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
                                <p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                                <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN
                                    MORE</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" bis_skin_checked="1"
                    style="animation-delay: 400ms;">
                    <div class="card flip-card flip-card-vertical text-center rounded-0 bg-secondary"
                        bis_skin_checked="1">
                        <div class="flip-front p-5 bg-secondary" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon text-color-primary">
                                    <i class="icons icon-layers text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">
                                    {{ __('general.mission_card2_title') }} </h4>
                                <p class="text-color-primary">{{ __('general.mission_card2_description') }}</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url({{ asset('front/img/home/missioatglance2.jpg') }}); background-size: cover; background-position: center;"
                            bis_skin_checked="1">
                            {{-- <div class="flip-content my-4" bis_skin_checked="1">
                                <h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
                                <p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                                <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN
                                    MORE</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" bis_skin_checked="1"
                    style="animation-delay: 600ms;">
                    <div class="card flip-card flip-card-3d text-center rounded-0 bg-secondary" bis_skin_checked="1">
                        <div class="flip-front p-5 bg-secondary" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon">
                                    <i class="icons icon-menu text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">
                                    {{ __('general.mission_card3_title') }}
                                </h4>
                                <p class="text-color-primary">
                                    {{ __('general.mission_card3_description') }}</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url('{{ asset('front/img/home/missioatglance3.jpg') }}'); background-size: cover; background-position: center;"
                            bis_skin_checked="1">
                            {{-- <div class="flip-content my-4" bis_skin_checked="1">
                                <h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
                                <p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                                <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN
                                    MORE</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="bg-secondary">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-weight-normal text-6 mt-4 text-color-primary">{{ __('general.news_section_title') }}
                        <strong
                            class="font-weight-extra-bold text-color-primary">{{ __('general.news_section_title_strong') }}
                        </strong> {{ __('general.news_section_title_suffix') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="my-4 lightbox appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter"
                        data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}"
                        style="animation-delay: 100ms;">
                        <div class="owl-carousel owl-theme pb-3 owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 4, 'margin': 35, 'loop': true ,'autoHeight': false}"
                            style="height: auto;">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2302px, 0px, 0px); transition: 1s; width: 3453px; ">
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">

                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article1thumbnail.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <a href="{{ route('news.future') }}" class="">
                                                        <span class="thumb-info-title bg-primary text-secondary">

                                                            <span
                                                                class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                                {{ __('general.news_1_title') }}</span>
                                                            <span
                                                                class="thumb-info-type mt-2">{{ __('general.news_1_desc') }}</span>

                                                        </span>
                                                    </a>

                                                </span>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">

                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article2thumbnail.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <a href="{{ route('news.rights') }}">
                                                        <span class="thumb-info-title bg-primary text-secondary">
                                                            <span
                                                                class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                                {{ __('general.news_2_title') }}</span>
                                                            <span class="thumb-info-type mt-2">
                                                                {{ __('general.news_2_desc') }}</span>
                                                        </span>
                                                    </a>

                                                </span>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">

                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article3thumbnail.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <a href="{{ route('news.leadership') }}">
                                                        <span class="thumb-info-title bg-primary text-secondary">
                                                            <span
                                                                class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                                {{ __('general.news_3_title') }}</span>
                                                            <span class="thumb-info-type mt-2">
                                                                {{ __('general.news_3_desc') }}</span>
                                                        </span>
                                                    </a>

                                                </span>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article4thumbnail.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <a href="{{ route('news.relations') }}">

                                                        <span class="thumb-info-title bg-primary text-secondary">
                                                            <span
                                                                class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                                {{ __('general.news_4_title') }}
                                                            </span>
                                                            <span class="thumb-info-type mt-2">
                                                                {{ __('general.news_4_desc') }}
                                                            </span>
                                                        </span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">

                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article5thumbnail.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <a href="{{ route('news.combating') }}">
                                                        <span class="thumb-info-title bg-primary text-secondary">
                                                            <span
                                                                class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                                {{ __('general.news_5_title') }}</span>
                                                            <span
                                                                class="thumb-info-type mt-2">{{ __('general.news_5_desc') }}</span>
                                                        </span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">

                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article6thumbnail.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <a href="{{ route('news.strengthening') }}">
                                                        <span class="thumb-info-title bg-primary text-secondary">
                                                            <span
                                                                class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                                {{ __('general.news_6_title') }}
                                                            </span>
                                                            <span class="thumb-info-type mt-2">
                                                                {{ __('general.news_6_desc') }}</span>
                                                        </span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>

                                    </div>



                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section bg-primary section-height-3 border-0 m-0">
        <div class="container">

            <!-- عنوان السكشن -->
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-normal text-center text-color-secondary text-6 pb-3">
                        {{ __('general.newsletter_title') }} <strong class="font-weight-extra-bold text-color-secondary">
                            {{ __('general.newsletter_title_strong') }}</strong>
                        {{ __('general.newsletter_title_suffix') }}
                    </h2>
                    <p class="text-center text-color-secondary opacity-8 mb-4">
                        {{ __('general.newsletter_description') }}
                    </p>
                </div>
            </div>

            <!-- فورم الاشتراك -->
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">

                    <form class="subscription-form" method="POST" action="{{ route('newsletter.subscribe') }}">
                        @csrf
                        @if (session('success'))
                            <div id="newsletterModal" class="amaa-modal-overlay">
                                <div class="amaa-modal">
                                    <div class="amaa-modal-icon">
                                        ✓
                                    </div>

                                    <h3>{{ __('general.newsletter_success_title') }}</h3>

                                    <p>
                                        Thank you for subscribing to the AMAA Council newsletter.<br>
                                        You will now receive updates, news, and important announcements directly in your
                                        inbox.
                                    </p>

                                    <button onclick="closeNewsletterModal()" class="btn btn-secondary btn-modern">
                                        {{ __('general.close') }}
                                    </button>
                                </div>
                            </div>
                        @endif
                        <div class="input-group input-group-lg">
                            <input type="email"
                                class="form-control bg-light border-0 rounded-0 px-4 py-3 text-color-secondary"
                                placeholder="{{ __('general.newsletter_placeholder') }}" name="email" required>


                            <button type="submit" class="btn btn-secondary rounded-0 px-4 font-weight-bold">
                                {{ __('general.newsletter_button') }}
                            </button>
                        </div>
                         @error('email')
                                <small class="text-danger d-block mt-1">
                                    {{ $message }}
                                </small>
                            @enderror

                    </form>

                </div>
            </div>

        </div>
    </section>
    <script>
        function closeNewsletterModal() {
            const modal = document.getElementById('newsletterModal');
            if (modal) {
                modal.style.display = 'none';
            }
        }
    </script>
    <script>
        function wrapWords(el) {
            if (!el.dataset.wrapped) {
                const text = el.textContent.trim();
                const words = text.split(/\s+/);
                el.innerHTML = words.map(w => `<span class="word">${w}</span>`).join(' ');
                el.dataset.wrapped = "true";
            }
        }

        function animateWords(el) {
            const words = el.querySelectorAll('.word');
            words.forEach((w, i) => {
                setTimeout(() => w.classList.add('visible'), i * 350);
            });
        }

        function resetWords(el) {
            el.querySelectorAll('.word').forEach(w => w.classList.remove('visible'));
        }

        // كل مرة عنصر يصبح active نرسم الأنيميشن
        function handleActiveSlide(slide) {
            const animatedTexts = slide.querySelectorAll('.animated-text');
            animatedTexts.forEach(el => {
                wrapWords(el);
                resetWords(el);
                setTimeout(() => animateWords(el), 50);
            });
        }

        // أول تحميل
        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.querySelector('.owl-carousel');
            carousel.querySelectorAll('.owl-item.active').forEach(handleActiveSlide);
        });

        // عند كل تغيير
        document.querySelector('.owl-carousel').addEventListener('changed.owl.carousel', e => {
            const carousel = e.currentTarget;
            carousel.querySelectorAll('.owl-item.active').forEach(handleActiveSlide);
        });
    </script>
@endsection
