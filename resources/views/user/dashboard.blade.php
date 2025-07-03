@extends('layouts.app')

@section('title', 'My Dashboard')

@section('content')
    <section class="wrapper style1 special">
        <div class="inner">
            <header class="major">
                <h2>Welcome, {{ $user->name }}</h2>
                <p>Select how you'd like to review your questions</p>
            </header>

            <ul class="features">
                <li class="icon solid fa-list">
                    <h3>All Questions</h3>
                    <a href="#">View All</a>
                </li>
                <li class="icon solid fa-random">
                    <h3>Uncategorized & New</h3>
                    <a href="#">Start Reviewing</a>
                </li>
                <li class="icon solid fa-check-circle">
                    <h3>Questions I Know</h3>
                    <a href="#">Review Known</a>
                </li>
                <li class="icon solid fa-redo">
                    <h3>Questions to Repeat</h3>
                    <a href="#">Repeat Later</a>
                </li>
                <li class="icon solid fa-times-circle">
                    <h3>Questions I Don’t Know</h3>
                    <a href="#">Review Unknown</a>
                </li>
                <li class="icon solid fa-edit">
                    <h3>Suggest Question</h3>
                    <a href="#">New Suggestion</a>
                </li>

            </ul>
        </div>
    </section>
@endsection
