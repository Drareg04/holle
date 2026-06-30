@extends('layouts.main')
@section('content')
    {{-- left search parameters bar --}}

    {{-- search items --}}
    @foreach ($services as $service)
        <p>{{ $service }}</p>
    @endforeach

    {{-- TODO (later) search pagination --}}
@endsection
