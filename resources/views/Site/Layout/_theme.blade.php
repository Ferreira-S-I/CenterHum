<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Ferreira S.I">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons-bootstrap.css') }}">
    <link rel="stylesheet" href="@yield('styles')">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="LOGO CENTER HUM" height="34">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer text-center bg-dark text-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-md-start">
                    <h4 class="fw-bold">Sobre</h4>
                    <ul class="list-unstyled text-light">
                        <l class="nav-link text-light">
                            <a href="#">Sobre nós</a>
                        </li>
                        <li class="nav-link text-light">
                            <a href="#">Contato</a>
                        </li>
                        <li class="nav-link text-light">
                            <a href="#">Termos de uso</a>
                        </li>
                        <li class="nav-link text-light">
                            <a href="#">Política de privacidade</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 text-md-start">
                    <h4 class="fw-bold">Contato</h4>
                    <p>
                        <i class="bi bi-geo-alt-fill"></i>
                        São Paulo, SP
                    </p>
                    <p>
                        <i class="bi bi-telephone-fill"></i>
                        (11) 99999-9999
                    </p>
                    <p>
                        <i class="bi bi-envelope-fill"></i>
                        contato@centerhum.com.br
                    </p>
                </div>
                <div class="col-md-3">
                    <h4 class="fw-bold">Redes Sociais</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="nav-link text-light">
                                <i class="bi bi-facebook h3"></i>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="nav-link text-light">
                                <i class="bi bi-instagram h3"></i>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="nav-link text-light">
                                <i class="bi bi-twitter h3"></i>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="nav-link text-light">
                                <i class="bi bi-linkedin h3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-1">
                    <h4 class="fw-bold">Newsletter</h4>
                    <p>
                        Receba nossas novidades.
                    </p>
                    <form action="">
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Digite seu e-mail">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-secondary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        <small class="text-light">
                            &copy; Center Hum 2019. Todos os direitos reservados.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    @yield('scripts')
</body>

</html>
