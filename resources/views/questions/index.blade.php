@extends('layouts.app')

@section('title', 'All Questions')

@section('content')
    <section class="wrapper">
        <div class="inner">
            <header class="major">
                <h2>All Questions</h2>
            </header>

            @foreach ($questions as $question)
                <div class="box">
                    <h3>{{ $question->question_text }}</h3>
                    <p><strong>Category:</strong> {{ $question->category->name ?? 'Uncategorized' }}</p>
                    <p><strong>Type:</strong> {{ $question->question_type }}</p>
                    <p><strong>Difficulty:</strong> {{ ucfirst($question->difficulty) }}</p>

                    <ul>
                        @foreach ($question->answers as $answer)
                            <li>
                                {{ $answer->answer_text }}
                                @if ($answer->is_correct)
                                    <strong>(Correct)</strong>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

        </div>
    </section>
@endsection
