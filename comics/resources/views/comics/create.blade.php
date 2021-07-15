@extends('comics.layout.app')
@section('title','HomePage')
@section('content')
<div class="container">
    <div class="form-group">
        <h2>Add a new comic</h2>
        <a href="{{ route('comics.index') }}" class="go-back"> <i class="fas fa-arrow-left"></i> Go Back to Comics List</a>
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
        <div class="submit">
            <input type="submit" class="btn btn-primary" value="submit">
        </div>
        </form>
    </div>
</div>
@endsection