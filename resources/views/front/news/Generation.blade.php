@extends('front.layout', ['home' => true, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])

@section('css')
    <style>
        .article-section {
            background-color: var(--primary);
            /* primary color */
            padding: 80px 0;
        }

        .article-container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: var(--secondary);
            /* secondary color */
            border: 3px solid var(--primary);
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .page-header {
            padding: 120px 0 60px;
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary);
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
        }

        .article-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            color: var(--primary);
            margin-bottom: 30px;
        }

        .article-intro,
        .article-section p,
        .article-section li {
            font-size: 1.1rem;
            color: #333333;
            /* secondary color */
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .article-section h2 {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--primary);
            margin-top: 50px;
        }

        .article-list {
            list-style-type: disc;
            padding-left: 25px;
        }

        @media (max-width: 991px) {
            .article-container {
                padding: 30px 20px;
            }

            .article-title {
                font-size: 2rem;
            }

            .article-section h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 575px) {
            .article-container {
                padding: 20px 15px;
            }

            .article-title {
                font-size: 1.75rem;
            }

            .article-section h2 {
                font-size: 1.25rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Page Header -->
    <section
        class="page-header page-header-modern page-header-background overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/article3.jpg') }}'); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Youth Leadership: How the Next Generation Is Redefining Civic Engagement</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Section -->
    <section class="article-section">
        <div class="container article-container">

            <!-- Article Title -->
            <h2 class="article-title">Youth Leadership: How the Next Generation Is Redefining Civic Engagement</h2>

            <!-- Introduction -->
            <p class="article-intro">
                Across the United States, a remarkable shift is taking place: young Arab and Muslim Americans are stepping
                into leadership roles with courage, creativity, and a renewed sense of purpose. From city councils to
                university associations, from digital campaigns to grassroots organizing, youth are redefining what civic
                engagement looks like in our communities.
            </p>

            <!-- New Generation -->
            <h2>A New Generation with New Tools</h2>
            <p>Today’s youth are more connected than any generation before. With social media, online advocacy, and digital
                platforms, they can:</p>
            <ul class="article-list">
                <li>Mobilize communities within hours</li>
                <li>Document injustice instantly</li>
                <li>Launch national campaigns</li>
                <li>Collaborate with peers globally</li>
            </ul>
            <p>This technological fluency allows young leaders to amplify issues that older generations struggled to
                publicize.</p>

            <!-- Breaking Stereotypes -->
            <h2>Breaking Stereotypes Through Leadership</h2>
            <p>
                Arab and Muslim youth often face stereotypes portraying them as passive, isolated, or disengaged. In
                reality, they are among the most active and socially aware groups in America. They volunteer, vote, organize
                events, and challenge harmful narratives.
            </p>
            <p>Through AMAAC’s Youth Civic Leadership Fellowship, young participants:</p>
            <ul class="article-list">
                <li>Attend workshops on public speaking and policy</li>
                <li>Meet local officials and advocacy experts</li>
                <li>Learn how to organize community campaigns</li>
                <li>Build networks with peers and mentors</li>
                <li>Participate in real advocacy projects</li>
            </ul>

            <!-- Identity as Strength -->
            <h2>Identity as Strength</h2>
            <p>
                For many youth, civic engagement is tied to identity. Being Arab or Muslim is not a barrier but a source of
                strength—an identity rooted in justice, compassion, and service to others.
            </p>
            <p>Young leaders are embracing that identity with pride, using it to fuel their activism in areas such as:</p>
            <ul class="article-list">
                <li>Civil rights</li>
                <li>Mental health</li>
                <li>Education</li>
                <li>Environmental justice</li>
                <li>Refugee support</li>
            </ul>

            <!-- Real Stories -->
            <h2>Real Stories of Impact</h2>
            <p>
                From high-school students organizing Ramadan awareness days, to university leaders defending the rights of
                marginalized groups, young people are proving that age is not a limitation.
            </p>
            <p>
                AMAAC plans to highlight these stories regularly to inspire the next generation.
            </p>

            <!-- Building Pathways -->
            <h2>Building Pathways to Leadership</h2>
            <p>To support youth, AMAAC is developing:</p>
            <ul class="article-list">
                <li>Leadership academies</li>
                <li>Mentorship networks</li>
                <li>Policy internships</li>
                <li>Workshops in debate and advocacy</li>
            </ul>
            <p>
                The future of our community depends on empowering the next generation with knowledge, confidence, and
                opportunities. Youth are not waiting for permission—they are leading now. AMAAC is committed to supporting
                them every step of the way.
            </p>

        </div>
    </section>
@endsection
