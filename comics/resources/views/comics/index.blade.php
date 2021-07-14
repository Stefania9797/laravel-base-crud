@extends('comics.layout.app')
@section('title','HomePage')
@section('content')
<h2>Comics List</h2>
    <a href="{{ route('create') }}">Add Comic</a>
@endsection