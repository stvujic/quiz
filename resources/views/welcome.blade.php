@extends('layouts.app')

@section('title', 'PHP/Laravel tests')

@section('content')

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2>PHP & Laravel Interview Practice</h2>
            <p>Your go-to platform to sharpen your backend skills and<br />
                confidently prepare for developer interviews.</p>
            <ul class="actions special">
                <li><a href="{{ route('login') }}" class="button primary">Login</a></li>
                <li><a href="{{ route('register') }}" class="button primary">Register</a></li>
            </ul>
        </div>
        <a href="#one" class="more scrolly">Learn More</a>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style1 special">
        <div class="inner">
            <header class="major">
                <h2>Why use this platform?</h2>
                <p>This quiz app is tailored for developers preparing for technical interviews involving PHP, Laravel, MySQL, and OOP.<br />
                    Learn through curated questions, track your progress, and suggest new ones.</p>
            </header>
            <ul class="icons major">
                <li><span class="icon fa-gem major style1"><span class="label">Smart Questions</span></span></li>
                <li><span class="icon fa-heart major style2"><span class="label">Community Driven</span></span></li>
                <li><span class="icon solid fa-code major style3"><span class="label">Code Focused</span></span></li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper alt style2">
        <section class="spotlight">
            <div class="image"><img src="{{ asset('assets/images/pic01.jpg') }}" alt="" /></div>
            <div class="content">
                <h2>Take realistic quizzes</h2>
                <p>Each test simulates real-world questions asked in developer interviews. Practice by topic or go through full mock interviews to assess your readiness.</p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image"><img src="{{ asset('assets/images/pic02.jpg') }}" alt="" /></div>
            <div class="content">
                <h2>Suggest and contribute</h2>
                <p>Registered users can propose new questions to help improve the question pool and support fellow developers in their learning journey.</p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image"><img src="{{ asset('assets/images/pic03.jpg') }}" alt="" /></div>
            <div class="content">
                <h2>Track your progress</h2>
                <p>Every test result is saved in your profile. See how you improve over time and focus on the areas where you need the most practice.</p>
            </div>
        </section>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="inner">
            <header class="major">
                <h2>What makes it different?</h2>
                <p>This is not just another quiz app. It’s a developer-built tool designed to help you prepare faster and better by focusing on what really matters.</p>
            </header>
            <ul class="features">
                <li class="icon fa-paper-plane">
                    <h3>Interview Prep</h3>
                    <p>Content based on real technical interviews. You’ll face questions companies actually ask.</p>
                </li>
                <li class="icon solid fa-laptop">
                    <h3>Topic Filtering</h3>
                    <p>Choose between topics like Laravel, PHP OOP, Validation, Routing, and MySQL.</p>
                </li>
                <li class="icon solid fa-code">
                    <h3>Code Examples</h3>
                    <p>Many questions come with practical code examples or require reading PHP snippets.</p>
                </li>
                <li class="icon solid fa-headphones-alt">
                    <h3>Built by Devs</h3>
                    <p>Created by developers for developers. We know what helps — and what doesn’t.</p>
                </li>
                <li class="icon fa-heart">
                    <h3>Community Focus</h3>
                    <p>Everyone can contribute by suggesting questions and helping improve the content.</p>
                </li>
                <li class="icon fa-flag">
                    <h3>Stats & Feedback</h3>
                    <p>See how well you’re doing, question by question, and leave feedback on any item.</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper style4">
        <div class="inner">
            <header>
                <h2>Start testing your skills</h2>
                <p>Ready to find out how well you really know Laravel and PHP?<br />
                    Create your account or jump right into a quiz and see where you stand.</p>
            </header>
            <ul class="actions stacked">
                <li><a href="#" class="button fit primary">Get Started</a></li>
                <li><a href="#one" class="button fit">Features</a></li>
            </ul>
        </div>
    </section>

@endsection
