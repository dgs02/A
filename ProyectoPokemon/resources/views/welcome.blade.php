<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/js/app.js', 'resources/css/app.scss', 'resources/css/app.css'])
</head>

<body class="antialiased">

    <!-- Sección de Imagen a Pantalla Completa -->
    <section class="position-relative w-100 vh-100 d-flex align-items-center justify-content-center bg-dark text-white shadow-lg">
        <div class="position-absolute top-0 start-0 end-0 bottom-0 w-100 h-100 filtro-imagen"></div>
        <img src="{{ asset('img/fondotr.webp') }}" alt=""
            class="img-fluid position-absolute top-0 start-0 end-0 bottom-0 w-100 h-100 object-cover filtro-imagen">

        <!-- Bloque sobre la imagen -->
        <div class="position-absolute w-100 h-100 bg-transparent align-items-center justify-content-center text-center letras-nav">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 text-end">
                    @auth
                        <a href="{{ url('/listar') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-decoration-none text-white">Home</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-decoration-none text-white">Log
                            in | </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-decoration-none text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="carousel-caption">
            <h1 class="display-1 fw-normal mb-5">Pokemons</h1>
        </div>
    </section>


    <div class="container mt-5 d-flex align-items-center justify-content-center">
        <div class="row">

          <!-- Columna de la izquierda con información -->
          <div class="col-md-6 ">
            <div class="text-white">
              <h3>Bienvenido a tu centro pokemon</h3>
              <p>
                ¡Hola, entrenadores Pokémon de Pueblo Paleta! 🌟 ¡Bienvenidos a nuestro rincón Poké en la red, donde los sueños de entrenadores y criaturas se encuentran! Soy Has de Pueblo Paleta, tu compañero en esta emocionante travesía por el fascinante mundo Pokémon.

En nuestra plataforma, encontrarás una experiencia única para explorar a fondo la información sobre cada Pokémon, desde los adorables Pikachu y Eevee hasta los legendarios como Mewtwo. Sumérgete en historias cautivadoras, descubre estrategias de batalla y mantente al día con las últimas novedades del universo Pokémon.

¡Prepárate para torneos llenos de emoción, consejos sobre crianza y la oportunidad de conectarte con otros apasionados de Pokémon! ¡No te pierdas la diversión y únete a la comunidad Pokémon aquí! 🌐✨ ¡Atrápalos todos y vive la magia Pokémon! 🚀🔥</p>

            </div>
          </div>



          <!-- Columna de la derecha con la imagen -->
          <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/personaje.png') }}" class="img-fluid" alt="Imagen Vertical">
          </div>

        </div>
      </div>
      </div>

    <!-- Sección de Cards -->
    <section class="container mt-5">
        <div class="container mt-5 text-center">
            <button id="cambiarContenidoBtn" class="btn btn-primary">Mas información</button>
        </div>


        <div class="container mt-5">
            <div class="row">

              <!-- Tarjeta 1 -->
              <div class="col-md-3 mt-5">
                <div class="card text-center d-flex align-items-center justify-content-center position-relative">
                    <img src="{{ asset('img/001.png') }}" class="card-img-top card-w" alt="Imagen 1">
                    <div class="dark-overlay"></div>
                    <h5 class="card-title">Bulbasaur </h5>
                    <p class="card-text">Tiene una flor.</p>
                </div>
            </div>

              <!-- Tarjeta 2 -->
              <div class="col-md-3 mt-5">
                <div class="card text-center d-flex align-items-center justify-content-center position-relative">
                    <img src="{{ asset('img/002.png') }}" class="card-img-top card-w" alt="Imagen 1">
                    <div class="dark-overlay"></div>
                    <h5 class="card-title">Ivysaur</h5>
                    <p class="card-text">Tiene una flor mas grande.</p>
                </div>
            </div>

              <!-- Tarjeta 3 -->
              <div class="col-md-3 mt-5">
                <div class="card text-center d-flex align-items-center justify-content-center position-relative">
                    <img src="{{ asset('img/003.png') }}" class="card-img-top card-w" alt="Imagen 1">
                    <div class="dark-overlay"></div>
                    <h5 class="card-title">Venusaur</h5>
                    <p class="card-text">Tiene una palmera.</p>
                </div>
            </div>

              <!-- Tarjeta 4 -->
              <div class="col-md-3 mt-5">
                <div class="card text-center d-flex align-items-center justify-content-center position-relative">
                    <img src="{{ asset('img/004.png') }}" class="card-img-top card-w" alt="Imagen 1">
                    <div class="dark-overlay"></div>
                    <h5 class="card-title">Charmander</h5>
                    <p class="card-text">Quema.</p>
                </div>
            </div>

              <div class="col-md-3 mt-5">
                <div class="card text-center d-flex align-items-center justify-content-center position-relative">
                    <img src="{{ asset('img/005.png') }}" class="card-img-top card-w" alt="Imagen 1">
                    <div class="dark-overlay"></div>
                    <h5 class="card-title">Charmeleon</h5>
                    <p class="card-text">Este quema mas.</p>
                </div>
            </div>

              <!-- Tarjeta 2 -->
              <div class="col-md-3 mt-5">
                <div class="card text-center d-flex align-items-center justify-content-center position-relative">
                    <img src="{{ asset('img/006.png') }}" class="card-img-top card-w" alt="Imagen 1">
                    <div class="dark-overlay"></div>
                    <h5 class="card-title">Charizard</h5>
                    <p class="card-text">Ea ya te has quemado.</p>
                </div>
            </div>

              <!-- Tarjeta 3 -->
              <div class="col-md-3 mt-5">
                <div class="card text-center d-flex align-items-center justify-content-center position-relative">
                    <img src="{{ asset('img/007.png') }}" class="card-img-top card-w" alt="Imagen 1">
                    <div class="dark-overlay"></div>
                    <h5 class="card-title">Squirtle</h5>
                    <p class="card-text">Vamo' a calmarno</p>
                </div>
            </div>

              <!-- Tarjeta 4 -->
              <div class="col-md-3 mt-5">
                <div class="card text-center d-flex align-items-center justify-content-center position-relative">
                    <img src="{{ asset('img/008.png') }}" class="card-img-top card-w" alt="Imagen 1">
                    <div class="dark-overlay"></div>
                    <h5 class="card-title">Wartortle</h5>
                    <p class="card-text">Que te va a poner chulo tu?</p>
                </div>
            </div>

            </div>
          </div>


    </section>
</body>

<footer class="mt-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; <span id="anio-footer">{{ date('Y') }}</span> Proyecto Pokemon</p>
                <p>Desarrollado <i class="bi bi-heart-fill text-danger"></i> por <a href="#" target="_blank">@dgs____</a></p>
            </div>
        </div>
    </div>
</footer>
</html>

