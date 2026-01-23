@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('front/css/gaza_rtl.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('front/css/gaza.css') }}">
    @endif


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>

    </style>
@endsection
@section('content')
    {{-- <header class="topbar">

        <div class="brand" aria-label="Gaza Academy">
            <img src="{{ asset('front/img/home/GAZA White (1).png') }}" alt="Gaza Academy Logo" class="logo">

        </div>

        <nav class="nav gap-2" aria-label="Navigation">
            <a class="pill" href="#about">About</a>
            <a class="pill" href="#why-donate">Why Donate</a>
            <a class="pill" href="#gallery">Gallery</a>
            <a class="pill" href="#funding">Funding Goal</a>
            <a class="pill" href="#support">Ways to Help</a>
            <a class="pill success" href="https://gaza-academy.com" target="_blank" rel="noopener">Visit Academy Site</a>
            <a class="pill primary" href="#donate">Donate</a>
        </nav>

    </header> --}}
    <header class="topbar">

        <div class="brand" aria-label="Gaza Academy">
            <img src="{{ asset('front/img/home/rushd.jpeg') }}" alt="Gaza Academy Logo" class="logo">
        </div>

        <!-- Hamburger -->
        <button class="menu-toggle1" aria-label="Toggle Menu">
            ☰
        </button>

        <nav class="nav1" aria-label="Navigation">
            <a class="pill" href="#about">{{ __('gaza.about') }}</a>
            <a class="pill" href="#why-donate">{{ __('gaza.why_donate') }}</a>
            <a class="pill" href="#gallery">{{ __('gaza.gallery') }}</a>
            <a class="pill" href="#funding">{{ __('gaza.funding_goal') }}</a>
            <a class="pill" href="#support">{{ __('gaza.ways_to_help') }}</a>
            <a class="pill success" href="https://gaza-academy.com" target="_blank">
                {{ __('gaza.visit_academy') }}
            </a>
            <a class="pill primary" href="#donate">{{ __('gaza.donate') }}</a>
        </nav>

    </header>


    <section class="hero" aria-label="Hero section">
        <div class="container">
            <div class="heroGrid">
                <div>
                    <p class="kicker">{!! __('gaza.hero_kicker') !!}</p>

                    <h2>{!! __('gaza.hero_title') !!}</h2>

                    <p>{!! __('gaza.hero_description') !!}</p>

                    <div class="ctaRow" id="donate" aria-label="Primary calls to action">
                        <a class="btn primary" href="#">{{ __('gaza.donate_now') }}</a>
                        <a class="btn success" href="#">{{ __('gaza.sponsor_student') }}</a>
                        <a class="btn warn" href="#">{{ __('gaza.sponsor_seat') }}</a>
                        <a class="btn" href="#">{{ __('gaza.fund_month') }}</a>
                    </div>

                    <p class="muted" style="margin-top:10px;">
                        {{ __('gaza.location_label') }}
                        {{ __('gaza.location_text') }} •
                        {{ __('gaza.learn_more') }}:
                        <a href="https://gaza-academy.com" target="_blank" rel="noopener">
                            <b>gaza-academy.com</b>
                        </a>
                    </p>
                </div>

                <div class="heroRight">
                    <div class="panel" aria-label="Impact panel">
                        <div class="badge">{{ __('gaza.impact_title') }}</div>

                        <div class="stats">
                            <div class="stat"><strong>120</strong><span>{{ __('gaza.seats_year') }}</span></div>
                            <div class="stat"><strong>1,500+</strong><span>{{ __('gaza.trainees_year') }}</span></div>
                            <div class="stat"><strong>100+</strong><span>{{ __('gaza.course_types') }}</span></div>
                            <div class="stat"><strong>$100</strong><span>{{ __('gaza.avg_fee') }}</span></div>
                        </div>

                        <div class="note" style="margin-top:12px;">
                            <strong>{{ __('gaza.sustainability_title') }}</strong><br />
                            {{ __('gaza.sustainability_text') }}
                        </div>
                    </div>

                    <div class="videoFrame" aria-label="Video placeholder">
                        <div>
                            <b>{{ __('gaza.video_placeholder_title') }}</b>
                            <p class="muted">{{ __('gaza.video_placeholder_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-primary" id="about" aria-label="About Gaza Academy">
        <div class="container">
            <div class="sectionHead">
                <h3>{{ __('gaza.about_title') }}</h3>
                <p class="muted">{{ __('gaza.about_subtitle') }}</p>
            </div>

            <div class="grid2">
                <div class="card">
                    <div class="badge">{{ __('gaza.what_we_do') }}</div>

                    <p style="color: var(--primary);">
                        {{ __('gaza.what_we_do_text') }}
                    </p>

                    <ul class="list">
                        <li>{{ __('gaza.service_web') }}</li>
                        <li>{{ __('gaza.service_mobile') }}</li>
                        <li>{{ __('gaza.service_workshops') }}</li>
                        <li>{{ __('gaza.service_projects') }}</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="badge">{{ __('gaza.donors_unlock') }}</div>

                    <ul class="list">
                        <li>{{ __('gaza.donor_point_1') }}</li>
                        <li>{{ __('gaza.donor_point_2') }}</li>
                        <li>{{ __('gaza.donor_point_3') }}</li>
                    </ul>

                    <div class="note" style="margin-top:12px;">
                        <strong>{{ __('gaza.goal_title') }}</strong>
                        {{ __('gaza.goal_text') }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-secondary why-donate" id="why-donate" aria-label="Why donate">
        <div class="container">
            <div class="sectionHead">
                <h3>{{ __('gaza.why_donate_title') }}</h3>
                <p class="muted">{{ __('gaza.why_donate_subtitle') }}</p>
            </div>

            <div class="grid3">
                <div class="card">
                    <div class="badge">{{ __('gaza.why_badge_1') }}</div>
                    <h4>{{ __('gaza.why_title_1') }}</h4>
                    <p class="muted">{{ __('gaza.why_text_1') }}</p>
                </div>

                <div class="card">
                    <div class="badge">{{ __('gaza.why_badge_2') }}</div>
                    <h4>{{ __('gaza.why_title_2') }}</h4>
                    <p class="muted">{{ __('gaza.why_text_2') }}</p>
                </div>

                <div class="card">
                    <div class="badge">{{ __('gaza.why_badge_3') }}</div>
                    <h4>{{ __('gaza.why_title_3') }}</h4>
                    <p class="muted">{{ __('gaza.why_text_3') }}</p>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="bg-primary" id="gallery" aria-label="Image and video gallery">
        <div class="container">
            <div class="sectionHead">
                <h3>Gallery</h3>
                <p class="muted">Replace these placeholders with real images and videos.</p>
            </div>

            <div class="galleryStrip" aria-label="Gallery strip">
                <div class="galleryItem">
                    <div class="thumb">PHOTO 1</div>
                    <div class="galleryCap">Training session — classroom moments.</div>
                </div>
                <div class="galleryItem">
                    <div class="thumb">PHOTO 2</div>
                    <div class="galleryCap">Co‑working space — students and freelancers working.</div>
                </div>
                <div class="galleryItem">
                    <div class="thumb">PHOTO 3</div>
                    <div class="galleryCap">Mentors & team — behind the scenes.</div>
                </div>
                <div class="galleryItem">
                    <div class="thumb">VIDEO</div>
                    <div class="galleryCap">Short explainer video — impact & needs.</div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="bg-primary" id="gallery" aria-label="Image and video gallery">
        <div class="container">
            <div class="sectionHead">
                <h3>{{ __('gaza.gallery_title') }}</h3>
                <p class="muted">{{ __('gaza.gallery_subtitle') }}</p>
            </div>

            <!-- Slider -->
            <div class="swiper gallerySlider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide galleryItem">
                        <div class="thumb">PHOTO 1</div>
                        <div class="galleryCap">{{ __('gaza.gallery_photo_1') }}</div>
                    </div>

                    <div class="swiper-slide galleryItem">
                        <div class="thumb">PHOTO 2</div>
                        <div class="galleryCap">{{ __('gaza.gallery_photo_2') }}</div>
                    </div>

                    <div class="swiper-slide galleryItem">
                        <div class="thumb">PHOTO 3</div>
                        <div class="galleryCap">{{ __('gaza.gallery_photo_3') }}</div>
                    </div>

                    <div class="swiper-slide galleryItem">
                        <div class="thumb">VIDEO</div>
                        <div class="galleryCap">{{ __('gaza.gallery_video') }}</div>
                    </div>

                    <div class="swiper-slide galleryItem">
                        <div class="thumb">VIDEO</div>
                        <div class="galleryCap">{{ __('gaza.gallery_video') }}</div>
                    </div>

                </div>

                <!-- Controls -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>



   <section class="bg-secondary funding" id="funding" aria-label="Funding goal and spending">
    <div class="container">
        <div class="sectionHead">
            <h3>{{ __('gaza.funding_title') }}</h3>
            <p class="muted">{{ __('gaza.funding_subtitle') }}</p>
        </div>

        <div class="grid2">
            <div class="card">
                <div class="badge">{{ __('gaza.annual_target') }}</div>

                <h4 style="margin:0 0 8px; color: var(--secondary)">$43,300</h4>

                <p class="muted">{{ __('gaza.annual_target_desc') }}</p>

                <div class="badge" style="margin-top:10px;">
                    {{ __('gaza.ways_to_donate') }}
                </div>

                <ul class="list">
                    <li><b>{{ __('gaza.donate_full_year') }}</b> $43,300</li>
                    <li><b>{{ __('gaza.donate_seat_year') }}</b> $360</li>
                    <li><b>{{ __('gaza.donate_trainee') }}</b> $100</li>
                    <li><b>{{ __('gaza.donate_month') }}</b> $2,200</li>
                </ul>
            </div>

            <div class="card">
                <div class="badge">{{ __('gaza.budget_breakdown') }}</div>

                <table class="table" aria-label="Budget table">
                    <thead style="background:#0a2b5a;">
                        <tr>
                            <th style="color: var(--secondary)">{{ __('gaza.table_item') }}</th>
                            <th style="color: var(--secondary)">{{ __('gaza.table_cost') }}</th>
                            <th style="color: var(--secondary)">{{ __('gaza.table_share') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('gaza.rent') }}</td>
                            <td>$12,000</td>
                            <td><div class="bar"><span style="width:28%"></span></div><span class="muted">~28%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.power_utilities') }}</td>
                            <td>$10,000</td>
                            <td><div class="bar"><span style="width:23%"></span></div><span class="muted">~23%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.admin_team') }}</td>
                            <td>$10,800</td>
                            <td><div class="bar"><span style="width:25%"></span></div><span class="muted">~25%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.internet') }}</td>
                            <td>$4,800</td>
                            <td><div class="bar"><span style="width:11%"></span></div><span class="muted">~11%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.solar_panels') }}</td>
                            <td>$1,200</td>
                            <td><div class="bar"><span style="width:3%"></span></div><span class="muted">~3%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.batteries') }}</td>
                            <td>$1,000</td>
                            <td><div class="bar"><span style="width:2%"></span></div><span class="muted">~2%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.furniture') }}</td>
                            <td>$1,000</td>
                            <td><div class="bar"><span style="width:2%"></span></div><span class="muted">~2%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.laptop') }}</td>
                            <td>$1,000</td>
                            <td><div class="bar"><span style="width:2%"></span></div><span class="muted">~2%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.projector') }}</td>
                            <td>$500</td>
                            <td><div class="bar"><span style="width:1%"></span></div><span class="muted">~1%</span></td>
                        </tr>
                        <tr>
                            <td>{{ __('gaza.marketing') }}</td>
                            <td>$1,000</td>
                            <td><div class="bar"><span style="width:2%"></span></div><span class="muted">~2%</span></td>
                        </tr>
                        <tr style="background:#0a2b5a;">
                            <th style="color: var(--secondary)">{{ __('gaza.total_annual') }}</th>
                            <th style="color: var(--secondary)">$43,300</th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

   <section class="bg-primary support" id="support" aria-label="Ways to help">
    <div class="container">
        <div class="sectionHead">
            <h3>{{ __('gaza.support_title') }}</h3>
            <p class="muted">{{ __('gaza.support_subtitle') }}</p>
        </div>

        <div class="grid3">
            <div class="card">
                <div class="badge">{{ __('gaza.support_badge_seat') }}</div>
                <h4>{{ __('gaza.support_seat_title') }}</h4>
                <p class="muted">{!! __('gaza.support_seat_text') !!}</p>
                <a class="btn warn" href="#">{{ __('gaza.support_seat_btn') }}</a>
            </div>

            <div class="card">
                <div class="badge">{{ __('gaza.support_badge_student') }}</div>
                <h4>{{ __('gaza.support_student_title') }}</h4>
                <p class="muted">{!! __('gaza.support_student_text') !!}</p>
                <a class="btn success" href="#">{{ __('gaza.support_student_btn') }}</a>
            </div>

            <div class="card">
                <div class="badge">{{ __('gaza.support_badge_month') }}</div>
                <h4>{{ __('gaza.support_month_title') }}</h4>
                <p class="muted">{!! __('gaza.support_month_text') !!}</p>
                <a class="btn primary" href="#">{{ __('gaza.support_month_btn') }}</a>
            </div>
        </div>

        <div class="grid2" style="margin-top:14px;">
            <div class="card">
                <div class="badge">{{ __('gaza.non_financial_badge') }}</div>
                <h4>{{ __('gaza.non_financial_title') }}</h4>
                <p class="muted">{{ __('gaza.non_financial_text') }}</p>

                <div class="forms">
                    <div class="form-row">
                        <label>{{ __('gaza.form_name') }}</label>
                        <input type="text" placeholder="{{ __('gaza.form_name_ph') }}" />
                    </div>

                    <div class="form-row">
                        <label>{{ __('gaza.form_email') }}</label>
                        <input type="email" placeholder="{{ __('gaza.form_email_ph') }}" />
                    </div>

                    <div class="form-row">
                        <label>{{ __('gaza.form_project_type') }}</label>
                        <select>
                            <option>{{ __('gaza.project_website') }}</option>
                            <option>{{ __('gaza.project_mobile') }}</option>
                            <option>{{ __('gaza.project_system') }}</option>
                            <option>{{ __('gaza.project_ecommerce') }}</option>
                            <option>{{ __('gaza.project_support') }}</option>
                            <option>{{ __('gaza.project_other') }}</option>
                        </select>
                    </div>

                    <div class="form-row full">
                        <label>{{ __('gaza.form_summary') }}</label>
                        <textarea placeholder="{{ __('gaza.form_summary_ph') }}"></textarea>
                    </div>

                    <a class="btn success full" href="#">{{ __('gaza.submit_project') }}</a>
                </div>
            </div>

            <div class="card">
                <div class="badge">{{ __('gaza.media_badge') }}</div>
                <h4>{{ __('gaza.media_title') }}</h4>
                <p class="muted">{{ __('gaza.media_text') }}</p>

                <div class="grid2">
                    <div class="sample">
                        <h5>{{ __('gaza.sample_post') }}</h5>
                        <pre>…</pre>
                    </div>
                    <div class="sample">
                        <h5>{{ __('gaza.sample_dm') }}</h5>
                        <pre>…</pre>
                    </div>
                </div>

                <div style="margin-top:12px;">
                    <label>{{ __('gaza.media_email_label') }}</label>
                    <input type="email" placeholder="{{ __('gaza.form_email_ph') }}" />
                    <a class="btn primary mt-2" href="#">{{ __('gaza.request_media') }}</a>
                </div>

                <div class="note" style="margin-top:12px;">
                    <strong>{{ __('gaza.media_note_title') }}</strong>
                    {{ __('gaza.media_note_text') }}
                </div>
            </div>
        </div>
    </div>
</section>





    {{-- <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const gallerySwiper = new Swiper('.gallerySlider', {
            loop: true,
            spaceBetween: 24,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
    <script>
        const toggle = document.querySelector('.menu-toggle1');
        const nav = document.querySelector('.nav1');

        toggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    </script>
@endsection
