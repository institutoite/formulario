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
            /*border: 1px solid rgb(55,95,122);*/
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

       /* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  imagen %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
    
    .formula-table {
        border: 1px solid #26baa5;
        border-radius: 4px;
        margin-bottom: 20px;
        width: 100%;
        border-collapse: collapse;
        page-break-inside: avoid; /* Evita división entre páginas en PDF */
    }
    
    .formula-header {
        background-color: #26baa5;
        padding: 10px 15px;
        font-weight: bold;
        border-bottom: 1px solid #ddd;
        text-align: center;
        color: white;
    }
    
    .formula-cell, .image-cell {
        padding: 15px;
        vertical-align: middle;
        text-align: center;
        border: none;
    }
    
    .formula-image, .extra-image {
        max-width: 100%;
        max-height: 150px; /* Ajusta según necesidad */
        height: auto;
        display: block;
        margin: 0 auto;
    }
    
    /* Estilo para cuando no hay imagen asociada */
    .image-cell:empty {
        background-color: white;
    }


       /* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  imagen %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

        .formula-image {
            max-width: 100%;
            max-height: 100px;
            /*border: 8px solid #790909;*/
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

        /*encabezado de pdf*/
      

    </style>
</head>
<body>

<header style="border-bottom: 2px solid #333; padding-bottom: 10px; margin-bottom: 20px;">
    <table width="100%">
        <tr>
            <td width="">
                <img src="{{ public_path('images/logo.png') }}" alt="ITE Educabol">
            </td>
            <td width="60%" style="text-align: center;">
                <h2 style="margin: 0; font-size: 20px;">Tema:{{ $tema->tema }}</h2>
                <p style="margin: 0; font-size: 13px;">Tel: +591 75553338 | www.ite.com.bo</p>
                <p style="margin: 0; font-size: 13px;">Correo: formula@ite.com.bo</p>
            </td>
            <td width="20%" style="text-align: right; font-size: 12px;">
                <p>Fecha: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
                
            </td>
        </tr>
    </table>

    
    
</header>


   @foreach ($formulas as $formula)
  @php
    $latexImg = $imagenes[$formula->id] ?? null;
    $extraImgPath = $formula->imagen->url ?? null;
    
    // Versión robusta para verificar la imagen
    $showExtra = false;
    if (!empty($extraImgPath)) {
        $fullPath = public_path(ltrim($extraImgPath, '/'));
        $showExtra = file_exists($fullPath);
    }
@endphp

    <table class="formula-table" width="100%" cellspacing="0" cellpadding="0" border="0">
        <!-- Primera fila: Nombre de la fórmula (colspan 2) -->
        <tr>
            <td colspan="2" class="formula-header">
                {{ $formula->nombre }}
            </td>
        </tr>
        
        <!-- Segunda fila: Dos columnas (fórmula e imagen) -->
        <tr>
            <!-- Primera columna: Imagen LaTeX -->
            <td width="50%" class="formula-cell">
                <img src="{{ public_path($latexImg) }}" class="formula-image" alt="Fórmula">
            </td>
            
            <!-- Segunda columna: Imagen asociada (solo si existe) -->
            <td width="50%" class="image-cell">
                @if($formula->imagen)
                    @php
                        $imagePath = storage_path('app/public/'.$formula->imagen->url);
                        $imageData = base64_encode(file_get_contents($imagePath));
                    @endphp
                    <img src="data:image/jpeg;base64,{{ $imageData }}" class="extra-image">
                @endif
                {{-- {{ storage_path('app\\public\\'.$formula->imagen->url) }} --}}
            </td>
        </tr>
    </table>
@endforeach

   

   <footer style="position: fixed; bottom: -60px; left: 0; right: 0; height: 60px; font-size: 11px; color: #555;">
        <hr style="border: none; height: 2px; background-color: #ccc; margin-bottom: 5px;">

        <table width="100%">
            <tr>
                <td width="15%" style="text-align: left;">
                    <img src="{{ public_path('images/logo.png') }}" alt="ITE" style="height: 45px;">
                </td>
                <td width="70%" style="text-align: center;">
                    <p style="margin: 0;">ITE Educabol</p>
                    <p style="margin: 0;">Tel:+59175553338 | www.ite.com.bo | contacto@ite.com.bo</p>
                    <p style="margin: 0;">Santa Cruz, Bolivia</p>
                </td>
                
            </tr>
        </table>
    </footer>
</body>
</html>
