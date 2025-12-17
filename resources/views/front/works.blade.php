@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => true, 'involved' => false, 'contact' => false])
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/IMG-20251206-WA0004.jpg') }}'); background-position: center center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary ">{{ __('general.works_page.header_title') }}</h1>
                    {{-- <span class="sub-title">Addressing Critical Issues Affecting Muslims and Arabs
                        in USA and all over the world </span> --}}
                </div>
                {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Works</li>
                    </ul>
                </div> --}}
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
                                    {{ __('general.works_page.intro_title') }}
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-secondary" data-appear-animation="maskUp"
                                    data-appear-animation-delay="200">
                                    {{ __('general.works_page.intro_text') }}
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container pb-1">

            <div class="row" bis_skin_checked="1">
                <div class="featured-boxes featured-boxes-style-2" bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">

                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible "
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border border-color-secondary rounded p-3 borderd-secondary"
                                bis_skin_checked="1">
                                <div class="box-content " bis_skin_checked="1">
                                    {{-- <i class="icon-featured icon-screen-tablet icons text-color-white bg-color-primary"></i> --}}
                                    <i
                                        class="fa-solid fa-shield-halved text-color-primary bg-color-secondary icon-featured"></i>

                                    <h4 class="font-weight-bold {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">{{ __('general.works_page.areas.civil_rights.title') }}</h4>
                                    <ul class="px-2 {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">
                                        @foreach( __('general.works_page.areas.civil_rights.items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border border-color-secondary rounded p-3 borderd-secondary"
                                bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    <i
                                        class="fa-solid fa-newspaper text-color-primary bg-color-secondary icon-featured"></i>

                                   <h4 class="font-weight-bold {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">{{ __('general.works_page.areas.media_pr.title') }}</h4>
                                    <ul class="px-2 {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">
                                        @foreach( __('general.works_page.areas.media_pr.items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border border-color-secondary rounded p-3 borderd-secondary"
                                bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    <i
                                        class="fa-solid fa-square-poll-horizontal text-color-primary bg-color-secondary icon-featured"></i>

                                    <h4 class="font-weight-bold {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">{{ __('general.works_page.areas.civic_engagement.title') }}</h4>
                                    <ul class="px-2 {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">
                                        @foreach( __('general.works_page.areas.civic_engagement.items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border border-color-secondary rounded p-3 borderd-secondary"
                                bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">

                                    <i class="fa-solid fa-passport text-color-primary bg-color-secondary icon-featured"></i>

                                   <h4 class="font-weight-bold {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">{{ __('general.works_page.areas.immigration.title') }}</h4>
                                    <ul class="px-2 {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">
                                        @foreach( __('general.works_page.areas.immigration.items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border border-color-secondary rounded p-3 borderd-secondary"
                                bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    <i
                                        class="fa-solid fa-scale-balanced text-color-primary bg-color-secondary icon-featured"></i>

                                    <h4 class="font-weight-bold {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">{{ __('general.works_page.areas.human_rights.title') }}</h4>
                                    <ul class="px-2 {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">
                                        @foreach( __('general.works_page.areas.human_rights.items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Research & Policy Analysis -->
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">

                            <div
                                class="featured-box featured-box-effect-4 border border-color-secondary rounded p-3 borderd-secondary">
                                <div class="box-content">

                                    <i
                                        class="fa-solid fa-chart-pie text-color-primary bg-color-secondary icon-featured"></i>

                                   <h4 class="font-weight-bold {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">{{ __('general.works_page.areas.research_policy.title') }}</h4>
                                    <ul class="px-2 {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">
                                        @foreach( __('general.works_page.areas.research_policy.items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>
                         <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border border-color-secondary rounded p-3 borderd-secondary"
                                bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    <i
                                        class="fa-solid fa-people-group text-color-primary bg-color-secondary icon-featured"></i>

                                    <h4 class="font-weight-bold {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">{{ __('general.works_page.areas.youth_development.title') }}</h4>
                                    <ul class="px-2 {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">
                                        @foreach( __('general.works_page.areas.youth_development.items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Partnerships & Coalition Building -->
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">

                            <div
                                class="featured-box featured-box-effect-4 border border-color-secondary rounded p-3 borderd-secondary">
                                <div class="box-content">

                                    <i
                                        class="fa-solid fa-handshake-angle text-color-primary bg-color-secondary icon-featured"></i>

                                   <h4 class="font-weight-bold {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">{{ __('general.works_page.areas.partnerships.title') }}</h4>
                                    <ul class="px-2 {{ app()->getLocale() === 'ar' ? 'text-end' : 'text-start' }}  text-color-secondary">
                                        @foreach( __('general.works_page.areas.partnerships.items') as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
