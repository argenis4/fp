<div id="carouselExampleCrossfade" class="carousel slide carousel-fade relative" data-bs-ride="carousel">
    @php
        $j = 0;

    @endphp
    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
    @foreach ($publications as $publication)
 
            @if ($j == 0)
                  <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="{{ $j }}"
                class="active" aria-current="true" aria-label="Slide {{ $j }}"></button>

                    
                @else
                    
       <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="{{ $j }}"
              aria-label="Slide {{ $j }}"></button>

            @endif
          

    
        @php
            $j++;
        @endphp
    @endforeach
    </div>
    <div class="carousel-inner relative w-full overflow-hidden">

        @php
            $i = 0;
        @endphp

        @forelse ($publications as $publication)


            @if ($i == 0)
                <div class="carousel-item active float-left w-full">
                    <img src="{{ asset('img/publicaciones/' . $publication->imagen . '') }}" class="block w-full"
                        alt="Wild Landscape" />
                </div>
            @else
                <div class="carousel-item  float-left w-full">
                    <img src="{{ asset('img/publicaciones/' . $publication->imagen . '') }}" class="block w-full"
                        alt="Wild Landscape" /> 
                </div>
            @endif
            @php
                $i++;
            @endphp
        @endforeach

    </div>
    <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="next">
        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
