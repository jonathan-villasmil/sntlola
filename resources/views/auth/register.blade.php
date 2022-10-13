@extends('layouts.app')

@section('title', 'register')
@section('content')
    <div class="px-6 py-4 space-y-2 text-center">
        <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Register</h1>
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('login')}}">Login</a>
    </div>
    
    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{route('register')}}" method="POST">
        @csrf
        {{-- @include('/admin/categories.form-fields') --}}
        <div class="space-y-4">
            <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Name
                <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" autofocus="autofocus" type="text" name="name" id="" value="{{old('name')}}">
                
                @error('name')
                   <small  class="font-bold text-red-500/80">{{$message}}</small>
                @enderror

            </label>
            
            <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Email
                <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="email" type="email" value="{{old('email')}}">

                @error('Email')
                   <small  class="font-bold text-red-500/80">{{$message}}</small>
                @enderror
                
            </label>
            
            <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Password
                <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400 mb-4" type="password" name="password" id="" value="">

                @error('password')
                   <small  class="font-bold text-red-500/80">{{$message}}</small>
                @enderror

            </label>

            <label class="flex flex-col font-serif text-slate-600 dark:text-slate-400" for="">Password Confirmation
                <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400 mb-4" type="password" name="password_confirmation" id="" value="">

                @error('password_confirmation')
                   <small  class="font-bold text-red-500/80">{{$message}}</small>
                @enderror

            </label>
            
        </div>
        <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-green-800 hover:bg-green-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Register</button>
    </form>
@endsection

