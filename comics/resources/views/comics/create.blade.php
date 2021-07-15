@extends('comics.layout.app')
@section('title','HomePage')
@section('content')
@section('content')
<div class="form-group">
    <h2>Add a new comic</h2>
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <!-- title -->
        <div class="title">
            <p>Add a title:</p>
            <input type="text" placeholder="Title" name="title" id="title">
        </div>
        <!-- series -->
        <div class="series">
            <p>Add a serie:</p>
            <input type="text" placeholder="Serie" name="series" id="series">
        </div>
        <!-- desc -->
        <div class="description">
            <p>Add a description for the comic:</p>
            <textarea name="description" placeholder="Description" id="description" cols="30" rows="10"></textarea>
        </div>
        <!-- cover -->
        <div class="cover">
            <p>Add an URL for the cover of the comic:</p>
            <input type="text" placeholder="Cover URL" name="cover" id="cover">
        </div>
        <!-- price -->
        <div class="price">
            <p>Add a price:</p>
            <input type="number" placeholder="Price" name="price" id="price">
        </div>
        
        <input type="submit" value="submit">
        
    </form>
</div>
    
    <a href="{{ route('comics.index') }}">Back to comics list</a>
@endsection