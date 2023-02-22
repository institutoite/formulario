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
                <form method="POST" action="{{ route('materias.update', $materia->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('materia.form')
                    @include('include.update')
                </form>
            </div>
        </div>
    </div>

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
      var currentImageUrl = "{{URL::to('/').Storage::url('public/'.$materia->imagen->url)}}";

        $('.file-input').fileinput({
            deleteUrl: "/site/file-delete",
            overwriteInitial: true,
            maxFileSize: 2000,
            initialCaption: "click aqui para subir fotos",
            language:'es',
            theme:'fas',
            initialPreview: '<img src="' + currentImageUrl + '" class="file-preview-image" alt="Current Image">',
            initialPreviewConfig: [{caption: 'Current Image', size: null, width: "120px", url: currentImageUrl, key: 1}],
            initialPreviewAsData: false
        });
    </script>
@stop