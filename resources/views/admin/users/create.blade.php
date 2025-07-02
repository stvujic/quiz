@extends('layouts.app')

@section('title', 'Add New User')

@section('content')
    <section class="wrapper style1 special">
        <div class="inner" style="max-width: 900px; margin: 0 auto;">
            <header class="major">
                <h2>Add New User</h2>
            </header>

            @if ($errors->any())
                <div style="color: red; font-weight: bold; margin-bottom: 1rem;">
                    <ul style="margin: 0; padding-left: 1.2rem;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.users.store') }}" autocomplete="off">
                @csrf

                <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
                    {{-- Left Column --}}
                    <div style="flex: 1; min-width: 280px;">
                        <div style="margin-bottom: 1rem;">
                            <label for="name">Name:</label><br>
                            <input type="text" name="name" id="name" required
                                   style="width: 100%; padding: 0.5rem; background: white; color: black; border: 1px solid #ccc; border-radius: 4px;">
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="email">Email:</label><br>
                            <input type="email" name="email" id="email" required
                                   style="width: 100%; padding: 0.5rem; background: white; color: black; border: 1px solid #ccc; border-radius: 4px;" autocomplete="off">
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="is_admin">Role:</label><br>
                            <select name="is_admin" id="is_admin"
                                    style="width: 100%; padding: 0.5rem; background: white; color: black; border: 1px solid #ccc; border-radius: 4px;">
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>

                        <div style="margin-top: 1.5rem; display: flex; gap: 1rem;">
                            <button type="submit" class="button primary" style="padding: 0.6rem 1.2rem;">Create User</button>
                            <a href="{{ route('admin.users.index') }}" class="button" style="padding: 0.6rem 1.2rem;">Cancel</a>
                        </div>
                    </div>

                    {{-- Right Column --}}
                    <div style="flex: 1; min-width: 280px;">
                        <div style="margin-bottom: 1rem;">
                            <label for="password">Password:</label><br>
                            <input type="password" name="password" id="password" required
                                   style="width: 100%; padding: 0.5rem; background: white; color: black; border: 1px solid #ccc; border-radius: 4px;" autocomplete="new-password">
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="password_confirmation">Confirm Password:</label><br>
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                   style="width: 100%; padding: 0.5rem; background: white; color: black; border: 1px solid #ccc; border-radius: 4px;" autocomplete="new-password">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
