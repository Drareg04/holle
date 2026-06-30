@extends('layouts.main')
@section('content')
    @foreach ($services as $service)
        <p>{{$service}}</p> 
    @endforeach
@endsection