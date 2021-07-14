@extends('comics.layout.app')
@section('title','HomePage')
@section('content')
@section('content')
<div class="form-group">
    <h2>Add a new comic</h2>
    <form action="{{route('store')}}" method="post">
        @csrf
        <!-- title -->
        <div class="title">
            <p>Add a title:</p>
            <label for="title">title</label>
            <input type="text" name="title" id="title">
        </div>
        <!-- series -->
        <div class="series">
            <p>Add a series:</p>
            <label for="series">series</label>
            <input type="text" name="series" id="series">
        </div>
        <!-- desc -->
        <div class="description">
            <p>Add a description for the comic:</p>
            <label for="description">description</label>
            <input type="text" name="description" id="description">
        </div>
        <!-- cover -->
        <div class="cover">
            <p>Add an URL for the cover of the comic:</p>
            <label for="cover">cover url</label>
            <input type="text" name="cover" id="cover">
        </div>
        <!-- price -->
        <div class="price">
            <p>Add a price:</p>
            <label for="price">price </label>
            <input type="number" name="price" id="price">
        </div>
        
        <input type="submit" value="submit">
        
    </form>
</div>
    
    <a href="{{ route('index') }}">Back to comics list</a>
@endsection