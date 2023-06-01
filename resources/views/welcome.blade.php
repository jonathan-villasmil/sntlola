@extends('layouts.app')

@section('title', 'home')
@section('content')
<div class="relative overflow-hidden ">  
                
    <div class="mx-auto max-w-7xl border ">
        
            <div class="relative z-10  pb-8 sm:pb-16 md:pb-20 lg:w-full lg:max-w-2xl lg:pb-28 xl:pb-32">
            
                {{-- <svg class="absolute inset-y-0 right-0 hidden h-full w-48 translate-x-1/2 transform text-white lg:block" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg> --}}
                
                {{-- Container navbar menu responsive --}}
                {{-- <div>

                    <!-- navbar menu  -->
                    <div class="relative px-4 py-6 sm:px-6 lg:px-8 border">
        
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                            <div class="flex flex-shrink-0 flex-grow items-center lg:flex-grow-0">
                                <div class="flex h-20 w-full items-center justify-between md:w-auto border">
                                    <a href="#">
                                        <span class="sr-only">SantaLola</span>
                                            <img alt="Santa lola" class="h-10 w-auto sm:h-20 "src="https://impcan.s3.amazonaws.com/uploads/company/logo_small/84/m_impcan.jpg">
                                    </a>
                                    <div class="-mr-2 flex items-center md:hidden">
                                        <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                                            <span class="sr-only">Open main menu</span>
                            
                                            <!-- Heroicon name: outline/bars-3 -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden md:ml-10 md:block md:space-x-8 md:pr-4">
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Badalona</a>
                
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Santa Coloma</a>
                
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Carta</a>
                
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Reservas</a>
                
                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Equipo</a>
                                @if (Route::has('login'))
                                    
                                        @auth
                                            <a href="{{ url('/home') }}" class="font-medium text-gray-500 hover:text-gray-900">Home</a>
                                            @else
                                            <a href="{{ route('login') }}" class="font-medium text-gray-500 hover:text-gray-900">Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="font-medium text-gray-500 hover:text-gray-900">Register</a>
                                            @endif
                                        @endauth
                                    
                                @endif
                                
                
                                <!-- <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Log in</a> -->
                            </div>
                        </nav>
                    
                    </div>
                    <!-- navbar menu  -->

            
                    <!--Mobile menu, show/hide based on menu open state.
            
                        Entering: "duration-150 ease-out"
                        From: "opacity-0 scale-95"
                        To: "opacity-100 scale-100"
                        Leaving: "duration-100 ease-in"
                        From: "opacity-100 scale-100"
                        To: "opacity-0 scale-95"
                    -->
                    <div class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
                        <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                            <div class="flex items-center justify-between px-5 pt-4">
                                <div>
                                    <img class="h-14 w-auto" src="https://impcan.s3.amazonaws.com/uploads/company/logo_small/112/m_impcan.jpg" alt="">
                                </div>

                                <div class="-mr-2">
                                    <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close main menu</span>
                                        <!-- Heroicon name: outline/x-mark -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="space-y-1 px-2 pt-2 pb-3">
                                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Badalona</a>
    
                                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Santa Coloma</a>
    
                                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Carta</a>
    
                                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Reservas</a>
    
                                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Equipo</a>

                                @if (Route::has('login'))
                        
                                    @auth

                                    <a href="{{ url('/home') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Home</a>
                                
                                @else
                                
                                    <a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Log in</a>


                                @if (Route::has('register'))
                                
                                    <a href="{{ route('register') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Register</a>
                                
                                @endif

                                    @endauth
                        
                                @endif
                            </div>
                            <!-- <a href="#" class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 hover:bg-gray-100">Log in</a> -->
                        </div>
                    </div>
    
                </div> --}}
                {{-- Container navbar menu responsive --}}
                
                
                {{-- Container down menu --}}
                <main class="mx-auto mt-10 max-w-7xl px-4 border border-dark bg-transparent sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Gastro-Burguer</span>
                        <span class="block text-indigo-600 xl:inline">Restaurante SantaLola</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0">SANTIFICADA SEA LA BRASA SANTA LOLA es un concepto casual food que busca ofrecer comida fresca y de calidad elaborada diariamente para nuestros clientes. Hamburguesas 100% de ternera y de proximidad.Patatas cortadas a mano diariamente Rebozados caseros y sin trigo!! Todas nuestras carnes y pescados están hechas en nuestro horno de carbón JOSPER y gracias a él conseguimos ese sabor tan especial e inconfundible de la comida a la brasa. Nuestro lema...</p>
                        <p class="text-base text-dark-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0">COMIDA DIVINA, PARA GENTE DIVINA</p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg">Get started</a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-100 px-8 py-3 text-base font-medium text-indigo-700 hover:bg-indigo-200 md:py-4 md:px-10 md:text-lg">Live demo</a>
                        </div>
                        </div>
                    </div>
                </main>
                {{-- Container down menu --}}


                {{-- <div class="absolute lg:absolute lg:inset-y-0 lg:right-0 ">
                    <img class="h-96 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-screen" src="https://impcan.s3.amazonaws.com/uploads/image/picture/1576/l_impcan.jpg" alt="">
                </div> --}}


            </div>

            {{-- <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img src="https://impcan.s3.amazonaws.com/uploads/image/picture/1576/l_impcan.jpg" alt="">
            </div> --}}
            
            {{-- <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                    <img class="h-96 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-screen" src="https://impcan.s3.amazonaws.com/uploads/image/picture/1576/l_impcan.jpg" alt="">
            </div> --}}

    </div>

        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-3/6">
        <img class="h-96 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-full" src="https://impcan.s3.amazonaws.com/uploads/image/picture/1576/l_impcan.jpg" alt="">
        </div>
</div>



@endsection