@extends('layouts.app')

@section('title', 'roles')
@section('content')
    <div class="px-6 py-4 space-y-2 text-center">
        <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Bienvenido podra ver el role </h1>
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('roles.index')}}">Volver</a>
    </div>
    
    <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow h-96 dark:bg-slate-800">
        <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">{{$role->name}}</h2>
        <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">{{$role->id}}</h2>
        {{-- <h2>{{$product->image}}</h2> --}}

        <div class="flex justify-around">
            <h2 class="font-serif text-slate-600 dark:text-slate-400 mr-2">Full-Access</h2>
            <div class="form-check form-check-inline mr-2">
              <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 fous:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left  cursor-pointer" type="radio" name="full-access" id="fullaccessyes" value="yes" disabled
              @if($role['full-access'] == "yes")
                checked
              @elseif(old('full-access')== "yes")
                checked 
              @endif
              >
              <label class="form-check-label inline-block font-serif text-slate-600 dark:text-slate-400 mr-2" for="fullaccessyes">yes</label>
            </div>
            <div class="form-check form-check-inline mr-2">
              <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" type="radio" name="full-access" id="fullaccessno" value="no" disabled
              @if($role['full-access'] == "no")
                checked
              @elseif(old('full-access')== "no")
                checked 
              @endif
              >
              <label class="form-check-label inline-block font-serif text-slate-600 dark:text-slate-400 " for="fullaccessno">no</label>
            </div>
            
        </div>




        <h2 class="font-serif text-slate-600 dark:text-slate-400 mr-2">Permission List</h2>
        @foreach($permissions as $permission)
        <div class="form-check mr-2">
            <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left  cursor-pointer" type="checkbox" name="permission[]" id="permission_{{$permission->id}}" value="{{$permission->id}}" disabled
            
            @if(is_array(old('permission')) && in_array("$permission->id", old('permission')) )
              checked

            @elseif(is_array($permission_role) && in_array("$permission->id", $permission_role) )
              checked
            @endif

            >
            <label class="form-check-label inline-block font-serif text-slate-600 dark:text-slate-400 " for="">{{$permission->name}} - {{$permission->description}}</label>
          </div>
        @endforeach
    </div>

    
    
    
@endsection