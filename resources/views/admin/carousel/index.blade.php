@extends('layouts.admin')
@section('admin')
    <h3>Main page carousel images:</h3>

    <a href="/admin/carousel/create">Create</a>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <table>
        <tr>
            <th>ID</th>
            <th>href</th>
            <th>img</th>
            <th>enabled</th>
            <th>link</th>
        </tr>

        @foreach ($carouselImgs as $carousel)
            <tr>
                <td>{{ $carousel->id }}</td>
                <td>{{ $carousel->id }}</td>
                <td>{{ $carousel->id }}</td>
                <td>{{ $carousel->id }}</td>
                <td><a href="{{ $carousel->id }}">Edit</a></td>
            </tr>
        @endforeach


    </table>
@endsection
