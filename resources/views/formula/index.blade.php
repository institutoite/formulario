@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-BTkxV7Ou8VVZTsLwZIn57c1gmiEUE2OxDxv7+PrKk8h/o7yXrzAa+YSrQe/T1OKKPz7mJrPZgA3qWd5ll5GtQw==" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/sweetalert2/sweetalert2.min.css')}}">
@stop
@section('title', 'Temas')
@section('content')
    {{-- <div class="contenedor"> --}}
     


    <div class="card mt-3">
       
            <div class="card">
                <div class="card-header">
                    <h1>RESUMEN DE FÓRMULAS</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($formulas as $formula)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        {{ $formula->nombre }}
                                    </div>
                                    <div class="card-body">
                                        {{ $formula->formula }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="card-footer">
                    
                </div> --}}
            </div>
        
        
        @foreach ($formulas as $formula)
            @php
                $variables=$formula->variables;
            @endphp
             
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $formula->nombre }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                                @isset($formula->imagen->url)
                                <img width="250" alt="imagen aleatoria" src="{{URL::to('/').Storage::url('public/'.$formula->imagen->url)}}">
                                @endisset
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Fórmula:</h5>
                                            </div>
                                            <div class="card-body">
                                                <h4>{{ $formula->formula }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        
                                        <table class="table table-default">
                                            <thead>
                                                <tr>
                                                    <th>Variable</th>
                                                    <th>Descripción</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($variables as $variable)
                                                    <tr>
                                                        <td><strong>{{ $variable->variable }}</strong></td>
                                                        <td>{{ $variable->detalle }}</td>
                                                        <td>
                                                            <a href="{{route('variables.edit',$variable)}}"><i class="fas fa-edit text-secondary"></i></a>
                                                            <a class="eliminar" id="{{$variable->id}}"><i class="fas fa-trash-alt text-danger"></i></a>
                                                            <a href="{{ route("variables.create",$formula->id) }}" ><i class="fas fa-plus-circle"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Descripción</h5>
                                        {!! $formula->detalle !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
        @endforeach
    </div>
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
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{asset('vendor/sweetalert2/sweetalert2.all.js')}}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML" async></script>


    <script>
        $(document).ready(function() {
          

            $(".eliminar").on("click", function(e){
                e.preventDefault();
                id_materia=$(this).attr('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                Swal.fire({
                    title: 'Estas seguro(a) de eliminar este registro?',
                    text: "Si eliminas el registro no lo podras recuperar jamás!",
                    icon: 'question',
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#25ff80',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Eliminar..!',
                    position: 'center',
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: 'eliminar/materia/'+id_materia,
                            type: 'DELETE',
                            data: {
                                _token: $("meta[name='csrf-token']").attr("content"),
                            },
                            success: function (result) {
                                console.log(result);
                                $("#" + id_materia).parents('.card').first().remove();
                                //mensajeGrande(result.mensaje, 'success', 2000);
                                
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                //mensajeErr();
                            }
                        });
                    } else {
                        //mensajePequenio('El registro NO se eliminó', 'error', 2000);
                    }
                })
            });
            
        });
    </script>
@stop