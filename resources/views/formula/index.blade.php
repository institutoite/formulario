<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fórmulas de {{ $tema->tema }} | ITE Fórmulas</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formulas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tema.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.css">
</head>
<body>
    <!-- Header with Navigation -->
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
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="formula-card">
                                    <div class="formula-card-header">
                                        <h3>{{ $formula->nombre }}</h3>
                                        {{-- <div id="form{{ $formula->id }}" class="formula-card-actions">
                                            <a class="editar" href="{{ route('formulas.edit', $formula) }}">
                                                <i class="fas fa-edit text-secondary"></i>
                                            </a>
                                            <a class="eliminarformula">
                                                <i class="fas fa-trash-alt text-danger"></i>
                                            </a>
                                        </div> --}}
                                    </div>
                                    <div class="formula-card-body">
                                        {{ $formula->formula }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Formula Details Sections -->
        <section class="formula-details-section">
            @foreach ($formulas as $formula)
                @php
                    $variables = $formula->variables;
                @endphp
                <div class="formula-detail-card">
                    <div class="formula-detail-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>{{ $formula->nombre }}</h2>
                            {{-- <a href="{{ route('ejemplos.view', $formula->id) }}" class="btn btn-primary btn-outline-secondary text-white">
                                <i class="fa fa-plus"></i>&nbsp;Detallar
                            </a> --}}
                            <a href="https://wa.me/?text={{ urlencode('Consulta sobre la fórmula: ' . $formula->expresion . ' del tema: ' . $tema->nombre) }}" 
                                class="btn btn-secondary btn-block" 
                                target="_blank">
                                Consultar <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="formula-detail-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                                @isset($formula->imagen->url)
                                    <img width="250" alt="imagen de fórmula" src="{{ URL::to('/').Storage::url('public/'.$formula->imagen->url) }}" class="formula-image">
                                @endisset
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="formula-representation">
                                            <div class="formula-rep-header">
                                                <h5>Fórmula:</h5>
                                            </div>
                                            <div class="formula-rep-body">
                                                <h4>{{ $formula->formula }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <table id="formula{{ $formula->id }}" class="variables-table">
                                            <thead>
                                                <tr>
                                                    <th>Variable</th>
                                                    <th>Descripción</th>
                                                    <th>Acciones &nbsp; 
                                                        <a class="crear" href="#">
                                                            <i class="fas fa-plus-circle"></i>
                                                        </a> &nbsp;
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="variables">
                                                @foreach ($variables as $variable)
                                                    <tr id="{{ $variable->id }}">
                                                        <td><strong>{{ $variable->variable }}</strong></td>
                                                        <td>{{ $variable->detalle }}</td>
                                                        <td class="table-actions">
                                                            <a class="editar">
                                                                <i class="fas fa-edit text-secondary"></i>
                                                            </a>
                                                            <a class="eliminar">
                                                                <i class="fas fa-trash-alt text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Descripción</h5>
                                        <div class="formula-description">
                                            {!! $formula->detalle !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

        <!-- Theme Description Section -->
        <section class="theme-description">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <h1>Fórmulas de {{ $tema->tema }}</h1>
                    <hr>
                    <p class="slogan">{{ $tema->slogan }}</p>
                    <hr>
                    <p class="detalle">{{ $tema->detalle }}</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    @if ($tema->imagen)
                        <img src="{{ URL::to('/').Storage::url('public/'.$tema->imagen->url) }}" alt="Imagen del tema" class="theme-image">
                    @endif
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

        <!-- Related Resources Section -->
        <section class="related-resources">
            <h2>Recursos relacionados</h2>
            <div class="resources-grid">
                <div class="resource-card">
                    <img src="{{ asset('images/ebook-matematicas.jpg') }}" alt="Ebook Matemáticas">
                    <div class="resource-content">
                        <h3>Guía Completa de Matemáticas</h3>
                        <p>Todos los conceptos básicos en un solo lugar</p>
                        <a href="#" class="btn-link">Descargar <i class="fas fa-arrow-down"></i></a>
                    </div>
                </div>
                <div class="resource-card">
                    <img src="{{ asset('images/video-curso.jpg') }}" alt="Curso en Video">
                    <div class="resource-content">
                        <h3>Curso en Video</h3>
                        <p>Aprende con nuestras lecciones grabadas</p>
                        <a href="#" class="btn-link">Ver ahora <i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="resource-card">
                    <img src="{{ asset('images/app-movil.jpg') }}" alt="App Móvil">
                    <div class="resource-content">
                        <h3>App Móvil</h3>
                        <p>Lleva las fórmulas contigo a todas partes</p>
                        <a href="#" class="btn-link">Descargar <i class="fas fa-mobile-alt"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contacto</h4>
                    <p><i class="fas fa-envelope"></i> info@iteformulas.com</p>
                    <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 ITE Fórmulas. Todos los derechos reservados.</p>
                <div class="footer-legal">
                    <a href="#">Términos y condiciones</a>
                    <a href="#">Política de privacidad</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modals -->

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/contrib/auto-render.min.js" onload="renderMathInElement(document.body);"></script>
</body>
</html>