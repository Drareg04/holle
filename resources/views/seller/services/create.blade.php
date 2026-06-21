@extends('layouts.seller')
@section('seller')
    <form action="/seller/services" method="post">
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">

        <button type="submit">Create!</button>
    </form>
@endsection
