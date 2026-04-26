<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anyconnect - {{ $noticia->title }}</title>
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

    <!-- OWl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Animate Css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    @include('components.header')

    <div data-aos="zoom-in" data-aos-duration="1000" class="banner"
        style="background-image: url({{ asset('storage/' . $noticia->cover) }});">
        <div class="overlay"></div>
        <div class="content">
            <div class="efeito">
                <div style="margin-left: 1px;">
                    <h3>{{ $noticia->title }}</h3>
                    @if (isset($noticia_true))
                        <p class="mt-3">Início > Notícias </p>
                    @elseif(isset($imprensa))
                        <p class="mt-3">Início > Imprensa </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-2 mb-4">
        <p style="font-size: 15px;">
            <span style="margin-right: 20px; color: #757575;">
                <i style="color: #a6ff4d;" class="fas fa-clock"></i>
                {{ $noticia->created_at->diffForHumans() }}
            </span>
            <span style="margin-right: 20px; color: #757575;">
                <i style="color: #a6ff4d;" class="fas fa-eye"></i>
                {{ $noticia->views }}
            </span>
            <span style="margin-right: 20px; color: #757575;">
                <i style="color: #a6ff4d;" class="fas fa-calendar"></i>
                {{ $noticia->created_at->format('d M Y') }}
            </span>
        </p>
    </div>

    <div class="container">
        <p>{!! $noticia->content !!}</p>
    </div>

    <footer style="background-color: #000;">
        <div class="container py-5">
            <div class="row text-white">
                <!-- Coluna 1 -->
                <div class="col-lg-4 col-md-6 mb-4 text-start">
                    <img width="300" style="margin-left: -30px;" src="{{ asset('img/logo_branca.png') }}"
                        alt="Logo">
                    <p style="font-size: 18px; font-weight: 300 !important;">
                        Somos uma empresa de telecomunicações que se propõe a tornar a comunicação dos negócios mais
                        eficiente.
                    </p>
                </div>

                <!-- Coluna 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <span style="font-weight: 700; font-size: 15px; text-transform: uppercase;">Informação</span>
                    <ul class="list-unstyled mt-3">
                        <li class="mt-2" style="font-weight: 300;">
                            <i class="fas fa-location-arrow" style="color: #a6ff4d; margin-right: 5px;"></i>
                            Belas Business Park, Ed. Bengo, 3º andar, Apt 305.
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <i class="fas fa-phone-volume" style="color: #a6ff4d; margin-right: 5px;"></i>
                            (+244) 950 555 010
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <i class="fas fa-envelope-square" style="color: #a6ff4d; margin-right: 5px;"></i>
                            comercial@anyconnect.co.ao
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <i class="fas fa-envelope-square" style="color: #a6ff4d; margin-right: 5px;"></i>
                            suporte@anyconnect.co.ao
                        </li>
                    </ul>
                </div>

                <!-- Coluna 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <span style="font-weight: 700; font-size: 15px; text-transform: uppercase;">Links Úteis</span>
                    <ul class="list-unstyled mt-3">
                        <li class="mt-2" style="font-weight: 300;">
                            <a href="about.html" style="text-decoration: none; color: white;">
                                <i class="fas fa-angle-right" style="color: #a6ff4d; margin-right: 5px;"></i>
                                Sobre Nós
                            </a>
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <a href="#" style="text-decoration: none; color: white;">
                                <i class="fas fa-angle-right" style="color: #a6ff4d; margin-right: 5px;"></i>
                                Organigrama
                            </a>
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <a href="services.html" style="text-decoration: none; color: white;">
                                <i class="fas fa-angle-right" style="color: #a6ff4d; margin-right: 5px;"></i>
                                Produtos e Serviços
                            </a>
                        </li>
                        <li class="mt-2" style="font-weight: 300;">
                            <a href="contactos.html" style="text-decoration: none; color: white;">
                                <i class="fas fa-angle-right" style="color: #a6ff4d; margin-right: 5px;"></i>
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
                                class="fab fa-facebook-f" style="color: #a6ff4d; font-size: 1.5rem;"></i></a>
                        <a href="https://www.instagram.com/anyconnecttelecom/" target="_blank"><i
                                class="fab fa-instagram" style="color: #a6ff4d; font-size: 1.5rem;"></i></a>
                        <a href="https://www.linkedin.com/company/anyconnectangola" target="_blank"><i
                                class="fab fa-linkedin" style="color: #a6ff4d; font-size: 1.5rem;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <!-- Animate Js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
