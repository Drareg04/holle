@extends('layouts.main')

@section('content')
    <div class="settings">
        <h1>Settings TODO CSS</h1>
        <ul>
            <li><a href="/settings">Account</a></li>
            <li><a href="/settings/seller">Become seller</a></li>

            {{-- <li><a href="/admin/users">Users</a></li>
            <li><a href="/">Back to home</a></li> --}}
        </ul>
    </div>

    {{-- i want it to look like an old ipad settings, menu on the left, page on the right --}}
    @yield('settings')
@endsection
