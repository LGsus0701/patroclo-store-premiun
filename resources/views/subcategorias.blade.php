@extends('layouts.app')

@section('content')
<h1 class="text-center text-gray-800 text-2xl font-medium">Subcategorías</h1>

@if($subcategorias->isEmpty())
    <p class="text-center text-red-500">No hay subcategorías disponibles.</p>
@else
    <div class="flex flex-wrap justify-evenly mt-4 gap-4">
        @foreach($subcategorias as $subcategoria)
            <a href="{{ route('subcategorias.productos', ['id_subcategoria' => $subcategoria->id_subcategoria]) }}">
                <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[200px] p-4 rounded cursor-pointer text-center">
                    <img class="h-[130px] w-full object-cover rounded" src="{{ $subcategoria->imagen_url }}" alt="">
                    <p class="mt-3 font-medium text-gray-800">{{ $subcategoria->nombre }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endif
@endsection

