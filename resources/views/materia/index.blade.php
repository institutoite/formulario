@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-BTkxV7Ou8VVZTsLwZIn57c1gmiEUE2OxDxv7+PrKk8h/o7yXrzAa+YSrQe/T1OKKPz7mJrPZgA3qWd5ll5GtQw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/sweetalert2/sweetalert2.min.css')}}">
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
                            <div class="card carta">
                                <div class="card-header degradado">
                                    <h3>{{$materia->materia}}</h3>
                                </div>
                                <div class="card-content">
                                    <div class="actions">
                                        <a href="{{route('materias.edit',$materia)}}"><i class="fas fa-edit text-secondary"></i></a>
                                        <a class="eliminar" id="{{$materia->id}}"><i class="fas fa-trash-alt text-danger"></i></a>
                                        <a href="{{ route("temas.crear",$materia->id) }}" ><i class="fas fa-plus-circle"></i></a>
                                    </div>
                                    @isset($materia->imagen->url)
                                    <img src="{{URL::to('/').Storage::url('public/'.$materia->imagen->url)}}" alt="Imagen de la materia">
                                    @endisset
                                    <p class="slogan">{{$materia->slogan}}</p>
                                    <div class="text-center">
                                        <a href="{{ route("temas.index",$materia) }}" class="btn btn-secondary">Ver Temas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
    <script>
        $(document).ready(function() {
          
        // $('a[data-method]').click(function(event) {
        //         event.preventDefault();
        //         const method = $(this).data('method');
        //         const url = $(this).data('url');
        //         $.ajax({
        //             url: url,
        //             method: method,
        //             headers: {
        //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //             },
        //             success: function(response) {
                        
        //             },
        //             error: function(error) {
        //             // Manejar errores de la solicitud
        //             }
        //         });
        //     });


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