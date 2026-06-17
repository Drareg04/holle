@extends('layouts.main')
@section('content')
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>



    <a href="/auth/authentik/redirect">Subpolygon Auth</a>
    <a href="/auth/google/redirect">Google</a>


    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
@endsection
