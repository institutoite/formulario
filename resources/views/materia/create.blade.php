@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link href="{{ asset('vendor/fileinput/css/fileinput.css') }}" rel="stylesheet">
@stop
@section('title', 'Materias')


@section('content')
    <div class="card mt-3">
        <div class="card">
            <div class="card-header">
                FORMULARIO CREAR MATERIA
            </div>
            <div class="card-body">
                <form action="{{route('materias.store')}}" method="POST"  enctype="multipart/form-data">
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
     <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    {{-- fileinput --}}
    <script src="{{ asset('vendor/fileinput/js/plugins/piexif.js') }}"></script>
    <script src="{{ asset('vendor/fileinput/js/plugins/sortable.js') }}"></script>
    <script src="{{ asset('vendor/fileinput/js/fileinput.js') }}"></script>
    <script src="{{ asset('vendor/fileinput/js/locales/es.js') }}"></script>
   
    
    <script>
        ClassicEditor.create(document.querySelector('#detalle'));
        
        // fileinput 
        $('.file-input').fileinput({
            initialPreviewAsData: true,
            deleteUrl: "/site/file-delete",
            overwriteInitial: true,
            maxFileSize: 2000,
            initialCaption: "click aqui para subir fotos",
            language:'es',
            theme:'fas',
        });
    </script>
@stop