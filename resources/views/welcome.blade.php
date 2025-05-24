<!DOCTYPE html>
<html lang="es">
<head>
    <title>ITE Fórmulas - Tu recurso educativo</title>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('image/ite.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fórmulas de física, química, matemáticas y más para estudiantes">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materias.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fundador.css') }}">
    <link rel="stylesheet" href="{{ asset('css/redes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/unete.css') }}">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS de Slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <!-- CSS de Slick Theme -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
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
                    <li><a href="#cursos">Cursos</a></li>
                    <li><a href="#materias">Materias</a></li>
                    <li><a href="{{ route('login') }}">login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h2>Aprende con las mejores fórmulas y recursos educativos</h2>
                <p>Encuentra fórmulas de física, química, matemáticas y más, organizadas por materias y temas</p>
                <div class="hero-buttons">
                    <a href="#materias" class="btn btn-primary">Ver Materias</a>
                    <a href="#cursos" class="btn btn-secondary">Nuestros Cursos</a>
                </div>
            </div>
            <div class="hero-image">
                <a href="https://www.tiktok.com/@davidflores.ite">
                    <img src="{{ asset('images/david.png') }}" alt="Fórmulas educativas">
                </a>

            </div>
        </div>
    </section>

    <!-- Materias Section -->
    <section id="materias" class="materias-section">
        <div class="container">
            <div class="section-header">
                <h2>Explora por Materias</h2>
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
    
    <!-- Modal para materias sin fórmulas -->
    <div id="noFormulasModal" class="modal">
        <div class="modal-content">
            <h4 class="modal-title">¡Próximamente!</h4>
            <p class="modal-text">La materia <span id="materiaName"></span> aún no tiene fórmulas disponibles. Comenta en el video para que lo agreguemos lo antes posible.</p>
            <button class="modal-close" onclick="closeModal()">Entendido</button>
        </div>
    </div>
    
    
    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%     Recursos Section %%%%%%%%%%%%%%%%-->

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
        <a href="https://wa.me/1234567890?text=¡Hola!%20Quiero%20info%20del%20curso%20COMPUTACIÓN" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=¡Hola!%20Info%20curso%20ROBÓTICA%20por%20favor" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=Info%20curso%20CUBO%20RUBIK" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=Info%20curso%20PROGRAMACIÓN" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=Info%20APOYO%20PRIMARIA" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=Info%20APOYO%20SECUNDARIA" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=Info%20CURSOS%20PREUNIVERSITARIOS" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=Info%20CURSOS%20UNIVERSITARIOS" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=Info%20SISTEMAS%20WEB" class="whatsapp-btn">
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
        <a href="https://wa.me/1234567890?text=Info%20APPS%20MÓVILES" class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i> Mas info
        </a>
    </div>
     <div class="curso-item">
        <div class="curso-icon">
            <i class="fas fa-book-open"></i>
        </div>
        <h3>Lectura y Escritura</h3>
        <p>Desarrolla habilidades comunicativas esenciales</p>
        <a href="https://wa.me/1234567890?text=Info%20curso%20LECTURA%20Y%20ESCRITURA" class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i> Info por WhatsApp
        </a>
    </div>
</div>
            
            
        </div>
    </section>

    {{-- <!-- Novedades Section -->
    <section id="novedades" class="novedades-section">
        <div class="container">
            <div class="section-header">
                <h2>Últimas Novedades</h2>
                <p>Mantente al día con nuestros recursos y actualizaciones</p>
            </div>
            
            <div class="novedades-container">
                <div class="novedad">
                    <div class="novedad-image">
                        <img src="{{ asset('images/novedad1.jpg') }}" alt="Novedad 1">
                    </div>
                    <div class="texto-novedad">
                        <span class="fecha">15 Abril, 2025</span>
                        <h3>Nuevas fórmulas de física cuántica</h3>
                        <p>Hemos añadido una nueva sección con fórmulas avanzadas de física cuántica para estudiantes universitarios.</p>
                        <a href="#" class="btn-link">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="novedad">
                    <div class="novedad-image">
                        <img src="{{ asset('images/novedad2.jpg') }}" alt="Novedad 2">
                    </div>
                    <div class="texto-novedad">
                        <span class="fecha">10 Abril, 2025</span>
                        <h3>Curso intensivo de preparación para exámenes</h3>
                        <p>Inscripciones abiertas para nuestro curso intensivo de preparación para exámenes finales.</p>
                        <a href="#" class="btn-link">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="novedad">
                    <div class="novedad-image">
                        <img src="{{ asset('images/novedad3.jpg') }}" alt="Novedad 3">
                    </div>
                    <div class="texto-novedad">
                        <span class="fecha">5 Abril, 2025</span>
                        <h3>Nueva app de fórmulas disponible</h3>
                        <p>Descarga nuestra nueva aplicación móvil con todas las fórmulas disponibles sin conexión.</p>
                        <a href="#" class="btn-link">Leer más <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Colaboradores Section -->
   

    <section class="fundador-section">
    <div class="fundador-container">
        <div class="fundador-foto">
            <!-- Reemplaza con tu foto -->
            <div class="fundador-foto">
                <div class="marco-foto">
                    <img src="{{ asset('images/david.png') }}" alt="David Flores - Fundador" class="foto-perfil">
                </div>
            </div>
            
        </div>
        <div class="fundador-info">
            <h2 class="fundador-titulo">David Flores</h2>
            <p class="fundador-descripcion">
                Creador de proyectos informáticos y apasionado por la educación tecnológica. 
                Especialista en robótica educativa, desarrollo de software y creación de contenido 
                digital para redes sociales.
            </p>
            <a href="https://www.tiktok.com/@davidflores.ite" target="_blank" class="tiktok">
                <div class="social-icon">
                    <i class="fab fa-tiktok"></i>
                </div>
            </a>
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

    <!-- Social Media Banner -->
    {{-- <section class="social-banner">
        <div class="container">
            <div class="social-content">
                <h2>¡Síguenos en redes sociales!</h2>
                <p>Mantente al día con nuestras últimas actualizaciones, recursos gratuitos y consejos de estudio</p>
                
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
                    <a href="https://whatsapp.com/channel/0029VaAu3lwJJhzX5iSJBg44" target="_blank" class="social-link youtube">
                        <i class="fab fa-whatsapp"></i>
                        <span>Canal Whatsapp</span>
                    </a>
                   
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Testimonios Section -->
    {{-- <section class="testimonios-section">
        <div class="container">
            <div class="section-header">
                <h2>Lo que dicen nuestros estudiantes</h2>
                <p>Experiencias de quienes han utilizado nuestros recursos</p>
            </div>
            
            <div class="testimonios-slider">
                <div class="testimonio">
                    <div class="testimonio-content">
                        <p>"Gracias a las fórmulas y explicaciones de ITE Fórmulas, pude aprobar mi examen de física con excelente calificación."</p>
                        <div class="testimonio-autor">
                            <img src="{{ asset('images/estudiante1.jpg') }}" alt="Estudiante 1">
                            <div>
                                <h4>María González</h4>
                                <p>Estudiante de Ingeniería</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonio">
                    <div class="testimonio-content">
                        <p>"El curso de robótica superó mis expectativas. Los profesores son excelentes y el material muy completo."</p>
                        <div class="testimonio-autor">
                            <img src="{{ asset('images/estudiante2.jpg') }}" alt="Estudiante 2">
                            <div>
                                <h4>Pedro Ramírez</h4>
                                <p>Estudiante de Secundaria</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonio">
                    <div class="testimonio-content">
                        <p>"Las clases de apoyo en matemáticas me ayudaron a mejorar significativamente mis calificaciones."</p>
                        <div class="testimonio-autor">
                            <img src="{{ asset('images/estudiante3.jpg') }}" alt="Estudiante 3">
                            <div>
                                <h4>Lucía Fernández</h4>
                                <p>Estudiante de Bachillerato</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Contacto Section -->
    <section id="contacto" class="contacto-section">
        <div class="container">
            <div class="contacto-grid">
                <div class="contacto-info">
                    <div class="section-header">
                        <h2>Contáctanos</h2>
                        <p>¿Tienes preguntas? Estamos aquí para ayudarte</p>
                    </div>
                    
                    <div class="info-items">
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Dirección</h4>
                                <p>Villa 1 de mayo, calle 16 oeste #9</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Teléfono</h4>
                                <p>+59160902299</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>formulas@ite.com.bo</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Horario</h4>
                                <p>Lunes a Sábado: 7:30 am - 06:30pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contacto-form">
                    <form onsubmit="enviarWhatsApp(event)" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar a WhatsApp</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>¿Listo para unirte a nuestro equipo innovador?</h2>
            <p class="cta-subtitle">
                Buscamos colaboradores apasionados por la educación tecnológica. 
                ¡Tu experiencia es valiosa para nosotros!
            </p>
            
            <div class="cta-actions">
                <a href="https://wa.me/59160902299?text=¡Hola!%20Quiero%20ser%20parte%20de%20este%20proyecto.%20Puedo%20colaborar%20en:" 
                   class="cta-button whatsapp-btn" 
                   target="_blank" 
                   rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i> ÚNETE AL EQUIPO
                </a>
            </div>
            
            <p class="cta-footer">
                <i class="fas fa-lightbulb"></i> ¡Juntos crearemos el futuro de la educación tecnológica!
            </p>
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

    <!-- JS de jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JS de Slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    
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

        
        // document.addEventListener('DOMContentLoaded', () => {
        //     const whatsappLinks = document.querySelectorAll('.whatsapp-link');
        //     const numeroWhatsApp = '59160902299'; // Número destino (sin +)
          
        //     whatsappLinks.forEach(link => {
        //         link.addEventListener('click', (e) => {
        //             e.preventDefault();
        //             const mensaje = encodeURIComponent(link.dataset.msg);
        //             window.open(`https://wa.me/${numeroWhatsApp}?text=${mensaje}`, '_blank');
        //         });
        //     });
        // });
        
        function enviarWhatsApp(event) {
            event.preventDefault();
            
            const nombre = document.getElementById('nombre').value;
            const telefono = document.getElementById('telefono').value;
            const mensaje = document.getElementById('mensaje').value;
            
            // Formatea el mensaje para URL
            const texto = `*Nombre:* ${nombre}%0A*Teléfono:* ${telefono}%0A*Mensaje:* ${mensaje} Mensaje enviado desde https://formula.ite.com.bo`;
            
            // Redirige a WhatsApp (cambia el número al destino)
            window.open(`https://wa.me/59160902299?text=${texto}`, '_blank');
        }

        $(document).ready(function(){
            // Menú móvil
            $('.menu-toggle').click(function() {
                $('.nav-links').toggleClass('active');
            });
            
            // Slider de profesores
            $('.slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
            
            // Slider de testimonios
            $('.testimonios-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                arrows: true,
                dots: true
            });
        });
        

        function showNoFormulasModal(materiaName) {
            document.getElementById('materiaName').textContent = materiaName;
            document.getElementById('noFormulasModal').style.display = 'block';
        }
        
        function closeModal() {
            document.getElementById('noFormulasModal').style.display = 'none';
        }
        
        // Cerrar modal al hacer clic fuera de él
        window.onclick = function(event) {
            var modal = document.getElementById('noFormulasModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>
</html>