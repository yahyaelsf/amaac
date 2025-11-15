@extends('front.layout', ['home' => false, 'about' => false, 'goals' => true])
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
                    <h1 class="text-9 font-weight-bold text-color-secondary">Goals AMAAC</h1>
                    <span class="sub-title">Building Bridges of Understanding and Cooperation</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Our goals </li>
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
                            <h1 class="font-weight-bold text-8 mb-0 appear-animation text-color-primary" data-appear-animation="maskUp">
                                We are <span class="text-color-secondary ">AMAAC</span>, Committed to Building a Future of Peace and
                                Understanding
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="200">
                                Based on the comprehensive ambitious vision, we have established
                                a set of strategic objectives that drive our daily work and direct our
                                long-term initiatives for the American Muslim and Arab Affairs
                                Council (AMAAC).The goals are crystallized into strategic themes
                                aimed at achieving maximum positive impact at the local and
                                international levels. These goals are not just points on a piece of
                                paper; they are fundamental commitments that will guide every step
                                the Council takes.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="container mb-5 pb-4" bis_skin_checked="1">

        <div class="row" bis_skin_checked="1">
            <div class="col mb-4" bis_skin_checked="1">
                <hr class="my-5">
            </div>
        </div>

        <div class="row pb-3" bis_skin_checked="1">


            <h2 class="font-weight-normal text-6 text-color-secondary">To achieve our ambitious vision, we have set a Strategic Goals : </h2>

            <div class="accordion accordion-modern" id="accordion" bis_skin_checked="1">
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse"
                                data-bs-parent="#accordion" href="#collapseOne" bis_skin_checked="1" aria-expanded="true">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Defending Civil Rights and Social Justice
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="collapse show" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>Combating all forms of discrimination and prejudice.</p>
                            <p>Promoting public policies that protect the constitutional freedoms
                                of Muslims and Arabs.</p>
                            <p> Monitoring and following up on discriminatory practices in the
                                labor, education, media, and law enforcement sectors. </p>

                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse"
                                data-bs-parent="#accordion" href="#collapseTwo" bis_skin_checked="1" aria-expanded="true">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Political Empowerment and Civic Participation
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="collapse " bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p> Supporting increased Arab and Muslim representation in local and
                                federal councils. </p>
                            <p> Providing awareness and training programs to enhance political
                                and societal presence. </p>


                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse"
                                data-bs-parent="#accordion" href="#collapseThree" bis_skin_checked="1" aria-expanded="true">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Preserving and Promoting Cultural Identity
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="collapse " bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p> Organizing artistic and cultural events that highlight Arab and
                                Islamic heritage. </p>
                            <p> Supporting educational initiatives that re-present the image of
                                Islam and Arabism in a civilized manner.</p>
                            <p> Producing and promoting media content that counters stereotypes
                                and misinformation. </p>


                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse"
                                data-bs-parent="#accordion" href="#collapseFour" bis_skin_checked="1"
                                aria-expanded="false">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Community Building and Unity
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="collapse" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>Launching community dialogue initiatives and promoting
                                solidarity among community members. </p>
                            <p> Encouraging collaborative work across religions and cultures,
                                creating common ground for understanding. </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseFive"
                                bis_skin_checked="1" aria-expanded="false">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Education, Development, and Personal Empowerment
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="collapse" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>Advocating for Justice and Equality: We will serve as a strong
                                voice for Muslims and Arabs in the United States and around the
                                world, defending their civil and human rights. We will combat
                                discrimination and Islamophobia, and provide legal and moral
                                support to victims. </p>
                            <p> Promoting Civic Engagement: We will encourage Arab and
                                Muslim communities to actively participate in the political and civic
                                processes in their countries of residence, with a focus on building
                                promising young leaders capable of effectively representing the
                                interests of their communities. </p>
                            <p>Supporting Sustainable Development: We will collaborate with
                                local and international organizations to support sustainable
                                development projects in Arab and Muslim countries, with a focus
                                on education, healthcare, and women and youth empowerment.
                                Our role will not simply be to provide assistance, but rather to
                                build capacity to enable these communities to achieve self
                                sufficiency and prosperity. </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseSix"
                                bis_skin_checked="1" aria-expanded="false">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Influencing Policy and Decision-Making
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="collapse" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>AMAAC will strive to be an influential force in shaping U.S.
                                foreign policy related to the Middle East and the Islamic world: </p>
                            <p> Policy Analysis and Recommendations: We will conduct in-depth
                                research and independent analysis of current U.S. policies and
                                provide informed recommendations to decision-makers to ensure
                                that these policies are fair, effective, and serve the interests of all
                                parties. </p>
                            <p> Policy Engagement: We will build strong relationships with
                                members of Congress, the U.S. Administration, and other
                                stakeholders in Washington, D.C. We will organize outreach events,
                                workshops, and private meetings to present our views and influence
                                important decisions. </p>
                            <p>Building Strategic Alliances: We will collaborate with human
                                rights organizations, research centers, and other think tanks that
                                share our goals to enhance our influence and push for more balanced
                                and just policies. </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse-7"
                                bis_skin_checked="1" aria-expanded="false">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Innovation and Adaptation
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-7" class="collapse" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>We believe that the world is constantly changing, so our vision must
                                be flexible and adaptable: </p>
                            <p>Embracing Technology: We will leverage the latest technologies
                                and social media to spread our message, organize our campaigns,
                                and engage with communities around the world. </p>
                            <p> Continuous research and development: We will commit to
                                continuous research and development of our programs and
                                initiatives, and regularly evaluate their impact to ensure their
                                effectiveness and ability to achieve our goals. </p>
                            <p>Providing workshops and knowledge resources (such as "Know
                                Your Rights" and "Building Community Leadership"). </p>
                            <p> Facilitating access to legal, social, and economic resources. </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse-8"
                                bis_skin_checked="1" aria-expanded="false">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Promoting Understanding and Building Bridges:
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-8" class="collapse" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>Primary Objective: Transform negative perceptions of Arabs and
                                Muslims into deeper understanding and mutual appreciation in
                                Western societies. </p>
                            <p> Detailed Objectives:
                                Launching large-scale media awareness campaigns: Producing and
                                distributing multimedia content (documentaries, short videos,
                                articles, podcasts) that highlights the rich Arab and Islamic culture,
                                shared history, and civilizational contributions. </p>
                            <p>Developing Innovative Educational Programs: Designing and
                                implementing curricula and workshops for educational institutions
                                and schools in the West to provide accurate and unbiased
                                information about Islam and Arabs. </p>
                            <p>Establishing Interfaith and Intercultural Dialogue Platforms:
                                Organizing conferences, seminars, and periodic meetings that bring
                                together thought leaders, academics, and representatives of different
                                religions to foster constructive dialogue on shared issues. </p>
                            <p> Facilitating cultural and academic exchange programs: Launching
                                student, researcher, and artist exchange programs between the
                                United States and Arab and Islamic countries to enhance firsthand
                                experiences. </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse-9"
                                bis_skin_checked="1" aria-expanded="false">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Supporting communities and protecting rights:
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-9" class="collapse" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>Primary goal: Empowering Arab and Muslim communities globally
                                and defending their civil and human rights. </p>
                            <p> Detailed goals: Providing legal and moral support to victims of discrimination:
                                Establishing a network of lawyers and volunteers to provide legal
                                advice and support to those affected by Islamophobia and Arab
                                hatred, and documenting these incidents. </p>
                            <p> Launching leadership capacity-building programs: Developing
                                workshops and training initiatives for young Muslims and Arabs to
                                enhance their skills in leadership, civic engagement, and advocacy.</p>
                            <p>Supporting sustainable development projects: Collaborating with
                                local and international organizations in Arab and Islamic countries
                                to support education, health, women's empowerment, and
                                entrepreneurship projects, with a focus on building community self
                                sufficiency. </p>
                            <p>
                                Providing humanitarian and relief assistance: Rapidly responding
                                to humanitarian crises in the Arab and Islamic world by providing
                                material and moral support to those affected.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse-10"
                                bis_skin_checked="1" aria-expanded="false">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Influencing Policy and Decision-Making:
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-10" class="collapse" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>Primary Objective: For AMAAC to be an influential voice in
                                shaping US foreign policy relevant to the Arab and Islamic world. </p>
                            <p> Detailed Objectives: Conducting in-depth policy research and analysis: Establishing a
                                specialized research center that provides independent studies and
                                analyses of US policies in the region and their impact on societies. </p>
                            <p> Active Participation in the Decision-Making Process: Building
                                strong relationships with members of Congress, administration
                                officials, and policy advisors to provide informed and influential
                                recommendations. </p>
                            <p>Organizing forums and dialogue conferences with decision
                                makers: Hosting events that bring together experts and decision
                                makers to discuss pressing issues and offer practical solutions. </p>
                            <p>
                                Building strategic alliances with relevant organizations:
                                Collaborating with research centers, human rights organizations, and
                                other civil society organizations to enhance joint efforts to defend
                                justice.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default" bis_skin_checked="1">
                    <div class="card-header" bis_skin_checked="1">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse-11"
                                bis_skin_checked="1" aria-expanded="false">
                                <i class="icons icon-diamond text-color-primary"></i>
                                Innovation and Adaptation:
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-11" class="collapse" bis_skin_checked="1" style="">
                        <div class="card-body text-2" bis_skin_checked="1">
                            <p>Primary Objective: Ensuring the Council's sustainability and
                                effectiveness by adopting best practices and adapting to changing
                                challenges. </p>
                            <p> Detailed Objectives: Investing in digital technology: Developing modern digital
                                platforms and effectively utilizing social media to disseminate
                                messages, engage with the public, and build a supportive
                                community for the Council. </p>
                            <p> Continuous Evaluation and Program Development: Conducting
                                periodic evaluations of all initiatives and programs to ensure their
                                effectiveness and adjusting them based on results to maximize
                                impact. </p>
                            <p>Building a Global Network of Partners: Establishing strong
                                relationships with Arab and Islamic organizations, governments, and
                                international institutions to foster collaboration and exchange of
                                expertise. </p>
                            <p>
                                Developing Internal Competencies: Providing ongoing training to
                                staff members and volunteers to ensure they possess the skills and
                                knowledge necessary to achieve the Council's goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <hr class="solid my-5">




    </div>
@endsection
