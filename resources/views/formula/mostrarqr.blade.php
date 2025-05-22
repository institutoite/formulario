<div class="container">
    <div class="header">
        <div class="titulo">Con tu apoyo:</div>
        <div class="subtitulo">📥 Recibirás el PDF completo al enviar tu comprobante</div>
    </div>

    
    <div class="qr-section">
        <div class="frase-impacto">
            <p class="frase-principal">"Tu apoyo hoy mantiene vivo este proyecto para cuando tu hijo lo necesite"</p>
            <p class="frase-secundaria">Cada donación, por pequeña que sea, siembra oportunidades para miles de estudiantes</p>
        </div>
        
        <div class="qr-container">
            <img src="{{ asset('storage/qr/qr.jpg') }}" alt="QR de donación" class="qr-img" id="qrImage">
            
            <div class="qr-actions">
                <button id="descargarQr" class="btn-descargar">
                    <i class="fas fa-download"></i> Descargar QR
                </button>
            </div>
        </div>
        
        <div class="instrucciones">
            <p>1. Escanea el QR con tu app bancaria</p>
            <p>2. O descárgalo para escanearlo desde tu galería</p>
            <p>3. Envía tu comprobante para recibir el PDF</p>
        </div>
    </div>

    <a href="https://wa.me/59160902299?text={{ urlencode('Hola, realicé mi donación para el formulario de *' . $tema->tema . '* de *' . $materia->materia . '*.\n\nAdjunto comprobante. Por favor envíenme el PDF.\n\nEnlace del formulario: ' . route('formulario.descargar', ['materia_id' => $materia->id, 'tema_id' => $tema->id])) }}" 
       class="whatsapp-btn" 
       target="_blank">
       <i class="fab fa-whatsapp"></i> Enviar comprobante
    </a>

    <div class="nota">
        <p>¡Gracias por apoyar la educación! El PDF llegará a tu WhatsApp en minutos.</p>
    </div>
</div>

<style>
    :root {
        --color-primary: #10b981;
        --color-whatsapp: #25D366;
        --color-text: #334155;
        --color-light: #f8fafc;
    }
    
    body {
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        background: var(--color-light);
        color: var(--color-text);
        margin: 0;
        padding: 20px;
        line-height: 1.5;
    }
    
    .container {
        
        margin: 0 auto;
        background: white;
        padding: 25px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }
    
    .header {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .titulo {
        font-size: clamp(1.5rem, 4vw, 1.8rem);
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 8px;
    }
    
    .subtitulo {
        font-size: clamp(1rem, 3vw, 1.1rem);
        color: #64748b;
    }
    
    .motivacion {
        background: #f0fdf4;
        padding: 16px;
        border-radius: 12px;
        margin: 20px 0;
        border-left: 4px solid var(--color-primary);
    }
    
    .motivacion p {
        font-weight: 600;
        margin-top: 0;
    }
    
    .motivacion ul {
        padding-left: 24px;
        margin-bottom: 0;
    }
    
    .motivacion li {
        margin-bottom: 8px;
    }
    
    .qr-section {
        margin: 25px 0;
        text-align: center;
    }
    
    .monto-sugerido {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--color-primary);
        margin-bottom: 15px;
    }
    
    .qr-container {
        max-width: 280px;
        margin: 0 auto 20px;
        padding: 15px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .qr-img {
        width: 100%;
        height: auto;
        max-width: 250px;
        display: block;
        margin: 0 auto;
    }
    
    .qr-actions {
        margin-top: 15px;
    }
    
    .btn-descargar {
        background: var(--color-primary);
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .btn-descargar:hover {
        background: #0e9f6e;
        transform: translateY(-2px);
    }
    
    .instrucciones {
        text-align: left;
        font-size: 0.95rem;
    }
    
    .instrucciones p {
        margin: 8px 0;
    }
    
    .whatsapp-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background-color: var(--color-whatsapp);
        color: white;
        padding: 15px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        margin: 25px 0;
        transition: all 0.3s;
    }
    
    .whatsapp-btn:hover {
        background-color: #128C7E;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .nota {
        text-align: center;
        font-size: 0.9rem;
        color: #64748b;
        margin-top: 20px;
    }
    
    @media (max-width: 480px) {
        .container {
            padding: 20px 15px;
            border-radius: 12px;
            max-width: 100%;
        }
        
        .qr-container {
            max-width: 100%;
            padding: 15px 10px;
        }
        
        .qr-img {
            max-width: 200px;
        }
        
        .btn-descargar {
            width: 100%;
            justify-content: center;
        }
    }

    /*CSS PARA LA FRASES DE DONACION */
    .frase-impacto {
        text-align: center;
        margin: 25px 0;
        padding: 15px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9f5ff 100%);
        border-radius: 10px;
        border-left: 4px solid #3498db;
    }

    .frase-principal {
        font-size: 1.3rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 8px;
        line-height: 1.4;
    }

    .frase-secundaria {
        font-size: 1.1rem;
        color: #7f8c8d;
        font-style: italic;
        position: relative;
        padding-top: 8px;
    }

    .frase-secundaria::before {
        content: "";
        display: block;
        width: 50px;
        height: 2px;
        background: #3498db;
        margin: 0 auto 8px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Descargar QR
    document.getElementById('descargarQr').addEventListener('click', function() {
        const qrImage = document.getElementById('qrImage');
        const imageUrl = qrImage.src;
        const fileName = 'qr-donacion-' + new Date().toISOString().slice(0, 10) + '.jpg';
        
        fetch(imageUrl)
            .then(response => response.blob())
            .then(blob => {
                const blobUrl = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = blobUrl;
                a.download = fileName;
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(blobUrl);
                document.body.removeChild(a);
                
                // Opcional: Mostrar mensaje de éxito
                alert('QR descargado correctamente. Ahora puedes escanearlo desde tu galería.');
            })
            .catch(error => {
                console.error('Error al descargar QR:', error);
                alert('Ocurrió un error al descargar el QR. Por favor inténtalo de nuevo.');
            });
    });
    
    // Efecto al pasar el mouse sobre botones
    const buttons = document.querySelectorAll('button, a[class*="btn"]');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            btn.style.transform = 'translateY(-2px)';
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translateY(0)';
        });
    });
});
</script>