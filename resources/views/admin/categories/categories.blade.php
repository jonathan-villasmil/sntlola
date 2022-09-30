@extends('layouts.app')

@section('title', 'categories')
@section('content')
    <h1>Bienvenido al panel administrativo de las categories</h1>
    @foreach ($categories as $item)
        <h2>{{$item['title']}}</h2>
    @endforeach
@endsection