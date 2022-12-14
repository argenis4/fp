<x-guest-layout :categorias="$categorias" :marcas="$marcas">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="telefono" :value="__('Telefono')" />

                <x-text-input id="telefono" class="block mt-1 w-full" type="telefono" name="telefono" :value="old('telefono')" required />

                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="provincia" :value="__('Provincia')" />

                <select id="provincia" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="select" name="provincia" value="{{old('provincia')}}" required >
                    <option value="">--Selecione--</option>
               @foreach ($provincias as $provincia)
               <option value={{$provincia->id}}> {{$provincia->provincia}}</option>
               @endforeach
                    
                </select>

                <x-input-label for="localidad" :value="__('Localidades')" />

                <select id="localidad" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="select" name="localidad" value="{{old('localidad')}}" required >
                    <option value="">--Selecione--</option>
               @foreach ($provincias as $provincia)
               <option value={{$provincia->id}}> {{$provincia->provincia}}</option>
               @endforeach
                    
                </select>


                  
                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
            </div>


            <div class="mt-4">
                <x-input-label for="direccion" :value="__('Direcci??n')" />

                <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required />

                <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex  justify-between my-5">
                <x-link :href="route('login')">
                    Iniciar Sesi??n
                 </x-link>
    
                 
                 <x-link :href=" route('password.request')"> 
                    Olvidaste tu password ?
                </x-link>
    

               
            </div>
            <x-primary-button class="ml-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </form>
    </x-auth-card>
</x-guest-layout>
