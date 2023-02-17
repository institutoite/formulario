@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-BTkxV7Ou8VVZTsLwZIn57c1gmiEUE2OxDxv7+PrKk8h/o7yXrzAa+YSrQe/T1OKKPz7mJrPZgA3qWd5ll5GtQw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
@stop
@section('title', 'Materias')


@section('content')
    {{-- <div class="contenedor"> --}}
        <div class="card mt-3">
            <div class="card-header bg-secondary">
                Seleccione la materia de su interés
                <a href="{{route('materias.create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>&nbsp;Nuevo</a>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($materias as $materia)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="card-header degradado">
                                    <h3>{{$materia->materia}}</h3>
                                </div>
                                <div class="card-content">
                                    <img src="imagen-materia.jpg" alt="Imagen de la materia">
                                    <h2>{{$materia->slogan}}</h2>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-secondary">Ver detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    {{-- </div> --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop