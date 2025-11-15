@extends('front.layout', ['home' => false, 'about' => true ,'goals' => false])
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/slider1.png') }}');">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary ">About AMAAC</h1>
                    <span class="sub-title">Building Bridges of Understanding and Cooperation</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">About</li>
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
                            <h1 class="font-weight-bold text-8 mb-0 appear-animation text-color-primary " data-appear-animation="maskUp">
                                We are <span class="text-color-secondary">AMAAC</span>, Committed to Building a Future of Peace and
                                Understanding
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="200">
                                Emerging from the heart of the United States, the American Muslim and Arab Affairs Council
                                (AMAAC)
                                is dedicated to building bridges of cooperation and understanding between the Arab and
                                Muslim
                                world and America. Our mission is rooted in promoting justice, equality, and mutual respect
                                among communities.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <section class="section bg-color-grey section-height-3 border-0 m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-normal text-center text-6 pb-3 text-color-primary ">Our
                        <strong class="font-weight-extra-bold text-color-secondary ">Core </strong>Values
                    </h2>
                </div>
            </div>
            <div class="row mb-lg-4">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-support text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary ">Justice</h4>
                            <p>Upholding fairness, equity, and human rights for all.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-layers text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary ">Integrity</h4>
                            <p>Operating with transparency, honesty, and
                                accountability. .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-menu text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary ">
                                Compassion</h4>
                            <p> Embodying empathy and care for all people. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-lg-4">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-support text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary ">Inclusivity</h4>
                            <p>Celebrating diversity and ensuring all voices are
                                heard. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-layers text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary ">Empowerment</h4>
                            <p>Equipping individuals and communities with the
                                tools for self-determination, impact and progress. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-menu text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary ">
                                Respect and equality for all.</h4>
                            <p>we believe that every individual deserves dignity, respect, and equal opportunity. </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section section-height-3 bg-color-white m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2 text-color-primary ">Our <strong class="font-weight-extra-bold text-color-secondary">
                            Mission</strong></h2>
                    <p class="lead">
                        The mission of the American Muslim dnd Arab Affairs Council
                        for is to promote mutual understanding, build bridges of dialogue,
                        and advocate for the rights of Arab and Muslim communities in
                        the United States and around the world. We work to positively
                        influence policy, support sustainable development, and combat
                        negative stereotypes to achieve a more just and peaceful world.
                    </p>
                    <p class="pe-5 me-5">
                        AMAAC is a platform for hope, a bridge for understanding, and a voice for justice. We aspire to
                        be an integral part of global efforts to build a more peaceful and just world, where everyone
                        lives with dignity and mutual respect.
                    </p>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5"
                    style="top: 1.7rem;">
                    <img src="{{ asset('front/img/home/pexels-august-de-richelieu-4427500.jpg') }}"
                        class="img-fluid position-absolute d-none d-sm-block appear-animation"
                        data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;"
                        alt="" />
                    <img src="{{ asset('front/img/home/premium_photo-1723773650963-de7f36b9ed3d.avif') }}"
                        class="img-fluid position-absolute d-none d-sm-block appear-animation"
                        data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="{{ asset('front/img/home/pexels-timmossholder-1709929.jpg') }}"
                        class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn"
                        data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section class="section border-0 lazyload mb-0"
        data-bg-src="{{ asset('front/img/home/pexels-august-de-richelieu-4427500.jpg') }}"
        style="background-image: url('{{ asset('front/img/home/pexels-august-de-richelieu-4427500.jpg') }}');">

        <div class="container " bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">

                <div class="col-lg-3 mb-5 mb-lg-0" bis_skin_checked="1">
                    {{-- <h4 class="mb-3 text-light">Advocacy</h4> --}}

                    <div class="card card-glass" bis_skin_checked="1">
                        <div class="card-body" bis_skin_checked="1">
                            <h4 class="card-title mb-1 text-3 text-light font-weight-bold">Advocacy</h4>
                            <p class="card-text text-grey">Championing Civil Rights & Social Justice</p>
                            <a href="#" class="btn btn-primary btn-modern">Advocacy</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5 mb-lg-0" bis_skin_checked="1">
                    <div class="card card-glass" bis_skin_checked="1">
                        <div class="card-body" bis_skin_checked="1">
                            <h4 class="card-title mb-1 text-3 text-light font-weight-bold">Community Empowerment</h4>
                            <p class="card-text text-grey">Fostering Unity & Leadership</p>
                            <a href="#" class="btn btn-primary btn-modern">Programs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5 mb-lg-0" bis_skin_checked="1">

                    <div class="card card-glass" bis_skin_checked="1">
                        <div class="card-body" bis_skin_checked="1">
                            <h4 class="card-title mb-1 text-3 text-light font-weight-bold">Cultural Preservation</h4>
                            <p class="card-text text-grey">Celebrating Our Rich Heritage</p>
                            <a href="#" class="btn btn-primary btn-modern">Culture</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-5 mb-lg-0" bis_skin_checked="1">
                    <div class="card card-glass" bis_skin_checked="1">
                        <div class="card-body" bis_skin_checked="1">
                            <h4 class="card-title mb-1 text-3 text-light font-weight-bold">Get Involved</h4>
                            <p class="card-text text-grey">Your Voice Matters – Join Us!</p>
                            <a href="#" class="btn btn-primary btn-modern">Get Involved</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section section-height-3 bg-color-grey section-no-border m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="font-weight-normal text-6 mb-5 text-color-primary ">Upcoming <strong class="font-weight-extra-bold text-color-secondary">
                            Events</strong>
                    </h2>
                </div>
            </div>
            <div class="row recent-posts pb-4 mb-5">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <article class="post post-medium">
                        <div class="post-content">
                            <h4 class="font-weight-semibold mb-1"><a href="blog-post.html"
                                    class="text-decoration-none text-color-primary ">Lorem ipsum dolor sit amet, consectetur</a></h4>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent
                                per conubia nostra, per inceptos himenaeos.</p>
                            <div class="post-meta">
                                <span><i class="fa-regular fa-calendar-alt"></i> January 10, 2025 </span>

                                <span class="d-block mt-2"><a href="blog-post.html"
                                        class="btn btn-xs btn-primary text-1 text-uppercase">Read More</a></span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <article class="post post-medium">
                        <div class="post-content">
                            <h4 class="font-weight-semibold mb-1"><a href="blog-post.html"
                                    class="text-decoration-none text-color-primary ">Lorem ipsum dolor sit amet, consectetur</a></h4>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent
                                per conubia nostra, per inceptos himenaeos.</p>
                            <div class="post-meta">
                                <span><i class="fa-regular fa-calendar-alt"></i> January 10, 2025 </span>


                                <span class="d-block mt-2"><a href="blog-post.html"
                                        class="btn btn-xs btn-primary text-1 text-uppercase">Read More</a></span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <article class="post post-medium">
                        <div class="post-content">
                            <h4 class="font-weight-semibold mb-1"><a href="blog-post.html"
                                    class="text-decoration-none text-color-primary ">Lorem ipsum dolor sit amet, consectetur</a></h4>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent
                                per conubia nostra, per inceptos himenaeos.</p>
                            <div class="post-meta">
                                <span><i class="fa-regular fa-calendar-alt"></i> January 10, 2025 </span>

                                <span class="d-block mt-2"><a href="blog-post.html"
                                        class="btn btn-xs btn-primary text-1 text-uppercase">Read More</a></span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <a href="#"
                        class="btn btn-secondary btn-px-5 btn-py-2 font-weight-bold rounded-0 text-2 view-all">View All
                        Events
                    </a>
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
                            <h1 class="font-weight-bold text-8 mb-0 appear-animation text-color-primary " data-appear-animation="maskUp">
                                Our <span class="text-color-secondary">Vision</span>
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="200">
                                AMAAC’s
                                vision
                                It will not be just another organization; it will be a driving force for
                                positive change, with a profound vision centered on promoting
                                peace, justice, and mutual understanding.
                                Fostering Understanding and Building Bridges
                                At the core of AMAAC's vision is to build strong and lasting bonds
                                based on mutual understanding and appreciation. We seek to:
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <section class="section bg-color-grey section-height-3 border-0 m-0">
        <div class="container">

            <div class="row mb-lg-4">
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeftShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">

                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary">Supporting Sustainable Development</h4>
                            <p>We will work tirelessly to combat
                                negative stereotypes and misconceptions about Arabs and Muslims
                                in the West, presenting a true image that reflects the cultural
                                diversity, rich history, and civilizational contributions of these
                                peoples. We will organize public awareness campaigns, produce rich
                                media content, and collaborate with educational and media
                                institutions to ensure our message reaches the widest possible
                                audience. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeftShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">

                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary">Correct misconceptions</h4>
                            <p>We will launch dialogue initiatives
                                that bring together individuals and communities from diverse
                                backgrounds. These platforms will provide safe spaces for
                                constructive discussion about common issues and challenges.
                                Advocating for Justice and Equality: We will serve as a strong voice
                                for Muslims and Arabs in the United States and around the world,
                                defending their civil and human rights. We will combat
                                discrimination and Islamophobia, and provide legal and moral
                                support to victims. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeftShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">

                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary"> Promote intercultural dialogue</h4>
                            <p>We will encourage Arab and
                                Muslim communities to actively participate in the political and civic
                                processes in their countries of residence, with a focus on building
                                promising young leaders capable of effectively representing the
                                interests of their communities. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeftShorter"
                    data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">

                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2 text-color-primary">Promoting Civic Engagement</h4>
                            <p>We will collaborate with
                                local and international organizations to support sustainable
                                development projects in Arab and Muslim countries, with a focus on
                                education, healthcare, and women and youth empowerment. Our
                                role will not simply be to provide assistance, but rather to build
                                capacity to enable these communities to achieve self-sufficiency and
                                prosperity. </p>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>
@endsection
