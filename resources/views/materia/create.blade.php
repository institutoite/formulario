@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
@stop
@section('title', 'Materias')


@section('content')
    <div class="card mt-3">
        <div class="card">
            <div class="card-header">
                FORMULARIO CREAR MATERIA
            </div>
            <div class="card-body">
                <form action="{{route('materias.store')}}" method="POST">
                    @csrf
                    @include('materia.form')
                    @include('include.store')
                </form>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    
    <script>
        ClassicEditor.create(document.querySelector('#detalle'));
    </script>
@stop