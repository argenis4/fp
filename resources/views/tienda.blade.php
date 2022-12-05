<x-app-layout>
    <x-slot name="header">
        {{-- <x-carrousel :publications="$publications">

        </x-carrousel> --}}
    </x-slot>
    <div class="py-12">
        <div class=" max-w-7xl mx-auto  flex flex-row  md:grid grid-cols-4 justify-items-center gap-2">
            @forelse ($descuentosfp as $descuento)

                @if ($descuento->dto_drogueria > 0)
                    @if ($descuento->uni_min > 1)
                        @switch($descuento->dto_drogueria)
                            @case(25)
                                @php
                                    $result = '50% OFF 2da UNID';
                                @endphp
                            @break

                            @case(30)
                                @php
                                    $result = '60% OFF 2da UNID';
                                @endphp
                            @break

                            @case(35)
                                @php
                                    $result = '70% OFF 2da UNID';
                                @endphp
                            @break

                            @case(40)
                                @php
                                    $result = '>80% OFF 2da UNID';
                                @endphp
                            @break

                            @case(50)
                                @php
                                    
                                @endphp
                            @break

                            @default
                                @php
                                    $result = round($descuento->dto_drogueria);
                                @endphp
                        @endswitch
                    @else
                        @php
                            $result = round($descuento->dto_drogueria);
                        @endphp
                    @endif
                @endif

                <div class="flex justify-between items-center">

                    <div style="background-clip: content-box, padding-box;background-image:linear-gradient(to bottom, rgb(217 217 217) 0%, rgb(217 217 217) 100%), linear-gradient(to bottom, rgb(70 144 210) 0%, rgb(187 175 177) 100%)"
                        class=" flex justify-center items-center w-52 h-24 rounded-xl cursor-pointer px-6">

                        <p class=" text-5xl text-red-600 font-bold">  {{ $result }}</p>
                        <div class=" text-gray-600">
                            <p>%</p>
                            <p>OFF</p>
                        </div>

                    </div>
                </div>

                @empty

                @endforelse



            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @php
                        $stilus = 'background-image:-webkit-gradient(linear, 0% 100%, 0% 0%, from(rgb(81 221 38)), to(rgb(53 220 95 / 44%)));border-radius:5px;font-family:BebasNeueRegular;';
                        $titulo = '¡Ofertas por 72 horas!';
                    @endphp
                    <livewire:mostrar-articulos :stilus="$stilus" :titulo="$titulo" />
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @php
                        $stilus = 'background-image: -webkit-gradient(linear, 0% 100%, 0% 0%, from(#0dcaf0), to(rgb(53 220 95 / 44%)));;font-family:BebasNeueRegular;';
                        $titulo = 'Productos Destacados Que Pueden Interesarte!';
                    @endphp
                    <livewire:mostrar-articulos :stilus="$stilus" :titulo="$titulo" />
                </div>


                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-10">
                    @php
                        $stilus = 'background-image: -webkit-gradient(linear, 0% 100%, 0% 0%, from(rgb(38 113 221)), to(rgb(53 220 95 / 44%)));font-family:BebasNeueRegular;';
                        $titulo = 'Productos Con Ofertas Imperdibles!';
                    @endphp
                    <livewire:mostrar-articulos :stilus="$stilus" :titulo="$titulo" />
                </div>
            </div>
        </div>
    </x-app-layout>
