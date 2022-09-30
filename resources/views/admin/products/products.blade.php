@extends('layouts.app')

@section('title', 'products')
@section('content')
    <h1>Bienvenido al panel administrativo de productos</h1>
    @foreach ($products as $item)
        <h2>{{$item['title']}}</h2>
    @endforeach
@endsection