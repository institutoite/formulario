<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $materia->materia }} - Temas | ITE Fórmulas</title>
    
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/temas.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
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
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="#" class="active">Fórmulas</a></li>
                    <li><a href="#">Ejemplos</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Recursos</a></li>
                    <li><a href="#">Contacto</a></li>
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
                    <p class="detalle">{{ $materia->detalle }}</p>
                    
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
                    <img src="{{ URL::to('/').Storage::url('public/'.$materia->imagen->url) }}" alt="Imagen de {{ $materia->materia }}">
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
    </section>

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
                <div class="tema-card" id="tema-card-{{ $tema->id }}">
                    <div class="tema-header">
                        <h3>{{ $tema->tema }}</h3>
                        @auth
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
                        @endauth
                    </div>
                    
                    <div class="tema-content">
                        @if ($tema->imagen)
                        <div class="tema-image">
                            <img src="{{ URL::to('/').Storage::url('public/'.$tema->imagen->url) }}" alt="Imagen de {{ $tema->tema }}">
                        </div>
                        @endif
                        
                        <p class="tema-slogan">{{ $tema->slogan }}</p>
                        
                        <a href="{{ route('formulas.index', $tema) }}" class="btn btn-secondary btn-block">
                            Ver Fórmulas <i class="fas fa-arrow-right"></i>
                        </a>
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
                    <a href="#" class="btn btn-primary">Conoce nuestros cursos</a>
                </div>
                <div class="promo-image">
                    <img src="{{ asset('images/cursos-promo.jpg') }}" alt="Cursos de apoyo">
                </div>
            </div>
        </div>
    </section>

    <!-- Related Subjects -->
    <section class="related-subjects">
        <div class="container">
            <div class="section-header">
                <h2>Otras materias que podrían interesarte</h2>
                <p>Explora más fórmulas y recursos educativos</p>
            </div>
            
            <div class="related-grid">
                <!-- Aquí podrías mostrar otras materias relacionadas -->
                <div class="related-card">
                    <div class="related-image">
                        <img src="{{ asset('images/fisica.jpg') }}" alt="Física">
                    </div>
                    <div class="related-content">
                        <h3>Física</h3>
                        <p>Descubre las leyes que rigen el universo</p>
                        <a href="#" class="btn-link">Ver fórmulas <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="related-card">
                    <div class="related-image">
                        <img src="{{ asset('images/quimica.jpg') }}" alt="Química">
                    </div>
                    <div class="related-content">
                        <h3>Química</h3>
                        <p>Explora la composición de la materia</p>
                        <a href="#" class="btn-link">Ver fórmulas <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="related-card">
                    <div class="related-image">
                        <img src="{{ asset('images/biologia.jpg') }}" alt="Biología">
                    </div>
                    <div class="related-content">
                        <h3>Biología</h3>
                        <p>Conoce los principios de los seres vivos</p>
                        <a href="#" class="btn-link">Ver fórmulas <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Recibe nuevas fórmulas y recursos</h2>
                <p>Suscríbete a nuestro boletín para estar al día con las últimas actualizaciones</p>
                
                <form action="{{ route('newsletter.suscribir') }}" method="POST" class="newsletter-form">
                    @csrf
                    <input type="email" name="email" placeholder="Tu correo electrónico" required>
                    <button type="submit" class="btn btn-primary">Suscribirse</button>
                </form>
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
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Enlaces rápidos</h4>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Fórmulas</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Recursos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Materias</h4>
                    <ul>
                        <li><a href="#">Matemáticas</a></li>
                        <li><a href="#">Física</a></li>
                        <li><a href="#">Química</a></li>
                        <li><a href="#">Biología</a></li>
                        <li><a href="#">Informática</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Cursos</h4>
                    <ul>
                        <li><a href="#">Computación</a></li>
                        <li><a href="#">Robótica</a></li>
                        <li><a href="#">Cubo Rubik</a></li>
                        <li><a href="#">Programación</a></li>
                        <li><a href="#">Apoyo escolar</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 ITE Fórmulas. Todos los derechos reservados.</p>
                <div class="footer-legal">
                    <a href="#">Términos y condiciones</a>
                    <a href="#">Política de privacidad</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.js') }}"></script>
    
    <script>
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