@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => true , 'work' => false , 'involved' => false , 'contact' => false])
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/slider1.png') }}');">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary ">Team AMAAC</h1>
                    <span class="sub-title">Building Bridges of Understanding and Cooperation</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-5">
            <div class="col">

                {{-- Intro Section --}}
                <div class="row text-center pb-5">
                    <div class="col-md-9 mx-md-auto">
                        <div class="overflow-hidden mb-3">
                            <h1 class="font-weight-bold text-8 mb-0 appear-animation text-color-primary "
                                data-appear-animation="maskUp">
                                Our <span class="text-color-secondary">Team</span>
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="200">
                                Our diverse and inspiring team is committed to fulfilling
                                AMAAC's vision. Our members combine deep expertise and a
                                shared passion for serving the causes of peace and justice."
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="container py-4">

        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team"
            data-option-key="filter">
            <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active"
                    href="#">Show All</a></li>
            <li class="nav-item" data-option-value=".leadership"><a class="nav-link text-2-5 text-uppercase"
                    href="#">Leadership</a></li>
            <li class="nav-item" data-option-value=".marketing"><a class="nav-link text-2-5 text-uppercase"
                    href="#">Marketing</a></li>
            <li class="nav-item" data-option-value=".development"><a class="nav-link text-2-5 text-uppercase"
                    href="#">Development</a></li>
            <li class="nav-item" data-option-value=".design"><a class="nav-link text-2-5 text-uppercase"
                    href="#">Design</a></li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div class="row team-list sort-destination" data-sort-id="team">
                <div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="{{ route('front.teamPage') }}">
                                <img src="{{ asset('front/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">John Doe</span>
                                    <span class="thumb-info-type">CEO</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras ac ligula mi, non suscipitaccumsan.</span>
                            <span class="thumb-info-social-icons mb-4">
                                <a target="_blank" href="http://www.facebook.com"><i
                                        class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.linkedin.com"><i
                                        class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 isotope-item marketing">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="{{ route('front.teamPage') }}">
                                <img src="{{ asset('front/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Jessica Doe</span>
                                    <span class="thumb-info-type">Marketing</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras ac ligula mi, non suscipitaccumsan.</span>
                            <span class="thumb-info-social-icons mb-4">
                                <a href="http://www.twitter.com"><i class="fab fa-x-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i
                                        class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="{{ route('front.teamPage') }}">
                                <img src="{{ asset('front/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Rick Edward Doe</span>
                                    <span class="thumb-info-type">Developer</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras ac ligula mi, non suscipitaccumsan.</span>
                            <span class="thumb-info-social-icons mb-4">
                                <a target="_blank" href="http://www.facebook.com"><i
                                        class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-x-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i
                                        class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 isotope-item design">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="{{ route('front.teamPage') }}">
                                <img src="{{ asset('front/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Melinda Doe</span>
                                    <span class="thumb-info-type">Design</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras ac ligula mi, non suscipitaccumsan.</span>
                            <span class="thumb-info-social-icons mb-4">
                                <a target="_blank" href="http://www.facebook.com"><i
                                        class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-x-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i
                                        class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="{{ route('front.teamPage') }}">
                                <img src="{{ asset('front/img/team/team-5.jpg') }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Robert Doe</span>
                                    <span class="thumb-info-type">Design</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras ac ligula mi, non suscipitaccumsan.</span>
                            <span class="thumb-info-social-icons mb-4">
                                <a target="_blank" href="http://www.facebook.com"><i
                                        class="fab fa-facebook-f"></i><span>Facebook</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 isotope-item marketing">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="{{ route('front.teamPage') }}">
                                <img src="{{ asset('front/img/team/team-6.jpg') }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Melissa Doe</span>
                                    <span class="thumb-info-type">Marketing</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras ac ligula mi, non suscipitaccumsan.</span>
                            <span class="thumb-info-social-icons mb-4">
                                <a target="_blank" href="http://www.facebook.com"><i
                                        class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-x-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i
                                        class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="{{ route('front.teamPage') }}">
                                <img src="{{ asset('front/img/team/team-7.jpg') }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Janice Doe</span>
                                    <span class="thumb-info-type">Developer</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras ac ligula mi, non suscipitaccumsan.</span>
                            <span class="thumb-info-social-icons mb-4">
                                <a href="http://www.linkedin.com"><i
                                        class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                        <span class="thumb-info-wrapper">
                            <a href="{{ route('front.teamPage') }}">
                                <img src="{{ asset('front/img/team/team-8.jpg') }}" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Jerry Doe</span>
                                    <span class="thumb-info-type">Developer</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras ac ligula mi, non suscipitaccumsan.</span>
                            <span class="thumb-info-social-icons mb-4">
                                <a target="_blank" href="http://www.facebook.com"><i
                                        class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-x-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i
                                        class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
            </div>

        </div>

    </div>
@endsection
