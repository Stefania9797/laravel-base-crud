@extends('comics.layout.app')
@section('title','HomePage')
@section('content')
@section('content')
<div class="container">
    <div class="form-group">
        <h2>Edit comic</h2>
        <a href="{{ route('comics.index') }}" class="go-back"> <i class="fas fa-arrow-left"></i> Go Back to Comics List</a>
        <form action="{{route('comics.update' , $comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <!-- title -->
            <div class="title">
                <p>Edit title:</p>
                <input type="text" placeholder="Title" name="title" id="title" value="{{$comic->title}}">
            </div>
            <!-- series -->
            <div class="series">
                <p>Edit serie:</p>
                <input type="text" placeholder="Serie" name="series" id="series" value="{{$comic->series}}">
            </div>
            <!-- desc -->
            <div class="description">
                <p>Edit comic Description:</p>
                <textarea name="description" placeholder="Description" id="description" cols="30" rows="10">{{$comic->description}}</textarea>
            </div>
            <!-- cover -->
            <div class="form-group">
                <h4>Current Comic Cover</h4>
                <img src="{{$comic->cover}}" alt="">
            </div>
            <div class="cover">
                <p>Change cover URL:</p>
                <input type="text" placeholder="Cover URL" name="cover" id="cover" value="{{$comic->cover}}">
            </div>
            <!-- price -->
            <div class="price">
                <p>Edit price:</p>
                <input type="number" placeholder="Price" name="price" id="price" value="{{$comic -> price}}">
            </div>
            <div class="submit">
                <input type="submit" class="btn btn-primary"value="submit">
            </div>
            
        </form>
    </div>
</div>
    @endsection