@extends('layouts.app')

@section('title', 'products')
@section('content')

<div class="w-screen mt-5 flex items-center justify-center">
    <div class="w-full mx-auto border">
      <!-- Title -->
      <h1 class="font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Bienvenido a  productos</h1>
      <!-- End Title -->
    </div>
</div>


<div class=" w-screen mt-5 mb-5 flex mx-auto justify-around border">
    <div class="">
        <button class="items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">
            <a href="{{route('products.create')}}">Nuevo producto</a>
        </button>
    </div>

    <div class="">
        <form method="GET" action="{{route('products.index')}}">   
            {{-- @csrf --}}
                <input type="search" name="text" id="search" class="text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                
                <button type="submit" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">Search</button>
        
        </form>
    </div>

    <div class="">
        <form action="{{route('products.search')}}" method="post">
              @csrf
                <select name="category" id="category" class="text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow">
                            <option value='empty'>--- Seleccione ---</option>
                        @foreach ($categories as $category)
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                        @endforeach
                            <option value='all'>Todas las categorías</option>
                </select>
                <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" type="submit">search</button>
        </form>
        
                
    </div>
</div>

{{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Small file input</label>
<input class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file"> --}}



<main class="mx-auto grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
    @foreach ($products as $item)
        <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
            <h4 class="text-xl text-slate-600 dark:text-slate-300 hover:underline"><a href="{{route('products.show', $item->id)}}">{{$item->name}}</a></h4>
            {{-- pinto el id de la categoria --}}
            <img src="{{$item->image}}" alt="">
            <h4>{{$item->category->name}}</h4>

            <h4 >Quantity: {{$item->stock}}</h4>
            
            
            
            <div class="flex justify-between">
                <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-blue-600 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('products.edit', $item)}}">Editar</a>

                <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-green-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('products.show', $item)}}">Ver</a>

                <form action="{{route('products.destroy', $item)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none" type="submit">Eliminar</button>
                </form>
            </div>

            
        </div>
        
    @endforeach
    
        
</main>

<div class="flex">
    <div class="mx-auto pt-5 d-flex justify-content-center">
        {!! $products->links() !!}
    </div>
</div>



    {{-- <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
        {{ $products->links() }}
    </div> --}}

    



@endsection


