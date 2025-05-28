<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/ite.ico') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fórmulas de {{ $tema->tema }} | ITE Fórmulas</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}"> 
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/temas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materias.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formulas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formula.css') }}">  {{-- css para el ciclo de las formulas --}}
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">  {{-- css para el ciclo de las formulas --}}


       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        #btn-imprimir {
            background-color: #26baa5;
            color: #fff;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        #btn-imprimir:hover {
            background-color: #333;
        }

        .resource-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 10px;
            transition: transform 0.2s ease;
        }

        .resource-card:hover {
            transform: translateY(-5px);
        }

        .resource-content h3 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .action-btn {
            margin-right: 5px;
            font-size: 16px;
            color: #444;
            transition: color 0.3s ease;
        }

        .action-btn:hover {
            color: #007bff;
        }
        .resource-content p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Header with Navigation -->
    <header class="main-header">
        <div class="container header-container">
            <div class="logo-container">
                <h1>Fórmulas</h1>
                <p class="tagline">Tu recurso educativo completo</p>
            </div>
            <nav class="main-nav">
                {{-- <button class="menu-toggle" aria-label="Abrir menú">
                    <i class="fas fa-bars"></i>
                </button> --}}
                <button class="menu-toggle" aria-label="Abrir menú">
                    <span class="hamburger"></span>
                </button>
                
                <ul class="nav-links">
                    <li><a href="{{ route('inicio') }}">Inicio</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('inicio') }}">Materias</a></li>
                <li>{{ $tema->tema }}</li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main class="app-container">
        <!-- Formula Cards Section -->
        <section class="formula-header-section">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h1 class="text-white">FÓRMULAS DEL TEMA: {{ $tema->tema }}</h1> 
                    {{-- <a href="{{ route('formulas.create', $tema) }}" class="btn btn-primary float-right">
                        <i class="fa fa-plus"></i>&nbsp;Nuevo
                    </a> --}}
                </div>
                <div class="card-body">
                    <div class="row formulas-grid">
                        @foreach ($formulas as $formula)
                            <div class="formula-card">
                                <header class="formula-header">
                                    <h3>{{ $formula->nombre }}</h3>
                                  
                                </header>
                                
                                    @if($formula->imagen)
                                        <div class="formula-body">
                                            <img src="{{ URL::to('/').Storage::url($formula->imagen->url) }}" alt="Representación gráfica de {{ $formula->nombre }}" class="formula-image">
                                        </div>
                                    @endif

                                
                                <footer class="formula-footer">
                                    <div class="formula-content">{{ $formula->formula }}</div>
                                    <a href="{{ route('mostrar.qr',$tema->id) }}" 
                                        class="whatsapp-btn" 
                                        target="_blank" 
                                        rel="noopener noreferrer">
                                        <i class="fa-solid fa-cloud-arrow-down fa-beat"></i> Dscargar
                                    </a>
                                </footer>
                                    @auth
                                        <div class="formula-actions">
                                            <a href="{{ route('formulas.edit', $formula) }}" class="action-btn edit" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="eliminar" id="{{$formula->id}}"><i class="fas fa-trash-alt text-danger"></i></a>
                                            <a href="{{ route('formulas.create', $tema->id) }}" class="action-btn add" title="Añadir fórmula">
                                                <i class="fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    @endauth

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <div style="text-align: center; margin: 40px 0;">
            <a href="{{ route('mostrar.qr',$tema->id) }}" id="btn-imprimir" class="btn btn-secondary">
                <i class="fas fa-print"></i> Imprimir o Descargar PDF
            </a>
            
        </div>

        <section class="related-resources">
                
                <div class="servicios-container">
                <h2 class="servicios-titulo">¿Cómo podemos ayudarte?</h2>
                
                <div class="servicios-grid">
                    <!-- Card 1: Formulario específico -->
                    <div class="servicio-card">
                        <div class="servicio-icono">📝</div>
                        <h3 class="servicio-nombre">Formulario</h3>
                        <p class="servicio-descripcion">¿Necesitas un formulario específico?</p>
                        <a href="https://wa.me/59171324941?text=Hola,%20necesito%20un%20formulario%20específico%20sobre:%20[Indica%20el%20tema]" 
                        class="servicio-boton" 
                        target="_blank">
                        Solicitar
                        </a>
                    </div>
                    
                    <!-- Card 2: Clases de apoyo -->
                    <div class="servicio-card">
                        <div class="servicio-icono">👨‍🏫</div>
                        <h3 class="servicio-nombre">Clases</h3>
                        <p class="servicio-descripcion">¿Buscas clases de apoyo personalizadas?</p>
                        <a href="https://wa.me/59171324941?text=Hola,%20estoy%20interesado/a%20en%20clases%20de%20apoyo%20de:%20[Materia%20o%20tema]" 
                        class="servicio-boton" 
                        target="_blank">
                        Consultar
                        </a>
                    </div>
                    
                    <!-- Card 3: Resolución de prácticos -->
                    <div class="servicio-card">
                        <div class="servicio-icono">✅</div>
                        <h3 class="servicio-nombre">Prácticos</h3>
                        <p class="servicio-descripcion">¿Tienes un práctico que necesitas resolver?</p>
                        <a href="https://wa.me/59171324941?text=Hola,%20necesito%20ayuda%20con%20un%20práctico%20de:%20[Describe%20el%20tema%20o%20adjunta%20foto]" 
                        class="servicio-boton" 
                        target="_blank">
                        Resolver
                        </a>
                    </div>
                    
                    <!-- Card 4: Proyectos académicos -->
                    <div class="servicio-card">
                        <div class="servicio-icono">💡</div>
                        <h3 class="servicio-nombre">Proyectos</h3>
                        <p class="servicio-descripcion">¿Necesitas ayuda con un proyecto escolar/universitario?</p>
                        <a href="https://wa.me/59171324941?text=Hola,%20requiero%20asistencia%20con%20un%20proyecto%20de:%20[Describe%20el%20proyecto]" 
                        class="servicio-boton" 
                        target="_blank">
                        Asesoría
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Media Banner -->
        <section class="social-banner mini">
            <div class="container">
                <div class="social-content">
                    <h2>¡Síguenos para más recursos educativos!</h2>
                    <div class="social-links">
                        <a href="https://www.tiktok.com/@ite_educabol" target="_blank" class="social-link tiktok">
                            <i class="fab fa-tiktok"></i>
                            <span>TikTok</span>
                        </a>
                        <a href="https://www.facebook.com/ite.educabol" target="_blank" class="social-link facebook">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </a>
                        <a href="https://www.youtube.com/@ite_educabol" target="_blank" class="social-link youtube">
                            <i class="fab fa-youtube"></i>
                            <span>YouTube</span>
                        </a>
                        <a href="https://whatsapp.com/channel/0029VaAu3lwJJhzX5iSJBg44" target="_blank" class="social-link whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Resources Section -->
        
    </main>

        <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>Qué es ite?</h3>
                    <p>Somos una institución educativa dedicada a proporcionar recursos de calidad para estudiantes de todos los niveles.</p>
                    <div class="footer-social">
                        <a target="_blank" href="https://www.tiktok.com/@ite_educabol" class="social-icon"><i class="fab fa-tiktok"></i></a>
                        <a target="_blank" href="https://www.facebook.com/ite.educabol" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.youtube.com/@ite_educabol" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a target="_blank" href="https://wa.me/59160902299" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        <a target="_blank" href="https://www.instagram.com/tu_usuario" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://ite.com.bo" class="social-icon"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Enlaces rápidos</h4>
                    <ul>
                        <li><a target="_blank" href="https://ite.com.bo">Qué es ite?</a></li>
                        <li><a target="_blank" href="https://formula.ite.com.bo">Fórmulas</a></li>
                        <li><a target="_blank" href="https://services.ite.com.bo">Cursos</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Materias</h4>
                    <ul class="materias-list">
                        <li><a href="#" class="whatsapp-link" data-msg="Computación">Computación</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Robótica">Robótica</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Cubo Rubik">Cubo Rubik</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Programación">Programación</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Apoyo escolar">Apoyo escolar</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Cursos</h4>
                    <ul class="materias-list">
                         <li><a href="#" class="whatsapp-link" data-msg="Matematicas">Matemáticas</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Fisica">Física</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Quimica">Química</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Programacion">Programación</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="lenguaje">Escritura y Lectura</a></li>
                    </ul>
                </div>
                
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 ITE Fórmulas. Todos los derechos reservados.</p>
                <div class="footer-legal">
                    <a href="https://www.tiktok.com/@davidflores.ite" target="_blank">David Flores</a>
                    <a href="https://www.ite.com.bo" target="_blank">ite educabol</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modals -->

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.js') }}"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/contrib/auto-render.min.js" onload="renderMathInElement(document.body);"></script>

    <script>
                document.querySelectorAll('.whatsapp-link').forEach(link => {
            const materia = link.getAttribute('data-msg');
            console.log("materia",materia);
            let mensaje = '';
            
            // Mensajes personalizados para cada materia
            switch(materia) {
                case 'Computación':
                    mensaje = '¡Hola! Estoy interesado/a en el curso de *COMPUTACIÓN* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'Robótica':
                    mensaje = '¡Buenos días! Quisiera información sobre el curso de *ROBÓTICA.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'Cubo Rubik':
                    mensaje = '¡Saludos! Me interesa el curso de *CUBO RUBIK.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'Programación':
                    mensaje = '¡Hola! Busco información sobre el curso de *PROGRAMACIÓN.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'Apoyo escolar':
                    mensaje = '¡Buenas tardes! Necesito *APOYO ESCOLAR.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'Matematicas':
                    mensaje = '¡Hola! Estoy interesado/a en clases de *MATEMÁTICAS.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'Fisica':
                    mensaje = '¡Buenos días! Necesito clases de *FÍSICA.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'Quimica':
                    mensaje = '¡Saludos! Busco clases de *QUÍMICA.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'Programacion':
                    mensaje = '¡Hola! Quiero aprender *PROGRAMACIÓN.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
                case 'lenguaje':
                    mensaje = '¡Buenas tardes! Me interesa el curso de *Escritura y Lectura.* Mensaje enviado desde https://formula.ite.com.bo';
                    break;
               
            }
            console.log("mensaje",mensaje);
            link.href = `https://wa.me/59171324941?text=${encodeURIComponent(mensaje)}`;
            link.target = '_blank';
        });


        $(document).ready(function() {
            $(".eliminar").on("click", function(e){
                e.preventDefault();
                id_formula=$(this).attr('id');
                //console.log(id_formula);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                Swal.fire({
                    title: 'Estas seguro(a) de eliminar este registro?',
                    text: "Si eliminas el registro no lo podras recuperar jamás!",
                    icon: 'question',
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#25ff80',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Eliminar..!',
                    position: 'center',
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: '../eliminar/formula/'+id_formula,
                            type: 'DELETE',
                            data: {
                                _token: $("meta[name='csrf-token']").attr("content"),
                            },
                            success: function (result) {
                                //console.log(result);
                                $("#" + id_formula).parents('.card').first().remove();
                                
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                //mensajeErr();
                            }
                        });
                    } 
                })
            });
            
        });
    </script>

</body>
</html>

