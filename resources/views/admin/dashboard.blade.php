@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <section class="wrapper style1 special">
        <div class="inner">
            <header class="major">
                <h2>Admin Dashboard</h2>
                <p>Welcome, {{ Auth::user()->name }}!</p>
            </header>

            <ul class="features">
                <li class="icon solid fa-question-circle">
                    <h3>Manage Questions</h3>
                    <a href="{{ route('admin.questions.index') }}">View / Add / Edit Questions</a>
                </li>
                <li class="icon solid fa-users-cog">
                    <h3>Manage Users</h3>
                    <a href="{{ route('admin.users.index') }}">View Registered Users</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
