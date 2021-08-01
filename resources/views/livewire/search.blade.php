<div class="col mt-3">
    <div class="row">
        <div class="col">
            <h3 class="ms-2">Todos los diseños</h3>
        </div>
    </div>


    <div class="row mt-5">

        <div class="col-auto">

            <h5 class="mb-4 mt-2">Filtros</h5>

            <div class="">
                <label class="visually-hidden" for="design">Buscar por coincidencia</label>
                <input wire:model="searchTerm" class="mb-4 form-control" id="design" type="text" name="design" aria-label="Pedido" placeholder="Buscar...">
            </div>


            <label class="visually-hidden" for="color_code">Buscar por Color</label>
            <select wire:model="selectedColor" class="mb-2 form-control" id="color_code" name="color_code">
                <option value="0" selected>Todos los Colores</option>

                @foreach ($allColors as $color)

                    <option value="{{ $color->id }}">{{ ucwords($color->name) }}</option>
                @endforeach
            </select>

            <label class="visually-hidden" for="ink_level_id">Buscar por Nivel de Tinta</label>
            <select wire:model="selectedInkLevel" class="mb-2 form-control" id="ink_level_id" name="ink_level_id">
                <option value="0" selected>Todos los Niveles de Tinta</option>
                @foreach ($allInkLevels as $inkLevel)
                    <option value="{{ $inkLevel->id }}">{{ $inkLevel->name }}</option>
                @endforeach
            </select>

            <label class="visually-hidden" for="genre_id">Buscar por Estilo</label>
            <select wire:model="selectedGenre" class="mb-2 form-control" id="genre_id" name="genre_id">
                <option value="0" selected>Todos los Estilos</option>
                @foreach ($allGenres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>

        </div>

        <div class="col-auto">
            <table class="table table-sm table-hover">
                <thead>
                <tr>
                    <th><label wire:click="sortByDesignNumber" type="button" class="btn btn-link text-decoration-none text-dark fw-bold">N°</label></th>
                    <th></th>
                    <th><label wire:click="sortByName" type="button" class="btn btn-link text-decoration-none text-dark fw-bold">Nombre</label></th>
                    <th class="px-3"><label wire:click="sortByPrice" type="button" class="btn btn-link text-decoration-none text-dark fw-bold">Precio</label></th>
                    <th class="px-3"><label wire:click="sortByColor" type="button" class="btn btn-link text-decoration-none text-dark fw-bold">Color</label></th>
                    <th class="px-3"><label wire:click="sortByInkLevel" type="button" class="btn btn-link text-decoration-none text-dark fw-bold">Tinta</label></th>
                    <th class="px-3"><label wire:click="sortByGenre" type="button" class="btn btn-link text-decoration-none text-dark fw-bold">Estilo</label></th>
{{--                    <th class="px-3"><button type="button" class="btn btn-link text-decoration-none text-dark fw-bold bs">Estilo</button></th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach ($designs as $design)
                    <tr class="design" id="{{ $design->design_number }}_design" style="cursor: pointer">
                        <td><small>{{ $design->design_number }}</small></td>
                        <td><img class="storeicon" src="{{ asset('images/storeicons/' . strtolower($design->store->name) . '.png') }}" alt="{{ ucwords($design->store->name) }}"></td>
                        <td style="min-width: 300px;max-width: 450px; overflow-x: hidden"><small>{{ ucwords(strtolower($design->name)) }}</small></td>
                        <td class="px-3 text-center"><small>{{ format_money($design->price) }}</small></td>
                        <td class="px-3"><div class="m-auto bg_abo_{{ $design->color->code }} rounded-circle border border-dark border-2" style="width: 25px; height: 25px"></div></td>
                        <td class="px-3 text-center"><img class="inkicon" src="{{ asset('images/inkicons/ink_' . $design->ink_level_id . '.png') }}" alt="{{ ucwords($design->ink_level->name) }}"></td>
                        <td class="px-3"><small>{{ ucwords($design->genre->name) }}</small></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $designs->links() }}
        </div>
    </div>

    <script>
        $('.design').click(function() {
            var trid = $(this).attr('id');
            var uspos = trid.indexOf('_');
            var id = trid.substring(0, uspos);
            window.location.href = "{{ URL::to('/') . "/search/" }}" + id;
        });
    </script>






</div>
