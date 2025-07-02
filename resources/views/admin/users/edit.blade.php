@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <section class="wrapper style1 special">
        <div class="inner" style="max-width: 900px; margin: 0 auto;">
            <header class="major">
                <h2>Edit User</h2>
            </header>

            @if ($errors->any())
                <div style="color: red; font-weight: bold;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                @csrf
                @method('PUT')

                <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
                    {{-- Left Column --}}
                    <div style="flex: 1; min-width: 280px;">
                        <div style="margin-bottom: 1rem;">
                            <label for="name">Name:</label><br>
                            <input type="text" name="name" id="name" required
                                   value="{{ old('name', $user->name) }}"
                                   style="width: 100%; padding: 0.5rem; background: white; color: black;">
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="email">Email:</label><br>
                            <input type="email" name="email" id="email" required
                                   value="{{ old('email', $user->email) }}"
                                   style="width: 100%; padding: 0.5rem; background: white; color: black;">
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="is_admin">Role:</label><br>
                            <select name="is_admin" id="is_admin"
                                    style="width: 100%; padding: 0.5rem; background: white; color: black;">
                                <option value="0" {{ !$user->is_admin ? 'selected' : '' }}>User</option>
                                <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                    </div>

                    {{-- Right Column --}}
                    <div style="flex: 1; min-width: 280px;">
                        <div style="margin-bottom: 1rem;">
                            <label for="password">New Password (optional):</label><br>
                            <input type="password" name="password" id="password"
                                   style="width: 100%; padding: 0.5rem; background: white; color: black;">
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="password_confirmation">Confirm Password:</label><br>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   style="width: 100%; padding: 0.5rem; background: white; color: black;">
                        </div>

                        <div style="margin-top: 2rem; display: flex; gap: 1rem;">
                            <button type="submit" class="button primary">Update</button>
                            <a href="{{ route('admin.users.index') }}" class="button">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
