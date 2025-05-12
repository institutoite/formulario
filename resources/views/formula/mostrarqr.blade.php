<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 480px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .titulo {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .monto {
            text-align: center;
            font-size: 1.2rem;
            color: #10b981;
            margin-bottom: 20px;
        }

        .qr {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .qr img {
            max-width: 100%;
            height: auto;
        }

        .pasos {
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .boton-wsp {
            display: block;
            background-color: #25d366;
            color: white;
            text-align: center;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            margin: 10px 0;
        }

        .nota {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>
   
    <div class="container">
        <div class="titulo">Formulario de Taller</div>
        <div class="monto">Monto: Bs. 5</div>

        <div class="qr">
            <img src="{{ asset('storage/qr/qr.png') }}" alt="QR de pago">
        </div>

        <div class="pasos">
            <p>1. Escanee el QR con su app bancaria y realice el pago.</p>
            <p>2. Luego, envíe su comprobante por WhatsApp con el botón siguiente:</p>
        </div>


        <a href="https://wa.me/59160902299?text={{ urlencode('Hola, realicé el pago del formulario del tema *' . $tema->tema . '* de la materia *' . $materia->materia . '.* Adjunto mi comprobante. Gracias. Para su control, este es el formulario solicitado:') }}%0A{{ urlencode(route('formulario.descargar', ['materia_id' => $materia->id, 'tema_id' => $tema->id])) }}" 
            target="_blank" class="boton-wsp">
             Enviar comprobante por WhatsApp
         </a>

        <div class="nota">
            Le enviaremos el formulario en PDF a su WhatsApp o puede recogerlo en nuestras oficinas.
        </div>
    </div>
</body>
</html>
