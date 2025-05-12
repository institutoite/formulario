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
            color: #373737;
            background-color: #ffffff;
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
            font-size: 22px;
            margin: 10px 0;
            color: rgb(55,95,122);
            border-bottom: 3px solid rgb(38,186,165);
            padding-bottom: 6px;
        }

        .formula-container {
            border: 1px solid rgb(55,95,122);
            border-left: 5px solid rgb(38,186,165);
            border-radius: 6px;
            padding: 15px;
            margin: 15px 0;
            background-color: #f4fdfc;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .formula-title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 14px;
            text-align: center;
            color: rgb(55,95,122);
        }

        .formula-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .latex-img, .extra-img {
            flex: 1;
            text-align: center;
        }

        .formula-image {
            max-width: 100%;
            max-height: 100px;
            border: 1px solid #ccc;
            padding: 4px;
            background-color: #fff;
            border-radius: 4px;
        }

        .formula-content.single {
            justify-content: center;
        }

        footer p {
            font-size: 10px;
            color: #666;
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
            $extraImgPath = $formula->imagen_complementaria ?? null;
            $showExtra = $extraImgPath && file_exists(public_path($extraImgPath));
        @endphp

        <div class="formula-container">
            <div class="formula-title">{{ $formula->nombre }}</div>
            <div class="formula-content {{ $showExtra ? '' : 'single' }}">
                <div class="latex-img">
                    <img src="{{ public_path($latexImg) }}" class="formula-image" alt="Fórmula">
                </div>
                @if($formula->imagen)
                    <div class="extra-img">
                        @if($formula->imagen && $formula->imagen->url)
                            @php
                                $imagePath = storage_path('app\\public\\'.$formula->imagen->url);
                                $imageData = base64_encode(file_get_contents($imagePath));
                            @endphp
                            <img src="data:image/jpeg;base64,{{ $imageData }}" 
                                style="max-width: 100%;">
                        @endif
                        
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
