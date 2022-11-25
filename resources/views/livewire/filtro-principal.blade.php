    <div>
        <form>
            <div class="mb-3">
                <x-text-input type="search" id="terminobuscar-top" name="terminobusquedaheader" class="form-control w-96"
                    placeholder="Buscar productos por marcas y más ..." aria-label="Search" aria-describedby="search-addon"
                    wire:model="termino" />
            </div>

            <div class="flex">
                <select  class="  rounded-md shadow-sm form-control" name="categorias" id="">
                    <option value="">Selecione</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
                    @endforeach



                </select>

                <select class="   rounded-md shadow-sm form-control mx-2" name="provincias" id="">
                    <option value="">Selecione</option>
                    @foreach ($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                    @endforeach


                </select>



            </div>

        </form>
    </div>
