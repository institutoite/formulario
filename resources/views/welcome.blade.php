<!DOCTYPE html>
<html lang="es">
<head>
    <title>ITE Fórmulas - Tu recurso educativo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fórmulas de física, química, matemáticas y más para estudiantes">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materias.css') }}">
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
                <h1>ITE Fórmulas</h1>
                <p class="tagline">Tu recurso educativo completo</p>
            </div>
            <nav class="main-nav">
                <button class="menu-toggle" aria-label="Abrir menú">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-links">
                    <li><a href="#" class="active">Inicio</a></li>
                    <li><a href="#">Fórmulas</a></li>
                    <li><a href="#">Ejemplos</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Recursos</a></li>
                    <li><a href="#">Contacto</a></li>
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
                <div class="curso-item">
                    <div class="curso-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Computación</h3>
                    <p>Aprende desde lo básico hasta habilidades avanzadas en informática</p>
                </div>
                
                <div class="curso-item">
                    <div class="curso-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Robótica</h3>
                    <p>Diseña, construye y programa robots con nuestros expertos</p>
                </div>
                
                <div class="curso-item">
                    <div class="curso-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3>Cubo Rubik</h3>
                    <p>Aprende técnicas y algoritmos para resolver el cubo de Rubik</p>
                </div>
                
                <div class="curso-item">
                    <div class="curso-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Programación</h3>
                    <p>Desarrolla habilidades de programación con lenguajes modernos</p>
                </div>
                
                <div class="curso-item">
                    <div class="curso-icon">
                        <i class="fas fa-square-root-alt"></i>
                    </div>
                    <h3>Apoyo en Matemáticas</h3>
                    <p>Refuerza tus conocimientos con nuestras clases personalizadas</p>
                </div>
                
                <div class="curso-item">
                    <div class="curso-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Apoyo en Ciencias</h3>
                    <p>Clases de física, química y biología para todos los niveles</p>
                </div>
            </div>
            
            <div class="cursos-cta">
                <a href="#contacto" class="btn btn-primary">Inscríbete ahora</a>
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
    <section class="profesores-destacados">
        <div class="container">
            <div class="section-header">
                <h2>Nuestros Colaboradores</h2>
                <p>Conoce a nuestros mejores profesores y su experiencia en la enseñanza</p>
            </div>
            
            <div class="slider-wrapper">
                <div class="slider">
                    <div class="profesor-slide">
                        <div class="profesor-img">
                            <img src="{{ asset('images/david.png') }}" alt="Profesor 1">
                        </div>
                        <h3>David Flores</h3>
                        <p class="profesor-especialidad">Informático</p>
                        <p>Soy Fundador de ITE y creador de esta plataforma de fórmulas, enfocado en impulsar eficiencia mediante herramientas innovadoras.</p>
                    </div>
                    
                    <div class="profesor-slide">
                        <div class="profesor-img">
                            <img src="{{ asset('images/profesor2.jpg') }}" alt="Profesor 2">
                        </div>
                        <h3>Ana Martínez</h3>
                        <p class="profesor-especialidad">Física y Química</p>
                        <p>Doctora en Química con pasión por la enseñanza y la divulgación científica.</p>
                    </div>
                    
                    <div class="profesor-slide">
                        <div class="profesor-img">
                            <img src="{{ asset('images/profesor3.jpg') }}" alt="Profesor 3">
                        </div>
                        <h3>Carlos Rodríguez</h3>
                        <p class="profesor-especialidad">Programación</p>
                        <p>Ingeniero informático con experiencia en desarrollo web y enseñanza de programación.</p>
                    </div>
                    
                    <div class="profesor-slide">
                        <div class="profesor-img">
                            <img src="{{ asset('images/profesor4.jpg') }}" alt="Profesor 4">
                        </div>
                        <h3>Laura Sánchez</h3>
                        <p class="profesor-especialidad">Robótica</p>
                        <p>Especialista en robótica educativa y nuevas tecnologías aplicadas a la enseñanza.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Banner -->
    <section class="social-banner">
        <div class="container">
            <div class="social-content">
                <h2>¡Síguenos en redes sociales!</h2>
                <p>Mantente al día con nuestras últimas actualizaciones, recursos gratuitos y consejos de estudio</p>
                
                <div class="social-links">
                    <a href="https://www.tiktok.com/@ite_educabol" target="_blank" class="social-link tiktok">
                        <i class="fab fa-tiktok"></i>
                        <span>TikTok</span>
                    </a>
                    <a href="https://www.facebook.com/ite.educabol" class="social-link facebook">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.youtube.com/@ite_educabol" class="social-link youtube">
                        <i class="fab fa-youtube"></i>
                        <span>YouTube</span>
                    </a>
                   
                </div>
            </div>
        </div>
    </section>

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
    <section class="cta-section" style="background-color: #f5f7fa; padding: 50px 0; text-align: center;">
        <div class="container">
            <div class="cta-content" style="max-width: 600px; margin: 0 auto;">
                <h2 style="color: #2c3e50; margin-bottom: 15px;">¿Quieres ser parte de este proyecto?</h2>
                <p style="color: #7f8c8d; font-size: 1.1rem; margin-bottom: 25px;">
                    Puedo colaborar en el desarrollo, diseño o difusión. ¡Hablemos!
                </p>
                
                <a 
                    href="https://wa.me/59160902299?text=¡Hola!%20Quiero%20ser%20parte%20de%20este%20proyecto.%20Puedo%20colaborar%20en:" 
                    class="whatsapp-btn"
                    style="display: inline-block;
                           background-color: #25D366;
                           color: white;
                           padding: 12px 30px;
                           border-radius: 4px;
                           text-decoration: none;
                           font-weight: 600;
                           font-size: 1rem;
                           transition: all 0.3s ease;"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Contactar por WhatsApp
                </a>
                
                <p style="margin-top: 20px; font-size: 0.9rem; color: #95a5a6;">
                    <i class="fas fa-handshake" style="margin-right: 5px;"></i> ¡Juntos podemos hacerlo mejor!
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>ITE Fórmulas</h3>
                    <p>Somos una institución educativa dedicada a proporcionar recursos de calidad para estudiantes de todos los niveles.</p>
                    <div class="footer-social">
                        <a href="https://www.tiktok.com/@ite_educabol"><i class="fab fa-tiktok"></i></a>
                        <a href="https://www.facebook.com/ite.educabol"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/@ite_educabol"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Enlaces rápidos</h4>
                    <ul>
                        <li><a href="https://ite.com.bo">Inicio</a></li>
                        <li><a href="https://formula.ite.com.bo">Fórmulas</a></li>
                        <li><a href="https://services.ite.com.bo">Cursos</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Materias</h4>
                    <ul>
                        <li><a href="#" class="whatsapp-link" data-msg="Me gustaría recibir clases de Matemáticas. Visite su página de fórmulas">Matemáticas</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Me gustaría recibir clases de Física. Visite su página de fórmulas">Física</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Me gustaría recibir clases de Química. Visite su página de fórmulas">Química</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Me gustaría recibir clases de Biología. Visite su página de fórmulas">Biología</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Me gustaría recibir clases de Informática. Visite su página de fórmulas">Informática</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Cursos</h4>
                    <ul>
                        <li><a href="#" class="whatsapp-link" data-msg="Me interesa el curso de Computación. Visite su Página de fórmulas">Computación</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Me interesa el curso de Robótica. Visite su Página de fórmulas">Robótica</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Me interesa el curso de Cubo Rubik. Visite su Página de fórmulas">Cubo Rubik</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Me interesa el curso de Programación. Visite su Página de fórmulas">Programación</a></li>
                        <li><a href="#" class="whatsapp-link" data-msg="Necesito apoyo escolar. Visite su Página de fórmulas">Apoyo escolar</a></li>
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
        document.addEventListener('DOMContentLoaded', () => {
            const whatsappLinks = document.querySelectorAll('.whatsapp-link');
            const numeroWhatsApp = '59160902299'; // Número destino (sin +)
          
            whatsappLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const mensaje = encodeURIComponent(link.dataset.msg);
                    window.open(`https://wa.me/${numeroWhatsApp}?text=${mensaje}`, '_blank');
                });
            });
        });
        
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