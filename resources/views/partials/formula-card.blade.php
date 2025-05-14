<div class="formula-card">
    <div class="card-header">
        <strong>{{ $formulaName }}</strong>
    </div>
    <div class="card-body">
        <div class="card-expression">
            @if($latexImgPath && file_exists(public_path($latexImgPath)))
                <img src="{{ public_path($latexImgPath) }}" class="formula-image-expression" alt="Expresión Matemática de {{ $formulaName }}">
            @else
                <p class="no-expression-fallback"><em>Expresión matemática no disponible.</em></p>
            @endif
        </div>
        <div class="card-section">
            <p class="section-title">Variables y Significado:</p>
            <div>{!! nl2br(e($variables)) !!}</div>
        </div>
        <div class="card-section">
            <p class="section-title">Aplicación Práctica:</p>
            <p>{!! nl2br(e($aplicacion)) !!}</p>
        </div>
        @if(isset($ejemplo) && $ejemplo)
        <div class="card-section">
            <p class="section-title">Ejemplo Numérico:</p>
            <p>{!! nl2br(e($ejemplo)) !!}</p>
        </div>
        @endif
    </div>
</div>
