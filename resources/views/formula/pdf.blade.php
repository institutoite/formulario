<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Fórmulas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0 40px;
            color: #333;
        }

        header, footer {
            text-align: center;
            margin: 20px 0;
        }

        header img, footer img {
            height: 50px;
        }

        h1 {
            text-align: center;
            font-size: 20px;
            margin-top: 0;
            border-bottom: 2px solid #666;
            padding-bottom: 5px;
        }

        .formula-container {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin: 10px 0;
            background-color: #f9f9f9;
        }

        .formula-title {
            font-weight: bold;
            margin-bottom: 8px;
            text-align: center;
        }

        .formula-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .formula-image {
            max-width: 100%;
            max-height: 80px;
        }

        .latex-img {
            flex: 1;
            text-align: center;
        }

        .extra-img {
            flex: 1;
            text-align: center;
        }

        .formula-content.single {
            justify-content: center;
        }

        footer p {
            font-size: 10px;
            color: #777;
        }
    </style>
</head>
<body>

    <header>
        <img src="{{ public_path('images/logo.png') }}" alt="ITE Educabol">
        <h1>Formulario de Fórmulas - {{ $tema->tema }}</h1>
    </header>

    @foreach ($formulas as $formula)
        @php
            $latexImg = $imagenes[$formula->id] ?? null;
            $extraImgPath = $formula->imagen_complementaria ?? null; // Asegúrate de que este campo exista
            $showExtra = $extraImgPath && file_exists(public_path($extraImgPath));
        @endphp

        <div class="formula-container">
            <div class="formula-title">{{ $formula->nombre }}</div>
            <div class="formula-content {{ $showExtra ? '' : 'single' }}">
                <div class="latex-img">
                    <img src="{{ public_path($latexImg) }}" class="formula-image" alt="Fórmula">
                </div>
                @if($showExtra)
                    <div class="extra-img">
                        <img src="{{ public_path($extraImgPath) }}" class="formula-image" alt="Imagen relacionada">
                    </div>
                @endif
            </div>
        </div>
    @endforeach

    <footer>
        <img src="{{ public_path('images/logo.png') }}" alt="ITE">
        <p>ITE Educabol - Formación que transforma | Contacto: 760902299 | Santa Cruz, Bolivia</p>
    </footer>

</body>
</html>
