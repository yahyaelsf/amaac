@extends('front.layout', ['home' => false, 'about' => true, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    <style>
        .post-image img {
            height: 200px;
        }

        @media (max-width: 575px) {

            /* إخفاء كل الفقرات داخل الـ Owl Carousel */
            .carouser-last .text-center p {
                display: none !important;
            }

            /* تصغير حجم خط العناوين */
            .carouser-last .text-center h2 {
                font-size: 1.5rem !important;
                /* يمكنك تغييره حسب الحاجة */
                line-height: 1.2 !important;
            }
        }

        .carouser-last .owl-nav button.owl-prev,
        .carouser-last .owl-nav button.owl-next,
        .carouser-last.nav-lg.rounded-nav .owl-nav button.owl-next:before,
        .carouser-last.nav-lg.rounded-nav .owl-nav button.owl-prev:before {
            color: var(--secondary) !important;
            /* غيّر الكود هنا إلى لونك السكندري إذا مختلف */
            border-color: var(--secondary) !important;
            /* إذا تريد إطار الزر */
        }

        .carouser-last.nav-borders .owl-nav button[class*="owl-"] {
            border-color: var(--light) !important;
        }

        /* ألوان النقاط */
        .carouser-last .owl-dots .owl-dot span {
            background-color: var(--light) !important;
            /* لون النقاط */
        }

        .carouser-last .text-center p {
            color: var(--secondary) !important;
        }

        /* عند hover على النقاط أو الأزرار */
        .carouser-last .owl-nav button.owl-prev:hover,
        .carouser-last .owl-nav button.owl-next:hover,
        .carouser-last .owl-dots .owl-dot.active span {
            background-color: var(--secondary) !important;
            /* اللون عند التفاعل */
        }
        .owl-dots{
            margin-top: 30px;
        }
            .page-header.page-header-modern.page-header-background.page-header-background-md {
    padding: 210px 0;
}
    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/team/WhatsApp Image 2025-12-19 at 12.04.54 AM.jpeg') }}'); background-position: center center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary ">{{ __('general.about_hero_title') }}
                        </h1>
                    {{-- <span class="sub-title">Building Bridges of Understanding and Cooperation</span> --}}
                </div>
                {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">About</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container  ">
            <div class="row pt-5">
                <div class="col">

                    {{-- Intro Section --}}
                    <div class="row text-center pb-5 ">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="font-weight-bold text-8 mb-0 appear-animation text-color-secondary "
                                    data-appear-animation="maskUp">
                                    {{ __('general.about_intro_title') }}
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-secondary hero-desc"
                                    data-appear-animation="maskUp" data-appear-animation-delay="200">
                                   {{ __('general.about_intro_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <section class="section bg-color-secondary section-height-3 border-0 m-0 ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-normal text-center text-6 pb-3 text-color-primary ">
                       {!! __('general.about_values_title') !!}
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="my-4 lightbox appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter"
                        data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}"
                        style="animation-delay: 100ms;">
                        <div class="owl-carousel owl-theme pb-3 owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 4, 'margin': 35, 'loop': true ,'autoHeight': false , 'autoplay': true}"
                            style="height: auto;">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2302px, 0px, 0px); transition: 1s; width: 3453px; ">
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <article class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="{{ asset('front/img/home/integrity.png') }}"
                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="post-content p-1 text-color-primary">

                                                <h2
                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                     {{ __('general.about_value_1_title') }}</h2>
                                                <p class="text-color-primary">
                                                  {{ __('general.about_value_1_desc') }}
                                                 </p>

                                            </div>
                                        </article>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <article class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="{{ asset('front/img/home/justice.png') }}"
                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="post-content p-1 text-color-primary">

                                                <h2
                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                    {{ __('general.about_value_2_title') }}</h2>
                                                <p class="text-color-primary">
                                                  {{ __('general.about_value_2_desc') }}
                                                </p>

                                            </div>
                                        </article>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <article class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="{{ asset('front/img/home/compassion.png') }}"
                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="post-content p-1 text-color-primary">

                                                <h2
                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                    {{ __('general.about_value_3_title') }}</h2>
                                                <p class="text-color-primary">
                                                     {{ __('general.about_value_3_desc') }}
                                                </p>

                                            </div>
                                        </article>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <article class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="{{ asset('front/img/home/inclusivity.png') }}"
                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="post-content p-1 text-color-primary">

                                                <h2
                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                    {{ __('general.about_value_4_title') }} </h2>
                                                <p class="text-color-primary">  {{ __('general.about_value_4_desc') }}</p>

                                            </div>
                                        </article>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <article class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="{{ asset('front/img/home/empowerment.png') }}"
                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="post-content p-1 text-color-primary">

                                                <h2
                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                    {{ __('general.about_value_5_title') }}</h2>
                                                <p class="text-color-primary">{{ __('general.about_value_5_desc') }}</p>

                                            </div>
                                        </article>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <article class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="{{ asset('front/img/home/respect.png') }}"
                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="post-content p-1 text-color-primary">

                                                <h2
                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                    {{ __('general.about_value_6_title') }}</h2>
                                                <p class="text-color-primary">  {{ __('general.about_value_6_desc') }}</p>

                                            </div>
                                        </article>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container">
            <div class="row pt-5">
                <div class="col">

                    {{-- Intro Section --}}
                    <div class="row text-center pb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="font-weight-bold text-8 mb-0 appear-animation text-color-secondary "
                                    data-appear-animation="maskUp">
                                     {!! __('general.about_vision_title') !!}
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-secondary" data-appear-animation="maskUp"
                                    data-appear-animation-delay="200">
                                      {{ __('general.about_vision_desc') }}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 bg-color-secondary m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class=" font-weight-normal text-6 mb-2 text-color-primary ">
                     {!! __('general.about_mission_title') !!}
                    </h2>
                    <p class="lead text-color-primary borderd-secondary">
                         {{ __('general.about_mission_desc') }}

                    </p>
                </div>
                <div
                    class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5 image-stack">

                    <img src="{{ asset('front/img/home/IMG-20251206-WA0007.jpg') }}"
                        class="img-fluid position-relative appear-animation mb-2 image-zoom-in-out"
                        data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" @if(app()->getLocale() == 'ar')
                        style="margin-right: 50%;"
                        @endif />

                </div>
            </div>
        </div>
    </section>


    <section class="section section-height-4 mt-0  border-0 bg-primary">
        <div class="container" bis_skin_checked="1">
            <div class="row justify-content-center" bis_skin_checked="1">
                <div class="col-lg-10" bis_skin_checked="1">

                    <div class="owl-carousel owl-theme carouser-last stage-margin stage-margin-lg nav-lg nav-transparent nav-borders rounded-nav mb-0 owl-loaded owl-drag owl-carousel-init"
                        data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': true,  'autoplay': true, 'stagePadding': 100}"
                        bis_skin_checked="1" style="height: auto;">



                        <div class="owl-stage-outer " bis_skin_checked="1">
                            <div class="owl-stage"
                                style="transform: translate3d(-1652px, 0px, 0px); transition: 0.25s; width: 2678px; padding-left: 100px; padding-right: 100px;"
                                bis_skin_checked="1">
                                <div class="owl-item" style="width: 726px; margin-right: 100px;" bis_skin_checked="1">
                                    <div class="text-center" bis_skin_checked="1">
                                        <h2 class="font-weight-semibold text-10 text-color-secondary">

                                        {{ __('general.about_actions_1_title') }}
                                        </h2>
                                        <p class="lead lead-2 mb-0 text-color-light">
                                         {{ __('general.about_actions_1_desc') }}
                                           </p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 726px; margin-right: 100px;" bis_skin_checked="1">
                                    <div class="text-center" bis_skin_checked="1">
                                        <h2 class="font-weight-semibold text-10 text-color-secondary">
                                             {{ __('general.about_actions_2_title') }}
                                        </h2>
                                        <p class="lead lead-2 mb-0 text-color-light">
                                         {{ __('general.about_actions_2_desc') }} </p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 726px; margin-right: 100px;" bis_skin_checked="1">
                                    <div class="text-center" bis_skin_checked="1">
                                        <h2 class="font-weight-semibold text-10 text-color-secondary">
                                             {{ __('general.about_actions_3_title') }}
                                        </h2>
                                        <p class="lead lead-2 mb-0 text-color-light">
                                             {{ __('general.about_actions_3_desc') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 726px; margin-right: 100px;" bis_skin_checked="1">
                                    <div class="text-center" bis_skin_checked="1">
                                        <h2 class="font-weight-semibold text-10 text-color-secondary">
                                             {{ __('general.about_actions_4_title') }}
                                        </h2>
                                        <p class="lead lead-2 mb-0 text-color-light">
                                             {{ __('general.about_actions_4_desc') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
