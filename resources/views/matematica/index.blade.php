@extends('adminlte::page')

@section('title', 'Matemática')

@section('')
    <h1>Formulas Matemáticas</h1>
@stop
@section('content')
    {{-- <table class="table table-bordered">
        <thead>
            <tr>
                <th>Figura geométrica</th>
                <th>Fórmula</th>
                <th>Gráfico</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Triángulo</td>
                <td>A = (b * h) / 2</td>
                <td></td>
            </tr>
            <tr>
                <td>Cuadrado</td>
                <td>A = lado * lado</td>
                <td></td>
            </tr>
            <tr>
                <td>Pentágono regular</td>
                <td>A = (lado * apotema * 5) / 2</td>
                <td></td>
            </tr>
            
        </tbody>
    </table> --}}
    <div class="mt-3">
        <div class="card">
            <img class="card-img-top" src="{{asset('/public/images/areas.png')}}" alt="">
            <div class="card-header">
                AREAS
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Areas figuras geometricas</span>
                                <span class="info-box-number">12 Figuras</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Volumenes</span>
                                <span class="info-box-number">15 Figuras</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Volumenes</span>
                                <span class="info-box-number">15 Figuras</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Volumenes</span>
                                <span class="info-box-number">15 Figuras</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Volumenes</span>
                                <span class="info-box-number">15 Figuras</span>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <img class="card-img-bottom" src="" alt="">
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop