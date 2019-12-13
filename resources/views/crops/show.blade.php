@extends('layouts.app2')
@extends('layouts.header')
@extends('layouts.aside')
@extends('layouts.wraper')

@section('content')
    <h1>Cultivo</h1>

    <p>Nombre:           {{ $crops->name }}</p>
    <p>Nombre Cientifico: {{ $crops->name_scientific }}</p>
    <p>Descripcion: {{ $crops->description }}</p>
@endsection