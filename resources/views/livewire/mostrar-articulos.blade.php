<div class="p-6 text-gray-900 " style="{{ $stilus }}" >
    <div class="flex flex-col items-center md:flex-row " >
        <div class=" w-4/12 text-center flex justify-center items-center">

            <p class=" text-4xl mb-4 md:text-4xl font-bold">{{$titulo}}</p>
        </div>

        <div class=" w-8/12 flex flex-col  md:grid grid-cols-3 gap-4">
            @php
                $val = 0;
            @endphp
            @foreach ($articulos as $articulo)

                @php
                    $precio_con_dcto = 0;
                    if ($articulo->articulo_id != null) {
                        if ($articulo->tipo_venta == 'D') {
                            $descuentooferta = $articulo->dto_drogueria;
                            $precio = $articulo->precio_publico * 1.21;
                            if ($articulo->tipo_precio == 'P') {
                                $precio -= $precio * ($descuentooferta / 100);
                            }
                            if ($articulo->tipo_precio == 'F') {
                                $precio = $precio * $descuento_pf;
                                $precio -= $precio * ($descuentooferta / 100);
                            }
                            $precio_con_dcto = $precio * $articulo->fp_coef;
                        }
                    }
                    
                    $precio_sugerido = $articulo->precio_publico * $descuento_pf * 1.21 * $articulo->fp_coef;
                    
                    $val++;
                @endphp
                @if ($val < 4)
                    <div class="border bg-white rounded-xl ">
                        <p><img class=" w-full" src="{{ asset('img/productos/producto.png') }}" height="160px"
                                width="160px" alt="Imagen producto"></p>
                        <hr class="border-b border-gray-300">
                        <p class=" font-semibold mb-3 text-center h-12">{{ $articulo->descripcion_pag }}</p>
                        <p class=" text-lg text-red-700  text-center font-bold">

                            @if ($articulo->dto_drogueria > 0)
                                @if ($articulo->uni_min > 1)
                                    {{ round($articulo->dto_drogueria) }}
                                    @switch(round($articulo->dto_drogueria))
                                        @case(25)
                                            {{ '50% OFF' }}
                                        @break

                                        @case(30)
                                            {{ '60% OFF' }}
                                        @break

                                        @case(35)
                                            {{ '70% OFF' }}
                                        @break

                                        @case(40)
                                            {{ '80% OFF' }}
                                        @break

                                        @case(50)
                                            {{ '2x1' }}
                                        @break

                                        @default
                                            @php
                                                echo round($articulo->dto_drogueria) . '% OFF';
                                            @endphp
                                    @endswitch
                                @else
                                    {{ round($articulo->dto_drogueria) . '% OFF' }}
                                @endif
                            @endif

                        </p>
                        <div class="flex justify-between gap-3">
                            @if ($precio_con_dcto != 0)
                                @if ($articulo->dto_drogueria > 0)
                                    <p class="mx-2 text-gray-500 line-through text-lg">$
                                        @php
                                            echo number_format(round($precio_sugerido, 3), 2, ',', '.');
                                        @endphp
                                    </p>

                                    <p class="mx-2 font-bold text-lg">$ @php
                                       echo number_format(round($precio_con_dcto, 3), 2, ',', '.');
                                    @endphp
                                    </p>
                                 
                                @endif
                            @endif


                        </div>
                       
                           <x-primary-button class=" w-full md:w-60 my-3 mx-1  text-center justify-center bg-green-600" wire:click="addCarrito({{$articulo->id,$articulo->descuento->id}})">
                               Agregar
                                 <input type="hidden" value="1" wire:model="cantidad">
                            </x-primary-button> 
                            
                       
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
