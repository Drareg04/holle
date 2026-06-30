@extends('layouts.main')
{{-- @php
    $disableNavbar = true;
@endphp --}}
@section('content')
    <h1>Holle Seller</h1>
    {{-- same style as settings, left stuck bar but shaped differently --}}
    <ul>
        <li><a href="/seller">Dash</a></li>
        <li><a href="/seller/services">Services</a></li>
        <li><a href="/seller/Orders">Orders</a></li>
        <li><a href="/seller">A third button because i feel like it</a></li>
        <li><a href="/">Back to home</a></li>
    </ul>
    @yield('seller')
@endsection
