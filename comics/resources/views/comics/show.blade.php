@extends('comics.layout.app')
@section('content')


<h2> Comic Details</h2>
<div class="container">

    <a href="{{ route('comics.index') }}">Back to Comics List</a>
    <div class="cover">
        <img src="{{$comic->cover}}" alt="">
    </div>
    <div class="title">
        <h2>{{$comic->title}}</h2>
    </div>
    <div class="series">
        <h4> Serie: {{$comic->series}}</h4>
    </div>
    <div class="price">
        <span> Price:{{$comic->price}} EURO</span>
    </div>
    <div class="desc">
        <p>{{ $comic->description }}</p>
    </div>
</div>
@endsection