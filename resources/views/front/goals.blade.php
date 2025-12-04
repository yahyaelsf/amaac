@extends('front.layout', ['home' => false, 'about' => false, 'goals' => true, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    <style>
        .goals-container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }

        .goal-section {
            background: var(--primary);
            color: var(--secondary);
            padding: 30px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            border-left: 6px solid var(--secondary);
            /* إذا الخلفية كحلي → بوردر ذهبي */
            transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
        }

        .goal-section.alt {
            background: var(--secondary);
            color: var(--primary);
            border-left: 6px solid var(--primary);
            /* إذا الخلفية ذهبي → بوردر كحلي */
        }

        .goal-section:hover {
            /*  transform: translateY(-5px) scale(1.01);
                                                                            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
                                                                            border-color: var(--primary);
                                                                            */
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            background: #0a2b5a;
        }

        .goal-section.alt:hover {
            transform: translateY(-8px);
            background: var(--secondary);
            /* درجة ذهبية أفتح تعطي إضاءة */
            border-color: #f1d48a;
            /* بوردر أفخم */

            /* توهج ذهبي جميل */
        }


        .goal-title {
            font-size: 1.6rem;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .goal-section p,
        .goal-section h3 {
            line-height: 1.6;
            margin-bottom: 10px;
            color: var(--secondary);
        }

        .goal-section.alt p,
        .goal-section.alt h3 {
            color: var(--primary);
        }

        /* Appear Animation */
        .appear-animation {
            opacity: 0;
            transform: translateY(20px);
            animation-fill-mode: forwards;
        }

        .appear-animation[data-appear-animation="fadeInUp"] {
            animation-name: fadeInUp;
            animation-duration: 0.8s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .four-boxes {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .image-zoom-in-out {
            height: 300px !important;
            width: 400px;
            border: none;
        }

        /* تابلت */
        @media (max-width: 991px) {
            .four-boxes {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* موبايل */
        @media (max-width: 575px) {
            .four-boxes {
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/hedaer_background.png') }}'); background-position: bottom center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary">Our Strategic Objectives</h1>

                </div>
                {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Our goals </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container">
            <div class="row align-items-center py-4 appear-animation animated fadeInLeftShorter appear-animation-visible"
                data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                <div class="col-md-4 px-5 px-md-3 ">
                    <img class="img-fluid scale-2 p-4 pe-md-0 my-4 image-zoom-in-out animated expandIn appear-animation-visible"src="{{ asset('front/img/home/section1.png') }}"
                        alt="layout styles">
                </div>
                <div class="col-md-8 ps-md-5">
                    {{-- class="img-fluid position-relative appear-animation mb-2 image-zoom-in-out animated expandIn appear-animation-visible" --}}
                    <h2 class="font-weight-normal text-6 mb-3 text-color-secondary">Defending Civil Rights and Social
                        Justice</h2>
                    <p class="text-color-secondary">Combating all forms of discrimination and prejudice.</p>
                    <p class="text-color-secondary">Promoting public policies that protect the constitutional freedoms of
                        Muslims and Arabs.</p>
                    <p class="text-color-secondary">Monitoring discriminatory practices in labor, education, media, and law
                        enforcement.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-secondary">
        <div class="container">

            <div class="row align-items-center py-5 appear-animation animated fadeInRightShorter appear-animation-visible"
                data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                <div class="col-md-8 pe-md-5 mb-5 mb-md-0 text-color-primary order-2 order-md-1">
                    <h2 class="font-weight-normal text-6 mb-3 text-color-primary">
                        Political Empowerment and Civic Participation</h2>
                    <p class="text-color-primary">Supporting increased Arab and Muslim representation in local and federal
                        councils.</p>
                    <p class="text-color-primary">Providing awareness and training programs to enhance political and
                        societal presence.</p>
                </div>
                <div class="col-md-4 px-5 px-md-3 order-1 order-md-2">
                    <img class="img-fluid scale-2 p-4 pe-md-0 my-4 image-zoom-in-out animated expandIn appear-animation-visible"src="{{ asset('front/img/home/section2.png') }}"
                        alt="layout styles">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container">
            <div class="row align-items-center py-4 appear-animation animated fadeInLeftShorter appear-animation-visible"
                data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                <div class="col-md-4 px-5 px-md-3">
                    <img class="img-fluid scale-2 p-4 pe-md-0 my-4 image-zoom-in-out animated expandIn appear-animation-visible"src="{{ asset('front/img/home/section3.png') }}"
                        alt="layout styles">
                </div>
                <div class="col-md-8 ps-md-5">
                    {{-- class="img-fluid position-relative appear-animation mb-2 image-zoom-in-out animated expandIn appear-animation-visible" --}}
                    <h2 class="font-weight-normal text-6 mb-3 text-color-secondary">Defending Civil Rights and Social
                        Justice</h2>
                    <p class="text-color-secondary">Combating all forms of discrimination and prejudice.</p>
                    <p class="text-color-secondary">Promoting public policies that protect the constitutional freedoms of
                        Muslims and Arabs.</p>
                    <p class="text-color-secondary">Monitoring discriminatory practices in labor, education, media, and law
                        enforcement.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-secondary">
        <div class="container">

            <div class="row align-items-center py-5 appear-animation animated fadeInRightShorter appear-animation-visible"
                data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                <div class="col-md-8 pe-md-5 mb-5 mb-md-0 text-color-primary order-2 order-md-1">
                    <h2 class="font-weight-normal text-6 mb-3 text-color-primary">
                        Political Empowerment and Civic Participation</h2>
                    <p class="text-color-primary">Supporting increased Arab and Muslim representation in local and federal
                        councils.</p>
                    <p class="text-color-primary">Providing awareness and training programs to enhance political and
                        societal presence.</p>
                </div>
                <div class="col-md-4 px-5 px-md-3 order-1 order-md-2">
                    <img class="img-fluid scale-2 p-4 pe-md-0 my-4 image-zoom-in-out animated expandIn appear-animation-visible"src="{{ asset('front/img/home/section4.png') }}"
                        alt="layout styles">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary">

        <div class="container  pb-4" bis_skin_checked="1">
            <div class="row pb-3" bis_skin_checked="1">

                <div class="goals-container">
                    {{-- <h2 class="text-center mb-5 text-color-secondary">Our Strategic Goals</h2> --}}

                    <!-- Section 1 -->
                    {{-- <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="100">
                        <h3 class="goal-title ">Defending Civil Rights and Social Justice</h3>
                        <p>Combating all forms of discrimination and prejudice.</p>
                        <p>Promoting public policies that protect the constitutional freedoms of Muslims and Arabs.</p>
                        <p>Monitoring discriminatory practices in labor, education, media, and law enforcement.</p>
                    </section> --}}

                    <!-- Section 2 -->
                    {{-- <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="200">
                        <h3 class="goal-title">Political Empowerment and Civic Participation</h3>
                        <p>Supporting increased Arab and Muslim representation in local and federal councils.</p>
                        <p>Providing awareness and training programs to enhance political and societal presence.</p>
                    </section> --}}

                    <!-- Section 3 -->
                    {{-- <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="300">
                        <h3 class="goal-title">Preserving and Promoting Cultural Identity</h3>
                        <p>Organizing artistic and cultural events that highlight Arab and Islamic heritage.</p>
                        <p>Supporting educational initiatives that re-present the image of Islam and Arabism.</p>
                        <p>Producing media content that counters stereotypes and misinformation.</p>
                    </section> --}}

                    <!-- Section 4 -->
                    {{-- <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="400">
                        <h3 class="goal-title">Community Building and Unity</h3>
                        <p>Launching community dialogue initiatives and promoting solidarity among community members.</p>
                        <p>Encouraging collaborative work across religions and cultures, creating common ground for
                            understanding.</p>
                    </section> --}}

                    {{-- <section class="goal-section appear-animation modern-goal" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="500">

                        <h3 class="goal-title text-center mb-4">
                            Education, Development, and Personal Empowerment
                        </h3>

                        <p class="goal-intro text-center">
                            Our mission focuses on strengthening communities through justice, civic participation, and
                            sustainable development.
                        </p>

                        <div class="goal-modern-boxes four-boxes">

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <p><strong>Advocating for Justice & Equality:</strong> Serving as a strong voice for Muslims
                                    and Arabs globally, defending civil and human rights, combating discrimination, and
                                    providing legal and moral support to victims.</p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-vote-yea"></i>
                                </div>
                                <p><strong>Promoting Civic Engagement:</strong> Encouraging active participation in
                                    political and civic processes while supporting the development of young leaders capable
                                    of representing their communities effectively.</p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <p><strong>Supporting Sustainable Development:</strong> Partnering with local and
                                    international organizations to support projects in education, healthcare, and women &
                                    youth empowerment across Arab and Muslim countries.</p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-hand-holding-heart"></i>
                                </div>
                                <p><strong>Building Community Self-Sufficiency:</strong> Focusing not only on providing
                                    assistance, but also on developing capacity and resources to help communities achieve
                                    long-term independence and prosperity.</p>
                            </div>

                        </div>
                    </section> --}}


                    <!-- Section 6 -->
                    {{-- <section class="goal-section alt appear-animation modern-goal" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="600">

                        <h3 class="goal-title text-center mb-4">
                            Influencing Policy and Decision-Making
                        </h3>

                        <p class="goal-intro text-center">
                            AMAAC will strive to be an influential force in shaping U.S. foreign policy related to the
                            Middle East and the Islamic world.
                        </p>

                        <div class="goal-modern-boxes four-boxes">

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <p><strong>Policy Analysis & Recommendations:</strong> Conducting in-depth research and
                                    providing informed recommendations to ensure U.S. policies are fair, effective, and
                                    balanced.</p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <p><strong>Policy Engagement:</strong> Building strong relationships with Congress, the U.S.
                                    Administration, and Washington stakeholders to influence key decisions.</p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <p><strong>Outreach & Advocacy:</strong> Organizing workshops, outreach events, and private
                                    meetings to communicate our perspectives and enhance our impact.</p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <p><strong>Strategic Alliances:</strong> Collaborating with human rights groups, research
                                    centers, and think tanks to push for more just and balanced policies.</p>
                            </div>

                        </div>
                    </section> --}}


                    {{-- <section class="goal-section appear-animation modern-goal" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="500">

                        <h3 class="goal-title text-center mb-4">
                            Innovation and Adaptation
                        </h3>

                        <p class="goal-intro text-center">
                            We believe that the world is constantly changing, so our vision must be flexible and adaptable.
                        </p>

                        <div class="goal-modern-boxes four-boxes">

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <p><strong>Embracing Technology:</strong> Leveraging the latest technologies and social
                                    media to spread our message, organize campaigns, and engage with communities globally.
                                </p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <p><strong>Continuous research and development:</strong> Regularly improving programs and
                                    evaluating impact to enhance effectiveness and achieve goals.</p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-users"></i>
                                </div>
                                <p><strong>Workshops & knowledge resources:</strong> Providing workshops and resources like
                                    “Know Your Rights” and “Building Community Leadership”.</p>
                            </div>

                            <div class="goal-modern-box">
                                <div class="icon-circle">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <p><strong>Facilitating access to resources:</strong> Supporting access to legal, social,
                                    and economic resources.</p>
                            </div>

                        </div>
                    </section> --}}

                    <section class="section section-height-4 mt-0  border-0 bg-primary">
                        <div class="container" bis_skin_checked="1">
                            <div class="row justify-content-center d-none d-md-block" bis_skin_checked="1">
                                <div class="col-lg-12" bis_skin_checked="1">

                                    <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-light owl-loaded owl-drag owl-carousel-init"
                                        data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}"
                                        style="height: auto;">



                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1668px;">
                                                <div class="owl-item active" style="width: 546px; margin-right: 10px;">
                                                    <div>
                                                        <div class="img-thumbnail border-0 p-0 d-block">
                                                            <img class="img-fluid border-radius-0"
                                                                src="{{ asset('front/img/home/slider_1.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 546px; margin-right: 10px;">
                                                    <div>
                                                        <div class="img-thumbnail border-0 p-0 d-block">
                                                            <img class="img-fluid border-radius-0"
                                                                src="{{ asset('front/img/home/slider2.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 546px; margin-right: 10px;">
                                                    <div>
                                                        <div class="img-thumbnail border-0 p-0 d-block">
                                                            <img class="img-fluid border-radius-0"
                                                                src="{{ asset('front/img/home/slider3.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 546px; margin-right: 10px;">
                                                    <div>
                                                        <div class="img-thumbnail border-0 p-0 d-block">
                                                            <img class="img-fluid border-radius-0"
                                                                src="{{ asset('front/img/home/slider4.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 546px; margin-right: 10px;">
                                                    <div>
                                                        <div class="img-thumbnail border-0 p-0 d-block">
                                                            <img class="img-fluid border-radius-0"
                                                                src="{{ asset('front/img/home/slider5.png') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav"><button type="button" role="presentation"
                                                class="owl-prev disabled"></button><button type="button"
                                                role="presentation" class="owl-next"></button></div>
                                        <div class="owl-dots disabled"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="row d-block d-md-none">
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
                                                        <article
                                                            class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                                            <div class="post-image">
                                                                <a href="#">
                                                                    <img src="{{ asset('front/img/home/slider1_1.png') }}"
                                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                                        alt="" height="300px">
                                                                </a>
                                                            </div>

                                                            <div class="post-content p-1 text-color-primary">

                                                                <h2
                                                                    class="font-weight-semibold text-5 line-height-6 mt-3
                                                                    mb-2 text-color-primary">
                                                                    Advocating for justice & equality
                                                                </h2>
                                                                <ul class="text-color-primary text-start">
                                                                    <li>Ensuring Equal Rights</li>
                                                                    <li>Challenging Discrimination</li>
                                                                    <li>Legal Aid & Advocacy</li>
                                                                    <li>Policy Reform</li>
                                                                </ul>

                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                                        <article
                                                            class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                                            <div class="post-image">
                                                                <a href="#">
                                                                    <img src="{{ asset('front/img/home/slider1_2.png') }}"
                                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                                        alt="" height="300px">
                                                                </a>
                                                            </div>

                                                            <div class="post-content p-1 text-color-primary">

                                                                <h2
                                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                                    Participation, Leadership, and Active Citizenship</h2>
                                                                <ul class="text-color-primary text-start">
                                                                    <li> Voter Registration & Education</li>
                                                                    <li> Community Dialogue</li>
                                                                    <li>Leadership Training</li>
                                                                    <li>Policy Advocacy & Representation</li>
                                                                </ul>

                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                                        <article
                                                            class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                                            <div class="post-image">
                                                                <a href="#">
                                                                    <img src="{{ asset('front/img/home/slider1_3.png') }}"
                                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                                        alt="" height="300px">
                                                                </a>
                                                            </div>

                                                            <div class="post-content p-1 text-color-primary">

                                                                <h2
                                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                                    Growth, Health, and Future Opportunities</h2>
                                                                 <ul class="text-color-primary text-start">
                                                                    <li> Quality Education Access</li>
                                                                    <li> Healthcare Inutiatives </li>
                                                                    <li>Youth & Women Empowerment</li>
                                                                    <li>Skills Development</li>
                                                                </ul>

                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                                        <article
                                                            class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                                            <div class="post-image">
                                                                <a href="#">
                                                                    <img src="{{ asset('front/img/home/slider1_4.png') }}"
                                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                                        alt="" height="300px">
                                                                </a>
                                                            </div>

                                                            <div class="post-content p-1 text-color-primary">

                                                                <h2
                                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                                    Stability, Resilience, and Long-term Prosperity </h2>
                                                                 <ul class="text-color-primary text-start">
                                                                    <li> Economic Development </li>
                                                                    <li> Community Networks </li>
                                                                    <li>Resource Building</li>
                                                                    <li>Self-Reliance Programs</li>
                                                                </ul>

                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                                        <article
                                                            class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                                            <div class="post-image">
                                                                <a href="#">
                                                                    <img src="{{ asset('front/img/home/section2_1.png') }}"
                                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                                        alt="" height="300px">
                                                                </a>
                                                            </div>

                                                            <div class="post-content p-1 text-color-primary">

                                                                <h2
                                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                                    Deep Research & Informed Briefs</h2>
                                                                <ul class="text-color-primary text-start">
                                                                    <li> Data Driven Insights </li>
                                                                    <li>  Comprehensive Policy Briefs</li>
                                                                    <li>Evidence Based Recommendations</li>
                                                                    <li>Future Trend Analysis</li>
                                                                </ul>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                                        <article
                                                            class="post post-medium border-0 pb-0 mb-5 bg-color-secondary">
                                                            <div class="post-image">
                                                                <a href="#">
                                                                    <img src="{{ asset('front/img/home/section2_2.png') }}"
                                                                        class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                                        alt="" height="300px">
                                                                </a>
                                                            </div>

                                                            <div class="post-content p-1 text-color-primary">

                                                                <h2
                                                                    class="font-weight-semibold text-5 line-height-6 mt-3 mb-2 text-color-primary">
                                                                    Engagement with Congress & Administration</h2>
                                                                <ul class="text-color-primary text-start">
                                                                    <li> Direct Congressional </li>
                                                                    <li> Executive Branch Advocacy  </li>
                                                                    <li>Stakeholder Meetings</li>
                                                                    <li>Effective Communication Channels</li>
                                                                </ul>

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


                    {{-- <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="600">

                        <h3 class="goal-title text-center mb-4">
                            Promoting Understanding and Building Bridges
                        </h3>

                        <div class="goal-boxes">
                            <div class="goal-box">
                                <p><strong>Primary Objective:</strong> Transform negative perceptions of Arabs and Muslims
                                    into deeper understanding and mutual appreciation in Western societies.</p>
                            </div>

                            <div class="goal-box">
                                <p><strong>Media awareness campaigns:</strong> Producing and distributing documentaries,
                                    short videos, articles, and podcasts that highlight Arab and Islamic culture, shared
                                    history, and global contributions.</p>
                            </div>

                            <div class="goal-box">
                                <p><strong>Innovative educational programs:</strong> Designing curricula and workshops for
                                    Western schools and institutions that provide accurate, unbiased information about Islam
                                    and Arabs.</p>
                            </div>

                            <div class="goal-box">
                                <p><strong>Interfaith & intercultural dialogue platforms:</strong> Organizing conferences
                                    and regular meetings that gather scholars, leaders, and representatives of different
                                    religions to promote constructive dialogue.</p>
                            </div>

                            <div class="goal-box">
                                <p><strong>Cultural & academic exchange programs:</strong> Launching exchange programs for
                                    students, researchers, and artists to strengthen firsthand understanding between the
                                    U.S. and Arab/Islamic countries.</p>
                            </div>
                        </div>
                    </section> --}}

                    {{-- <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="600">
                        <h3 class="goal-title">
                            Promoting Understanding and Building Bridges
                        </h3>
                        <p>Primary Objective: Transform negative perceptions of Arabs and Muslims into deeper understanding
                            and mutual appreciation in Western societies.</p>
                        <p>Detailed Objectives: Launching large-scale media awareness campaigns: Producing and distributing
                            multimedia content (documentaries, short videos, articles, podcasts) that highlights the rich
                            Arab and Islamic culture, shared history, and civilizational contributions.</p>
                        <p>
                            Developing Innovative Educational Programs: Designing and implementing curricula and workshops
                            for educational institutions and schools in the West to provide accurate and unbiased
                            information about Islam and Arabs.
                        </p>
                        <p>
                            Establishing Interfaith and Intercultural Dialogue Platforms: Organizing conferences, seminars,
                            and periodic meetings that bring together thought leaders, academics, and representatives of
                            different religions to foster constructive dialogue on shared issues.
                        </p>
                        <p>
                            Facilitating cultural and academic exchange programs: Launching student, researcher, and artist
                            exchange programs between the United States and Arab and Islamic countries to enhance firsthand
                            experiences.
                        </p>
                    </section> --}}
                    {{-- <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="500">

                        <h3 class="goal-title text-center mb-4">
                            Supporting communities and protecting rights
                        </h3>

                        <div class="goal-boxes">
                            <div class="goal-box">
                                <p><strong>Primary goal:</strong> Empowering Arab and Muslim communities globally and
                                    defending their civil and human rights.</p>
                            </div>

                            <div class="goal-box">
                                <p><strong>Providing legal and moral support:</strong> Establishing a network of lawyers and
                                    volunteers to provide legal advice and support to those affected by Islamophobia and
                                    Arab hatred, and documenting these incidents.</p>
                            </div>

                            <div class="goal-box">
                                <p><strong>Leadership capacity-building programs:</strong> Developing workshops and training
                                    initiatives for young Muslims and Arabs to enhance leadership, civic engagement, and
                                    advocacy skills.</p>
                            </div>

                            <div class="goal-box">
                                <p><strong>Supporting sustainable development projects:</strong> Collaborating with
                                    organizations to support education, health, women's empowerment, and entrepreneurship,
                                    focusing on community self-sufficiency.</p>
                            </div>

                            <div class="goal-box">
                                <p><strong>Humanitarian and relief assistance:</strong> Rapid response to humanitarian
                                    crises in the Arab and Islamic world by providing support to those affected.</p>
                            </div>
                        </div>

                    </section> --}}

                    {{-- <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="500">
                        <h3 class="goal-title">
                            Supporting communities and protecting rights
                        </h3>
                        <p>Primary goal: Empowering Arab and Muslim communities globally and defending their civil and human rights.
                        </p>
                        <p>Detailed goals: Providing legal and moral support to victims of discrimination: Establishing a network of lawyers and volunteers to provide legal advice and support to those affected by Islamophobia and Arab hatred, and documenting these incidents.</p>
                        <p>Launching leadership capacity-building programs: Developing workshops and training initiatives for young Muslims and Arabs to enhance their skills in leadership, civic engagement, and advocacy.</p>
                        <p>
                           Supporting sustainable development projects: Collaborating with local and international organizations in Arab and Islamic countries to support education, health, women's empowerment, and entrepreneurship projects, with a focus on building community self sufficiency.
                        </p>
                        <p>
                           Providing humanitarian and relief assistance: Rapidly responding to humanitarian crises in the Arab and Islamic world by providing material and moral support to those affected.
                        </p>
                    </section> --}}

                </div>

            </div>

            <hr class="solid my-5">




        </div>
    </section>
@endsection
