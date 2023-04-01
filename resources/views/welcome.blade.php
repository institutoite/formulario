<!DOCTYPE html>
<html>
  <head>
    <title>Formulas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- CSS de Slick -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>

    <!-- CSS de Slick Theme -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>

  </head>
  <body>
    <header>
      <h1>ite fórmulas</h1>
      <nav>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Fórmulas</a></li>
          <li><a href="#">Ejemplos</a></li>
          <li><a href="#">Preguntas frecuentes</a></li>
          <li><a href="#">Recursos</a></li>
        </ul>
      </nav>
    </header>
    <main>
     
    </main>

        <div class="card-container">
            @foreach ($materias as $materia)
                <div class="card">
                    <img src="{{ asset('images/matematica.jpg') }}" alt="Matemáticas">
                    <div class="card-content">
                        <h3>{{ $materia->materia }}</h3>
                        <p>{{ $materia->slogan }}</p>
                        <a href="{{ route("temas.index",$materia) }}">Ver formularios</a>
                    </div>
                </div>    
            @endforeach
        </div>
    <section id="novedades">
        <div class="container">
            <h2>Novedades</h2>
            <div class="novedad">
                <img src="images/matematica.jpg" alt="Novedad 1">
                <div class="texto-novedad">
                    <h3>Título de la novedad 1</h3>
                    <p>Descripción breve de la novedad 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet justo in massa vestibulum fringilla.</p>
                    <a href="#">Leer más</a>
                </div>
            </div>
            <div class="novedad">
                <img src="images/matematica.jpg" alt="Novedad 2">
                <div class="texto-novedad">
                    <h3>Título de la novedad 2</h3>
                    <p>Descripción breve de la novedad 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet justo in massa vestibulum fringilla.</p>
                    <a href="#">Leer más</a>
                </div>
            </div>
            <div class="novedad">
                <img src="images/matematica.jpg" alt="Novedad 3">
                <div class="texto-novedad">
                    <h3>Título de la novedad 3</h3>
                    <p>Descripción breve de la novedad 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet justo in massa vestibulum fringilla.</p>
                    <a href="#">Leer más</a>
                </div>
            </div>
        </div>
    </section>
    <section class="profesores-destacados">
        <div class="titulo-seccion">
            <h2>Colaboradores</h2>
            <p>Conoce a nuestros mejores profesores y su experiencia en la enseñanza</p>
            <hr>
        </div>
        <div class="slider-wrapper">
            <div class="slider">
                <ul>
                    <li>
                        <img src="{{ asset('images/profesora.png') }}" alt="Profesor 1">
                        <h3>David Flores</h3>
                        <p>Soy un colaborador en este proyecto de página web, trabajando para contribuir al éxito del equipo y ayudar en lo que sea necesario.</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/profesora.png') }}" alt="Profesor 2">
                        <h3>Nombre del profesor 2</h3>
                        <p>Descripción breve del profesor 2</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/profesora.png') }}" alt="Profesor 3">
                        <h3>Nombre del profesor 3</h3>
                        <p>Descripción breve del profesor 3</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/profesora.png') }}" alt="Profesor 4">
                        <h3>Nombre del profesor 4</h3>
                        <p>Descripción breve del profesor 4</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    
    <footer>
      <p>Derechos reservados &copy; 2023 Formulas</p>
    </footer>
    
    <!-- JS de jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- JS de Slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
       $(document).ready(function(){
            $('.slider ul').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: true,
                responsive: [
                {
                    breakpoint: 768,
                    settings: {
                    slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                    slidesToShow: 1
                    }
                }
                ]
            });
        });

    </script>
  </body>
</html>

{{-- <html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Materias</title>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="text-center">
            <h1>Lista de Materias</h1>
            
      </div>
      <div class="row">
        <p>Bienvenido/a a nuestro sitio web, donde encontrarás todas las fórmulas de todas las materias, organizadas de manera clara y sencilla para facilitar su comprensión. Explora nuestras páginas de fórmulas y descubre cómo aplicarlas en la vida real. ¡Disfruta de nuestro sitio y alcanza tus metas académicas y profesionales!</p>
      </div>
      <div class="row">
            @foreach ($materias as $materia)
                <div class="col-md-4">
                    <div class="card border-indigo-500">
                        <div class="card-body">
                        <h5 class="card-title">{{ $materia->materia }}</h5>
                        <p class="card-text">{{ $materia->slogan }}</p>
                        <a href="{{ route("temas.index",$materia->id) }}" class="btn btn-primary">Ver Temas</a>
                        </div>
                    </div>
                </div>
            @endforeach
      </div>
    </div>
  </body>
</html> --}}