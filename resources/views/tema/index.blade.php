<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('image/ite.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $materia->materia }} - Temas | ITE Fórmulas</title>
    
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/temas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/temaciclo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materias.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
</head>
<body>
    <!-- Header con navegación -->
    <header class="main-header">
        <div class="container header-container">
            <div class="logo-container">
                <h1>Fórmulas</h1>
                <p class="tagline">Tu recurso educativo completo</p>
            </div>
            <nav class="main-nav">
                <button class="menu-toggle" aria-label="Abrir menú">
                    <i class="fas fa-bars"></i>
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
                <li><a href="{{ route('materias.index') }}">Materias</a></li>
                <li>{{ $materia->materia }}</li>
            </ul>
        </div>
    </div>

    <!-- Materia Info Section -->
    <section class="materia-info-section">
        <div class="container">
            <div class="materia-info-grid">
                <div class="materia-content">
                    <h1>Fórmulas de {{ $materia->materia }}</h1>
                    <div class="divider"></div>
                    <p class="slogan">{{ $materia->slogan }}</p>
                    <div class="divider"></div>
                    {{-- <p class="detalle">{{ $materia->detalle }}xx</p> --}}
                    
                    <div class="materia-stats">
                        <div class="stat-item">
                            <i class="fas fa-book"></i>
                            <div>
                                <span class="stat-number">{{ count($temas) }}</span>
                                <span class="stat-label">Temas</span>
                            </div>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-calculator"></i>
                            <div>
                                <span class="stat-number">{{ $cantidad_formulas ?? 0 }}</span>
                                <span class="stat-label">Fórmulas</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="materia-image">
                    <img src="{{ asset('images/david.png') }}" alt="Fórmulas educativas">
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Social Media Banner -->
    <section class="social-banner mini">
        <div class="container">
            <div class="social-content">
                <h2>¡Síguenos para más recursos educativos!</h2>
                
                <div class="social-links">
                    <a href="#" class="social-link tiktok">
                        <i class="fab fa-tiktok"></i>
                        <span>TikTok</span>
                    </a>
                    <a href="#" class="social-link facebook">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="#" class="social-link youtube">
                        <i class="fab fa-youtube"></i>
                        <span>YouTube</span>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Temas Section -->
    <section class="temas-section">
        <div class="container">
            <div class="section-header with-action">
                <div>
                    <h2>Temas de {{ $materia->materia }}</h2>
                    <p>Seleccione el tema de su interés</p>
                </div>
                @auth
                <a href="{{ route('temas.crear', $materia) }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Nuevo tema
                </a>
                @endauth
            </div>
            
            <div class="temas-grid">
                @foreach ($temas as $tema)
                    <div class="tema-item">
                        <a href="{{ route('formulas.index', $tema) }}" class="tema-nombre">
                            {{ $tema->tema }}
                        </a>
                        <p class="tema-descripcion">{{ $tema->slogan }}</p>
                    </div>
                    @auth
                    <div class="tema-header">
                        <h3>{{ $tema->tema }}</h3>
                            <div class="tema-actions">
                                <a href="{{ route('temas.edit', $tema) }}" class="action-btn edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="action-btn delete eliminar" data-id="{{ $tema->id }}" title="Eliminar">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <a href="{{ route('formulas.create', $tema->id) }}" class="action-btn add" title="Añadir fórmula">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </div>
                        </div>  
                    @endauth
                @endforeach
            </div>
        </div>
    </section>


    <section class="social-banner">
    <div class="container">
        <div class="social-content">
            <h2>¡Conéctate con nuestra comunidad educativa!</h2>
            <p class="subtitle">Contenido exclusivo, tips de estudio y novedades tecnológicas</p>
            
            <div class="social-links">
                <a href="https://www.tiktok.com/@ite_educabol" target="_blank" class="social-link tiktok">
                    <div class="social-icon">
                        <i class="fab fa-tiktok"></i>
                    </div>
                    <span>TikTok</span>
                </a>
                
                <a href="https://www.facebook.com/ite.educabol" target="_blank" class="social-link facebook">
                    <div class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <span>Facebook</span>
                </a>
                
                <a href="https://www.youtube.com/@ite_educabol" target="_blank" class="social-link youtube">
                    <div class="social-icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <span>YouTube</span>
                </a>
                
                <a href="https://whatsapp.com/channel/0029VaAu3lwJJhzX5iSJBg44" target="_blank" class="social-link whatsapp">
                    <div class="social-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <span>WhatsApp</span>
                </a>
                
                <a href="#" target="_blank" class="social-link instagram">
                    <div class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <span>Instagram</span>
                </a>
                 <a href="https://ite.com.bo" target="_blank" class="social-link website">
                    <div class="social-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <span>Sitio Web</span>
                </a>
                
            </div>
        </div>
    </div>
</section>



    <!-- Cursos Section -->
    <section id="cursos" class="cursos-section">
        <div class="container">
            <div class="section-header">
                <h2>Nuestros Cursos</h2>
                <p>Ofrecemos clases de apoyo escolar y cursos especializados</p>
            </div>
            
           <div class="cursos-grid">
            <!-- Curso de Computación -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Computación</h3>
                <p>Domina lo esencial de informática y herramientas digitales</p>
                <a href="https://wa.me/59175553338?text=¡Hola!%20Quiero%20info%20del%20curso%20COMPUTACIÓN" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Curso de Robótica -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>Robótica</h3>
                <p>Construye y programa robots desde cero</p>
                <a href="https://wa.me/59175553338?text=¡Hola!%20Info%20curso%20ROBÓTICA%20por%20favor" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Curso de Cubo Rubik -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-cube"></i>
                </div>
                <h3>Cubo Rubik</h3>
                <p>Aprende métodos para resolver el cubo mágico</p>
                <a href="https://wa.me/59175553338?text=Info%20curso%20CUBO%20RUBIK" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Curso de Programación -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Programación</h3>
                <p>Aprende Python, JavaScript y desarrollo web</p>
                <a href="https://wa.me/59175553338?text=Info%20curso%20PROGRAMACIÓN" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Apoyo Escolar Primaria -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-child"></i>
                </div>
                <h3>Apoyo Escolar Primaria</h3>
                <p>Refuerzo en matemáticas y comunicación</p>
                <a href="https://wa.me/59175553338?text=Info%20APOYO%20PRIMARIA" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Apoyo Escolar Secundaria -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Apoyo Escolar Secundaria</h3>
                <p>Clases de matemáticas y ciencias</p>
                <a href="https://wa.me/59175553338?text=Info%20APOYO%20SECUNDARIA" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Cursos Preuniversitarios -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-university"></i>
                </div>
                <h3>Cursos Preuniversitarios</h3>
                <p>Preparación para exámenes de admisión</p>
                <a href="https://wa.me/59175553338?text=Info%20CURSOS%20PREUNIVERSITARIOS" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Cursos Universitarios -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Cursos Universitarios</h3>
                <p>Asesoría en cálculo y física universitaria</p>
                <a href="https://wa.me/59175553338?text=Info%20CURSOS%20UNIVERSITARIOS" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Creación de Sistemas Web -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3>Creación de Sistemas Web</h3>
                <p>Aprende desarrollo web completo</p>
                <a href="https://wa.me/59175553338?text=Info%20SISTEMAS%20WEB" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            
            <!-- Aplicaciones Móviles -->
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Aplicaciones Móviles</h3>
                <p>Desarrollo de apps para Android e iOS</p>
                <a href="https://wa.me/59175553338?text=Info%20APPS%20MÓVILES" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
            <div class="curso-item">
                <div class="curso-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Lectura y Escritura</h3>
                <p>Desarrolla habilidades comunicativas esenciales</p>
                <a href="https://wa.me/59175553338?text=Info%20curso%20LECTURA%20Y%20ESCRITURA" target="_blank" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Mas info
                </a>
            </div>
        </div>
            
            
        </div>
    </section>



        <!-- Materias Section -->
    <section id="materias" class="materias-section">
        <div class="container">
            <div class="section-header">
                <h2>Otras materias que podrían interasrte</h2>
                <p>Encuentra todas las fórmulas que necesitas organizadas por asignaturas</p>
            </div>
            <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%     Recursos Section %%%%%%%%%%%%%%%%-->
            <div class="cards-container">
                @foreach ($materias as $materia)
                <div class="card">
                    <div class="card-image">
                        @isset($materia->imagen->url)
                            <img src="{{URL::to('/').Storage::url('public/'.$materia->imagen->url)}}" alt="{{ $materia->materia }}" height="50%">
                        @endisset
                    </div>
                    <div class="card-content">
                        <h3>{{ $materia->materia }}</h3>
                        <p>{{ $materia->slogan }}</p>
                        @if(count($materia->temas) > 0)
                            <a href="{{ route('temas.index', $materia) }}" class="btn btn-card">Ver fórmulas</a>
                        @else
                            <a href="#" class="btn btn-card" onclick="showNoFormulasModal('{{ $materia->materia }}'); return false;">Ver fórmulas</a>
                        @endif
                    </div>
                </div>    
                @endforeach
            </div>
        </div>
    </section>


    <!-- Cursos Promo Section -->
    <section class="cursos-promo-section">
        <div class="container">
            <div class="promo-content">
                <div class="promo-text">
                    <h2>¿Necesitas ayuda con {{ $materia->materia }}?</h2>
                    <p>Ofrecemos clases de apoyo personalizadas para mejorar tu comprensión y rendimiento académico.</p>
                    <ul class="promo-features">
                        <li><i class="fas fa-check-circle"></i> Profesores especializados</li>
                        <li><i class="fas fa-check-circle"></i> Horarios flexibles</li>
                        <li><i class="fas fa-check-circle"></i> Grupos reducidos</li>
                        <li><i class="fas fa-check-circle"></i> Material didáctico exclusivo</li>
                    </ul>
                    <a target="_blank" href="https://wa.me/59175553338?text=Me%20interesa%20aprender%20matemáticas.%20Vengo%20de%20https://formula.ite.com.bo" class="btn btn-primary">Enviar mensaje por WhatsApp</a>
                </div>
                <div class="promo-image">
                    <img src="{{ asset('images/cursos-promo.jpg') }}" alt="Cursos de apoyo">
                </div>
            </div>
        </div>
    </section>

    <!-- Related Subjects -->
    
    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Recibe nuevas fórmulas y recursos</h2>
                <p>Suscríbete a nuestro boletín dejanos tu número para estar al día con las últimas actualizaciones</p>
                
                <form onsubmit="event.preventDefault(); enviarWhatsApp()" class="newsletter-form">
                    <input type="phone" id="email" placeholder="Teléfono" required>
                    
                    <button type="submit" class="btn btn-primary">Enviar número</button>
                </form>
            </div>
        </div>
    </section>

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

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.js') }}"></script>
    
    <script>
         function enviarWhatsApp() {
            const email = document.getElementById('email').value;
            if (email) {
            const mensaje = `Me interesa aprender matemáticas. Mi correo es ${email} (Vengo de https://formula.ite.com.bo)`;
            const url = `https://wa.me/59175553338?text=${encodeURIComponent(mensaje)}`;
            window.open(url, '_blank'); // Abre en nueva pestaña
            }
        }

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
            // Menú móvil
            $('.menu-toggle').click(function() {
                $('.nav-links').toggleClass('active');
            });
            
            // Eliminar tema
            $(".eliminar").on("click", function(e) {
                e.preventDefault();
                const id_tema = $(this).data('id');
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                Swal.fire({
                    title: '¿Estás seguro(a) de eliminar este tema?',
                    text: "Si eliminas el registro no lo podrás recuperar jamás",
                    icon: 'question',
                    showCancelButton: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#4f46e5',
                    cancelButtonColor: '#ef4444',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar',
                    position: 'center',
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: '../eliminar/tema/' + id_tema,
                            type: 'DELETE',
                            data: {
                                _token: $("meta[name='csrf-token']").attr("content"),
                            },
                            success: function (result) {
                                console.log(result);
                                $("#tema-card-" + id_tema).fadeOut(500, function() {
                                    $(this).remove();
                                });
                                
                                Swal.fire({
                                    title: '¡Eliminado!',
                                    text: 'El tema ha sido eliminado correctamente.',
                                    icon: 'success',
                                    confirmButtonColor: '#4f46e5'
                                });
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                Swal.fire({
                                    title: 'Error',
                                    text: 'Ocurrió un error al eliminar el tema.',
                                    icon: 'error',
                                    confirmButtonColor: '#4f46e5'
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>