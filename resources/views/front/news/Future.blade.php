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
        style="background-image: url('{{ asset('front/img/home/article1.jpg') }}'); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>The Future of Arab & Muslim Representation in American Media</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Section -->
    <section class="article-section">
        <div class="container article-container">

            <h2 class="article-title">The Future of Arab & Muslim Representation in American Media</h2>

            <p class="article-intro">
                Over the last two decades, Arab and Muslim representation in American media has undergone noticeable
                transformation. While harmful stereotypes remain widespread, a new wave of creators, journalists,
                filmmakers, and public advocates is challenging the narrative and reshaping how Americans perceive our
                communities. As representation evolves, the role of organizations like AMAAC becomes increasingly
                critical—not only in addressing misrepresentation but in empowering authentic voices that reflect cultural
                depth, diversity, and humanity.
            </p>

            <h2>The Long Shadow of Stereotypes</h2>
            <p>
                Arab and Muslim characters have historically appeared in American media through a narrow lens—often
                portrayed as villains, threats, or symbols of backwardness. These portrayals are not harmless; they fuel
                real-world consequences:
            </p>
            <ul class="article-list">
                <li>Increased Islamophobia</li>
                <li>Racial profiling</li>
                <li>Discrimination in workplaces and schools</li>
                <li>Public fear and mistrust of our communities</li>
            </ul>
            <p>
                Research from universities and advocacy organizations shows that media misrepresentation contributes
                directly to public support for discriminatory policies, including surveillance programs, travel bans, and
                extended detention powers.
            </p>

            <h2>The Rise of a New Narrative</h2>
            <p>
                Streaming platforms and digital media have opened doors for independent content creators. Shows and films
                featuring Muslim protagonists—not as caricatures, but as human beings—are gaining mainstream traction.
                Muslim-American and Arab-American directors, comedians, and writers are gaining global followings on
                YouTube, TikTok, and Instagram.
            </p>
            <ul class="article-list">
                <li>Students and innovators</li>
                <li>Parents and entrepreneurs</li>
                <li>Neighbors and leaders</li>
                <li>Complex individuals with aspirations, struggles, and identities</li>
            </ul>
            <p>
                This shift is significant, but still at an early stage. For every positive representation, many more harmful
                tropes persist.
            </p>

            <h2>The Role of Media Literacy</h2>
            <p>
                The future of representation depends on more than just producing positive content—it also requires equipping
                communities with media literacy. Media literacy helps people:
            </p>
            <ul class="article-list">
                <li>Understand how bias is created</li>
                <li>Identify inaccurate narratives</li>
                <li>Respond constructively</li>
                <li>Produce better stories</li>
            </ul>
            <p>
                AMAAC’s media literacy initiative seeks to train youth, activists, and community organizations on how to
                challenge harmful narratives and contribute to informed storytelling. Workshops focus on analyzing news
                framing, understanding political agendas, and preparing spokespeople to appear confidently in interviews or
                debates.
            </p>

            <h2>Building Representation from Within</h2>
            <p>
                One of the most effective ways to change the narrative is to increase the number of Arabs and Muslims
                working inside the media industry. This includes:
            </p>
            <ul class="article-list">
                <li>Journalists</li>
                <li>Editors</li>
                <li>Scriptwriters</li>
                <li>Producers and directors</li>
                <li>Illustrators and digital content creators</li>
            </ul>
            <p>
                AMAAC advocates for inclusive hiring in major newsrooms and creative industries. We also encourage young
                members of our community to pursue journalism, film, and communication degrees.
            </p>

            <h2>From Consumers to Creators</h2>
            <p>
                Representation must evolve from reaction to creation. Instead of only responding to misrepresentation, Arab
                and Muslim Americans should actively tell their own stories—stories of resilience, humor, intellect, and
                cultural beauty.
            </p>
            <p>
                AMAAC supports creators through mentorship networks, production grants, media partnerships, and training
                programs.
            </p>

            <h2>A Future Built on Authenticity</h2>
            <p>
                The future of Arab and Muslim representation in American media is moving toward authenticity. The goal is
                not to glorify or sanitize, but to reflect reality: a community full of talent, diversity, and complexity.
            </p>
            <p>
                With continued advocacy, support for creative voices, and strategic partnerships, we can ensure that our
                stories are no longer told about us, but by us. And through that shift, understanding and respect will
                grow—not only on screens, but across society.
            </p>

        </div>
    </section>
@endsection
