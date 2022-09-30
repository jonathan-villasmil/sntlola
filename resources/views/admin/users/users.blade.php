@extends('layouts.app')

@section('title', 'users')
@section('content')
    <h1>Bienvenido al panel administrativo de usuarios</h1>
    @foreach ($users as $item)
        <h2>{{$item['title']}}</h2>
    @endforeach
@endsection