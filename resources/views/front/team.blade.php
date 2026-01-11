@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => true, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    <style>
    .page-header.page-header-modern.page-header-background.page-header-background-md {
    padding: 210px 0;
}
    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/team/WhatsApp Image 2025-12-19 at 12.04.55 AM.jpeg') }}'); background-position: center center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary "> {{ __('team.page_title') }}</h1>
                    {{-- <span class="sub-title">Building Bridges of Understanding and Cooperation</span> --}}
                </div>
                {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Team</li>
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
                                     {{ __('team.section_title') }} <span class="text-color-secondary">{{ __('team.section_highlight') }}</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-secondary" data-appear-animation="maskUp"
                                    data-appear-animation-delay="200">
                                    {{ __('team.section_description') }}
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container py-4">

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center text-color-light-100"
                data-sort-id="team" data-option-key="filter">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase text-color-light-100 active "
                        href="#">{{ __('team.filters.all') }}</a></li>
                <li class="nav-item" data-option-value=".President"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#"> {{ __('team.filters.president') }}</a></li>
                {{-- <li class="nav-item" data-option-value=".Vice"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#">Vice President</a></li> --}}
                 <li class="nav-item" data-option-value=".Directors"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#"> {{ __('team.filters.directors') }}</a></li>
                <li class="nav-item" data-option-value=".assembly"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#"> {{ __('team.filters.assembly') }}</a></li>
                <li class="nav-item" data-option-value=".Trustees"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#">{{ __('team.filters.trustees') }}</a></li>


                <li class="nav-item" data-option-value=".Advisory"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#"> {{ __('team.filters.advisory') }}</a></li>
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                <div class="row team-list sort-destination" data-sort-id="team">
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item President bg-primary">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.04.06_d144ae8fs.jpg') }}"
                                        class="img-fluid" style="height : 355px !important" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary"> {{ __('team.members.tamara.name') }}</span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.tamara.role') }} </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                      {{ __('team.members.tamara.bio') }}</span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item President">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/7.png') }}" style="height : 355px !important" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.abdullah.name') }} </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.abdullah.role') }} </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                    {!! __('team.members.abdullah.bio') !!}
                                 </span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="{{ asset('front/img/team/1-abdullah-resume-photo-album.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                     <div class="col-12 col-sm-6 col-lg-4 isotope-item Directors">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/hazem.jpg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.hazem.name') }}
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.hazem.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                 {!! __('team.members.hazem.bio') !!}
                                </span>

                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="{{ asset('front/img/team/حازم قشوع.jpg') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Directors">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/Gemini_Generated_Image_gsxjf7gsxjf7gsxj.png') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.huseen.name') }}
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.hazem.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                 {!! __('team.members.huseen.bio') !!}
                                </span>

                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="{{ asset('front/img/team/hussen_cv.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                     <div class="col-12 col-sm-6 col-lg-4 isotope-item Directors">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/Jaleleddine.png') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.Jaleleddine.name') }}
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.Jaleleddine.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                 {!! __('team.members.Jaleleddine.bio') !!}
                                </span>

                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="{{ asset('front/img/team/hussen_cv.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>

                    {{-- General Assembly --}}
                     <div class="col-12 col-sm-6 col-lg-4 isotope-item assembly">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/WhatsApp Image 2025-12-14 at 2.34.53 PM.jpeg') }}" style="height : 355px !important" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary"> {{ __('team.members.hayatullah_atid.name') }} </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.hayatullah_atid.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                               {{ __('team.members.hayatullah_atid.bio') }}





                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                  <a target="_blank" href="{{ asset('front/img/team/Dr.Hayatullah Atid CV 2025.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item assembly">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/Yusuf.jpeg') }}" style="height : 355px !important" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary"> {{ __('team.members.yousef.name') }} </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.hayatullah_atid.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                               {{ __('team.members.yousef.bio') }}






                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                  <a target="_blank" href="{{ asset('front/img/team/ALABBASI.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item assembly">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/Mariam Khan.jpg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.mariam_khan.name') }}
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.mariam_khan.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                    {!! __('team.members.mariam_khan.bio') !!}
                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                      {{-- Board of trustees  --}}
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Trustees">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/WhatsApp Image 2025-12-14 at 2.34.54 PM.jpeg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.abdelrahim_al_hour.name') }}
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.abdelrahim_al_hour.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                    {!! __('team.members.abdelrahim_al_hour.bio') !!}
                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                     <div class="col-12 col-sm-6 col-lg-4 isotope-item Trustees">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/WhatsApp Image 2025-12-14 at 2.36.10 PM.jpeg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.bader_al_hussinan.name') }} </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.abdelrahim_al_hour.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary"> {{ __('team.members.bader_al_hussinan.bio') }}</span>
                                <span class="thumb-info-social-icons mb-4">
                                  <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Trustees">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/salah.jpeg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.salah.name') }} </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.salah.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary"> {{ __('team.members.salah.bio') }}</span>
                                <span class="thumb-info-social-icons mb-4">
                                  <a target="_blank" href="{{ asset('front/img/team/salah.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                     <div class="col-12 col-sm-6 col-lg-4 isotope-item Trustees">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/hasan_fahad.jpeg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.hasan_fahad.name') }} </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.salah.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary"> {{ __('team.members.hasan_fahad.bio') }}</span>
                                <span class="thumb-info-social-icons mb-4">
                                  <a target="_blank" href="{{ asset('front/img/team/salah.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                      {{-- Advisory Board  --}}
                     <div class="col-12 col-sm-6 col-lg-4 isotope-item Advisory">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/Muhammed  Hassani.jpg') }}" style="height : 355px !important" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.mohammed_hassani.name') }}</span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.mariam_al_sharif.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">  {!! __('team.members.mohammed_hassani.bio') !!}

                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Advisory">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/mariam sharifa sudan.jpg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.mariam_al_sharif.name') }}
                                             </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.mariam_al_sharif.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                  {{ __('team.members.mariam_al_sharif.bio') }}
                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Advisory">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/ali.jpg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.ali_mahamat_abdoulaye.name') }}
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.ali_mahamat_abdoulaye.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">



                                {{ __('team.members.ali_mahamat_abdoulaye.bio') }}

                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Advisory">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/cumana.jpeg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.cumana.name') }}
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.cumana.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">



                                {{ __('team.members.cumana.bio') }}

                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="{{ asset('front/img/team/cumana.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Advisory">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/mohamed_abdel.jpeg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">{{ __('team.members.mohamed_abdel.name') }}
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">{{ __('team.members.mohamed_abdel.role') }}
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">



                                {{ __('team.members.mohamed_abdel.bio') }}

                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="{{ asset('front/img/team/mohamed_abdel.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>


                </div>

            </div>

        </div>
    </section>
@endsection

