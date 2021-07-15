@extends('comics.layout.app')
@section('content')


<h2>{{$comic->title}}</h2>
<div class="container">

    <a href="{{ route('comics.index') }}" class="go-back"> <i class="fas fa-arrow-left"></i> Go Back to Comics List</a>
    <div class="comic-details">

        <div class="cover">
            <img src="{{$comic->cover}}" alt="">
        </div>
        <div class="info">
            <div class="series">
                <h4> Serie: {{$comic->series}}</h4>
            </div>
            <div class="price">
                <span> Price:{{$comic->price}} EURO</span>
            </div>
            <div class="desc">
                <p>{{ $comic->description }}</p>
            </div>
            <div class="delete">
                <form method="post" action="{{route('comics.destroy' , $comic->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection