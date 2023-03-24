@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" />
    

    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/sweetalert2/sweetalert2.min.css')}}">
@stop
@section('title', 'Temas')
@section('content')
            <div class="card">
                <div class="card-header bg-secondary">
                   
                    <a id="crearejemplo" class="btn btn-primary float-right"><i class="fa fa-plus"></i>&nbsp;Nuevox</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <table class="table table-light">
                            <tbody>
                                <tr>
                                    <td>Materia</td>
                                    <td>{{ $materia->materia }}</td>
                                </tr>
                                <tr>
                                    <td>Tema</td>
                                    <td>{{ $tema->tema }}</td>
                                </tr>
                                <tr>
                                    <td>Fórmula</td>
                                    <td>{{ $formula->nombre }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card-footer">
                    
                </div> --}}
            </div>
        
        
        
    </div>
        <div class="contenedor">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <h1>Ejemplos de la formula {{ $formula->nombre }}</h1>
                        <p>
                            {{ $formula->formula }}
                        </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    @isset($ejemplos)
                        @foreach ($ejemplos as $ejemplo)
                            <div class="card">
                                <div class="card-header">
                                    Ejemplo {{ $ejemplo->numero }}
                                </div>
                                <div class="card-body">
                                    {{ $ejemplo->ejemplo }}
                                </div>
                            </div>
                        @endforeach
                    @endisset
                   
                </div>
            </div>
        </div>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>
    @include('ejemplo.modales')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        #ecuacion {
  display: flex;
  justify-content: center;
  align-items: center;
}
    </style>
@stop

@section('js')
    <script src="{{asset('vendor/sweetalert2/sweetalert2.all.js')}}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script
  type="text/javascript"
  async
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_CHTML"
></script>

<script>
        // $(document).ready(function() {
        //     $("#crearejemplo").on("click", function(e){
        //         e.preventDefault();
        //          $("#modal-crear-ejemplo").modal("show");
        //     });
        // });
    
</script>

    <script>
  
        //  function mostrarTexto() {
        //         var texto = $("#ejemplo").val();
        //         console.log(texto);
        //         $("#contenido").html("<p>"+texto+"</p>");
        //         MathJax.startup.document.clear();
        //         MathJax.typesetPromise([$("#contenido")]);

        //         MathJax.startup.document.clear();
        //         MathJax.typesetPromise([divContenido]);

        //         // MathJax.typesetClear([$("#ejemplo")]);
        //         // MathJax.typesetPromise([], latex);
        //         // document.getElementById("contenido").innerHTML = texto;
        //     }
    </script>

    <script>
        $(document).ready(function() {
            tabla = $("tabla");
            console.log(tabla);
            $.ajax({
                    url : "{{url('ejemplos/listar')}}",
                    data:{
                            formula_id:$("#formula_id").val(),
                        },
                    success : function(json) {
                   
                        $.each(json, function(i, ejemplo) {
                        // Crear una nueva fila de la tabla con los datos del ejemplo
                        var fila = $("<tr>").append(
                            $("<td>").text(ejemplo.numero),
                            $("<td>").text(ejemplo.ejemplo),
                            $("<td>").text(ejemplo.detalle)
                        );
                         console.log(json);
                        // Agregar la fila a la tabla
                        tabla.append(fila);
                        });
                    },
                    error:function(jqXHR,estado,error){
                        console.log("Erorr");
                    },
                });



            $("#crearejemplo").on("click", function(e){
                e.preventDefault();
                $("#modal-crear-ejemplo").modal("show");
            });
            actualizarContenido(); // Mostrar el contenido inicial
            $(document).on("submit","#formulario-crear-ejemplo",function(e){
                e.preventDefault();//detenemos el envio
                
                $numero=$('#numero').val();    
                $ejemplo=$('#ejemplo').val();
                $detalle=$('#detalle').val();
                $formula_id=$('#formula_id').val();

                var token = $("input[name=_token]").val();
                $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : "{{url('ejemplo/store')}}",
                    headers:{'X-CSRF-TOKEN':token},
                    data:{
                            numero:$numero,
                            ejemplo:$ejemplo,
                            detalle:$detalle,
                            formula_id:$formula_id,
                            token:token,
                        },
                    success : function(json) {
                        console.log(json);
                        if(json.error){
                        $("#error_motivo").html(json.error);
                        }else{
                            $("#modal-crear").modal("hide");
                            
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 1500,
                                })
                                Toast.fire({
                                icon: 'success',
                                title: json.mensaje
                            })
                            $("#modal-crear-ejemplo").modal("hide");

                            //$("#formula"+$formula_id).children("tbody")
                            //$(this).closest('tr').attr("id").substring(7);
                        } 
                    },
                    error:function(jqXHR,estado,error){
                        console.log("Erorr");
                    },
                });
            });
            
        });
        function actualizarContenido() {
            var input = $("#ejemplo").val(); // Obtener el valor del input
            var contenido = $("#contenido"); // Obtener el div donde se mostrará el contenido
            
            // Convertir la entrada en una expresión en latex
            var expresion = "\\(" + input + "\\)";
            
            // Mostrar la expresión en el div de contenido
            contenido.html(expresion);
            MathJax.Hub.Queue(["Typeset", MathJax.Hub, contenido[0]]); // Actualizar la visualización de latex
        }
    </script>

@stop