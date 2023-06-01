@extends('layouts.app')

@section('title', 'products')
@section('content')
<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500">Bienvenido al stock de  productos</h1>
    {{-- <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('products.create')}}">Nuevo producto</a> --}}
{{-- 
    <form>   
        <div class="py-2">
            <input type="search" id="search" class=" p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>

            <button type="submit" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">Search</button>
        </div>
    </form>
    <div>
        <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @foreach($categories as $item)
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$item->name}}</label>
                    </div>
                </li>
                @endforeach
        </ul>
    </div> --}}

</header>

{{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Small file input</label>
<input class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file"> --}}



<main class="mx-auto grid w-full  gap-4 px-4 max-w-7xl sm:grid-cols-12 md:grid-cols-12">
    <div class="flex mx-auto ">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            
        @endif
        
        <form method="post" action="{{route('products.stocksUpdate')}}">
            @csrf
            @method('PATCH')
                <table class="table border flex mx-auto">
                    <thead>
                        <tr>
                            <th>Product_id</th>
                            <th>Imagen</th>
                            <th>Name</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach($products as $item)
                        <tr>
                        
                            <td><input type="hidden" name="product_id[]" value="{{$item->id}}">{{$item->id}}</td>
                            <td>Imagen</td>
                            <td>{{$item->name}}</td>
                            <td><input  type="number"  name="quantity[]" id="{{$item->id}}" value="{{old('quantities', $item->stock)}}"></td>

                        </tr>
                    @endforeach
                </tbody>
        </form>
       
      </table>
      <button type="submit" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky">
        Save changes
    </button>
      {{-- {{$products->links()}} --}}
    </div>
    

</main>




@endsection