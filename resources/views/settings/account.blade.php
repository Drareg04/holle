@extends('layouts.settings')
@section('settings')
    <form method="post" enctype="multipart/form-data">
        <p>general user settings</p>
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{ $user->username }}">
        <br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <br>
        <img src="{{$user->pfp_url}}" alt="Profile picture">
        <br>
        <label for="pfp">Profile Picture (upload to change)</label>
        <input type="file" name="pfp" id="pfp">
        <br>
        <input type="submit" value="Save">
    </form>
@endsection
