<nav x-data="{ open: false }" class=" bg-blue-800 h-70">
    <!-- Primary Navigation Menu -->
    <div class="w-full mx-auto px-4 sm:px-6  lg:px-8">
        <div class=" w-full flex justify-between pt-4 pb-4">
            <div class=" w-1/4 flex ">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('tienda') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->

            </div>

            <!-- Settings Dropdown -->
            <div class=" w-1/4 hidden sm:flex sm:items-center sm:ml-6">
                <div>
                    <div class="mb-3">
                        <x-text-input type="search" id="terminobuscar-top" name="terminobusquedaheader"
                            class="form-control w-80" placeholder="Buscar productos por marcas y más ..."
                            aria-label="Search" aria-describedby="search-addon" />

                    </div>
                    <div class="flex">

                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>Categorias</div>


                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>

                            </x-slot>
                            <x-slot name="marcatrigger">

                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>Marcas</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>






                            <x-slot name="content">



                                <x-link-categorias :categorias="$categorias" />


                            </x-slot>


                            <x-slot name="marcass">
                                <x-link-marcas :marcas="$marcas" />

                            </x-slot>
                        </x-dropdown>

                    </div>


                </div>



            </div>

            <div class="w-1/4 flex justify-center content-center items-center">
                <div class="flex">
                    <img class="cursor-pointer" width="100px" height="40"
                        src="{{ asset('img/Farmacias-CONTACTO.png') }}" alt="Farmacias adheridas">
                    <img class="cursor-pointer" src="{{ asset('img/carrito-de-compras-2.png') }}"
                        alt=" Carrito de compras">
                    <img class="cursor-pointer" src="{{ asset('img/entrar.png') }}" alt="Iniciar sesión">
                </div>

            </div>
            <!-- Hamburger -->
            <div class=" w-1/4 -mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>


        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('tienda')" :active="request()->routeIs('tienda')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">

            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                    </x-response-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
            </div>
        </div>
    </div>
</nav>
