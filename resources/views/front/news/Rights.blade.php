@extends('front.layout', ['home' => true, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])

@section('css')
<style>
.article-section {
    background-color: var(--primary); /* primary color */
    padding: 80px 0;
}

.article-container {
    max-width: 1000px;
    margin: 0 auto;
    background-color: var(--secondary); /* secondary color */
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
    text-shadow: 1px 1px 5px rgba(0,0,0,0.4);
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
    color: #333333; /* secondary color */
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
<section class="page-header page-header-modern page-header-background overlay overlay-color-primary overlay-show overlay-op-7" style="background-image: url('{{ asset('front/img/home/article2.jpg') }}'); background-position: center center; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Know Your Rights: A Complete Guide for Arab & Muslim Americans</h1>
            </div>
        </div>
    </div>
</section>

<!-- Article Section -->
<section class="article-section">
    <div class="container article-container">

        <!-- Article Title -->
        <h2 class="article-title">Know Your Rights: A Complete Guide for Arab & Muslim Americans</h2>

        <!-- Introduction -->
        <p class="article-intro">
            In today’s climate, understanding your rights as an Arab or Muslim American has become more essential than ever. Whether at airports, workplaces, schools, or public spaces, individuals from our communities continue to experience profiling, discrimination, and unfair treatment. Knowledge is the first layer of protection: when you know your rights, you can respond confidently and effectively.
        </p>

        <!-- Constitutional Rights -->
        <h2>Your Constitutional Rights Apply to You Fully</h2>
        <p>
            The U.S. Constitution protects all people within the country—citizens, permanent residents, visa holders, even undocumented individuals. Key rights include:
        </p>
        <ul class="article-list">
            <li>Freedom of religion</li>
            <li>Freedom of speech</li>
            <li>Equal protection under the law</li>
            <li>Right to due process</li>
            <li>Protection from unlawful searches</li>
            <li>Right to legal representation</li>
        </ul>
        <p>
            These rights cannot be taken away because of your appearance, name, religion, or country of origin.
        </p>

        <!-- Airports and Borders -->
        <h2>At Airports and Borders</h2>
        <p>
            Arabs and Muslims often face profiling at airports. Remember:
        </p>
        <ul class="article-list">
            <li>You have the right to remain silent.</li>
            <li>You can refuse to answer questions about your religion, political beliefs, or social media activity.</li>
            <li>You may be asked about your travel purpose, but you cannot be detained for refusing “religious questions.”</li>
            <li>You have the right to request a lawyer if detained.</li>
            <li>Officers cannot search your phone without a valid reason—but border rules allow certain exceptions. If uncomfortable, state clearly: “I do not consent to the search of my device.”</li>
        </ul>
        <p>AMAAC provides template responses and legal support through its advocacy network.</p>

        <!-- Workplaces -->
        <h2>In Workplaces</h2>
        <p>
            It is illegal for employers to discriminate based on religion, race, or national origin. You have the right to:
        </p>
        <ul class="article-list">
            <li>Pray during breaks</li>
            <li>Wear hijab</li>
            <li>Request reasonable accommodations</li>
            <li>Report harassment without retaliation</li>
        </ul>
        <p>AMAAC’s legal partners help community members file complaints or seek mediation when needed.</p>

        <!-- Schools -->
        <h2>In Schools</h2>
        <p>Students have the right to:</p>
        <ul class="article-list">
            <li>Wear hijab</li>
            <li>Organize Muslim student associations</li>
            <li>Ask for accommodations during Ramadan</li>
            <li>Report bullying or discrimination</li>
        </ul>
        <p>Parents may request meetings with school officials to ensure safety and respect.</p>

        <!-- Stopped by Police -->
        <h2>Stopped by Police</h2>
        <ul class="article-list">
            <li>Stay calm and polite.</li>
            <li>Ask: “Am I being detained or am I free to go?”</li>
            <li>You have the right to remain silent.</li>
            <li>You do not need to consent to searches.</li>
            <li>Record the encounter if safe to do so.</li>
        </ul>

        <!-- Reporting Hate Crimes -->
        <h2>Reporting Islamophobia and Hate Crimes</h2>
        <ul class="article-list">
            <li>Document everything</li>
            <li>Take photos</li>
            <li>Save messages or emails</li>
            <li>Report to police</li>
            <li>Contact AMAAC for support</li>
            <li>Report to civil rights organizations as backup</li>
        </ul>
        <p>
            AMAAC collects data to provide advocacy reports and strengthen protection policies.
        </p>

        <!-- Importance -->
        <h2>Why Knowing Your Rights Matters</h2>
        <p>
            Empowerment begins when individuals understand their protections. This knowledge can prevent abuses, reduce fear, and help our communities live confidently.
        </p>
        <p>
            AMAAC continues to expand its “Know Your Rights” workshops, offering in-person and online training to youth, families, and community centers.
        </p>

    </div>
</section>
@endsection
