@extends('front.layout', ['home' => true, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])
@section('content')
    {{-- <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center dots-light show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
        data-plugin-options="{'autoplayTimeout': 10000}" data-dynamic-height="['670px','670px','670px','550px','500px']"
        style="height: 670px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <!-- Carousel Slide 1 -->
                {{-- front/img/home/IMG-20251119-WA0028.jpg --}}
                <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                    style="background-image: url('{{ asset('front/img/home/IMG-20251119-WA0028.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-7">
                                <div class="d-flex flex-column align-items-center">
                                    <h2 class="text-color-secondary font-weight-bold text-13 mb-4 appear-animation"
                                        data-appear-animation="blurIn" data-plugin-options="{'minWindowWidth': 0}">
                                        AMAAC

                                    </h2>
                                    <p class="text-4-5 text-color-light font-weight-light opacity-7 text-center mb-4"
                                        data-plugin-animated-letters
                                        data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 25}">
                                        We are dedicated to fostering a vibrant, informed, and empowered
                                        American Muslim and Arab community. In a rapidly changing
                                        world, we work tirelessly to ensure our voices are heard, our rights
                                        are protected, and our contributions to American society are
                                        recognized and celebrated. Explore our site to learn more about our
                                        mission, the issues we address, and how you can join us in building
                                        a more just and inclusive world.
                                        We are a dedicated non-profit organization advocating for the
                                        rights,
                                        promoting the welfare, through education, civic engagement, and
                                        community building, we strive to foster a more inclusive and
                                        equitable society for all
                                    </p>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                        data-appear-animation-delay="5000">
                                        <div class="d-flex align-items-center mt-2">
                                            <a href="#"
                                                class="btn btn-light btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">LEARN
                                                MORE About Us</a>
                                            <a href="#" {{-- btn btn-secondary btn-lg text-3 font-weight-semibold px-4 py-3 --}}
                                                class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
                                                Our Work <i class="fas fa-arrow-right ms-2"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Slide 2 -->
                <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                    style="background-image: url('{{ asset('front/img/home/IMG-20251119-WA0013.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">
                                    <h3 class="position-relative text-color-secondary text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                        data-appear-animation="fadeInDownShorterPlus"
                                        data-plugin-options="{'minWindowWidth': 0}">
                                        <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInRightShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                        Building Bridges Between Cultures
                                        <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                            <img src="{{ asset('front/img/slides/slide-title-border.png') }}"
                                                class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter"
                                                data-appear-animation-delay="250"
                                                data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                        </span>
                                    </h3>
                                    <h2 class="porto-big-title text-color-secondary font-weight-extra-bold mb-3"
                                        data-plugin-animated-letters
                                        data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 250, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">
                                        AMAAC</h2>
                                    <p class="text-4 text-color-light font-weight-light text-center mb-0"
                                        data-plugin-animated-letters
                                        data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">
                                        Empowering Arab and Muslim communities to engage, lead, and inspire
                                        positive change in America
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Carousel Slide 3 -->
                <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
                    style="background-image: url('{{ asset('front/img/home/IMG-20251119-WA0016.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-7">
                                <div class="d-flex flex-column align-items-center">
                                    <h2 class="text-color-secondary font-weight-bold text-13 mb-4 appear-animation"
                                        data-appear-animation="blurIn" data-plugin-options="{'minWindowWidth': 0}"> Stronger
                                        Community
                                    </h2>
                                    <p class="text-4-5 text-color-light font-weight-light opacity-7 text-center mb-4"
                                        data-plugin-animated-letters
                                        data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 25}">
                                        Uniting voices to promote equality, mutual respect, and social
                                        harmony.
                                    </p>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                        data-appear-animation-delay="3300">
                                        <div class="d-flex align-items-center mt-2">
                                            <a href="#"
                                                class="btn btn-light btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
                                                Get Involved</a>
                                            <a href="#"
                                                class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
                                                Our Work <i class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-dots mb-5">
            <button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
        </div>
    </div> --}}

    <div class="home-intro mb-0" id="home-intro" style="background-color: #072447;">
        <div class="container">

            <div class="row align-items-center ">
                <div class="col-lg-8">
                    <p>
                        American Muslim and Arab Affairs Council <span
                            class="highlighted-word  text-color-secondary font-weight-semibold text-5">AMAAC</span>
                        <span>Building Bridges of Understanding, Promoting
                            Justice, amplifying voices, Empowering Communities, Advocating for Justice, and
                            Empowerment for Muslims and Arabs in USA and around the world.</span>
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="get-started text-start text-lg-end">
                        <a href="#" class="btn btn-secondary btn-lg text-3 font-weight-semibold px-4 py-3">
                            Learn more</a>
                        <!-- <div class="learn-more">or <a href="index.html">learn more.</a></div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- data-image-src="{{ asset('front/img/home/pexels-josh-hild-1270765-12096173.jpg') }}" -->
    <section class="section section-no-border section-angled bg-color-primary m-0">
        <div class="section-angled-layer-top section-angled-layer-increase-angle"
            style="padding: 5rem 0; background-color: #ffbf1f;"></div>
        <div class="container py-5 my-5">
            <div class="row align-items-center text-center my-5">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation text-secondary animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        data-appear-animation-duration="750" style="animation-delay: 200ms;">About Us
                    </h2>
                    <p class="font-weight-semibold text-light text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                        data-appear-animation-duration="750" style="animation-delay: 600ms;">
                        American Muslim dnd Arab Affairs Council</p>
                    <p class="pb-2 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                        style="color: #d5d0d0;" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                        data-appear-animation-duration="750" style="animation-delay: 800ms;">
                        We are a leading organization committed to promoting mutual understanding between
                        the
                        United States and the Arab and Islamic world. We work to defend rights, support
                        sustainable
                        development and advance progress, growth and prosperity globally.
                        We are committed to Empowering Muslim and Arab communities in the United States and
                        around the world, and supporting their political, social, and cultural renaissance,
                        through
                        conscious, influential leadership and balanced international relations.
                        AMAAC is a platform for hope, a bridge for understanding, and a voice for justice.
                        We aspire to
                        be an integral part of global efforts to build a more peaceful and just world, where
                        everyone
                        lives with dignity and mutual respect.
                    </p>
                    <a href="https://elements.envato.com/"
                        class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible donate"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                        data-appear-animation-duration="750" target="_blank" style="animation-delay: 1000ms;">
                        Donate</a>

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
                        <div class="strong-shadow rounded strong-shadow-top-right">
                            <img loading="lazy"
                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}"
                                class="img-fluid border border-width-10 border-color-light rounded box-shadow-3"
                                alt="Porto Admin" style="height : 550px ; width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center text-center my-5">

                <div class="col-md-6 position-relative ">
                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn"
                        data-appear-animation-delay="500" style="animation-delay: 500ms;">
                        <img loading="lazy" src="{{ asset('front/img/landing/porto_dots2.png') }}" alt=""
                            width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
                    </div>
                    <div class="appear-animation animated fadeInLeftShorter appear-animation-visible"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0"
                        data-appear-animation-duration="750" style="animation-delay: 0ms;">
                        <div class="strong-shadow rounded strong-shadow-top-left">
                            <img loading="lazy"
                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.32_54795eeb.jpg') }}"
                                class="img-fluid border border-width-10 border-color-light rounded box-shadow-3"
                                alt="Porto Admin" style="height : 550px ; width: 100%">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-5">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation text-secondary animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        data-appear-animation-duration="750" style="animation-delay: 200ms;">CEO statement
                    </h2>
                    <p class="font-weight-semibold text-light text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                        data-appear-animation-duration="750" style="animation-delay: 600ms;">
                        American Muslim dnd Arab Affairs Council</p>
                    <p class="pb-2 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                        style="color: #d5d0d0;" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                        data-appear-animation-duration="750" style="animation-delay: 800ms;">
                        We are a leading organization committed to promoting mutual understanding between
                        the
                        United States and the Arab and Islamic world. We work to defend rights, support
                        sustainable
                        development and advance progress, growth and prosperity globally.
                        We are committed to Empowering Muslim and Arab communities in the United States and
                        around the world, and supporting their political, social, and cultural renaissance,
                        through
                        conscious, influential leadership and balanced international relations.
                        AMAAC is a platform for hope, a bridge for understanding, and a voice for justice.
                        We aspire to
                        be an integral part of global efforts to build a more peaceful and just world, where
                        everyone
                        lives with dignity and mutual respect.
                    </p>
                    <a href="https://elements.envato.com/"
                        class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible donate"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                        data-appear-animation-duration="750" target="_blank" style="animation-delay: 1000ms;">
                        Donate</a>

                </div>
            </div>
        </div>
    </section>


    <section class="section bg-color-secondary section-height-3 border-0 m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-normal text-center text-color-light text-6 pb-3">Our <strong
                            class="font-weight-extra-bold text-color-primary">Mission </strong>at a Glance</h2>
                </div>
            </div>

            <div class="row mb-5 pb-3" bis_skin_checked="1">

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" bis_skin_checked="1"
                    style="animation-delay: 200ms;">
                    <div class="card flip-card text-center rounded-0" bis_skin_checked="1">
                        <div class="flip-front p-5" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon">
                                    <i class="icons icon-support text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">Building Cultural Bridges</h4>
                                <p class="text-color-primary">Lorem ipsum dolor sit amet, consectetur adipiscing <span
                                        class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque
                                    imperdiet.</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url({{ asset('front/img/home/IMG-20251119-WA0028.jpg') }}); background-size: cover; background-position: center;"
                            bis_skin_checked="1">

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" bis_skin_checked="1"
                    style="animation-delay: 400ms;">
                    <div class="card flip-card flip-card-vertical text-center rounded-0" bis_skin_checked="1">
                        <div class="flip-front p-5" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon text-color-primary">
                                    <i class="icons icon-layers text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">Protecting Rights, </h4>
                                <p class="text-color-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque
                                    rutrum
                                    pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url({{ asset('front/img/home/IMG-20251119-WA0029.jpg') }}); background-size: cover; background-position: center;"
                            bis_skin_checked="1">

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" bis_skin_checked="1"
                    style="animation-delay: 600ms;">
                    <div class="card flip-card flip-card-3d text-center rounded-0" bis_skin_checked="1">
                        <div class="flip-front p-5" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon">
                                    <i class="icons icon-menu text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">Influencing
                                    Policy</h4>
                                <p class="text-color-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque
                                    rutrum
                                    pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url('{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}'); background-size: cover; background-position: center;"
                            bis_skin_checked="1">

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="container">



        <div class="row text-center">
            <div class="col">
                <h2 class="font-weight-normal text-6 mt-4 text-color-primary">Latest <strong
                        class="font-weight-extra-bold text-color-secondary">News </strong> and Projects</h2>
            </div>
        </div>
    </div>

    <div class="image-gallery sort-destination full-width mb-0">
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-wide-slider.html" aria-label="">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                        <span class="thumb-info-wrapper">
                            <img src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}" class="img-fluid project-img"
                                alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-wide-slider.html" aria-label="">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                        <span class="thumb-info-wrapper">
                            <img src="{{ asset('front/img/home/IMG-20251119-WA0013.jpg') }}" class="img-fluid project-img"
                                alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-wide-slider.html" aria-label="">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                        <span class="thumb-info-wrapper">
                            <img src="{{ asset('front/img/home/IMG-20251119-WA0027.jpg') }}" class="img-fluid project-img"
                                alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-wide-slider.html" aria-label="">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                        <span class="thumb-info-wrapper">
                            <img src="{{ asset('front/img/home/IMG-20251119-WA0016.jpg') }}" class="img-fluid project-img"
                                alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item mb-0">
                <a href="portfolio-single-wide-slider.html" aria-label="">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                        <span class="thumb-info-wrapper">
                            <img src="{{ asset('front/img/home/IMG-20251119-WA0020.jpg') }}" class="img-fluid project-img"
                                alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">Project Title</span>
                                <span class="thumb-info-type">Project Type</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <section
        class="section section-height-3 section-background section-text-light section-center overlay overlay-show overlay-op-9 overlay-color-primary m-0 appear-animation"
        data-appear-animation="fadeIn"
        style="background-image: url(img/bg-corporate-1-1.jpg); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav dots-light mb-0"
                        data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <div class="testimonial-author">
                                        <img src="{{ asset('front/img/clients/client-1.jpg') }}"
                                            class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
                                            risus porta, tincidunt turpis at, interdum tortor. Suspendisse
                                            potenti. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Sociis natoque penatibus et magnis dis parturient montes,
                                            nascetur ridiculus mus. Fusce ante tellus, convallis non
                                            consectetur sed, pharetra nec ex.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="text-2 opacity-10">- John Smith. Okler</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                    <div class="testimonial-author">
                                        <img src="{{ asset('front/img/clients/client-1.jpg') }}"
                                            class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget
                                            risus porta, tincidunt turpis at, interdum tortor. Suspendisse
                                            potenti. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="text-2 opacity-10">- John Smith. Okler</strong>
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
