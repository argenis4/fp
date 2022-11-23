<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="    background-color: hsl(218, 41%, 15%);
background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
">
  
    <div class="w-full flex justify-center ">
        <div class="w-1/2 flex flex-col justify-center items-center bg-repeat-round bg-">
            <div id="radius-shape-1" class="w-20 h-20 relative rounded-full shadow-2xl bg-blue-500 bg-gradient-to-br"></div>


            <h1 class="my-5 font-bold text-5xl fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                <span style="color: hsl(218, 81%, 75%)">La mejor opción.</span>
            </h1>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">

            </p>
            <div id="radius-shape-2" class="w-80 h-32 relative rounded-b-full bottom-2 border-r-2 bg-gradient-to-t  bg-blue-500 "></div>
        </div>

        <div class="w-1/2 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</div>
