@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => true, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/IMG-20251206-WA0010.jpg') }}'); background-position: center center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary ">The People Behind AMAAC</h1>
                    {{-- <span class="sub-title">Building Bridges of Understanding and Cooperation</span> --}}
                </div>
                {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Team</li>
                    </ul>
                </div> --}}
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
                                    Our <span class="text-color-secondary">Team</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-secondary" data-appear-animation="maskUp"
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

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center text-color-light-100"
                data-sort-id="team" data-option-key="filter">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase text-color-light-100 active "
                        href="#">Show All</a></li>
                <li class="nav-item" data-option-value=".President"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#">President</a></li>
                <li class="nav-item" data-option-value=".Vice"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#">Vice President</a></li>
                 <li class="nav-item" data-option-value=".Directors"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#">Board of Directors</a></li>
                <li class="nav-item" data-option-value=".assembly"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#">General Assembly</a></li>
                <li class="nav-item" data-option-value=".Trustees"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#">Board of Trustees</a></li>


                <li class="nav-item" data-option-value=".Advisory"><a class="nav-link text-2-5 text-uppercase text-color-light-100"
                        href="#">Advisory Board</a></li>
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                <div class="row team-list sort-destination" data-sort-id="team">
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item President bg-primary">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/home/WhatsApp Image 2025-11-18 at 19.04.06_d144ae8fs.jpg') }}"
                                        class="img-fluid" style="height : 355px !important" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Dr. Tamara Alqolaghassi </span>
                                        <span class="thumb-info-type text-color-secondary">President </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                    Dr. Alqolaghassi is a multifaceted entrepreneur who heads Capital Investment Holding
                                    Group and its subsidiaries; she also serves as CEO of $Pay Rem, president of the
                                    American International Education Federation and chairperson of global development
                                    bodies. Her work spans leadership, management, investment and education, and she leads
                                    international initiatives that align business innovation with UN Sustainable Development
                                    Goals.</span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Vice">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/7.png') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Dr. Abdullah Abbas </span>
                                        <span class="thumb-info-type text-color-secondary">Vice President </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary"> An Egyptian physician turned
                                    entrepreneur, Dr. Abbas founded his first export import company in 1999 and later
                                    launched a series of global ventures—including Falcon, OCTA, Beovita, Bionatural America
                                    and the PropTech super app Kemedar. He is known for combining IT innovation,
                                    international marketing and strategic planning; his companies operate in more than 25
                                    countries and apply blockchain and AI in real estate technology. </span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="{{ asset('front/img/team/1-abdullah-resume-photo-album.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                     <div class="col-12 col-sm-6 col-lg-4 isotope-item Directors">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/hazem.jpg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Hazem Qashou
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">Board of Directors
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                 Hazem Qashou is a prominent Jordanian politician and experienced engineering consultant who previously served as Minister of Municipal Affairs and later as a respected member of the Jordanian parliament. He now acts as deputy and secretary general of the Al Rissala Party, actively supporting regional cooperation, democratic values, sustainable development, and issues such as Morocco’s territorial integrity and national unity.
                                </span>

                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="{{ asset('front/img/team/حازم قشوع.jpg') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>


                     <div class="col-12 col-sm-6 col-lg-4 isotope-item assembly">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/WhatsApp Image 2025-12-14 at 2.34.53 PM.jpeg') }}" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary"> Dr. Hayatullah Atid </span>
                                        <span class="thumb-info-type text-color-secondary">General Assembly
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                               Dr. Atid, an Afghan-born consultant with doctorates in human development and Islamic economics, is founder and chairman of the Organization for Talent Development and Entrepreneurship (OTED). Recognized by the Afghan embassy in Japan, he leads international and humanitarian initiatives aiding the Afghan people.





                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                  <a target="_blank" href="{{ asset('front/img/team/Dr.Hayatullah Atid CV 2025.pdf') }}"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item assembly">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/mariam sharifa sudan.jpg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Mariam Al Sharif Ibrahim Al
                                            Hindi </span>
                                        <span class="thumb-info-type text-color-secondary">General Assembly
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">


                                 Mariam is a Sudanese architect and strategist, founder of the Vision Center for Planning and Strategic Consultation, an independent think tank collaborating with Sudan’s government. She represented Sudan at a U.S. investment conference and served as a goodwill ambassador, receiving international recognition

                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                     <div class="col-12 col-sm-6 col-lg-4 isotope-item assembly">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/WhatsApp Image 2025-12-14 at 2.36.10 PM.jpeg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Dr. Bader Al Hussinan </span>
                                        <span class="thumb-info-type text-color-secondary">General Assembly
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">Dr. Al Hussinan is Senior Vice
                                    President and Head of the Payments Section at Riyad Bank, where he brings over 20 years
                                    of experience in payment operations. He collaborates with the Saudi Central Bank on
                                    remittance initiatives, previously managed the SARIE system and leads Riyad Bank’s
                                    adoption of ISO 20022 standards.</span>
                                <span class="thumb-info-social-icons mb-4">
                                  <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>


                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Trustees">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/Muhammed  Hassani.jpg') }}" style="height : 355px !important" class="img-fluid" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Mohammed Hassani </span>
                                        <span class="thumb-info-type text-color-secondary">Board of Trustees
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary"> An Algerian business leader and veteran trade unionist, Mohammed Hassani heads the Algerian Forum for Import Export, Trading & Investment (AFIETI). He previously worked in the FLN and at the petroleum firm Naftal, created the National Federation of Real Estate Agencies, and has been active in national anti-corruption and economic reform efforts.

                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item assembly">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/Mariam Khan.jpg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Dr. Mariam Khan
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">General Assembly
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                    Dr. Mariam Khan is the founder and president of Pakistan’s Community Development Foundation and co founder of the Global Women’s Development Network. Since 2009 she has championed women’s economic empowerment and has grown CDF into a network of 50 partner institutions, using information technology initiatives to connect women with global opportunities.
                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                    <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Trustees">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/WhatsApp Image 2025-12-14 at 2.34.54 PM.jpeg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Dr. Abdelrahim Al Hour
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">Board of Trustees
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">
                                    Dr. Abdelrahim Ali Al Hour is a journalist specialising in social economics who produces
                                    and presents the television programme “Anta Wa Malok” on Al Jazeera. He also serves on
                                    the administration of Al Wehda Medical Group, consults on business development for Q
                                    Auto (Audi & Volkswagen) and lectures at Qatar Finance & Business Academy and Qatar
                                    Aeronautical College.
                                </span>
                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 isotope-item Advisory">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                            <span class="thumb-info-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front/img/team/ali.jpg') }}" class="img-fluid"
                                        alt="" style="height : 355px !important">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner text-color-secondary">Dr. Ali Mahamat Abdoulaye
                                        </span>
                                        <span class="thumb-info-type text-color-secondary">Advisory Board
                                        </span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text text-color-secondary">



                                     Dr. Ali Mahamat Abdoulaye is a Chadian educator and media figure with degrees in Arabic language, educational planning, and media, as well as honorary doctorates in peace and coexistence. He founded and edits Chad’s Peace newspaper and holds leadership roles in several educational, charitable, and youth organizations.

                                <span class="thumb-info-social-icons mb-4">
                                   <a target="_blank" href="http://www.facebook.com"><i
                                            class="far fa-file-alt fa-lg text-color-secondary" style="font-size: 14px;"></i><span>CV</span></a>
                                    <a href="http://www.linkedin.com"><i
                                            class="fab fa-linkedin-in text-color-secondary" ></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </div>


                </div>

            </div>

        </div>
    </section>
@endsection
{{-- 0595050642 --}}
