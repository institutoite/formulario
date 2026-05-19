<!DOCTYPE html>
<html lang="es">
<head>
    <title>IFE Fórmulas - Central de Fórmulas Educativas</title>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('images/ife.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fórmulas de física, química, matemáticas y más para estudiantes">
    <meta name="keywords" content="fórmulas, matemáticas, física, química, educación, estudiantes, IFE">
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
    <style>
        :root {
            --brand: rgb(38, 186, 165);
            --brand-dark: rgb(20, 146, 130);
            --ink: rgb(55, 95, 122);
            --ink-deep: #142b3b;
            --paper: #f7fbfc;
            --line: rgba(55, 95, 122, 0.14);
            --glow: 0 24px 70px rgba(38, 186, 165, 0.24);
            --shadow: 0 18px 45px rgba(20, 43, 59, 0.13);
        }

        body {
            background:
                radial-gradient(circle at 16% 12%, rgba(38, 186, 165, 0.18), transparent 28rem),
                radial-gradient(circle at 86% 4%, rgba(55, 95, 122, 0.14), transparent 26rem),
                var(--paper);
            color: var(--ink-deep);
        }

        .main-header {
            background: rgba(247, 251, 252, 0.88);
            border-bottom: 1px solid var(--line);
            box-shadow: 0 12px 35px rgba(20, 43, 59, 0.08);
        }

        .header-container {
            padding-block: 0.85rem;
        }

        .logo-container h1 {
            color: var(--ink);
            font-size: clamp(1.45rem, 3vw, 2rem);
            font-weight: 900;
        }

        .brand-logo {
            width: min(210px, 52vw);
            height: auto;
            object-fit: contain;
        }

        .tagline,
        .main-nav .nav-links a {
            color: rgba(20, 43, 59, 0.74);
        }

        .main-nav .nav-links a {
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.78rem;
            letter-spacing: 0.08em;
        }

        .hero-section {
            min-height: calc(100vh - 78px);
            padding: clamp(3rem, 8vw, 7rem) 0 3.5rem;
            background:
                linear-gradient(135deg, rgba(38, 186, 165, 0.14), rgba(247, 251, 252, 0.82) 44%, rgba(55, 95, 122, 0.16)),
                var(--paper);
        }

        .hero-section::before {
            background:
                radial-gradient(circle at 72% 22%, rgba(38, 186, 165, 0.26), transparent 18rem),
                linear-gradient(120deg, rgba(55, 95, 122, 0.09) 0 2px, transparent 2px 34px);
            opacity: 0.72;
        }

        .hero-section .container {
            grid-template-columns: minmax(0, 1.03fr) minmax(300px, 0.78fr);
            gap: clamp(2rem, 5vw, 4.5rem);
        }

        .hero-content {
            position: relative;
        }

        .hero-kicker {
            display: inline-flex;
            gap: 0.6rem;
            padding: 0.52rem 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(38, 186, 165, 0.36);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            color: var(--ink);
            font-weight: 900;
            font-size: 0.78rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            box-shadow: 0 12px 30px rgba(38, 186, 165, 0.12);
        }

        .hero-content h2 {
            max-width: 760px;
            color: var(--ink-deep);
            font-size: clamp(2.45rem, 6vw, 5.15rem);
            line-height: 0.98;
            font-weight: 950;
        }

        .hero-content p {
            color: rgba(20, 43, 59, 0.76);
            font-size: clamp(1rem, 2vw, 1.28rem);
        }

        .search-form {
            max-width: 620px;
            margin: 0;
            padding: 0.35rem;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
            backdrop-filter: blur(18px);
        }

        .search-form input {
            border: 0;
            border-radius: 14px;
            background: transparent;
            color: var(--ink-deep);
            font-weight: 700;
        }

        .search-form .btn-search,
        .btn-primary,
        .btn-card,
        .whatsapp-btn,
        .cta-button {
            border-radius: 14px;
            background: linear-gradient(135deg, var(--brand), var(--brand-dark));
            box-shadow: var(--glow);
        }

        .btn-secondary {
            border-radius: 14px;
            background: linear-gradient(135deg, var(--ink), var(--ink-deep));
            box-shadow: 0 18px 40px rgba(55, 95, 122, 0.24);
        }

        .btn:hover,
        .btn-card:hover,
        .whatsapp-btn:hover {
            transform: translateY(-3px);
        }

        .hero-metrics {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.8rem;
            max-width: 620px;
            margin-top: 1.35rem;
        }

        .hero-metrics span {
            display: block;
            padding: 0.95rem;
            border: 1px solid var(--line);
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.68);
            box-shadow: 0 14px 32px rgba(20, 43, 59, 0.08);
            color: rgba(20, 43, 59, 0.72);
            font-weight: 800;
        }

        .hero-metrics strong {
            display: block;
            color: var(--ink);
            font-size: 1.55rem;
            line-height: 1;
        }

        .hero-image {
            position: relative;
        }

        .hero-image::before,
        .hero-image::after {
            content: "x + y";
            position: absolute;
            z-index: 2;
            padding: 0.75rem 1rem;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid rgba(38, 186, 165, 0.24);
            color: var(--ink);
            box-shadow: var(--shadow);
            font-weight: 900;
            animation: floatChip 5s ease-in-out alternate;
        }

        .hero-image::before {
            top: 9%;
            left: -4%;
        }

        .hero-image::after {
            content: "E = mc2";
            right: 0;
            bottom: 11%;
            animation-delay: 1.2s;
        }

        .hero-image img {
            width: min(430px, 100%);
            aspect-ratio: 1 / 1.08;
            object-fit: cover;
            object-position: center 24%;
            border-radius: 28px;
            border: 1px solid rgba(255, 255, 255, 0.92);
            box-shadow: 0 35px 90px rgba(20, 43, 59, 0.27);
            transform: rotate(1.5deg);
        }

        .features-section,
        .materias-section,
        .cursos-section,
        .contacto-section {
            padding-block: clamp(4rem, 7vw, 6.5rem);
            background: transparent;
        }

        .section-header h2 {
            color: var(--ink-deep);
            font-size: clamp(2rem, 4vw, 3.3rem);
            font-weight: 950;
        }

        .section-header h2::after {
            width: 110px;
            background: linear-gradient(90deg, var(--brand), var(--ink));
        }

        .feature-card,
        .card,
        .course-card,
        .contacto-form {
            border: 1px solid var(--line);
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.78);
            box-shadow: var(--shadow);
            backdrop-filter: blur(16px);
        }

        .feature-card,
        .course-card {
            padding: 1.65rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .feature-card:hover,
        .card:hover,
        .course-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 70px rgba(20, 43, 59, 0.17);
        }

        .feature-icon,
        .curso-icon,
        .contact-row i {
            color: var(--brand);
        }

        .cards-container,
        .cursos-grid,
        .features-grid {
            gap: 1.35rem;
        }

        .card {
            overflow: hidden;
        }

        .card-image {
            background:
                linear-gradient(135deg, rgba(38, 186, 165, 0.15), rgba(55, 95, 122, 0.12));
        }

        .course-card {
            min-height: 305px;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .course-card p {
            flex: 1;
            color: rgba(20, 43, 59, 0.7);
        }

        .social-banner,
        .cta-section,
        .main-footer {
            background:
                linear-gradient(135deg, var(--ink-deep), var(--ink) 55%, var(--brand-dark));
        }

        .web-link .social-icon {
            background: linear-gradient(135deg, var(--ink), var(--brand));
        }

        .contact-list {
            margin-top: 2rem;
        }

        .contact-row {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.4rem;
            padding: 1rem;
            border: 1px solid var(--line);
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.66);
        }

        @keyframes floatChip {
            from { transform: translateY(0); }
            to { transform: translateY(-14px); }
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: auto;
            }

            .hero-section .container {
                grid-template-columns: 1fr;
                text-align: left;
            }

            .hero-buttons,
            .hero-metrics {
                grid-template-columns: 1fr;
                justify-content: stretch;
            }

            .hero-buttons .btn {
                width: 100%;
            }

            .search-form {
                flex-direction: column;
            }

            .search-form .btn-search {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header con navegación -->
    <header class="main-header">
        <div class="container header-container">
            <div class="logo-container">
                <img src="{{ asset('images/logoife.png') }}" alt="IFE formulas" class="brand-logo">
                <p class="tagline">Tu recurso educativo completo</p>
            </div>
            <nav class="main-nav">
                <button class="menu-toggle" aria-label="Abrir menú">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-links">
                    <li><a href="#cursos">Cursos</a></li>
                    <li><a href="#materias">Materias</a></li>
                    <li><a href="{{ route('login') }}">Ingresar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <span class="hero-kicker"><i class="fas fa-bolt"></i> Nueva identidad IFE</span>
                <h2>Fórmulas, cursos y apoyo académico con energía moderna</h2>
                <p>Encuentra recursos de física, química, matemáticas y tecnología en una experiencia rápida, clara y pensada para estudiantes que quieren avanzar.</p>
                {{-- Buscador oculto temporalmente: la vista /buscar aún no está lista para producción. --}}
                <div class="search-box" hidden>
                    <form action="{{ route('buscar') }}" method="GET" class="search-form">
                        <input type="text" name="q" placeholder="Buscar fórmulas..." required>
                        <button type="submit" class="btn btn-search"><i class="fas fa-search"></i> Buscar</button>
                    </form>
                </div>
                <div class="hero-buttons">
                    <a href="#materias" class="btn btn-primary">Ver Materias</a>
                    <a href="#cursos" class="btn btn-secondary">Nuestros Cursos</a>
                </div>
                <div class="hero-metrics" aria-label="Datos destacados">
                    <span><strong>500+</strong> fórmulas</span>
                    <span><strong>24/7</strong> acceso</span>
                    <span><strong>IFE</strong> educación</span>
                </div>
            </div>
            <div class="hero-image">
                <a href="https://www.tiktok.com/@davidflores.ife">
                    <img src="{{ asset('images/autor.png') }}" alt="IFE formulas">
                </a>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Fórmulas Organizadas</h3>
                    <p>Más de 500 fórmulas clasificadas por materia y tema</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Búsqueda Rápida</h3>
                    <p>Encuentra cualquier fórmula en segundos</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Acceso Móvil</h3>
                    <p>Estudia desde cualquier dispositivo</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Para Todos los Niveles</h3>
                    <p>Desde secundaria hasta universidad</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Materias Section -->
    <section id="materias" class="materias-section">
        <div class="container">
            <div class="section-header">
                <h2>Explora por Materias</h2>
                <p>Encuentra todas las fórmulas que necesitas organizadas por asignaturas: Matemáticas, Física, Química y más</p>
            </div>
            <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%     Recursos Section %%%%%%%%%%%%%%%%-->
            <div class="cards-container">
                @foreach ($materias as $materia)
                <div class="card">
                    <div class="card-image">
                        @php
                            $materiaNombre = Str::of($materia->materia)->ascii()->lower();
                            $materiaImagen = str_contains($materiaNombre, 'fis') ? 'fisica.png' : (str_contains($materiaNombre, 'qu') ? 'quimica.jpg' : 'matematica.jpg');
                        @endphp
                        <img src="{{ asset('images/'.$materiaImagen) }}" alt="{{ $materia->materia }} en IFE formulas }}">
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




    <!-- Cursos Section -->
    <section id="cursos" class="cursos-section">
        <div class="container">
            <div class="section-header">
                <h2>Nuestros Cursos</h2>
                <p>Ofrecemos clases de apoyo escolar y cursos especializados</p>
            </div>
            
           <div class="cursos-grid">
                <!-- Curso de Computación -->
                <div class="course-card">
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
                <div class="course-card">
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
                <div class="course-card">
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
                <div class="course-card">
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
                <div class="course-card">
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
                <div class="course-card">
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
                <div class="course-card">
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
                <div class="course-card">
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
                <div class="course-card">
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
                <div class="course-card">
                    <div class="curso-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Aplicaciones Móviles</h3>
                    <p>Desarrollo de apps para Android e iOS</p>
                    <a href="https://wa.me/59175553338?text=Info%20APPS%20MÓVILES" target="_blank" class="whatsapp-btn">
                        <i class="fab fa-whatsapp"></i> Mas info
                    </a>
                </div>
                <div class="course-card">
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
                        <img src="{{ asset('images/matematica.jpg') }}" alt="Novedad 1">
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
                        <img src="{{ asset('images/fisica.png') }}" alt="Novedad 2">
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
                        <img src="{{ asset('images/quimica.jpg') }}" alt="Novedad 3">
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
                    <img src="{{ asset('images/autor.png') }}" alt="David Flores - creador de IFE formulas" class="foto-perfil">
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
            <a href="https://www.tiktok.com/@davidflores.ife" target="_blank" class="tiktok">
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
                <a href="https://www.tiktok.com/@ife_educabol" target="_blank" class="social-link tiktok">
                    <div class="social-icon">
                        <i class="fab fa-tiktok"></i>
                    </div>
                    <span>TikTok</span>
                </a>
                
                <a href="https://www.facebook.com/ife.educabol" target="_blank" class="social-link facebook">
                    <div class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <span>Facebook</span>
                </a>
                
                <a href="https://www.youtube.com/@ife_educabol" target="_blank" class="social-link youtube">
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
                 <a href="https://ife.com.bo" target="_blank" class="social-link web-link">
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
                    <a href="https://www.tiktok.com/@ife_educabol" target="_blank" class="social-link tiktok">
                        <i class="fab fa-tiktok"></i>
                        <span>TikTok</span>
                    </a>
                    <a href="https://www.facebook.com/ife.educabol" target="_blank" class="social-link facebook">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.youtube.com/@ife_educabol" target="_blank" class="social-link youtube">
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
                        <p>"Gracias a las fórmulas y explicaciones de IFE Fórmulas, pude aprobar mi examen de física con excelente calificación."</p>
                        <div class="testimonio-autor">
                            <img src="{{ asset('images/autor.png') }}" alt="Estudiante 1">
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
                            <img src="{{ asset('images/autor.png') }}" alt="Estudiante 2">
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
                            <img src="{{ asset('images/autor.png') }}" alt="Estudiante 3">
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
                    
                    <div class="contact-list">
                        <div class="contact-row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Dirección</h4>
                                <p>Villa 1 de mayo, calle 16 oeste #9</p>
                            </div>
                        </div>
                        
                        <div class="contact-row">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Teléfono</h4>
                                <p>+59160902299</p>
                            </div>
                        </div>
                        
                        <div class="contact-row">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>formulas@ife.com.bo</p>
                            </div>
                        </div>
                        
                        <div class="contact-row">
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
                    <h3>Qué es IFE?</h3>
                    <p>Somos una institución educativa dedicada a proporcionar recursos de calidad para estudiantes de todos los niveles.</p>
                    <div class="footer-social">
                        <a target="_blank" href="https://www.tiktok.com/@ife_educabol" class="social-icon"><i class="fab fa-tiktok"></i></a>
                        <a target="_blank" href="https://www.facebook.com/ife.educabol" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.youtube.com/@ife_educabol" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a target="_blank" href="https://wa.me/59160902299" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        <a target="_blank" href="https://www.instagram.com/tu_usuario" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://ife.com.bo" class="social-icon"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Enlaces rápidos</h4>
                    <ul>
                        <li><a target="_blank" href="https://ife.com.bo">Qué es IFE?</a></li>
                        <li><a target="_blank" href="https://formula.ife.bo">Fórmulas</a></li>
                        <li><a target="_blank" href="https://services.ife.com.bo">Cursos</a></li>
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
                <p>&copy; 2025 IFE Fórmulas. Todos los derechos reservados.</p>
                <div class="footer-legal">
                    <a href="https://www.tiktok.com/@davidflores.ife" target="_blank">David Flores</a>
                    <a href="https://www.ife.com.bo" target="_blank">IFE Educabol</a>
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
                    mensaje = '¡Hola! Estoy interesado/a en el curso de *COMPUTACIÓN* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'Robótica':
                    mensaje = '¡Buenos días! Quisiera información sobre el curso de *ROBÓTICA.* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'Cubo Rubik':
                    mensaje = '¡Saludos! Me interesa el curso de *CUBO RUBIK.* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'Programación':
                    mensaje = '¡Hola! Busco información sobre el curso de *PROGRAMACIÓN.* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'Apoyo escolar':
                    mensaje = '¡Buenas tardes! Necesito *APOYO ESCOLAR.* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'Matematicas':
                    mensaje = '¡Hola! Estoy interesado/a en clases de *MATEMÁTICAS.* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'Fisica':
                    mensaje = '¡Buenos días! Necesito clases de *FÍSICA.* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'Quimica':
                    mensaje = '¡Saludos! Busco clases de *QUÍMICA.* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'Programacion':
                    mensaje = '¡Hola! Quiero aprender *PROGRAMACIÓN.* Mensaje enviado desde https://formula.ife.bo';
                    break;
                case 'lenguaje':
                    mensaje = '¡Buenas tardes! Me interesa el curso de *Escritura y Lectura.* Mensaje enviado desde https://formula.ife.bo';
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
            const texto = `*Nombre:* ${nombre}%0A*Teléfono:* ${telefono}%0A*Mensaje:* ${mensaje} Mensaje enviado desde https://formula.ife.bo`;
            
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
        

     
        
      
        // Cerrar modal al hacer clic fuera de él
     
    </script>
</body>
</html>
