@extends('front.layout', ['home' => false, 'about' => true, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    <style>
        .post-image img{
            height:150px;
        }
    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/IMG-20251119-WA0013.jpg') }}'); background-position: center center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary ">Building Bridges of Understanding and
                        Cooperation</h1>
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
                                    Committed to Building a Future
                                    of
                                    Peace and
                                    Understanding
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-secondary hero-desc"
                                    data-appear-animation="maskUp" data-appear-animation-delay="200">
                                    Emerging from the heart of the United States, the American Muslim and Arab Affairs
                                    Council
                                    (AMAAC)
                                    is dedicated to building bridges of cooperation and understanding between the Arab and
                                    Muslim
                                    world and America. Our mission is rooted in promoting justice, equality, and mutual
                                    respect
                                    among communities.
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
                    <h2 class="font-weight-normal text-center text-6 pb-3 text-color-primary ">Our
                        <strong class="font-weight-extra-bold text-color-primary ">Core </strong>Values
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
                                                    Integrity</h2>
                                                <p class="text-color-primary">Operating with transparency, honesty, and
                                                    accountability. </p>

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
                                                    Justice</h2>
                                                <p class="text-color-primary">Upholding fairness, equity, and human rights
                                                    for all.</p>

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
                                                    Compassion</h2>
                                                <p class="text-color-primary">
                                                    Embodying empathy and care for all people.</p>

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
                                                    Inclusivity </h2>
                                                <p class="text-color-primary">Celebrating diversity and ensuring all voices
                                                    are
                                                    heard. </p>

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
                                                    Empowerment</h2>
                                                <p class="text-color-primary">Equipping individuals and communities with the
                                                    tools for self-determination, impact and progress.</p>

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
                                                    Respect and equality for all</h2>
                                                <p class="text-color-primary">we believe that every individual deserves
                                                    dignity, respect, and
                                                    equal opportunity.</p>

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
                                    Our <span class="text-color-secondary">Vision</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-secondary" data-appear-animation="maskUp"
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
    </section>

    <section class="section section-height-3 bg-color-secondary m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class=" font-weight-normal text-6 mb-2 text-color-primary ">Our <strong
                            class="font-weight-extra-bold text-color-primary">
                            Mission</strong></h2>
                    <p class="lead text-color-primary borderd-secondary">
                        The mission of the American Muslim dnd Arab Affairs Council
                        for is to promote mutual understanding, build bridges of dialogue,
                        and advocate for the rights of Arab and Muslim communities in
                        the United States and around the world. We work to positively
                        influence policy, support sustainable development, and combat
                        negative stereotypes to achieve a more just and peaceful world.
                    </p>
                </div>
                <div
                    class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5 image-stack">

                    <img src="{{ asset('front/img/home/IMG-20251119-WA0022.jpg') }}"
                        class="img-fluid position-relative appear-animation mb-2 image-zoom-in-out"
                        data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />

                </div>
            </div>
        </div>
    </section>





    {{-- <section class="section bg-color-grey section-height-3 border-0 m-0">
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
    </section> --}}
    <section class="section section-height-4 mt-0  border-0 bg-primary">
        <div class="container" bis_skin_checked="1">
            <div class="row justify-content-center" bis_skin_checked="1">
                <div class="col-lg-10" bis_skin_checked="1">

                    <div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-lg nav-transparent nav-borders rounded-nav mb-0 owl-loaded owl-drag owl-carousel-init"
                        data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100}"
                        bis_skin_checked="1" style="height: auto;">



                        <div class="owl-stage-outer " bis_skin_checked="1">
                            <div class="owl-stage"
                                style="transform: translate3d(-1652px, 0px, 0px); transition: 0.25s; width: 2678px; padding-left: 100px; padding-right: 100px;"
                                bis_skin_checked="1">
                                <div class="owl-item" style="width: 726px; margin-right: 100px;" bis_skin_checked="1">
                                    <div class="text-center" bis_skin_checked="1">
                                        <h2 class="font-weight-semibold text-10 text-color-secondary">Supporting
                                            Sustainable
                                            Development</h2>
                                        <p class="lead lead-2 mb-0 text-color-light">We will work tirelessly to combat
                                            negative stereotypes and misconceptions about Arabs and Muslims
                                            in the West, presenting a true image that reflects the cultural
                                            diversity, rich history, and civilizational contributions of these
                                            peoples. We will organize public awareness campaigns, produce rich
                                            media content, and collaborate with educational and media
                                            institutions to ensure our message reaches the widest possible
                                            audience.</p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 726px; margin-right: 100px;" bis_skin_checked="1">
                                    <div class="text-center" bis_skin_checked="1">
                                        <h2 class="font-weight-semibold text-10 text-color-secondary">Correct
                                            misconceptions
                                        </h2>
                                        <p class="lead lead-2 mb-0 text-color-light">We will launch dialogue initiatives
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
                                <div class="owl-item" style="width: 726px; margin-right: 100px;" bis_skin_checked="1">
                                    <div class="text-center" bis_skin_checked="1">
                                        <h2 class="font-weight-semibold text-10 text-color-secondary"> Promote
                                            intercultural dialogue
                                        </h2>
                                        <p class="lead lead-2 mb-0 text-color-light">We will encourage Arab and
                                            Muslim communities to actively participate in the political and civic
                                            processes in their countries of residence, with a focus on building
                                            promising young leaders capable of effectively representing the
                                            interests of their communities.</p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 726px; margin-right: 100px;" bis_skin_checked="1">
                                    <div class="text-center" bis_skin_checked="1">
                                        <h2 class="font-weight-semibold text-10 text-color-secondary">
                                            Promoting Civic Engagement
                                        </h2>
                                        <p class="lead lead-2 mb-0 text-color-light">We will collaborate with
                                            local and international organizations to support sustainable
                                            development projects in Arab and Muslim countries, with a focus on
                                            education, healthcare, and women and youth empowerment. Our
                                            role will not simply be to provide assistance, but rather to build
                                            capacity to enable these communities to achieve self-sufficiency and
                                            prosperity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav" bis_skin_checked="1">
                            <button type="button" role="presentation" class="owl-prev text-color-light"></button>
                            <button type="button" role="presentation"
                                class="owl-next disabled text-color-light"></button>
                        </div>
                        <div class="owl-dots disabled text-color-light" bis_skin_checked="1"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
