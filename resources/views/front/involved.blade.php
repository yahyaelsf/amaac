@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => true, 'contact' => false])
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/WhatsApp-Image-2025-11-18 at 19.44.23_147f7548.jpg') }}');">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary "> Get Involved</h1>
                    <span class="sub-title">Your Voice. Your Action. Our Future.</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Get Involved</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- SECTION TITLE -->
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-normal text-7 mb-2 appear-animation text-color-light"
                            data-appear-animation="maskUp" data-appear-animation-delay="200">
                            Get <strong class="font-weight-extra-bold text-color-secondary">Involved</strong>
                        </h2>
                    </div>

                    <!-- HEADLINE -->
                    <div class="overflow-hidden mb-4">
                        <p class="lead mb-0 appear-animation text-color-light-200" data-appear-animation="maskUp"
                            data-appear-animation-delay="400">
                            <strong class="text-color-light-100">Your Voice. Your Action. Our Future.</strong>
                            AMAAC's work is powered by the passion and dedication of individuals like you.
                        </p>
                    </div>

                    <!-- PARAGRAPH -->
                    <p class="text-color-light-100 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="600">
                        Join us in making a meaningful impact through membership, volunteering, donations,
                        advocacy, staying informed, and sharing your story to inspire change.
                    </p>

                </div>

                <!-- TESTIMONIAL BOX -->
                <div class="col-lg-4">
                    <div class="testimonial testimonial-light appear-animation" data-appear-animation="fadeIn"
                        data-appear-animation-delay="800">
                        <blockquote>
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

            <div class="row pb-4">
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

                <div class="col-md-4" bis_skin_checked="1">
                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn"
                        data-appear-animation-delay="400" bis_skin_checked="1" style="animation-delay: 400ms;">
                        <div class="owl-carousel owl-theme dots-inside mb-0 pb-0 owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateOut': 'fadeOut', 'dots': false}"
                            bis_skin_checked="1" style="height: auto;">


                            <div class="owl-stage-outer" bis_skin_checked="1">
                                <div class="owl-stage"
                                    style="transform: translate3d(-1098px, 0px, 0px); transition: all; width: 2196px;"
                                    bis_skin_checked="1">
                                    <div class="owl-item cloned" style="width: 356px; margin-right: 10px;"
                                        bis_skin_checked="1">
                                        <div class="pb-5" bis_skin_checked="1">
                                            <img alt="" class="img-fluid rounded" style="height:400px;"
                                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.32_54795eeb.jpg') }}">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 356px; margin-right: 10px;"
                                        bis_skin_checked="1">
                                        <div class="pb-5" bis_skin_checked="1">
                                            <img alt="" class="img-fluid rounded" style="height:400px;"
                                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.51_0881ec7a.jpg') }}">
                                        </div>
                                    </div>
                                    <div class="owl-item animated owl-animated-out fadeOut"
                                        style="width: 356px; margin-right: 10px; left: 366px;" bis_skin_checked="1">
                                        <div class="pb-5" bis_skin_checked="1">
                                            <img alt="" class="img-fluid rounded" style="height:400px;"
                                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.32_54795eeb.jpg') }}">
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 356px; margin-right: 10px;"
                                        bis_skin_checked="1">
                                        <div class="pb-5" bis_skin_checked="1">
                                            <img alt="" class="img-fluid rounded" style="height:400px;"
                                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.51_0881ec7a.jpg') }}">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 356px; margin-right: 10px;"
                                        bis_skin_checked="1">
                                        <div class="pb-5" bis_skin_checked="1">
                                            <img alt="" class="img-fluid rounded" style="height:400px;"
                                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.32_54795eeb.jpg') }}">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 356px; margin-right: 10px;"
                                        bis_skin_checked="1">
                                        <div class="pb-5" bis_skin_checked="1">
                                            <img alt="" class="img-fluid rounded" style="height:400px;"
                                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.51_0881ec7a.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled" bis_skin_checked="1"><button type="button"
                                    role="presentation" class="owl-prev"></button><button type="button"
                                    role="presentation" class="owl-next"></button></div>
                            <div class="owl-dots disabled" bis_skin_checked="1"></div>
                        </div>

                        <div class="toggle toggle-primary toggle-simple" data-plugin-toggle="" bis_skin_checked="1">
                            <section class="toggle active">
                                <a class="toggle-title text-color-light-100">Our Benefits</a>
                                <div class="toggle-content" bis_skin_checked="1" style="display: block;">
                                    <p class="text-color-light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque
                                        eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a>
                                        lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-color-light-100">Our Culture</a>
                                <div class="toggle-content" bis_skin_checked="1">
                                    <p class="text-color-light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit
                                        imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam
                                        tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.
                                    </p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-color-light-100">Join Our Team</a>
                                <div class="toggle-content" bis_skin_checked="1">
                                    <p class="text-color-light-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit
                                        imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam
                                        tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor,
                                        orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean
                                        consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor
                                        elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor
                                        mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a
                                        massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum
                                        urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec,
                                        egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci
                                        sodales odio, ac pulvinar felis quam sit.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
