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
.porto-big-title {
    font-size : 3rem ;
}
</style>
@endsection
@section('content')
                <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside
                   dots-horizontal-center dots-light show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
					data-plugin-options="{'autoplayTimeout': 20000}"
					data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
								style="background-image: url({{ asset('front/img/home/slide1.jpg') }}); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">

                                                    <h1 class="text-color-secondary font-weight-extra-bold text-center text-10 mb-3 appear-animation animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">Empowering Communities</h1>
												<h3 class="position-relative text-color-secondary text-center text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
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
													 Empowering Arab & Muslim Voices in America
													<span
														class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{ asset('front/img/slides/slide-title-border.png') }}"
															class="w-auto appear-animation"
															data-appear-animation="fadeInLeftShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>

												<p class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0"
													>
													 Building strong, confident communities through advocacy, education, and inclusive leadership.
												</p>

                                                <div class="appear-animation" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="5000">
													<div class="d-flex align-items-center mt-2">
														{{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
														<a href="#"
															class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
															 Learn More
                                                             {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                                             </a>

													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
								style="background-image: url({{ asset('front/img/home/slide2.jpg') }}); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">

                                                    <h1 class="text-color-secondary font-weight-extra-bold text-center text-10 mb-3 appear-animation animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">Defending Rights & Dignity</h1>
												<h3 class="position-relative text-color-secondary text-center text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
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
													 Protecting Civil Rights. Advancing Human Dignity

													<span
														class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{ asset('front/img/slides/slide-title-border.png') }}"
															class="w-auto appear-animation"
															data-appear-animation="fadeInLeftShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>

												<p class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0"
													>
													We stand against discrimination and work to ensure every individual is treated with fairness, respect, and justice
												</p>

                                                <div class="appear-animation" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="5000">
													<div class="d-flex align-items-center mt-2">
														{{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
														<a href="#"
															class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
															  Our Mission
                                                             {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                                             </a>

													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                             <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
								style="background-image: url({{ asset('front/img/home/slide3.jpg') }});
                                background-size: cover; background-position: center; width: 100%;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">

                                                    <h1 class="text-color-secondary font-weight-extra-bold text-center text-10 mb-3 appear-animation animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">Shaping Policy for a Better Future</h1>
												<h3 class="position-relative text-color-secondary text-4 text-center line-height-5 font-weight-medium px-4 mb-2 appear-animation"
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
													Influencing Policy Through Knowledge & Action
													<span
														class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{ asset('front/img/slides/slide-title-border.png') }}"
															class="w-auto appear-animation"
															data-appear-animation="fadeInLeftShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>

												<p class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0"
													>
													Research-driven advocacy shaping fair public policies for Arab and Muslim communities nationwide
												</p>

                                                <div class="appear-animation" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="5000">
													<div class="d-flex align-items-center mt-2">
														{{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
														<a href="#"
															class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
															 Explore Our Work
                                                             {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                                             </a>

													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                             <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
								style="background-image: url({{ asset('front/img/home/slide4.jpg') }}); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">

                                                    <h1 class="text-color-secondary font-weight-extra-bold text-center text-10 mb-3 appear-animation animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">Bridging Cultures & Building Understanding</h1>
												<h3 class="position-relative text-color-secondary text-4 text-center line-height-5 font-weight-medium px-4 mb-2 appear-animation"
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
													Strengthening Bridges Between America, the Arab World, and the Muslim World

													<span
														class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{ asset('front/img/slides/slide-title-border.png') }}"
															class="w-auto appear-animation"
															data-appear-animation="fadeInLeftShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>

												<p class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0"
													>
													 Promoting cultural dialogue, media literacy, and representation that reflects our shared values and humanity
												</p>

                                                <div class="appear-animation" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="5000">
													<div class="d-flex align-items-center mt-2">
														{{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
														<a href="#"
															class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
															  Discover More
                                                             {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                                             </a>

													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8"
								style="background-image: url({{ asset('front/img/home/slide5.jpg') }}); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">

                                                    <h1 class="text-color-secondary font-weight-extra-bold text-10 mb-3 text-center appear-animation animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" style="animation-delay: 1000ms;">Investing in the Next Generation</h1>
												<h3 class="position-relative text-color-secondary text-center text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
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
													 Empowering Youth to Lead With Confidence
													<span
														class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{ asset('front/img/slides/slide-title-border.png') }}"
															class="w-auto appear-animation"
															data-appear-animation="fadeInLeftShorter"
															data-appear-animation-delay="250"
															data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>

												<p class="animated-text text-4 text-color-secondary font-weight-light text-center mb-0"
													>
													Leadership programs, civic engagement initiatives, and mentorship opportunities for the future generation of Arab and Muslim leaders.

												</p>

                                                <div class="appear-animation" data-appear-animation="fadeInUpShorter"
													data-appear-animation-delay="5000">
													<div class="d-flex align-items-center mt-2">
														{{-- <a href="#"
															class="btn btn-primary btn-modern text-color-primary font-weight-bold text-2 py-3 btn-px-4">
															 About Us</a> --}}
														<a href="#"
															class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-4 ms-4">
															 Join Our Programs
                                                             {{-- <i class="fas fa-arrow-right ms-2"></i> --}}
                                                             </a>

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
                        AMAAC is a non-profit council committed to promoting mutual understanding between the United States and the Arab and Islamic world. We defend rights, support sustainable development, and contribute to social, cultural, and political progress. AMAAC is a platform for hope, a bridge for understanding, and a voice for justice.
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
                        *“At AMAAC, we believe that justice, dignity, and mutual respect are not luxuries, but rights for every human being. Our communities have contributed enormously to the scientific, cultural, and economic progress of the United States, yet they still face misunderstanding and discrimination.
                        AMAAC was founded to turn concern into action. We listen to our communities, amplify their voices where decisions are made, and build partnerships that create real opportunities for youth, families, and future generations.
                    Together, we can reshape the narrative, defend our rights, and build bridges that lead to a more peaceful and inclusive society – in America and beyond.”*

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
                                <p class="text-color-primary"> We create platforms for dialogue and exchange between Arab, Muslim, and wider American communities. Through public events, cultural programs, and partnerships, we highlight our shared values, histories, and aspirations.</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url({{ asset('front/img/home/missioatglance1.jpg') }}); background-size: cover; background-position: center;"
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
                                <p class="text-color-primary">AMAAC monitors and responds to violations of civil and human rights affecting Muslims and Arabs. We support individuals and work with legal partners, and advocate for policies that uphold equality and justice for all.</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url({{ asset('front/img/home/missioatglance2.jpg') }}); background-size: cover; background-position: center;"
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
                                <p class="text-color-primary">We engage with policymakers, think tanks, and civil society to ensure that the voices of Muslims and Arabs are heard in the halls of power. AMAAC provides  organizes advocacy campaigns that shape fair and balanced public policy</p>
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5"
                            style="background-image: url('{{ asset('front/img/home/missioatglance3.jpg') }}'); background-size: cover; background-position: center;"
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
                                     <a href="{{ route('news.future') }}">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article1thumbnail.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                            The Future of Arab & Muslim Representation in American Media</span>
                                                        <span class="thumb-info-type mt-2">Misrepresentation remains a major challenge. This article explores the current landscape of media portrayals, highlights positive change-makers, and outlines AMAAC’s media literacy initiatives to empower content creators and influencers in our communities</span>
                                                    </span>

                                                </span>
                                            </span>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                     <a href="{{ route('news.rights') }}">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article2thumbnail.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                            Know Your Rights: A Complete Guide for Arab & Muslim Americans</span>
                                                        <span class="thumb-info-type mt-2"> An essential resource explaining constitutional rights, protections against discrimination, what to do if confronted with Islamophobia, and how AMAAC is expanding its legal-support and advocacy network across the United States.</span>
                                                    </span>

                                                </span>
                                            </span>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                     <a href="{{ route('news.leadership') }}">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article3thumbnail.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Youth Leadership: How the Next Generation Is Redefining Civic Engagement</span>
                                                        <span class="thumb-info-type mt-2">Showcasing inspiring stories of Arab and Muslim American youth leading community projects, advocating in local government, and representing their identities confidently. Includes information about AMAAC’s Youth Civic Leadership Fellowship.</span>
                                                    </span>

                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                     <a href="{{ route('news.relations') }}">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article4thumbnail.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                            U.S.–Arab Relations: Why Cultural Understanding Matters More Than Ever
                                                            </span>
                                                        <span class="thumb-info-type mt-2">A balanced, informative piece examining how cultural diplomacy and people-to-people engagement help build trust and reduce misconceptions. Features AMAAC’s role in cultural programs and community dialogue.
                                                        </span>
                                                    </span>

                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                      <a href="{{ route('news.combating') }}">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article5thumbnail.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">
                                                            Combating Islamophobia: Practical Steps for Communities & Allies</span>
                                                        <span class="thumb-info-type mt-2"> A guide offering practical strategies for schools, workplaces, parents, and community leaders to create safer and more inclusive environments. Includes recommended reporting channels and AMAAC initiatives supporting victims of discrimination</span>
                                                    </span>

                                                </span>
                                            </span>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="owl-item" style="width: 252.75px; margin-right: 35px;">
                                     <a href="{{ route('news.strengthening') }}">
                                        <div class="portfolio-item">
                                            <span
                                                class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('front/img/home/article6thumbnail.jpg') }}" class="img-fluid border-radius-0"
                                                        alt="">
                                                    <span class="thumb-info-title bg-primary text-secondary">
                                                        <span
                                                            class="thumb-info-inner line-height-1 font-weight-bold position-relative top-3">Strengthening Community Resilience Through Local Partnerships
                                                            </span>
                                                        <span class="thumb-info-type mt-2"> Explores how mosques, community centers, NGOs, universities, and advocacy groups can collaborate to deliver impactful programs—from mental health support to voter education. Highlights new AMAAC partnerships and success stories</span>
                                                    </span>

                                                </span>
                                            </span>
                                        </div>
                                        </a>
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

