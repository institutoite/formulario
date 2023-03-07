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
                    <h1 class="text-white">FÓRMULAS DEL TEMA:{{ $tema->tema }}</h1> 
                    <a href="{{route('formulas.create',$tema)}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>&nbsp;Nuevo</a>
                </div>
                <div class="card-body">
                    <div class="row">
                       
                    </div>
                </div>
                {{-- <div class="card-footer">
                    
                </div> --}}
            </div>
        
        
        
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
            
        });
    </script>
@stop