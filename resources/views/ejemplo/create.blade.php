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
            <div class="card-header bg-secondary">
                CREAR FORMULA PARA EL TEMA: {{ $tema->tema }}
                <a href="{{route('formulas.index',$tema)}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>&nbsp;Listar</a>
            </div>
            <div class="card-body">
                <form action="{{route('ejemplo.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @include('ejemplo.form')
                    @include('include.store')
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
        $('.file-input').fileinput({
            initialPreviewAsData: true,
            deleteUrl: "/site/file-delete",
            overwriteInitial: true,
            maxFileSize: 2000,
            initialCaption: "click aqui para subir fotos",
            language:'es',
            theme:'fas',
            
        });
        $(document).ready(function() {
            // Handler para el evento click del ícono de agregar variable
            $("#addvariable").click(function() {
                // Agrega la fila con los dos controles de texto
                var row = $('<div class="row mb-3"></div>');
                var col1 = $('<div class="col-2"><input type="text" class="form-control" name=variables[] placeholder="Variable"></div>');
                var col2 = $('<div class="col-5"><input type="text" class="form-control" name=detalles[] placeholder="detalle"></div>');
                var input3 = $('<div class="col-4"><select name="dimensiones[]" class="form-control"></select></div>');
                
                    input3.find('select').append('<option value="">Ninguno</option>');
                 var unidades = <?php echo $dimensiones; ?>;
                    $.each(unidades, function(index, value) {
                    input3.find('select').append('<option value="' + value.id + '">' + value.dimension + '</option>');
                });
                row.append(col1);
                row.append(col2);
                row.append(input3);
                $('#divvariables').append(row);
            });
        });


        // $("#addvariable").on("click", function(){
        //     // $html= "<div class='row'>";
        //     //     $html+="<div class='col-xs-12 col-sm-12 col-md-6 col-lg-5'>";
        //     //         $html+="<div class='form-floating mb-3 text-gray'>";
        //     //         $html+="<input type='text' class='form-control @error('nombre') is-invalid @enderror' id='nombre' name='nombre' value='{{old('nombre',$nombre->nombre ?? '')}}' placeholder='Ingrese el nombre del nombre'>";
        //     //         $html+="<label for='tena'>nombre</label>";
        //     //         $html+="</div>";
        //     //     $html+="</div>";
        //     //     $html+="<div class='col-xs-12 col-sm-12 col-md-6 col-lg-7'>";
        //     //         $html+="<div class='form-floating mb-3 text-gray'>";
        //     //             $html+="<input type='text' class='form-control @error('formula') is-invalid @enderror' id='formula' name='formula' value='{{old('formula',$formula->formula ?? '')}}' placeholder='Ingrese el formula del tema'>";
        //     //             $html+="<label for='formula'>formula</label>";
        //     //         $html+="</div>";
        //     //     $html+="</div>";
        //     // $html+="</div>"  
        //     $('#addvariable').on('click', function() {
        //         // Crea los elementos de los controles de texto
        //         var input1 = $('<div class="row"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><div class="form-floating mb3 text-gray"><input type="text" class="form-control" name="variable[]"><label for="variable">variable</label></div></div>');
        //         var input2 = $('<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><div class="form-floating text-gray mb3 text-gray"><input type="text" class="form-control" name="detalle[]"><label for="descripcion">descripción</label></div></div></div>');
        //         // Agrega los elementos al contenedor
        //         $('#divvariables').append(input1);
        //         $('#divvariables').append(input2);
        //     });
        //     console.log("click");
        // });
    </script>
@stop