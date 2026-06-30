@extends('layouts.seller')
@section('seller')
    <form method="post">

        {{-- style this like the client page --}}
        <label for="title">Title: </label>
        <input type="text" name="title" id="title" value="{{ $service->title }}">

        {{-- img carousel here --}}




        <label for="description">description</label>
        <textarea name="description" id="descrtiption" cols="30" rows="10">{{ $service->description }}</textarea>

        <label for="price">Price</label>
        <input type="number" name="price" id="price" step=".01" value="{{ $service->price }}">

        <label for="published">Published</label>
        <input type="checkbox" name="published" id="published">

        <button type="submit">Save</button>
    </form>
@endsection
