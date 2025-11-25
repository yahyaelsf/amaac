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
        style="background-image: url('{{ asset('front/img/home/article5.jpg') }}'); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Combating Islamophobia: Practical Steps for Communities & Allies</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Section -->
    <section class="article-section">
        <div class="container article-container">

            <!-- Article Title -->
            <h2 class="article-title">Combating Islamophobia: Practical Steps for Communities & Allies</h2>

            <!-- Introduction -->
            <p class="article-intro">
                Islamophobia continues to impact Arab and Muslim communities in the United States, affecting safety, mental
                health, economic opportunity, and social inclusion. Combating this problem requires a united effort from
                individuals, communities, institutions, and allies.
            </p>

            <!-- Understanding Islamophobia -->
            <h2>Understanding Islamophobia</h2>
            <p>Islamophobia is not simply prejudice—it is a systemic problem fueled by:</p>
            <ul class="article-list">
                <li>Media stereotypes</li>
                <li>Political rhetoric</li>
                <li>Lack of education</li>
                <li>Misrepresentation of Islam</li>
                <li>Fear-based propaganda</li>
            </ul>
            <p>This leads to verbal harassment, workplace discrimination, school bullying, and even violent attacks.</p>

            <!-- Practical Steps for Individuals -->
            <h2>Practical Steps for Individuals</h2>
            <ul class="article-list">
                <li><strong>Document Incidents:</strong> Write down what happened, save screenshots, and take photos.</li>
                <li><strong>Report Harassment:</strong> Notify authorities, schools, or employers. AMAAC also receives
                    anonymous reports.</li>
                <li><strong>Know Your Rights:</strong> Understanding legal rights helps individuals respond with confidence.
                </li>
            </ul>

            <!-- Schools & Universities -->
            <h2>For Schools & Universities</h2>
            <ul class="article-list">
                <li>Address anti-Muslim bullying</li>
                <li>Train staff on cultural sensitivity</li>
                <li>Provide safe reporting channels</li>
                <li>Celebrate cultural diversity</li>
                <li>Accommodate religious practices</li>
            </ul>
            <p>AMAAC provides “Safe Campus” toolkits to support educational institutions.</p>

            <!-- Workplaces -->
            <h2>For Workplaces</h2>
            <ul class="article-list">
                <li>Offering diversity training</li>
                <li>Protecting employees from harassment</li>
                <li>Supporting religious accommodation</li>
                <li>Building inclusive HR policies</li>
            </ul>

            <!-- The Role of Allies -->
            <h2>The Role of Allies</h2>
            <ul class="article-list">
                <li>Speak up when witnessing discrimination</li>
                <li>Amplify Muslim voices</li>
                <li>Share accurate information</li>
                <li>Participate in community events</li>
                <li>Support advocacy organizations</li>
            </ul>

            <!-- AMAAC’s Multi-Level Approach -->
            <h2>AMAAC’s Multi-Level Approach</h2>
            <ul class="article-list">
                <li>Legal support</li>
                <li>Media advocacy</li>
                <li>Youth empowerment</li>
                <li>Community training</li>
                <li>Government engagement</li>
                <li>Research and reporting</li>
            </ul>
            <p>By combining these approaches, we address the problem at its root and help create a safer, more inclusive
                society.</p>

        </div>
    </section>
@endsection
