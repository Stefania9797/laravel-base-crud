@extends('comics.layout.app')
@section('title','HomePage')
@section('content')
<h2>Comics List</h2>
    <a href="{{ route('create') }}">Add Comic</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale date</th>
                <th>Type</th>
            </tr>
        </thead>

        <!-- <tbody>
            @foreach($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->description }}</td>
                    <td>{{ $comic->cover}}</td>
                </tr>

            @endforeach
        </tbody> -->
    </table>
@endsection