@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" />
    

    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/sweetalert2/sweetalert2.min.css')}}">
@stop
@section('title', 'Temas')
@section('content')
    <div class="contenedor">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <h1>Fórmulas de {{ $tema->tema }}</h1>
                    <hr>
                    <p class="slogan">{{ $tema->slogan }}</p>
                    <hr>
                    <p class="detalle">{{ $tema->detalle }}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="{{URL::to('/').Storage::url('public/'.$tema->imagen->url)}}" alt="Imagen de la materia">
            </div>
        </div> 
        
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>{{ $formula->nombre }}</h2>
                    </div>
                    <div class="card-body">
                        {{ $formula->formula }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <table id="{{ "formula".$formula->id }}" class="table table-bordered table-hover table-striped table-avatar">
                    <thead>
                        <tr>
                            <th>Variable</th>
                            <th>Descripción</th>
                            <th>Acciones &nbsp; 
                                <a class="crear" href="" ><i class="fas fa-plus-circle"></i></a> &nbsp;
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody id="variables">
                        @foreach ($variables as $variable)
                            <tr id="{{$variable->id }}">
                                <td><strong>{{ $variable->variable }}</strong></td>
                                <td>{{ $variable->detalle }}</td>
                                <td>
                                    <a class="editar" ><i class="fas fa-edit text-secondary"></i></a>
                                    <a class="eliminar"><i class="fas fa-trash-alt text-danger"></i></a>
                                    
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Ejemplos:{{ $formula->nombre }}</h2>
                        <a id="ejemplocrear" class="btn btn-primary btn-outline-secondary float-right text-white"><i class="fa fa-plus"></i>&nbsp;Ejemplo</a>
                    </div>
                </div>
                <div class="card-body">
                     @foreach ($ejemplos as $ejemplo)
                        <div class="card">
                            <div class="card-header">
                                Ejemplo
                            </div>
                            <div class="card-body">
                                {{ $ejemplo->ejemplo }}
                            </div>
                            <div class="card-footer">
                                
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
        </div>                
    </div>
    @include('ejemplo.modales')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{asset('vendor/sweetalert2/sweetalert2.all.js')}}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    


    <script>
        $(document).ready(function() {
            ClassicEditor.create(document.querySelector('#detalle'));
        

            $("#ejemplocrear").on("click", function(e){
                e.preventDefault();
                let formula_id="{{ $formula->id }}";
                console.log("id:"+formula_id);
                $("#modal-crear-ejemplo").modal("show");
                $.ajax({
                    url:"{{url('ejemplos/create')}}/"+formula_id,
                    success: function (json) {
                        console.log(json);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        //mensajeErr();
                    }
                });
                // $("#formula_id").val(formula_id);
            });

            $('#ejemplo').on('change', function() {
                var number = $(this).val();

                $('#ecuacion').text(number);
                console.log("change");
            });

            
        });
    </script>
@stop