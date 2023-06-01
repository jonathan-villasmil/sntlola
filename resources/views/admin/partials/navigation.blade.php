{{-- <nav>
    <ul>
        <li><a href="{{route('admin')}}">Home</a></li>
        <li><a href="{{route('users')}}">Users</a></li>
        <li><a href="{{route('rol')}}">Rol</a></li>
        <li><a href="{{route('categories.index')}}">Categories</a></li>
        <li><a href="{{route('products')}}">Products</a></li>
    </ul>
</nav> --}}

<!--
Change class "fixed" to "sticky" in "navbar" (l. 33) so the navbar doesn't hide any of your page content!
-->

{{-- <style>
    ul.breadcrumb li+li::before {
        content: "\276F";
        padding-left: 8px;
        padding-right: 4px;
        color: inherit;
    }

    ul.breadcrumb li span {
        opacity: 60%;
    }

    #sidebar {
        -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
        transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
    }

    #sidebar.show {
        transform: translateX(0);
    }

    #sidebar ul li a.active {
        background: #1f2937;
        background-color: #1f2937;
    }
</style>

<!-- Navbar start -->
<nav id="navbar" class=" mx-auto fixed top-0 z-40 flex w-full flex-row justify-end bg-gray-700 px-4 sm:justify-between">
    <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
        <li class="inline">
            <a href="{{route('admin')}}">Main</a>
        </li>
        <li class="inline">
            <span>Homepage</span>
        </li>
    </ul>
    <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
        <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="hidden h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</nav>
<!-- Navbar end -->

<!-- Sidebar start-->
<div id="containerSidebar" class="z-40">
    <div class="navbar-menu relative z-40">
        <nav id="sidebar"
            class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-gray-700 pt-6 pb-8 sm:max-w-xs lg:w-80">
            <!-- one category / navigation group -->
            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                    Main
                </h3>
                <ul class="mb-8 text-sm font-medium">
                    <li>
                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="{{route('admin')}}">
                            <span class="select-none">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="{{route('users')}}">
                            <span class="select-none">Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="{{route('rol')}}">
                            <span class="select-none">Roles</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="{{route('categories.index')}}">
                            <span class="select-none">Categories</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="{{route('products')}}">
                            <span class="select-none">Products</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- navigation group end-->

            <!-- example copies start -->
            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                    Legal
                </h3>
                <ul class="mb-8 text-sm font-medium">
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="#tc">
                            <span class="select-none">Terms and Condition</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="#privacy">
                            <span class="select-none">Privacy policy</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="#imprint">
                            <span class="select-none">Imprint</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                    Others
                </h3>
                <ul class="mb-8 text-sm font-medium">
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="#ex1">
                            <span class="select-none">...</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                            href="#ex2">
                            <span class="select-none">...</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- example copies end -->
        </nav>
    </div>
    <div class="mx-auto lg:ml-80"></div>
</div>
<!-- Sidebar end -->

<main>
    <!-- your content goes here -->
</main>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        const sidebar = document.getElementById("sidebar");
        const btnSidebarToggler = document.getElementById("btnSidebarToggler");
        const navClosed = document.getElementById("navClosed");
        const navOpen = document.getElementById("navOpen");

        btnSidebarToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
            navClosed.classList.toggle("hidden");
            navOpen.classList.toggle("hidden");
        });

        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script> --}}

{{-- navbar construction process --}}
<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">

        {{-- logo --}}
        <div class="flex lg:flex-1">
            <a href="{{ route('admin') }}">
                <img class="w-14" src="https://impcan.s3.amazonaws.com/uploads/company/logo_small/84/m_impcan.jpg"
                    alt="">
            </a>
        </div>
        {{-- logo --}}


        {{-- logo menu responsive --}}
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        {{-- logo menu responsiva --}}


        {{-- menu navigation --}}

        <div class="hidden lg:flex lg:gap-x-12 border ">

            <div class="flex mx-auto items-center justify-center border">
                <div class="flex space-x-4">

                    @guest
                        <a href="#"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white">Badalona</a>

                        <a href="#"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white">Santa
                            Coloma</a>

                        <a href="#"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white">Carta</a>

                        <a href="#"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white">Reservas</a>

                        <a href="#"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white">Equipo</a>

                        <a href="{{ route('register') }}"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('register') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Register
                        </a>
                        <a href="{{ route('login') }}"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Login
                        </a>

                    @endguest

                    @auth
                        <a href="{{ route('admin') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('admin') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Home
                        </a>
                        <a href="{{ route('users.index') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('users') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Users
                        </a>
                        <a href="{{ route('roles.index') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('roles') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Roles
                        </a>
                        <a href="{{ route('categories.index') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('categories.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Categories
                        </a>
                        <a href="{{ route('products.index') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('products.index') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Products
                        </a>
                        <a href="{{ route('products.stocks') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('products.index') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            stocks
                        </a>
                        <a href=""
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">{{ Auth::user()->name }}</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                                class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">Logout</button>
                        </form>
                    @endauth

                </div>
            </div>

            {{-- <div class="relative"> --}}

            {{-- <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
                Product
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button> --}}

            <!--
                'Product' flyout menu, show/hide based on flyout menu state.
      
                Entering: "transition ease-out duration-200"
                  From: "opacity-0 translate-y-1"
                  To: "opacity-100 translate-y-0"
                Leaving: "transition ease-in duration-150"
                  From: "opacity-100 translate-y-0"
                  To: "opacity-0 translate-y-1"
              -->
            {{-- <div class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">

                    <div class="p-4">
                    
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    
                            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                </svg>
                            </div>

                            <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                    Analytics
                                    <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                            </div> 
                        </div>
      
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                    </svg>
                                </div>

                                <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Engagement
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                                </div>
                        </div>
      
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                </svg>
                            </div>

                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                Security
                                <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                            </div>
                        </div>
      
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>

                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                Integrations
                                <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Connect with third-party tools</p>
                            </div>
                        </div>
      
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>

                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                Automations
                                <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                            </div>

                        </div>
                    </div>

                    <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                        <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z" clip-rule="evenodd" />
                            </svg>
                            Watch demo
                        </a>
        
                        <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                            </svg>
                            Contact sales
                        </a>
                    </div>
                    
                </div> --}}

            {{-- </div> --}}

            {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a> --}}
        </div>

        {{-- menu navigation --}}
    </nav>
</header>

{{-- navbar construction process --}}






{{-- <nav class="bg-white  dark:bg-slate-900 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0 border"> --}}

{{-- <div class="relative px-4 mx-auto bg-cyan-300  max-w-7xl sm:px-16 lg:px-20 border"> --}}

{{-- <div class="relative flex items-center justify-between h-16 border"> --}}

{{-- <div class="flex items-center justify-center  sm:justify-start border">
                
                <div class="flex items-center flex-shrink-0 border">
                    <a href="{{ route('admin') }}">
                        <img class="w-14" src="https://impcan.s3.amazonaws.com/uploads/company/logo_small/84/m_impcan.jpg" alt="">
                    </a>
                </div>

                <div class="flex mx-auto items-center justify-center border">
                    <div class="flex space-x-4">
                        <a href="{{ route('admin') }}"
                           class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('admin') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Home
                        </a>
                        <a href="{{route('users.index')}}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('users') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Users
                        </a>
                        <a href="{{route('roles.index')}}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('roles') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Roles 
                        </a>
                        <a href="{{ route('categories.index') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('categories.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Categories
                        </a>
                        <a href="{{ route('products.index') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('products.index') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Products
                        </a>
                        @guest
                            <a href="{{ route('register') }}" class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('register') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                                Register
                            </a>
                            <a href="{{ route('login') }}" class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                                Login
                            </a>   
                        
                        @endguest

                        @auth
                            <a href="" class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">{{Auth::user()->name}}</a>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">Logout</button>
                            </form>
                        @endauth
                        
                    </div>
                </div>

            </div> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </nav> --}}
