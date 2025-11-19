@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => true, 'involved' => false, 'contact' => false])
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/IMG-20251119-WA0021.jpg') }}'); background-position: center center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary ">Works AMAAC</h1>
                    <span class="sub-title">Addressing Critical Issues Affecting Muslims and Arabs
                        in USA and all over the world </span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Works</li>
                    </ul>
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
                                <h1 class="font-weight-bold text-8 mb-0 appear-animation text-color-light "
                                    data-appear-animation="maskUp">
                                    Our <span class="text-color-secondary">Work</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-light-100" data-appear-animation="maskUp"
                                    data-appear-animation-delay="200">
                                    AMAAC stands at the forefront of advocacy, working tirelessly to
                                    protect the civil rights and address the concerns of Muslims and
                                    Arabs. We engage with policymakers, educate the public, and
                                    mobilize our community to challenge discrimination, promote
                                    equitable policies, and ensure our voices are integral to the national
                                    dialogue.
                                    We are at the forefront of tackling key challenges and opportunities
                                    facing our communities. Our work spans a variety of critical areas:
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container pb-1">

            <div class="row" bis_skin_checked="1">
                <div class="featured-boxes featured-boxes-style-2" bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border rounded p-3" bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    {{-- <i class="icon-featured icon-screen-tablet icons text-color-white bg-color-primary"></i> --}}
                                    <i
                                        class="fa-solid fa-shield-halved text-color-primary bg-color-light icon-featured"></i>

                                    <h4 class="font-weight-bold text-start text-color-secondary">Civil Rights &
                                        Anti-Discrimination: </h4>
                                    <ul class="px-2 text-start text-color-light">
                                        <li> Combating Islamophobia and anti-Arab sentiment. </li>
                                        <li>Addressing workplace and housing discrimination. </li>
                                        <li>Protecting freedom of speech and religious expression. </li>
                                        <li> Advocating against unlawful surveillance and profiling. </li>
                                        <li> Providing legal resources and support for victims of
                                            discrimination. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border rounded p-3" bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    <i
                                        class="fa-solid fa-square-poll-horizontal text-color-primary bg-color-light icon-featured"></i>

                                    <h4 class="font-weight-bold text-start text-color-secondary">Civic Engagement &
                                        Political
                                        Participation: </h4>
                                    <ul class="px-2 text-start text-color-light">
                                        <li> Encouraging voter registration and participation. </li>
                                        <li>Educating on policy issues and legislative processes. </li>
                                        <li>Facilitating community advocacy on local, state, and national
                                            levels. </li>
                                        <li> Developing future leaders and advocates within our
                                            communities. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border rounded p-3" bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    <i class="fa-solid fa-newspaper text-color-primary bg-color-light icon-featured"></i>

                                    <h4 class="font-weight-bold text-start text-color-secondary"> Media & Public Relations:
                                    </h4>
                                    <ul class="px-2 text-start text-color-light">
                                        <li> Challenging stereotypes and promoting accurate portrayals of
                                            American Muslims and Arabs in media.
                                        </li>

                                        <li>Engaging with journalists and media outlets to ensure fair and
                                            balanced reporting. </li>

                                        <li>Developing public education campaigns to foster greater
                                            understanding. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border rounded p-3" bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">

                                    <i class="fa-solid fa-passport text-color-primary bg-color-light icon-featured"></i>

                                    <h4 class="font-weight-bold text-start text-color-secondary"> Immigration & Refugee
                                        Support:
                                    </h4>
                                    <ul class="px-2 text-start text-color-light">
                                        <li> Advocating for humane and just immigration policies. </li>
                                        <li>Providing resources and support for new immigrants and
                                            refugees. </li>
                                        <li> Providing legal resources and support for victims of
                                            discrimination. </li>
                                        <li>Working to combat discriminatory immigration practices. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border rounded p-3" bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    <i
                                        class="fa-solid fa-scale-balanced text-color-primary bg-color-light icon-featured"></i>

                                    <h4 class="font-weight-bold text-start text-color-secondary"> Human Rights & Foreign
                                        Policy:
                                    </h4>
                                    <ul class="px-2 text-start text-color-light">
                                        <li> Raising awareness about human rights issues affecting Muslim
                                            and Arab communities globally.</li>
                                        <li> Advocating for U.S. foreign policies that promote peace, justice,
                                            and human dignity in the Middle East and beyond. </li>
                                        <li>Supporting humanitarian efforts in regions facing conflict or
                                            crisis. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700"
                            bis_skin_checked="1" style="animation-delay: 700ms;">
                            <div class="featured-box featured-box-effect-4 border rounded p-3" bis_skin_checked="1">
                                <div class="box-content" bis_skin_checked="1">
                                    <i
                                        class="fa-solid fa-people-group text-color-primary bg-color-light icon-featured"></i>

                                    <h4 class="font-weight-bold text-start text-color-secondary">Youth & Community
                                        Development:
                                    </h4>
                                    <ul class="px-2 text-start text-color-light">
                                        <li> Investing in programs that empower youth and foster their civic
                                            leadership. </li>
                                        <li>Supporting initiatives that strengthen community institutions and
                                            networks. </li>
                                        <li>Promoting interfaith and intercultural dialogue and
                                            collaboration. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
