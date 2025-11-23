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
    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/IMG-20251119-WA0028.jpg') }}'); background-position: center center;
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

        <div class="container  pb-4" bis_skin_checked="1">
            <div class="row pb-3" bis_skin_checked="1">

                <div class="goals-container">
                    <h2 class="text-center mb-5 text-color-secondary">Our Strategic Goals</h2>

                    <!-- Section 1 -->
                    <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="100">
                        <h3 class="goal-title ">Defending Civil Rights and Social Justice</h3>
                        <p>Combating all forms of discrimination and prejudice.</p>
                        <p>Promoting public policies that protect the constitutional freedoms of Muslims and Arabs.</p>
                        <p>Monitoring discriminatory practices in labor, education, media, and law enforcement.</p>
                    </section>

                    <!-- Section 2 -->
                    <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="200">
                        <h3 class="goal-title">Political Empowerment and Civic Participation</h3>
                        <p>Supporting increased Arab and Muslim representation in local and federal councils.</p>
                        <p>Providing awareness and training programs to enhance political and societal presence.</p>
                    </section>

                    <!-- Section 3 -->
                    <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="300">
                        <h3 class="goal-title">Preserving and Promoting Cultural Identity</h3>
                        <p>Organizing artistic and cultural events that highlight Arab and Islamic heritage.</p>
                        <p>Supporting educational initiatives that re-present the image of Islam and Arabism.</p>
                        <p>Producing media content that counters stereotypes and misinformation.</p>
                    </section>

                    <!-- Section 4 -->
                    <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="400">
                        <h3 class="goal-title">Community Building and Unity</h3>
                        <p>Launching community dialogue initiatives and promoting solidarity among community members.</p>
                        <p>Encouraging collaborative work across religions and cultures, creating common ground for
                            understanding.</p>
                    </section>
                    <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="500">
                        <h3 class="goal-title">Education, Development, and Personal Empowerment</h3>
                        <p>Advocating for Justice and Equality: We will serve as a strong voice for Muslims and Arabs in the
                            United States and around the world, defending their civil and human rights. We will combat
                            discrimination and Islamophobia, and provide legal and moral support to victims..</p>
                        <p>Promoting Civic Engagement: We will encourage Arab and Muslim communities to actively participate
                            in the political and civic processes in their countries of residence, with a focus on building
                            promising young leaders capable of effectively representing the interests of their communities..
                        </p>
                        <p>Supporting Sustainable Development: We will collaborate with local and international
                            organizations to support sustainable development projects in Arab and Muslim countries, with a
                            focus on education, healthcare, and women and youth empowerment. Our role will not simply be to
                            provide assistance, but rather to build capacity to enable these communities to achieve self
                            sufficiency and prosperity.</p>
                    </section>

                    <!-- Section 6 -->
                    <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="600">
                        <h3 class="goal-title">Influencing Policy and Decision-Making</h3>
                        <p>AMAAC will strive to be an influential force in shaping U.S. foreign policy related to the Middle
                            East and the Islamic world:.</p>
                        <p>Policy Analysis and Recommendations: We will conduct in-depth research and independent analysis
                            of current U.S. policies and provide informed recommendations to decision-makers to ensure that
                            these policies are fair, effective, and serve the interests of all parties.</p>
                        <p>
                            Policy Engagement: We will build strong relationships with members of Congress, the U.S.
                            Administration, and other stakeholders in Washington, D.C. We will organize outreach events,
                            workshops, and private meetings to present our views and influence important decisions
                        </p>
                        <p>
                            Building Strategic Alliances: We will collaborate with human rights organizations, research
                            centers, and other think tanks that share our goals to enhance our influence and push for more
                            balanced and just policies
                        </p>
                    </section>
                    <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="500">
                        <h3 class="goal-title">
                            Innovation and Adaptation
                        </h3>
                        <p>We believe that the world is constantly changing, so our vision must be flexible and adaptable.
                        </p>
                        <p>Embracing Technology: We will leverage the latest technologies and social media to spread our
                            message, organize our campaigns, and engage with communities around the world.</p>
                        <p>Continuous research and development: We will commit to continuous research and development of our
                            programs and initiatives, and regularly evaluate their impact to ensure their effectiveness and
                            ability to achieve our goals.</p>
                        <p>
                            Providing workshops and knowledge resources (such as "Know Your Rights" and "Building Community
                            Leadership
                        </p>
                        <p>
                            Facilitating access to legal, social, and economic resources.
                        </p>
                    </section>
                    <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="600">
                        <h3 class="goal-title">
                                Promoting Understanding and Building Bridges
                            </h3>
                        <p>Primary Objective: Transform negative perceptions of Arabs and Muslims into deeper understanding and mutual appreciation in Western societies.</p>
                        <p>Detailed Objectives: Launching large-scale media awareness campaigns: Producing and distributing multimedia content (documentaries, short videos, articles, podcasts) that highlights the rich Arab and Islamic culture, shared history, and civilizational contributions.</p>
                        <p>
                            Developing Innovative Educational Programs: Designing and implementing curricula and workshops for educational institutions and schools in the West to provide accurate and unbiased information about Islam and Arabs.
                        </p>
                        <p>
                            Establishing Interfaith and Intercultural Dialogue Platforms: Organizing conferences, seminars, and periodic meetings that bring together thought leaders, academics, and representatives of different religions to foster constructive dialogue on shared issues.
                        </p>
                        <p>
                        Facilitating cultural and academic exchange programs: Launching student, researcher, and artist exchange programs between the United States and Arab and Islamic countries to enhance firsthand experiences.
                        </p>
                    </section>
                     <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
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
                    </section>
                    <section class="goal-section alt appear-animation" data-appear-animation="fadeInUp"
                        data-appear-animation-delay="600">
                        <h3 class="goal-title">
                                Influencing Policy and Decision-Making
                            </h3>
                        <p>Primary Objective: For AMAAC to be an influential voice in shaping US foreign policy relevant to the Arab and Islamic world.</p>
                        <p>Detailed Objectives: Conducting in-depth policy research and analysis: Establishing a specialized research center that provides independent studies and analyses of US policies in the region and their impact on societies.</p>
                        <p>
                           Active Participation in the Decision-Making Process: Building strong relationships with members of Congress, administration officials, and policy advisors to provide informed and influential recommendations.
                        </p>
                        <p>
                           Organizing forums and dialogue conferences with decision makers: Hosting events that bring together experts and decision makers to discuss pressing issues and offer practical solutions.
                        </p>
                        <p>
                        Building strategic alliances with relevant organizations: Collaborating with research centers, human rights organizations, and other civil society organizations to enhance joint efforts to defend justice.
                        </p>
                    </section>
                    <section class="goal-section appear-animation" data-appear-animation="fadeInUp"
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
                    </section>
                </div>

            </div>

            <hr class="solid my-5">




        </div>
    </section>
@endsection
