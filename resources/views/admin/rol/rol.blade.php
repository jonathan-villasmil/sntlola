@extends('layouts.app')

@section('title', 'rol')
@section('content')
    <h1>Bienvenido al panel administrativo de los roles</h1>
    @foreach ($roles as $item)
        <h2>{{$item['title']}}</h2>
        
    @endforeach
@endsection