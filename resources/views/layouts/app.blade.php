<!DOCTYPE html>
<html lang="es" {{-- class="no-js" --}}>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servicios de electricidad" />
    <meta name="keywords" content="electricidad, construcciones, torre, luz, servicios, contruccionesmytrws" />
    <meta name="author" content="contruccionesmytrws" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lara-Constru</title>

    <link rel="shortcut icon" href="favicon.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <header role="banner" id="fh5co-header">
        <div class="container">
                <!-- <div class="row"> -->
                <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="index.html">Construcciones - MyTwrs</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" data-nav-section="home"><span>Inicio</span></a></li>
                    <li><a href="#" data-nav-section="about"><span>Nosotros</span></a></li>
                    <li><a href="#" data-nav-section="features"><span>Proyectos</span></a></li>
                    <li><a href="#" data-nav-section="services"><span>Servicios</span></a></li>
                  </ul>
                </div>
                </nav>
              <!-- </div> -->
        </div>
    </header>

    @include('includes.modal-inicio')

    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>


{{-- Comandos GIT

// Nos muestra en que repositorio estamos enlazados remotamente.
git remote -v

git add *

git status

git commit -m "mensaje"  - -author="aleQP <alejandro_pablo13@hotmail.com>"

//subiendo todos los cambios locales al servidor remoto de github.
git push -f origin master
git push -u origin master
git push origin master

//Cuando realizamos cambios directamente en github pero no de forma local, con pull, donde descargaremos los cambios realizados para seguir trabajando normalmente.
git pull
 --}}

