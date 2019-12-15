@extends('layouts.app')

@section('content')
    <h1>Cultivo</h1>

    <p>Nombre:           {{ $crops->name }}</p>
    <p>Nombre Cientifico: {{ $crops->name_scientific }}</p>
    <p>Descripcion: {{ $crops->description }}</p>
@endsection