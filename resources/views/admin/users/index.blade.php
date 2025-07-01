@extends('layouts.app')

@section('title', 'Manage Users')

@section('content')
    <section class="wrapper style1 special">
        <div class="inner">
            <header class="major" style="display: flex; justify-content: space-between; align-items: center;">
                <h2 style="margin: 0;">All Registered Users</h2>
                <a href="{{ route('admin.users.create') }}" class="button primary small">+ Add New User</a>
            </header>

            @if(session('success'))
                <div style="color: green; font-weight: bold; margin-top: 1rem;">{{ session('success') }}</div>
            @endif

            <div style="overflow-x: auto; margin-top: 2rem;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead style="background-color: #f0f0f0;">
                    <tr>
                        <th style="padding: 12px; border-bottom: 2px solid #ccc; color: #333;">ID</th>
                        <th style="padding: 12px; border-bottom: 2px solid #ccc; color: #333;">Name</th>
                        <th style="padding: 12px; border-bottom: 2px solid #ccc; color: #333;">Email</th>
                        <th style="padding: 12px; border-bottom: 2px solid #ccc; color: #333;">Role</th>
                        <th style="padding: 12px; border-bottom: 2px solid #ccc; color: #333;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td style="padding: 12px;">{{ $user->id }}</td>
                            <td style="padding: 12px;">{{ $user->name }}</td>
                            <td style="padding: 12px;">{{ $user->email }}</td>
                            <td style="padding: 12px;">{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                            <td style="padding: 12px;">
                                <div style="display: flex; gap: 10px;">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="button small" style="margin: 0;">Edit</a>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="margin: 0;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button small" style="background: crimson; margin: 0;">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="padding: 12px; text-align: center;">No users found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
