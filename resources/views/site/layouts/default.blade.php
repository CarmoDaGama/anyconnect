<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anyconnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

    <!-- Animate Css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @yield('styles')
</head>

<body>
    {{-- menu --}}
    {{-- @include('site.includes.menu') --}}
    <div style="padding: 0 60px important;">
        <x-header />
    </div>

    @yield('content')

    <footer style="background-color: #000;">
        <div class="container py-5">
            <div class="row text-white">
                <!-- Coluna 1 -->
                <div class="col-lg-4 col-md-6 mb-4 text-start">
                    <img width="300" style="margin-left: -30px;" src="{{ asset('img/logo_branca.png') }}" alt="Logo">
                    <p style="font-size: 15px; font-weight: 300 !important;">
                        Somos uma operadora de telecomunicações licenciada pelo INACOM, oferecendo serviços como
                        telefonia móvel virtual, internet, datacenter, telefonia PSTN, redes privadas, IPTV e streaming.
                    </p>
                </div>

                <!-- Coluna 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <span style="font-weight: 700; font-size: 15px; text-transform: uppercase;">Informação</span>
                    <ul class="list-unstyled mt-3">
                        <li class="mt-2" style="font-weight: 300;">
                            <i class="fas fa-location-arrow" style="color: #87c145; margin-right: 5px;"></i>
                            Belas Business Park, Ed. Bengo, 3º andar, Apt 305.
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <i class="fas fa-phone-volume" style="color: #87c145; margin-right: 5px;"></i>
                            (+244) 950 555 010
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <i class="fas fa-envelope-square" style="color: #87c145; margin-right: 5px;"></i>
                            comercial@anyconnect.co.ao
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <i class="fas fa-envelope-square" style="color: #87c145; margin-right: 5px;"></i>
                            suporte@anyconnect.co.ao
                        </li>
                    </ul>
                </div>

                <!-- Coluna 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <span style="font-weight: 700; font-size: 15px; text-transform: uppercase;">Links Úteis</span>
                    <ul class="list-unstyled mt-3">
                        <li class="mt-2" style="font-weight: 300;">
                            <a href="{{ route('navigation.about') }}" style="text-decoration: none; color: white;">
                                <i class="fas fa-angle-right" style="color: #87c145; margin-right: 5px;"></i>
                                Sobre Nós
                            </a>
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <a href="{{ route('navigation.organigrama') }}"
                                style="text-decoration: none; color: white;">
                                <i class="fas fa-angle-right" style="color: #87c145; margin-right: 5px;"></i>
                                Organigrama
                            </a>
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <a href="{{ route('navigation.services') }}" style="text-decoration: none; color: white;">
                                <i class="fas fa-angle-right" style="color: #87c145; margin-right: 5px;"></i>
                                Serviços
                            </a>
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <a href="{{ route('navigation.projects') }}" style="text-decoration: none; color: white;">
                                <i class="fas fa-angle-right" style="color: #87c145; margin-right: 5px;"></i>
                                Contactos
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Coluna 4 -->
                <div class="col-lg-2 col-md-6">
                    <span style="font-weight: 700; font-size: 15px; text-transform: uppercase;">Siga-nos</span>
                    <div class="d-flex justify-content-start gap-3 mt-3">
                        <a href="https://www.facebook.com/AnyConnectTelecom" target="_blank"><i
                                class="fab fa-facebook-f" style="color: #87c145; font-size: 1.5rem;"></i></a>
                        <a href="https://www.instagram.com/anyconnecttelecom/" target="_blank"><i
                                class="fab fa-instagram" style="color: #87c145; font-size: 1.5rem;"></i></a>
                        <a href="https://www.linkedin.com/company/anyconnectangola" target="_blank"><i
                                class="fab fa-linkedin" style="color: #87c145; font-size: 1.5rem;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>
