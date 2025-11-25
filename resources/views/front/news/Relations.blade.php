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
        style="background-image: url('{{ asset('front/img/home/article4.jpg') }}'); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>U.S.–Arab Relations: Why Cultural Understanding Matters More Than Ever</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Section -->
    <section class="article-section">
        <div class="container article-container">

            <!-- Article Title -->
            <h2 class="article-title">U.S.–Arab Relations: Why Cultural Understanding Matters More Than Ever</h2>

            <!-- Introduction -->
            <p class="article-intro">
                Relations between the United States and the Arab world are shaped by decades of political, economic, and
                cultural interactions. However, stereotypes, misinformation, and geopolitical tensions often distort public
                understanding on both sides. In this complex landscape, cultural understanding becomes more than a
                diplomatic goal—it becomes a necessity for peace, collaboration, and mutual respect.
            </p>

            <!-- Human Story -->
            <h2>Beyond Politics: The Human Story</h2>
            <p>Media often portrays U.S.–Arab relations through the narrow lens of conflict and crisis. Yet beneath the
                political headlines is a shared human story:</p>
            <ul class="article-list">
                <li>Families</li>
                <li>Traditions</li>
                <li>Learning</li>
                <li>Technology</li>
                <li>Innovation</li>
            </ul>
            <p>Millions of Americans of Arab descent contribute to science, medicine, education, entrepreneurship, and the
                military.</p>

            <!-- Misunderstanding -->
            <h2>Cultural Misunderstanding Fuels Fear</h2>
            <p>Misconceptions about Arab identity, Islam, and regional history lead many Americans to view the Arab world
                through a simplistic or negative lens. This lack of understanding often results in:</p>
            <ul class="article-list">
                <li>Islamophobia</li>
                <li>Racism</li>
                <li>Policy bias</li>
                <li>Social tension</li>
            </ul>

            <!-- Cultural Exchange -->
            <h2>Cultural Exchange as a Bridge</h2>
            <p>
                AMAAC supports cultural exchange programs that bring together students, artists, academics, and community
                leaders. These programs promote:
            </p>
            <ul class="article-list">
                <li>Dialogue</li>
                <li>Partnership</li>
                <li>Shared creativity</li>
                <li>Mutual respect</li>
            </ul>
            <p>When people experience each other’s culture firsthand, fear is replaced by familiarity.</p>

            <!-- Education -->
            <h2>The Role of Education</h2>
            <p>Educational institutions are powerful tools for improving understanding. AMAAC collaborates with universities
                to:</p>
            <ul class="article-list">
                <li>Support Arab studies programs</li>
                <li>Host cultural festivals</li>
                <li>Organize lectures and discussions</li>
                <li>Facilitate student exchanges</li>
            </ul>

            <!-- Path Forward -->
            <h2>The Path Forward</h2>
            <p>
                Strengthening U.S.–Arab relations requires:
            </p>
            <ul class="article-list">
                <li>Accurate media representation</li>
                <li>Investment in cultural programs</li>
                <li>Increased political understanding</li>
                <li>Public education</li>
            </ul>
            <p>
                These efforts help ensure that future generations grow up with empathy and respect—not fear and
                misunderstanding. AMAAC is committed to building the bridges necessary for a peaceful and productive future
                between the American and Arab worlds.
            </p>

        </div>
    </section>
@endsection
