@extends('layouts.app')

@section('title', 'users')
@section('content')
    <div class="px-6 py-4 space-y-2 text-center">
        <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Bienvenido a {{$user->name}}</h1>
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('users.index')}}">Volver</a>
    </div>
    
    <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow h-96 dark:bg-slate-800">
        <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">{{$user->name}}</h2>
        <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">{{$user->email}}</h2>
        <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">{{$user->id}}</h2>
        {{-- <h2>{{$product->image}}</h2> --}}
    </div>
    
    
@endsection