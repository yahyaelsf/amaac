@extends('front.layout', ['home' => true, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
<style>
.animated-text .word {
    display: inline-block;
    opacity: 0;
    transform: translateY(10px);
    transition: opacity 0.3s, transform 0.3s;
    white-space: nowrap; /* يمنع كسر الكلمات */
}

.animated-text .word.visible {
    opacity: 1;
    transform: translateY(0);
}
</style>
@endsection
@section('content')
   <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center dots-light show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
					data-plugin-options="{'autoplayTimeout': 25000}"
					data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;">
					<div class="owl-stage-outer">
						<div class="owl-stage">
							<!-- Carousel Slide 1 -->
							<div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
								style="background-image: url({{ asset('front/img/home/IMG-20251119-WA0028.jpg') }}); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-7">
											<div class="d-flex flex-column align-items-center">
												<h2 class="text-color-secondary font-weight-bold text-13 mb-4 appear-animation"
													data-appear-animation="blurIn"
													data-plugin-options="{'minWindowWidth': 0}">
													AMAAC

												</h2>
												<div class=" animated-text text-4-5 text-color-secondary font-weight-light opacity-7 text-center mb-4"

													>
													We are dedicated to fostering a vibrant, informed, and empowered American Muslim and Arab community. In a rapidly changing world, we work tirelessly to ensure our voices are heard, our rights are protected, and our contributions to American society are recognized and celebrated. Explore our site to learn more about our mission, the issues we address, and how you can join us in building

												</div>
												<div class="appear-animation" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="5000">
													<div class="d-flex align-items-center mt-2">
														<a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a>
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
							<!-- Carousel Slide 2 -->
							<div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
								style="background-image: url({{ asset('front/img/home/IMG-20251119-WA0013.jpg') }}); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">
												<h3 class="position-relative text-color-secondary text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
													data-appear-animation="fadeInDownShorterPlus"
													data-plugin-options="{'minWindowWidth': 0}">
													<span
														class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{ asset('front/img/slides/slide-title-border.png') }}"
															class="w-auto appear-animation"
															data-appear-animation="fadeInRightShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
													Building Bridges Between Cultures
													<span
														class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{ asset('front/img/slides/slide-title-border.png') }}"
															class="w-auto appear-animation"
															data-appear-animation="fadeInLeftShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h2 class="porto-big-title text-color-secondary font-weight-extra-bold mb-3"
													data-plugin-animated-letters
													data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 50, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">
													AMAAC</h2>
												<p class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0"
													>
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
								style="background-image: url({{ asset('front/img/home/IMG-20251119-WA0016.jpg') }}); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-7">
											<div class="d-flex flex-column align-items-center">
												<h2 class="text-color-secondary font-weight-bold text-13 mb-4 appear-animation"
													data-appear-animation="blurIn"
													data-plugin-options="{'minWindowWidth': 0}"> Stronger Community
												</h2>
												<p class="animated-text text-4-5 text-color-secondary font-weight-light opacity-7 text-center mb-4"
													>
													Uniting voices to promote equality, mutual respect, and social
													harmony.
												</p>
												<div class="appear-animation" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="3300">
													<div class="d-flex align-items-center mt-2">
														<a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
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
					<div class="owl-dots mb-3">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>

    <div class="home-intro mb-0" id="home-intro" style="background-color: var(--secondary);">
        <div class="container">

            <div class="row align-items-center ">
                <div class="col-lg-8">
                    <p class="text-color-primary">
                        American Muslim and Arab Affairs Council <span
                            class="highlighted-word  text-color-primary font-weight-semibold text-5">AMAAC</span>
                        <span class="text-color-primary">Building Bridges of Understanding, Promoting
                            Justice, amplifying voices, Empowering Communities, Advocating for Justice, and
                            Empowerment for Muslims and Arabs in USA and around the world.</span>
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="get-started text-start text-lg-end">
                        <a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3 text-color-secondary">
                            Learn more</a>
                        <!-- <div class="learn-more">or <a href="index.html">learn more.</a></div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- data-image-src="{{ asset('front/img/home/pexels-josh-hild-1270765-12096173.jpg') }}" -->
    <section class="section section-no-border section-angled bg-color-primary m-0">

        <div class="container">
            <div class="row align-items-center text-center my-3">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-10 mb-0 appear-animation text-secondary animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        data-appear-animation-duration="750" style="animation-delay: 200ms;">Who we are
                    </h2>
                    <p class="font-weight-semibold text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible text-color-secondary"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                        data-appear-animation-duration="750" style="animation-delay: 600ms;">
                        American Muslim and Arab Affairs Council</p>
                    <p class="pb-2 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible text-color-secondary borderd-primary"
                         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
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
                        class="btn btn-secondary  btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible "
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
                        <div class="strong-shadow rounded strong-shadow-top-right image-zoom">
                            <img loading="lazy"
                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}"
                                class="img-fluid border border-width-10 border-color-light rounded box-shadow-3"
                                alt="Porto Admin" style="height : 550px ; width: 100%">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-no-border section-angled bg-color-secondary m-0">

        <div class="container">
            <div class="row align-items-center text-center my-5">

                <div class="col-md-6 position-relative order-2 order-md-1 ">
                    <div class="appear-animation animated fadeInLeftShorter appear-animation-visible"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0"
                        data-appear-animation-duration="750" style="animation-delay: 0ms;">
                        <div class="strong-shadow rounded strong-shadow-top-left image-zoom">
                            <img loading="lazy"
                                src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.05.32_54795eeb.jpg') }}"
                                class="img-fluid border border-width-10 border-color-light rounded box-shadow-3"
                                alt="Porto Admin" style="height : 550px ; width: 100%">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-5 order-1 order-md-2">
                    <h2 class="font-weight-bold text-10 mb-0 appear-animation text-primary animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        data-appear-animation-duration="750" style="animation-delay: 200ms;">President statement
                    </h2>

                    <p class="pb-2 mb-4 mt-3 appear-animation animated fadeInUpShorter appear-animation-visible text-color-primary borderd-secondary"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
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
                        class="btn btn-primary btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible test-color-secondary"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                        data-appear-animation-duration="750" target="_blank" style="animation-delay: 1000ms;">
                        Donate</a>

                </div>
            </div>
        </div>
    </section>


    <section class="section bg-color-primary section-height-3 border-0 m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-normal text-center text-color-secondary text-6 pb-3">Our <strong
                            class="font-weight-extra-bold text-color-secondary">Mission </strong>at a Glance</h2>
                </div>
            </div>

            <div class="row mb-5 pb-3" bis_skin_checked="1">

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" bis_skin_checked="1"
                    style="animation-delay: 200ms;">
                    <div class="card flip-card text-center rounded-0 bg-secondary" bis_skin_checked="1">
                        <div class="flip-front p-5 bg-secondary" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon">
                                    <i class="icons icon-support text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">Building Cultural Bridges</h4>
                                <p class="text-color-primary"> The core of AMAAC's vision is to build strong and lasting
                        bonds based on mutual understanding and appreciation</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url({{ asset('front/img/home/IMG-20251119-WA0028.jpg') }}); background-size: cover; background-position: center;"
                            bis_skin_checked="1">
                            {{-- <div class="flip-content my-4" bis_skin_checked="1">
                                <h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
                                <p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                                <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN
                                    MORE</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" bis_skin_checked="1"
                    style="animation-delay: 400ms;">
                    <div class="card flip-card flip-card-vertical text-center rounded-0 bg-secondary" bis_skin_checked="1">
                        <div class="flip-front p-5 bg-secondary" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon text-color-primary">
                                    <i class="icons icon-layers text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">Protecting Rights, </h4>
                                <p class="text-color-primary">A firm commitment to supporting Arab and
                        Muslim communities wherever they are located and protecting their
                        rights</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url({{ asset('front/img/home/IMG-20251119-WA0029.jpg') }}); background-size: cover; background-position: center;"
                            bis_skin_checked="1">
                            {{-- <div class="flip-content my-4" bis_skin_checked="1">
                                <h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
                                <p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                                <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN
                                    MORE</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" bis_skin_checked="1"
                    style="animation-delay: 600ms;">
                    <div class="card flip-card flip-card-3d text-center rounded-0 bg-secondary" bis_skin_checked="1">
                        <div class="flip-front p-5 bg-secondary" bis_skin_checked="1">
                            <div class="flip-content my-4" bis_skin_checked="1">
                                <div class="feature-box-icon">
                                    <i class="icons icon-menu text-color-primary"></i>
                                </div>
                                <h4 class="font-weight-bold text-color-primary text-4">Influencing
                                    Policy</h4>
                                <p class="text-color-primary">AMAAC will strive to be an influential force in shaping U.S.
                        foreign policy related to the Middle East and the Islamic world.</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url('{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}'); background-size: cover; background-position: center;"
                            bis_skin_checked="1">
                            {{-- <div class="flip-content my-4" bis_skin_checked="1">
                                <h4 class="font-weight-bold text-color-light">FIRST MEETING</h4>
                                <p class="font-weight-light text-color-light opacity-5">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius.</p>
                                <a href="#" class="btn btn-light btn-modern text-color-dark font-weight-bold">LEARN
                                    MORE</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="bg-secondary">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-weight-normal text-6 mt-4 text-color-primary">Latest <strong
                            class="font-weight-extra-bold text-color-primary">News </strong> and Projects</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="my-4 lightbox appear-animation animated fadeInUpShorter appear-animation-visible"
                        data-appear-animation="fadeInUpShorter"
                        data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}"
                        style="animation-delay: 100ms;">
                        <div class="owl-carousel owl-theme pb-3 owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 4, 'margin': 35, 'loop': true ,'autoHeight': false}" style="height: auto;">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2302px, 0px, 0px); transition: 1s; width: 3453px; ">
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Presentation</span>
                                                        <span class="thumb-info-type">Brand</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <a href="portfolio-single-wide-slider.html">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                    class="fas fa-link"></i></span>
                                                        </a>
                                                        <a href="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}" class="lightbox-portfolio">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                    class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/IMG-20251119-WA0013.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Porto
                                                            Watch</span>
                                                        <span class="thumb-info-type">Media</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <a href="portfolio-single-wide-slider.html">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                    class="fas fa-link"></i></span>
                                                        </a>
                                                        <a href="{{ asset('front/img/home/IMG-20251119-WA0013.jpg') }}" class="lightbox-portfolio">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                    class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/IMG-20251119-WA0027.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Identity</span>
                                                        <span class="thumb-info-type">Logo</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <a href="portfolio-single-wide-slider.html">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                    class="fas fa-link"></i></span>
                                                        </a>
                                                        <a href="{{ asset('front/img/home/IMG-20251119-WA0027.jpg') }}" class="lightbox-portfolio">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                    class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/IMG-20251119-WA0016.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Porto
                                                            Screens</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <a href="portfolio-single-wide-slider.html">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                    class="fas fa-link"></i></span>
                                                        </a>
                                                        <a href="{{ asset('front/img/home/IMG-20251119-WA0016.jpg') }}" class="lightbox-portfolio">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                    class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/IMG-20251119-WA0020.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Three
                                                            Bottles</span>
                                                        <span class="thumb-info-type">Logo</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <a href="portfolio-single-wide-slider.html">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                    class="fas fa-link"></i></span>
                                                        </a>
                                                        <a href="{{ asset('front/img/home/IMG-20251119-WA0020.jpg') }}" class="lightbox-portfolio">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                    class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Presentation</span>
                                                        <span class="thumb-info-type">Brand</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <a href="portfolio-single-wide-slider.html">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                    class="fas fa-link"></i></span>
                                                        </a>
                                                        <a href="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.42.49_fc81cf2e.jpg') }}" class="lightbox-portfolio">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                    class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/IMG-20251119-WA0013.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Porto
                                                            Watch</span>
                                                        <span class="thumb-info-type">Media</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <a href="portfolio-single-wide-slider.html">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                    class="fas fa-link"></i></span>
                                                        </a>
                                                        <a href="{{ asset('front/img/home/IMG-20251119-WA0013.jpg') }}" class="lightbox-portfolio">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                    class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/IMG-20251119-WA0027.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Identity</span>
                                                        <span class="thumb-info-type">Logo</span>
                                                    </span>
                                                    <span class="thumb-info-action">
                                                        <a href="portfolio-single-wide-slider.html">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-primary"><i
                                                                    class="fas fa-link"></i></span>
                                                        </a>
                                                        <a href="{{ asset('front/img/home/IMG-20251119-WA0027.jpg') }}" class="lightbox-portfolio">
                                                            <span
                                                                class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                                    class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section bg-primary section-height-3 border-0 m-0">
    <div class="container">

        <!-- عنوان السكشن -->
        <div class="row">
            <div class="col">
                <h2 class="font-weight-normal text-center text-color-secondary text-6 pb-3">
                    Stay <strong class="font-weight-extra-bold text-color-secondary">Connected</strong> With Us
                </h2>
                <p class="text-center text-color-secondary opacity-8 mb-4">
                    Subscribe to our newsletter and never miss an update.
                </p>
            </div>
        </div>

        <!-- فورم الاشتراك -->
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">

                <form class="subscription-form" method="POST" action="#">
                    @csrf

                    <div class="input-group input-group-lg">
                        <input
                            type="email"
                            class="form-control bg-light border-0 rounded-0 px-4 py-3 text-color-secondary"
                            placeholder="Enter your email address..."
                            required
                        >

                        <button type="submit"
                            class="btn btn-secondary rounded-0 px-4 font-weight-bold">
                            SUBSCRIBE
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</section>
<script>
function wrapWords(el) {
    if (!el.dataset.wrapped) {
        const text = el.textContent.trim();
        const words = text.split(/\s+/);
        el.innerHTML = words.map(w => `<span class="word">${w}</span>`).join(' ');
        el.dataset.wrapped = "true";
    }
}

function animateWords(el) {
    const words = el.querySelectorAll('.word');
    words.forEach((w, i) => {
        setTimeout(() => w.classList.add('visible'), i * 350);
    });
}

function resetWords(el) {
    el.querySelectorAll('.word').forEach(w => w.classList.remove('visible'));
}

// كل مرة عنصر يصبح active نرسم الأنيميشن
function handleActiveSlide(slide) {
    const animatedTexts = slide.querySelectorAll('.animated-text');
    animatedTexts.forEach(el => {
        wrapWords(el);
        resetWords(el);
        setTimeout(() => animateWords(el), 50);
    });
}

// أول تحميل
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.owl-carousel');
    carousel.querySelectorAll('.owl-item.active').forEach(handleActiveSlide);
});

// عند كل تغيير
document.querySelector('.owl-carousel').addEventListener('changed.owl.carousel', e => {
    const carousel = e.currentTarget;
    carousel.querySelectorAll('.owl-item.active').forEach(handleActiveSlide);
});
</script>
@endsection

