@extends('comics.layout.app')
@section('title','HomePage')
@section('content')
<h2>Comics List</h2>
<div class="container">
        <a href="{{ route('comics.create') }}" class="add">Add Comic</a>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Series</th>
                    <th>Description</th>
                    <th>Cover</th>
                    <th>Price</th>
                    <th>View</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->description }}</td>
                    <td><img src="{{ $comic->cover}}" alt=""></td>
                    <td>{{ $comic->price }} EURO</td>
                    <td><a href="{{ route('comics.show', $comic->id ) }}">View</a></td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
        @endsection