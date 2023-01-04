@extends('layouts.app')

@section('title', 'users')
@section('content')
<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500">Bienvenido al panel administrativo de usuarios</h1>
     <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('users.create')}}">Nuevo Usuario</a>
</header>

<main class="mx-auto grid w-full  gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
    @foreach ($users as $item)
   {{-- {{dd($users)}} --}}
    <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
        <h4 class="text-xl text-slate-600 dark:text-slate-300 hover:underline"><a href="{{route('users.show', $item->id)}}">{{$item->name}}</a></h4>
        {{-- pinto el id de la categoria --}}
        <h4>Email: {{$item->email}}</h4>
        <h4>Item_Id: {{$item->id}}</h4>
        <h4>Role:
            @isset( $item->roles[0]->name )
                {{ $item->roles[0]->name}}
            @endisset
        </h4>
        <div class="flex justify-between">
            <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-blue-600 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('users.edit', $item)}}">Editar</a>

            <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-green-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('users.show', $item)}}">Ver</a>

            <form action="{{route('users.destroy', $item)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none" type="submit">Eliminar</button>
            </form>
        </div>
    </div>
        
    @endforeach
</main>
    


    
        
@endsection