@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => true, 'contact' => false])
@section('css')
    <style>
        .involve-card {
            background: var(--primary);
            color:  var(--secondary);
            padding: 25px;
            border-radius: 12px;
            transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
        }

        .involve-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            background: #0a2b5a;
            /* slight hover shade for depth */
        }

        .involve-card h4 {
            margin-bottom: 15px;
            font-size: 1.5rem;
            color: var(--secondary);
        }

        .involve-card p,
        .involve-card ul {
            margin-bottom: 15px;
            font-size: 0.95rem;
            line-height: 1.5;
            color:  var(--secondary);
        }

        .involve-card ul {
            padding-left: 20px;
        }

        .btn-involve {
            background: var(--secondary);
            color: var(--primary);
            border: none;
            padding: 8px 20px;
            border-radius: 6px;
            transition: background 0.3s, color 0.3s;
        }

        .btn-involve:hover {
            background: #b8942c;
            color: #fff;
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
    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/WhatsApp-Image-2025-11-18 at 19.44.23_147f7548.jpg') }}');">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary "> Be Part of Change</h1>
                    {{-- <span class="sub-title">Your Voice. Your Action. Our Future.</span> --}}
                </div>
                {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Get Involved</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- SECTION TITLE -->
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-normal text-7 mb-2 appear-animation text-color-secondary"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            Get <strong class="font-weight-extra-bold text-color-secondary">Involved</strong>
                        </h2>
                    </div>

                    <!-- HEADLINE -->
                    <div class="overflow-hidden mb-4">
                        <p class="lead mb-0 appear-animation text-color-secondary" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="400">
                            <strong class="text-color-secondary">Your Voice. Your Action. Our Future.</strong>
                            AMAAC's work is powered by the passion and dedication of individuals like you.
                        </p>
                    </div>

                    <!-- PARAGRAPH -->
                    <p class="text-color-secondary mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="600">
                        Join us in making a meaningful impact through membership, volunteering, donations,
                        advocacy, staying informed, and sharing your story to inspire change.
                    </p>

                </div>

                <!-- TESTIMONIAL BOX -->
                <div class="col-lg-4">
                    <div class="testimonial testimonial-light appear-animation" data-appear-animation="fadeIn"
                        data-appear-animation-delay="800">
                        <blockquote class=" bg-color-secondary">
                            <p class="mb-0 text-color-primary">
                                “Together, we can build a more just and inclusive future for Arab and Muslim communities
                                across
                                the United States.”
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>
        <div class="container py-4">

            {{-- <div class="row pb-4">
                <div class="col-md-8">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">

                        <h4 class="mt-2 mb-2 text-color-light">Ways to <strong class="text-color-secondary">Get
                                Involved</strong></h4>

                        <div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4"
                            id="accordion11">

                            <!-- Become a Member -->
                            <div class="card card-default mb-2 text-color-light">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3 text-color-light-100" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11One">
                                           - Become a Member
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11One" class="collapse show">
                                    <div class="card-body mt-3">
                                        <p class="text-color-light-300">Support our mission and receive exclusive updates, opportunities, and special
                                            invitations.</p>
                                        <a href="#" class="btn btn-modern btn-secondary view-al">Join Now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Volunteer -->
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3 text-color-light-100" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11Two">
                                          -  Volunteer With Us
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11Two" class="collapse">
                                    <div class="card-body mt-3">
                                        <p class="text-color-light-300">Lend your time and skills to support our programs and initiatives. Volunteer
                                            opportunities include:</p>

                                        <ul class="list list-icons text-color-light-300">
                                            <li>Event planning and support</li>
                                            <li>Research and data analysis</li>
                                            <li>Social media and communications</li>
                                            <li>Community outreach</li>
                                        </ul>

                                        <a href="#" class="btn btn-modern btn-secondary">Become a Volunteer</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Donate -->
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3 text-color-light-100" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11Three">
                                           - Donate
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11Three" class="collapse">
                                    <div class="card-body mt-3">
                                        <p class="text-color-light-300">Your financial contribution directly fuels our advocacy, education,
                                            and legal efforts.</p>
                                        <a href="#" class="btn btn-modern btn-secondary">Donate Now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Take Action -->
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3 text-color-light-100" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11Four">
                                          -  Take Action
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11Four" class="collapse">
                                    <div class="card-body mt-3">
                                        <p class="text-color-light-300">Participate in our campaigns, sign petitions, and contact your elected
                                            officials about critical issues.</p>
                                        <a href="#" class="btn btn-modern btn-secondary">View Action Alerts</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Stay Informed -->
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3 text-color-light-100" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11Five">
                                         -   Stay Informed
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11Five" class="collapse">
                                    <div class="card-body mt-3">
                                        <p class="text-color-light-300">Subscribe to our newsletter for updates, news, and opportunities to take action.
                                        </p>
                                        <a href="#" class="btn btn-modern btn-secondary">Subscribe</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Share Your Story -->
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3 text-color-light-100" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11Six">
                                           - Share Your Story
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11Six" class="collapse">
                                    <div class="card-body mt-3">
                                        <p class="text-color-light-300">If you've experienced discrimination or have a story that can inspire change,
                                            we want to hear from you.</p>
                                        <a href="#" class="btn btn-modern btn-secondary">Share Your Story</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>



            </div> --}}
            {{-- <div class="row g-4">
                <!-- Become a Member -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="100">
                        <h4>Become a <strong>Member</strong></h4>
                        <p>Support our mission and receive exclusive updates, opportunities, and special invitations.</p>
                        <a href="#" class="btn btn-secondary">Join Now</a>
                    </div>
                </div>

                <!-- Volunteer -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="200">
                        <h4>Volunteer With <strong>Us</strong></h4>
                        <p>Lend your time and skills to support our programs and initiatives.</p>
                        <ul>
                            <li>Event planning and support</li>
                            <li>Research and data analysis</li>
                            <li>Social media and communications</li>
                            <li>Community outreach</li>
                        </ul>
                        <a href="#" class="btn btn-secondary">Become a Volunteer</a>
                    </div>
                </div>

                <!-- Donate -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="300">
                        <h4>Donate</h4>
                        <p>Your financial contribution directly fuels our advocacy, education, and legal efforts.</p>
                        <a href="#" class="btn btn-secondary">Donate Now</a>
                    </div>
                </div>

                <!-- Take Action -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="400">
                        <h4>Take <strong>Action</strong></h4>
                        <p>Participate in campaigns, sign petitions, and contact your elected officials about critical
                            issues.</p>
                        <a href="#" class="btn btn-secondary">View Action Alerts</a>
                    </div>
                </div>

                <!-- Stay Informed -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="500">
                        <h4>Stay <strong>Informed</strong></h4>
                        <p>Subscribe to our newsletter for updates, news, and opportunities to take action.</p>
                        <a href="#" class="btn btn-secondary">Subscribe</a>
                    </div>
                </div>

                <!-- Share Your Story -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="600">
                        <h4>Share Your <strong>Story</strong></h4>
                        <p>If you've experienced discrimination or have a story that can inspire change, we want to hear
                            from you.</p>
                        <a href="#" class="btn btn-secondary">Share Your Story</a>
                    </div>
                </div>
            </div> --}}
            <div class="row g-4">
                <!-- Become a Member -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="100">
                        <h4>Become a <strong>Member</strong></h4>
                        <p>Support our mission and receive exclusive updates, opportunities, and special invitations.</p>
                        <a href="#" class="btn btn-involve">Join Now</a>
                    </div>
                </div>

                <!-- Volunteer -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="200">
                        <h4>Volunteer With <strong>Us</strong></h4>
                        <p>Lend your time and skills to support our programs and initiatives.</p>
                        <ul>
                            <li>Event planning and support</li>
                            <li>Research and data analysis</li>
                            <li>Social media and communications</li>
                            <li>Community outreach</li>
                        </ul>
                        <a href="#" class="btn btn-involve">Become a Volunteer</a>
                    </div>
                </div>

                <!-- Donate -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="300">
                        <h4>Donate</h4>
                        <p>Your financial contribution directly fuels our advocacy, education, and legal efforts.</p>
                        <a href="#" class="btn btn-involve">Donate Now</a>
                    </div>
                </div>

                <!-- Take Action -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="400">
                        <h4>Take <strong>Action</strong></h4>
                        <p>Participate in campaigns, sign petitions, and contact your elected officials about critical
                            issues.</p>
                        <a href="#" class="btn btn-involve">View Action Alerts</a>
                    </div>
                </div>

                <!-- Stay Informed -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="500">
                        <h4>Stay <strong>Informed</strong></h4>
                        <p>Subscribe to our newsletter for updates, news, and opportunities to take action.</p>
                        <a href="#" class="btn btn-involve">Subscribe</a>
                    </div>
                </div>

                <!-- Share Your Story -->
                <div class="col-md-6 col-lg-4">
                    <div class="involve-card appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="600">
                        <h4>Share Your <strong>Story</strong></h4>
                        <p>If you've experienced discrimination or have a story that can inspire change, we want to hear
                            from you.</p>
                        <a href="#" class="btn btn-involve">Share Your Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
