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
        style="background-image: url('{{ asset('front/img/home/article6.jpg') }}'); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Strengthening Community Resilience Through Local Partnerships</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Section -->
    <section class="article-section">
        <div class="container article-container">

            <!-- Article Title -->
            <h2 class="article-title">Strengthening Community Resilience Through Local Partnerships</h2>

            <!-- Introduction -->
            <p class="article-intro">
                Strong communities are built through collaboration. For Arab and Muslim Americans, partnerships between
                mosques, community centers, NGOs, universities, and local institutions are essential for resilience,
                wellbeing, and collective empowerment.
            </p>

            <!-- Why Partnerships Matter -->
            <h2>Why Partnerships Matter</h2>
            <p>When organizations work together, they can:</p>
            <ul class="article-list">
                <li>Share resources</li>
                <li>Coordinate programs</li>
                <li>Support vulnerable families</li>
                <li>Improve outreach</li>
                <li>Engage youth effectively</li>
                <li>Advocate more powerfully</li>
            </ul>

            <!-- Partnerships with Mosques -->
            <h2>Partnerships with Mosques</h2>
            <p>Mosques serve as:</p>
            <ul class="article-list">
                <li>Spiritual centers</li>
                <li>Social hubs</li>
                <li>Emergency response points</li>
                <li>Educational spaces</li>
            </ul>
            <p>Partnering with mosques enables large-scale community reach.</p>

            <!-- NGO Collaboration -->
            <h2>NGO Collaboration</h2>
            <ul class="article-list">
                <li>Provide legal services</li>
                <li>Support refugees</li>
                <li>Offer mental health programs</li>
                <li>Organize humanitarian initiatives</li>
            </ul>
            <p>AMAAC regularly partners with local NGOs for advocacy and relief programs.</p>

            <!-- Universities as Hubs of Innovation -->
            <h2>Universities as Hubs of Innovation</h2>
            <ul class="article-list">
                <li>Research opportunities</li>
                <li>Training programs</li>
                <li>Student engagement</li>
                <li>Cultural education</li>
            </ul>
            <p>AMAAC works with campus organizations to support Arab and Muslim students.</p>

            <!-- Building a Stronger Future -->
            <h2>Building a Stronger Future</h2>
            <p>
                When communities collaborate, they become stronger, safer, and more empowered. AMAAC will continue building
                partnerships across the country to ensure that every member of our community has access to the support,
                resources, and opportunities they deserve.
            </p>

        </div>
    </section>
@endsection
