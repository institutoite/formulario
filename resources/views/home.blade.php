@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
    <link href="{{ asset('vendor/fileinput/css/fileinput.css') }}" rel="stylesheet">
    <style>
        .dashboard-hero {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 220px;
            gap: 24px;
            align-items: center;
            padding: 28px;
            border-radius: 8px;
            background: linear-gradient(135deg, rgba(38, 186, 165, 0.16), rgba(55, 95, 122, 0.10)), #ffffff;
            border: 1px solid rgba(55, 95, 122, 0.12);
            box-shadow: 0 18px 40px rgba(55, 95, 122, 0.12);
        }

        .dashboard-hero h1 {
            color: #375F7A;
            font-weight: 900;
            margin-bottom: 8px;
        }

        .dashboard-hero p {
            color: #495057;
            margin-bottom: 18px;
        }

        .dashboard-hero img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .dashboard-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            margin-top: 20px;
        }

        .dashboard-action {
            display: block;
            padding: 18px;
            border-radius: 8px;
            background: #ffffff;
            border: 1px solid rgba(55, 95, 122, 0.12);
            color: #375F7A;
            font-weight: 800;
            box-shadow: 0 12px 28px rgba(55, 95, 122, 0.10);
        }

        .dashboard-action i {
            color: #26BAA5;
            margin-right: 8px;
        }

        @media (max-width: 768px) {
            .dashboard-hero {
                grid-template-columns: 1fr;
            }
        }
    </style>
@stop
@section('title', 'Dashboard | IFE formulas')
@section('content')
    <section class="dashboard-hero">
        <div>
            <h1>Panel principal de IFE formulas</h1>
            <p>Administra materias, temas, fórmulas, variables y ejemplos desde un espacio más claro y visual.</p>
            <a href="{{ route('materias.index') }}" class="btn btn-primary">
                <i class="fas fa-layer-group"></i> Gestionar materias
            </a>
        </div>
        <img src="{{ asset('images/isologo.png') }}" alt="IFE formulas">
    </section>

    <div class="dashboard-actions">
        <a class="dashboard-action" href="{{ route('materias.index') }}"><i class="fas fa-book"></i> Materias</a>
        <a class="dashboard-action" href="{{ route('inicio') }}"><i class="fas fa-home"></i> Vista pública</a>
        <a class="dashboard-action" href="{{ route('buscar') }}?q=formula"><i class="fas fa-search"></i> Buscador</a>
    </div>

@stop

@section('js')
    <script>

    </script>
@stop
