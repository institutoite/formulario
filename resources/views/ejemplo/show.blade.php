@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.css">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">    
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
                        <h1 >Ejemplos de la formula {{ $formula->nombre }}</h1>
                        <p id="formula">
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
        <div id="tabla-container"></div>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>#</th>
                    <th>#</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody id="datos">
              
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-AMS_HTML"></script> --}}
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.css" integrity="sha256-x5TVfS1Xb9d7XdHvDrcj+gO8ZMQGJHmzOrjv3egfIg8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.js" integrity="sha256-riEobt1CgYPnICe8nCZd1KQfJGZlW7hJGj92yReFY+g=" crossorigin="anonymous"></script>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.11.1/katex.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML" async></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML"></script> --}}

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script>
        $(document).ready(function() {
            const input = document.getElementById('ejemplo');
            const contenido = document.getElementById('contenido');
            const inpute = document.getElementById('ejemploe');
            const contenidoe = document.getElementById('contenidoe');
            const modalEditar=document.getElementById("modal-editar-ejemplo");

            input.addEventListener('input', (event) => {
                katex.render(input.value, contenido);
            });
            inpute.addEventListener('input', (event) => {
                katex.render(inpute.value, contenidoe);
            });
            modalEditar.addEventListener('shown', () => {
                console.log("evento generado ");
                katex.render(inpute.value, contenidoe);
            });
            tabla = $("tabla");
            $.ajax({
                    url : "{{url('ejemplos/listar/otro')}}",
                    data:{
                            formula_id:$("#formula_id").val(),
                        },
                    success : function(json) {
                        html="";
                        $.each(json, function(index, row) {
                        html += "<tr id='"+row.id+"'>";
                        html += "<td>" + row.id + "</td>";
                        html += "<td class='mathcell'>" + row.ejemplo + "</td>";
                        html += "<td>" + row.detalle + "</td>";
                        html += "<td class='editarejemplo'><i class='fas fa-edit text-secondary'></i></td>";
                        html += "<td class='eliminar'><i class='fas fa-trash-alt text-danger'></td>";
                        html += "</tr>";
                        });
                        $("#datos").html(html);
                        MathJax.typesetPromise().then(() => {
                            
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
            $("table").on('click',".editarejemplo", function(e){
                e.preventDefault();
                $("#modal-editar-ejemplo").modal("show");
                let ejemplo_id=$(this).closest("tr").attr('id');
                //console.log(ejemplo_id);
                $.ajax({
                    url : "{{url('editar/ejemplo/')}}/"+ejemplo_id,
                    success : function(json) {
                        $('#numeroe').val(json.numero);    
                        $('#ejemploe').val(json.ejemplo.replace(/\$/g,""));
                        $('#detallee').val(json.detalle);
                        $('#ejemplo_id').val(json.id);
                        inpute.dispatchEvent(new Event('input'));
                    },
                    error:function(jqXHR,estado,error){
                        console.log("Erorr");
                    },
                });
            });
            //actualizarContenido(); // Mostrar el contenido inicial
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

                            html = "<tr id="+json.id+"><td>" + json.numero + "</td>";
                            html += "<td id='"+"ejemplo"+json.id+"'>" + json.ejemplo + "</td>";
                            html += "<td>" + json.detalle + "</td>";
                            html += "<td class='editarejemplo'><i class='fas fa-edit text-secondary'></i></td>";
                            html += "<td class='eliminar'><i class='fas fa-trash-alt text-danger'></td></tr>";
                            //console.log(json);
                            $("#datos").append(html);
                            location.reload();
                        } 
                    },
                    error:function(jqXHR,estado,error){
                        console.log("Erorr");
                    },
                });
            });
           
           
            
        });
            $(document).on("submit","#formulario-editar-ejemplo",function(e){
                e.preventDefault();//detenemos el envio
                console.log("actualizar");
                $numero=$('#numeroe').val();    
                $ejemplo=$('#ejemploe').val();
                $detalle=$('#detallee').val();
                $ejemplo_id=$('#ejemplo_id').val();

                var token = $("input[name=_token]").val();
                $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : "{{url('ejemplo/update')}}",
                    headers:{'X-CSRF-TOKEN':token},
                    data:{
                            numero:$numero,
                            ejemplo:$ejemplo,
                            detalle:$detalle,
                            ejemplo_id:$ejemplo_id,
                            token:token,
                        },
                    success : function(json) {
                        console.log(json);
                        $("#modal-editar-ejemplo").modal("hide");
                        //$("#"+json.id).html("<td>"+json.numero+"</td>"+"<td>"+json.formula+"</td>"+"<td>"+json.detalle+"</td>"+"<td>"+json.numero+"</td>")
                        html = "<td>" + json.numero + "</td>";
                        html += "<td>" + json.ejemplo + "</td>";
                        html += "<td>" + json.detalle + "</td>";
                        html += "<td class='editarejemplo'><i class='fas fa-edit text-secondary'></i></td>";
                        html += "<td class='eliminar'><i class='fas fa-trash-alt text-danger'></td>";
                        
                        $("#"+json.id).html(html);
                        location.reload();
                    },
                    error:function(jqXHR,estado,error){
                        console.log("Erorr");
                    },
                });
            });
        
            $("table").on("click",".eliminar", function(e){
                e.preventDefault();
                let ejemplo_id=$(this).closest("tr").attr("id");
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
                            url: "{{ url('eliminar/ejemplo/') }}/"+ejemplo_id,
                            type: 'DELETE',
                            data: {
                                _token: $("meta[name='csrf-token']").attr("content"),
                            },
                            success: function (result) {
                                console.log(result);
                                $("#" + ejemplo_id).remove();
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
       
            // Agregar un evento de escucha para el evento "input" en el input LaTeX
            
        // function actualizarContenido() {
        //     var input = $("#ejemplo").val(); // Obtener el valor del input
        //     var contenido = $("#contenido"); // Obtener el div donde se mostrará el contenido
        //     var expresion = "\\(" + input + "\\)";
        //     MathJax.Hub.Queue(["Typeset", MathJax.Hub, contenido[0]]); // Actualizar la visualización de latex
        // }
    </script>

@stop