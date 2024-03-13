@extends('master')

@section('content')

<h2> ajouter une clinique </h2>

<form action="{{ route('store') }}" method="POST">

    {{ csrf_field() }}

    <input type="text" name="title">
    <input type="text" name="slug">
    <input type="text" name="description">
    <input type="text" name="page">
    <button type="submit">valider</button>
</form>



@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


@stop