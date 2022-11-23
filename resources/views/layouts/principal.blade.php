<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tu farmapoint
    </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">

        <nav aria-label="Global" class="bg-blue-700 mx-auto max-w-container px-4 sm:px-6 lg:px-8 ">

            <div class="relative flex items-center py-1">
                <div class="w-1/3 relative flex flex-grow basis-0 items-center">
                    <a href="{{route('home')}}"><img class="" src="{{ asset('img/Logo-TFP-blanco-rojo.png') }}"
                            alt=""></a>
                </div>

                <div class="w-1/3">

                    <div class="-my-5 mr-6 sm:mr-7 md:mr-0"><input type="text" placeholder="productos por marcas y mas..."
                            class="group flex h-6 w-6 items-center justify-center sm:justify-start md:h-auto md:w-80 md:flex-none md:rounded-lg md:py-2.5 md:pl-4 md:pr-3.5 md:text-sm md:ring-1 md:ring-slate-200 md:hover:ring-slate-300 dark:md:bg-slate-800/75 dark:md:ring-inset dark:md:ring-white/5 dark:md:hover:bg-slate-700/40 dark:md:hover:ring-slate-500 lg:w-96"></input>
                    </div>


                    <ul class="menup  h-3 flex float-left "> 
	       
	        <li class="dropdown mt-5 mx-3  "><a>Categorias</a> 
            <li class="dropdown mt-5"><a>Marcas</a> 
                </div>

                <div class="w-1/3">

                    <ul class="menu flex  items-center place-content-end">

                         @if (Route::has('login'))
              
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else

                       <li class="mx-2"><a href="#"><img src="{{ asset('img/Farmacias-CONTACTO.png') }}"
                                    id="opener" class=" w-40 current-page-item" title="Farmacias adheridas."
                                    u="image" alt=""></a></li>
                        <li class="mx-2"><a href="#"><img src="{{ asset('img/carrito-de-compras-2.png') }}"
                                    id="opener" class="current-page-item" title="Carrito de compras." u="image"
                                    alt=""></a></li>
                        <li class="mx-2"><a href="{{ route('login') }}"><img src="{{ asset('img/entrar.png') }}" id="opener"
                                    class="current-page-item" title="Ingresar al sistema." u="image"
                                    alt=""></a></li>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                     
                    </ul>

                </div>

            </div>
        </nav>
    </div>
</body>

</html>
