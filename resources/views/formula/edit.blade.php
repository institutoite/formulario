@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link href="{{ asset('vendor/fileinput/css/fileinput.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.css">
    
@stop
@section('title', 'Formulas')


@section('content')
    <div class="card mt-3">
        <div class="card">
            <div class="card-header">
                FORMULARIO EDITAR FORMULA
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('formulas.update', $formula->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('formula.form')
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
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.css" integrity="sha256-x5TVfS1Xb9d7XdHvDrcj+gO8ZMQGJHmzOrjv3egfIg8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.js" integrity="sha256-riEobt1CgYPnICe8nCZd1KQfJGZlW7hJGj92yReFY+g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.js"></script>
    
    @isset($formula->imagen)
        var currentImageUrl = "{{URL::to('/').Storage::url('public/'.$formula->imagen->url)}}";
    @endisset

    <script>
        ClassicEditor.create(document.querySelector('#detalle'));
        
        
        

        $('.file-input').fileinput({
            deleteUrl: "/site/file-delete",
            overwriteInitial: true,
            maxFileSize: 2000,
            initialCaption: "click aqui para subir fotos",
            language:'es',
            theme:'fas',
            initialPreview: '<img src="' + currentImageUrl + '" class="file-preview-image" alt="Sin Imagen">',
            initialPreviewConfig: [{caption: 'Current Image', size: null, width: "120px", url: currentImageUrl, key: 1}],
            initialPreviewAsData: false
        });

        $(document).ready(function(){
            const input = document.getElementById('formula');
            const previsualizar = document.getElementById('previsualizar');
            input.addEventListener('input', (event) => {
                katex.render(input.value, previsualizar);
            });

        });
    </script>
@stop