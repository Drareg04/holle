@extends('layouts.seller')
@section('seller')
    <a href="/seller/services/create">Add new</a>
    <table>
        <tr>
            <th>Title</th>
            <th>Views</th>
            <th>Price</th>
            <th>link</th>
        </tr>

        @foreach ($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>0</td>
                <td>{{ $service->price / 100 }}</td>
                <td><a href="/admin/user/{{ $service->id }}">Edit</a></td>
            </tr>
        @endforeach


    </table>
@endsection
