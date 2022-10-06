@extends('layouts.app')

@section('title', 'products')
@section('content')
    <h1>Bienvenido al panel administrativo de productos</h1>
    @foreach ($products as $item)
    
        <h2><a href="/products/{{$item->id}}">{{$item->name}}</a></h2>
        <h2>{{$item->category_id}}</h2>
    @endforeach
@endsection