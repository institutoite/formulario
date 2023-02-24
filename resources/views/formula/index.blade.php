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
                                                <tr id="{{ $formula->id }}">
                                                    <th>Variable</th>
                                                    <th>Descripción</th>
                                                    <th>Acciones<a class="crear" href="" ><i class="fas fa-plus-circle"></i></a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($variables as $variable)
                                                    <tr id="{{ $variable->id }}">
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
    @include('variable.modales')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{asset('vendor/sweetalert2/sweetalert2.all.js')}}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    


    <script>
        $(document).ready(function() {
            $(".editar").on("click", function(e){
                e.preventDefault();
                let variable_id=$(this).closest('tr').attr("id");
                //console.log(variable_id);
                $.ajax({
                    url:"{{url('editar/variable')}}/"+variable_id,
                    // url:"{{url('persona/ultimaobservacion')}}",
                    success: function (result) {
                        $("#variable").val(result.variable.variable);
                        $("#detalle").val(result.variable.detalle);
                        $("#variable_id").val(result.variable.id);
                        $dimensions="";
                        result.dimensiones.forEach(dimension => {
                            if(dimension.id==result.variable.id)
                            $dimensions+="<option value='"+dimension.id+"' selected>"+ dimension.dimension +"</option>"
                            else
                            $dimensions+="<option value='"+dimension.id+"'>"+ dimension.dimension +"</option>"
                        });
                        $("#dimension_id").append($dimensions);
                        $("#modal-editar").modal("show");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        //mensajeErr();
                    }
                });

            });
            $(".crear").on("click", function(e){
                e.preventDefault();
                let formula_id=$(this).closest('tr').attr("id");
                console.log(formula_id);
                 $("#modal-crear").modal("show");
                 $.ajax({
                    url:"{{url('get/dimensiones')}}",
                    // url:"{{url('persona/ultimaobservacion')}}",
                    success: function (result) {
                        console.log(result);
                        $dimensions="";
                        result.forEach(dimension => {
                            $dimensions+="<option value='"+dimension.id+"'>"+ dimension.dimension +"</option>"
                            console.log(dimension.dimension);
                        });
                        
                        $("#id_dimension").append($dimensions);
                       
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        //mensajeErr();
                    }
                });
                $("#formula_id").val(formula_id);

            });
            $(document).on("submit","#formulario-editar-variable",function(e){
                e.preventDefault();//detenemos el envio
                $variable=$('#variable').val();
                $detalle=$('#detalle').val();
                $dimension_id=$('#dimension_id').val();
                $variable_id=$('#variable_id').val();
                console.log($dimension_id);
                var token = $("input[name=_token]").val();
                $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : "{{url('variable/update')}}",
                    headers:{'X-CSRF-TOKEN':token},
                    data:{
                            variable:$variable,
                            detalle:$detalle,
                            dimension_id:$dimension_id,
                            variable_id:$variable_id,
                            token:token,
                        },
                    success : function(json) {
                        console.log(json);
                        if(json.error){
                        $("#error_motivo").html(json.error);
                        }else{
                            $("#modal-editar").modal("hide");
                            
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 1500,
                                })
                                Toast.fire({
                                icon: 'success',
                                title: 'Se actualizó correctamente el registro'
                            })
                            $("#"+json.variable.id+" td:first-child").html("<strong>"+json.variable.variable);
                            $("#"+json.variable.id+" td:first-child").next().text(json.variable.detalle);
                            //console.log(json.variable.id);
                        } 
                    },
                    error:function(jqXHR,estado,error){
                        console.log("Erorr");
                    },
                });
            });


            $(".eliminar").on("click", function(e){
                e.preventDefault();
                let variable_id=$(this).closest("tr").attr("id");
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
                            url: "{{ url('eliminar/variable/') }}/"+variable_id,
                            type: 'DELETE',
                            data: {
                                _token: $("meta[name='csrf-token']").attr("content"),
                            },
                            success: function (result) {
                                console.log(result);
                                $("#" + variable_id).parents('.card').first().remove();
                                // mensajeGrande(result.mensaje, 'success', 2000);
                                
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