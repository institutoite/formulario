@extends('layouts.app')

@section('content')
<div class="container py-4">
    <section class="search-results-hero mb-4">
        <div>
            <span class="text-uppercase fw-bold" style="color:#26BAA5;">IFE formulas</span>
            <h1>Resultados para "{{ $query }}"</h1>
            <p>Explora fórmulas relacionadas por materia y tema, con una lectura más rápida y ordenada.</p>
        </div>
        <img src="{{ asset('images/isologo.png') }}" alt="IFE formulas">
    </section>

    @if($formulas->count() > 0)
        <div class="row">
            @foreach($formulas as $formula)
                <div class="col-md-6 col-lg-4 mb-4">
                    <article class="card h-100">
                        @if($formula->imagen)
                            <img src="{{ Storage::url($formula->imagen->url) }}" class="card-img-top" alt="{{ $formula->nombre }}">
                        @else
                            <img src="{{ asset('images/matematica.jpg') }}" class="card-img-top" alt="{{ $formula->nombre }}">
                        @endif
                        <div class="card-body">
                            <h2 class="h5 card-title">{{ $formula->nombre }}</h2>
                            <p class="card-text">{{ Str::limit(strip_tags($formula->detalle), 110) }}</p>
                            <p class="text-muted mb-3">
                                {{ $formula->tema->materia->materia }} | {{ $formula->tema->tema }}
                            </p>
                            <a href="{{ route('formulas.show', $formula) }}" class="btn btn-primary">Ver fórmula</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        {{ $formulas->links() }}
    @else
        <div class="alert alert-info">
            No se encontraron fórmulas que coincidan con "{{ $query }}".
        </div>
        <a href="{{ route('inicio') }}" class="btn btn-secondary">Volver al inicio</a>
    @endif
</div>
@endsection
