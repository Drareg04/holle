@extends('layouts.main')
@php
    $disableNavbar = true;
@endphp
@section('content')

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST">
        @csrf
        <h1>Create an account or <a href="/login">Log in</a></h1>
        <label for="uname"><b>Enter email</b></label>
        <input class="login" type="text" placeholder="Enter email" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input class="login" type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw"><b>Password confirmation</b></label>
        <input class="login" type="password" placeholder="Enter Password" name="psw2" required>

        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <button type="submit">Login</button>

        <p>or</p>

        <div class="authicons">
            <a href="/auth/authentik/redirect"><img src="/img/subpolygonlogo.png"></a>
            <a href="/auth/google/redirect"><img src="/img/googlelogo.webp"></a>
        </div>

    </form>
@endsection
