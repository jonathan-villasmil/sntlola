@extends('layouts.app')

@section('title', 'questions-products')
@section('content')

<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500">Bienvenido te queremos hacer unas preguntas</h1>
 
        <div class=" flex flex-col items-center text-xl font-medium text-gray-900  border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @foreach($questions as $item)
                <ul class=" py-2 px-8 rounded-lg shadow-md">
                    <li class="mb-2">
                        <div class="font-semibold">{{$item}}</div>
                            
                            <button type="button" class=" px-4 py-2 font-semibold hover:bg-blue-400 text-md bg-blue-500 hover:text-dark text-white rounded-full shadow-sm">si</button>
                            <button type="button" class=" px-4 py-2 font-semibold hover:bg-red-400 text-md bg-red-500 hover:text-dark text-white rounded-full shadow-sm">no</button>
                        
                    </li>
                </ul>

            @endforeach
            
        </div>

        



   




</header>


@endsection