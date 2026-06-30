
@extends('layouts.main')
@section('styles')
    <link rel="stylesheet" href="/styles/product.css">
@endsection
@section('content')
<div class="productcontent">
    <h1>{{$service->title}}</h1>
    <a class="userinfo">
        <img src="{{$service->seller->pfp_url}}" class="profilepicture">
        <p>{{$service->seller->name}}</p>
    </a>
    <div class="middle">
        <div class="images">
            <img class="mainimage">
        </div>
        <div class="checkout">
            <div>
                <p><b>Basic</b></p>
                <p>{{$service->price}}€</p>
                <button>Continue</button>
            </div>
            <button class="contactme">Contact me</button>
        </div>
    </div>
    <h1>About this service</h1>
    <p>{{$service->description}}</p>
</div>
@endsection