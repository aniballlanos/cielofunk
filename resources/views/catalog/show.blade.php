@extends('layouts.base')

@section('title', 'Detalles del diseño ' . $design->design_number)

@section('content')

    <div class="col">


        <h2 class="mt-4">
            <span class="align-middle">{{ $design->design_number }} - {{ $design->name }} </span>
            <span class="align-middle rounded-circle border border-3 border-dark d-inline-block" style="width: 60px; height: 60px; background-color: {{ '#' . $design->color->hex }}"></span>
        </h2>
        <hr>

        <div class="row">
            <div class="col">
                <table class="table text-xl-center">
                    <thead>
                    <tr>
                        <th class="bg-dark text-light">Costo</th>
                        <th class="bg-dark text-light">Precio</th>
                        <th class="bg-dark text-light">Descuento</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><h4>{{ format_money($design->cost) }}</h4></td>
                        <td><h4>{{ format_money($design->price) }}</h4></td>
                        <td><h4>{{ format_money($design->discounted_price) }}</h4></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <table class="table text-xl-center">
                    <thead>
                    <tr>
                        <th class="bg-dark text-light">Estilo</th>
                        <th class="bg-dark text-light">Nivel de Tinta</th>
                        <th class="bg-dark text-light">Tienda</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><h4>{{ ucwords($design->genre->name) }}</h4></td>
                        <td><h4>{{ ucwords($design->ink_level->name) }}</h4></td>
                        <td><h4>{{ ucwords($design->store->name) }}</h4></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h3 class="mt-4">Detalles del uso de tinta</h3>
        <div class="row">
            <div class="col">
                <table class="table text-xl-center">
                    <thead>
                    <tr>
                        <th class="bg-dark text-light">Frente CMYK</th>
                        <th class="bg-dark text-light">Frente Blanca</th>
                        <th class="bg-dark text-light">Frente TOTAL</th>
                        <th class="bg-dark text-light">Espalda CMYK</th>
                        <th class="bg-dark text-light">Espalda Blanca</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><h4>{{ $design->cmyk_front }}</h4></td>
                        <td><h4>{{ $design->w_front }}</h4></td>
                        <td><h4>{{ $design->ink_front }}</h4></td>
                        <td><h4>{{ $design->cmyk_back }}</h4></td>
                        <td><h4>{{ $design->w_back }}</h4></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
