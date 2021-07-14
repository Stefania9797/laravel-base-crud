@extends('comics.layout.app')
@section('title','HomePage')
@section('content')
@section('content')

    <form action="{{route('store')}}" method="post">
        @csrf
        <!-- title -->
        <label for="title">title</label>
        <input type="text" name="title" id="title">
        <!-- series -->
        <label for="series">series</label>
        <input type="text" name="series" id="series">
        <!-- desc -->
        <label for="description">description</label>
        <input type="text" name="description" id="description">
        <!-- cover -->
        <label for="cover">cover url</label>
        <input type="text" name="cover" id="cover">
        <!-- price -->
        <label for="price">price </label>
        <input type="number" name="price" id="price">

        <input type="submit" value="submit">

    </form>

    <a href="{{ route('index') }}">Back to comics list</a>
@endsection