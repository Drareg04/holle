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
    <div id="body">
        <div>
            <a class="bigcenterlogo" href="/">
                    <img src="/img/Holle logo.png">
                    <h1>HOLLE</h1>
            </a>
        </div>
        <div>
            <form method="POST">
                @csrf
                <h1>Sign in or <a href="/signup">create an account</a></h1>
                <label for="uname"><b>Enter email</b></label>
                <input class="login" type="text" placeholder="Enter email" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input class="login" type="password" placeholder="Enter Password" name="psw" required>
                <label style="margin: -4vh 0 4vh 0">
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <button type="submit">Login</button>


                <div class="authicons">
                    <a href="/auth/authentik/redirect"><img src="/img/subpolygonlogo.png"></a>
                    <a href="/auth/google/redirect"><img src="/img/googlelogo.webp"></a>
                </div>
                <p class="tiny">By continuing, you agree to Holle's Terms of Use and Privacy Policy</p>
            </form>
        </div>
    </div>
@endsection
