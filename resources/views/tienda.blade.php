<x-app-layout :categorias="$categorias" :marcas="$marcas">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

               <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @php
                    $stilus= "background-image:-webkit-gradient(linear, 0% 100%, 0% 0%, from(rgb(81 221 38)), to(rgb(53 220 95 / 44%)));border-radius:5px;font-family:BebasNeueRegular;";
                    $titulo= "¡Ofertas por 72 horas!";
                @endphp
                <livewire:mostrar-articulos :stilus="$stilus" :titulo="$titulo" />
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @php
                    $stilus= "background-image: -webkit-gradient(linear, 0% 100%, 0% 0%, from(#0dcaf0), to(rgb(53 220 95 / 44%)));;font-family:BebasNeueRegular;";
                    $titulo= "Productos Destacados Que Pueden Interesarte!";
                @endphp
                <livewire:mostrar-articulos :stilus="$stilus" :titulo="$titulo" />
            </div>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-10">
                @php
                    $stilus= "background-image: -webkit-gradient(linear, 0% 100%, 0% 0%, from(rgb(38 113 221)), to(rgb(53 220 95 / 44%)));font-family:BebasNeueRegular;";
                    $titulo= "Productos Con Ofertas Imperdibles!";
                @endphp
                <livewire:mostrar-articulos :stilus="$stilus" :titulo="$titulo" />
            </div>
        </div>
    </div>
</x-app-layout>
