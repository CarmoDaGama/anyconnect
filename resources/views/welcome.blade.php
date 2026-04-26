<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANYCONNECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsletter-scripts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-styles.css') }}">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate Css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- <script src="{{ asset('js/newsletter-scripts.js') }}"></script> -->
    <link href="{{ asset('assets/css/welcome.css') }}" rel="stylesheet" type="text/css" />

    @stack('css')
</head>

<body>
    <section class="hero-carousel-wrap position-relative">
        <x-header />
        <x-hero-content />
    </section>

    <main>
        <!-- Services Section - Conectividade -->
        <section class="services-section connectivity-section py-5" id="conectividade">
            <div class="container">
                <!-- Section Header -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <div class="section-badge mb-3">
                            <span class="badge-text">
                                <span class="badge-dot"></span>
                                Conectividade
                            </span>
                        </div>
                        <h2 class="section-title mb-4">Soluções de Conectividade Avançada</h2>
                        <p class="section-description">
                            Oferecemos infraestrutura robusta e confiável para manter sua empresa sempre conectada
                        </p>
                    </div>
                </div>

                <!-- Services Cards -->
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-wifi"></i>
                            </div>
                            <h4 class="service-title">Internet</h4>
                            <p class="service-description">
                                Conexão de alta velocidade com garantia de uptime e suporte 24/7
                            </p>
                            <div class="service-features">
                                <span class="feature-tag">Alta Velocidade</span>
                                <span class="feature-tag">99.9% Uptime</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h4 class="service-title">IP Transit</h4>
                            <p class="service-description">Conectividade global com roteamento otimizado e baixa
                                latência</p>
                            <div class="service-features">
                                <span class="feature-tag">Global</span>
                                <span class="feature-tag">Baixa Latência</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h4 class="service-title">MPLS Level 2 & 3</h4>
                            <p class="service-description">Redes privadas virtuais com qualidade de serviço garantida
                            </p>
                            <div class="service-features">
                                <span class="feature-tag">QoS</span>
                                <span class="feature-tag">Seguro</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4 class="service-title">VPN</h4>
                            <p class="service-description">Conexões seguras e criptografadas para acesso remoto</p>
                            <div class="service-features">
                                <span class="feature-tag">Criptografado</span>
                                <span class="feature-tag">Remoto</span>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Services Section - Datacenter -->
        <section class="services-section datacenter-section py-5" id="datacenter">
            <div class="container">
                <!-- Section Header -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <div class="section-badge mb-3">
                            <span class="badge-text">Datacenter</span>
                        </div>
                        <h2 class="section-title mb-4">Infraestrutura de Datacenter</h2>
                        <p class="section-description">
                            Soluções completas de hospedagem e cloud computing para sua empresa
                        </p>
                    </div>
                </div>

                <!-- Services Cards -->
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card premium-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <h4 class="service-title">Multiclouds</h4>
                            <p class="service-description">Soluções híbridas e multi-cloud para máxima flexibilidade e
                                redundância</p>
                            <div class="service-features">
                                <span class="feature-tag">Híbrido</span>
                                <span class="feature-tag">Escalável</span>
                                <span class="feature-tag">Redundante</span>
                            </div>
                            <div class="premium-badge">Premium</div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card premium-card h-100">
                            <div class="service-icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <h4 class="service-title">Colocation & Hosting</h4>
                            <p class="service-description">Hospedagem segura com infraestrutura de classe mundial</p>
                            <div class="service-features">
                                <span class="feature-tag">Seguro</span>
                                <span class="feature-tag">24/7</span>
                                <span class="feature-tag">Monitorado</span>
                            </div>
                            <div class="premium-badge">Premium</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section - VODUSSD -->
        <section class="services-section vodussd-section py-5" id="vodussd">
            <div class="container">
                <!-- Section Header -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <div class="section-badge mb-3">
                            <span class="badge-text">USSD</span>
                        </div>
                        <h2 class="section-title mb-4">Serviços VOD & USSD</h2>
                        <p class="section-description">Soluções inovadoras de comunicação e entretenimento digital</p>
                    </div>
                </div>

                <!-- Interactive Feature Card -->
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="feature-card interactive-card">
                            <div class="card-background"></div>
                            <div class="card-content">
                                <div class="feature-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="feature-title">USSD Services</h3>
                                <p class="feature-description">
                                    Plataforma integrada de serviços de voz, dados e entretenimento digital com
                                    tecnologia de ponta
                                </p>

                                <div class="feature-highlights">
                                    <div class="highlight-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Comunicação Unificada</span>
                                    </div>
                                    <div class="highlight-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Entretenimento Digital</span>
                                    </div>
                                    <div class="highlight-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Tecnologia Avançada</span>
                                    </div>
                                </div>
                            </div>


                            <a href="/produtos-e-servicos/vod" class="cta-button">
                                <span>Saiba Mais</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- sobre nos  -->
        <section class="section-sobre"
            style="background: url('/assets/images/sobre-nos.jpg') center 22%/cover no-repeat;">

            <!-- overlay -->
            <div class="overlay-sobre position-absolute top-0 start-0 w-100 h-100"></div>

            <!-- conteúdo -->
            <div class="container position-relative ">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <!-- Modern badge style for "Sobre Nós" -->
                        <div class="section-badge mb-4">
                            <span class="badge-text">Sobre Nós</span>
                        </div>
                        <h1>
                            Operadora de telecomunicações certificada pelo INACOM.
                        </h1>
                        <p>
                            Com infraestrutura de fibra óptica, LTE, satélite e vídeo-on-demand, garantimos
                            conectividade segura. Nosso Data Center fornece serviços como colocação, hospedagem em
                            nuvem, VoIP e VPN-MPLS, desenvolvidos por engenheiros qualificados.
                        </p>
                        <p>
                            Trabalhamos 24/7 com uma equipe técnica especializada, dedicada a tornar as comunicações
                            empresariais mais eficientes, atendendo às demandas do mercado em Angola e no mundo, com
                            inovação e compromisso.
                        </p>
                        <!-- Modern brand name with enhanced styling -->
                        <div class="brand-name">
                            <span class="brand-text">ANYCONNECT</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if ($imprensa)
            <section class="py-5 bg-light text-dark">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Lado Esquerdo -->
                        <div class="col-lg-7 mb-4" data-aos="fade-right">
                            <span class="badge-pill px-3 py-2 mb-3">
                                <i class="far fa-newspaper me-2"></i> Últimas Novidades
                            </span>
                            <h2 class="fw-bold mb-3">Fique por Dentro da nossa Imprensa</h2>
                            <p class="mb-4">
                                Explore as nossas contribuições, participações em eventos e parcerias estratégicas,
                                que reforçam o nosso papel como referência no setor.
                            </p>
                            <a href="{{ route('navigation.imprensa') }}" class="btn-news mt-4">
                                Ver Todas as Notícias <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>

                        <!-- Lado Direito (Card Notícia) -->
                        <div class="col-lg-5" data-aos="fade-left">
                            @php
                                $imprensaCoverUrl = $imprensa->cover && \Illuminate\Support\Facades\Storage::disk('public')->exists($imprensa->cover)
                                    ? asset('storage/' . $imprensa->cover)
                                    : asset('assets/images/sobre-nos.jpg');
                            @endphp

                            <div class="card border-0 shadow-lg h-100 imprensa-highlight-card">
                                <!-- Imagem da Notícia -->
                                <img src="{{ $imprensaCoverUrl }}" class="card-img-top imprensa-highlight-image"
                                    alt="{{ $imprensa->title }}">

                                <div class="card-body p-4">
                                    <span class="badge mb-2 imprensa-highlight-badge">Destaque</span>
                                    <h5 class="card-title fw-bold imprensa-highlight-title">
                                        {{ $imprensa->title }}
                                    </h5>
                                    <p class="card-text small imprensa-highlight-text">
                                        {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($imprensa->content)), 120, '...') }}
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <small class="imprensa-highlight-date">
                                            <i class="far fa-calendar-alt me-1"></i>
                                            {{ \Carbon\Carbon::parse($imprensa->created_at)->format('d M Y') }}
                                        </small>
                                        <a href="{{ route('imprensa.show', $imprensa->slug) }}"
                                            class="btn-news" style="font-size: 14px; padding: 4px 16px">
                                            Ler Mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif

        <!-- Seção de Parceiros Modernizada -->
        <section class="partners-section pt-5">
            @if ($imprensa)
                <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                    <div class="section-badge">
                        <span class="badge-text">Parceiros de Confiança</span>
                    </div>
                    <h2 class="section-title">Nossos Parceiros</h2>
                    <p class="section-subtitle">
                        Organizações que confiam e colaboram conosco para criar soluções inovadoras
                    </p>
                </div>
            @endif

            <div class="partners-grid" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="partner-card">
                    <div class="partner-logo-container">
                        <img src="{{ asset('img/inacom.svg') }}" alt="Inacom" class="partner-logo">
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-logo-container">
                        <img src="{{ asset('img/elende.svg') }}" alt="Elende" class="partner-logo">
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-logo-container">
                        <img src="{{ asset('img/intelsat.svg') }}" alt="Intel Sat" class="partner-logo">
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-logo-container">
                        <img src="{{ asset('img/idirect.svg') }}" alt="Idirect" class="partner-logo">
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-logo-container">
                        <img src="{{ asset('img/wiconnect.svg') }}" alt="Wiconnect" class="partner-logo">
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-logo-container">
                        <img src="{{ asset('img/yetocom.svg') }}" alt="Yetocom" class="partner-logo">
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-logo-container">
                        <img src="{{ asset('img/blinder.svg') }}" alt="Blinder" class="partner-logo">
                    </div>
                </div>
                <div class="partner-card">
                    <div class="partner-logo-container">
                        <img src="{{ asset('img/orbisat.svg') }}" alt="Orbisat" class="partner-logo">
                    </div>
                </div>
            </div>
        </section>

        <!-- new letter  -->
        <div class="newsletter-section position-relative overflow-hidden">
            <!-- Background with overlay -->
            <div class="newsletter-bg"></div>
            <div class="newsletter-overlay"></div>

            <!-- Animated particles -->
            <div class="particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>

            <div class="container pt-4 pb-3 position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center text-white">
                        <!-- Header -->
                        <div class="newsletter-header mb-4" data-aos="fade-up">
                            <div class="newsletter-badge mb-3">
                                <i class="fas fa-envelope-open-text me-2"></i>
                                Newsletter
                            </div>
                            <h2 class="newsletter-title mb-3">
                                Conectando empresas ao <span class="text-gradient">futuro</span> com inovação e
                                confiança
                            </h2>
                        </div>

                        <!-- Description -->
                        <div class="newsletter-description mb-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="description-card">
                                <div class="noc-icon mb-3">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <p class="lead">
                                    O nosso <strong>NOC</strong> oferece monitorização e gestão proactiva
                                    <strong>24/7</strong> da sua rede por profissionais altamente qualificados para
                                    garantir máxima disponibilidade, performance e segurança.
                                </p>
                                <div class="features-list mt-4">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Identificação rápida de anomalias</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Optimização contínua</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Foco no seu core business</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter Form -->
                        <div class="newsletter-form-container" data-aos="fade-up" data-aos-delay="400">
                            <form class="newsletter-form" id="newsletterForm">
                                <div class="block-newsletter">
                                    <input type="email" class="form-control rounded-pill px-3 py-3 flex-grow-1"
                                        name="email" placeholder="Digite o seu e-mail" required id="emailInput">

                                    <button type="submit" class="btn btn-suscrever rounded-pill px-4 d-flex align-items-center gap-2" id="subscribeBtn">
                                        <span>Subscrever</span>
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>

                                <!-- Feedback -->
                                <div class="form-feedback mt-2 small text-success d-none" id="formFeedback"></div>
                            </form>
                        </div>

                        <!-- Stats -->
                        <div class="newsletter-stats mt-5" data-aos="fade-up" data-aos-delay="600">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <div class="stat-number">5000+</div>
                                        <div class="stat-label">Subscritores</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <div class="stat-number">99.9%</div>
                                        <div class="stat-label">Uptime</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <div class="stat-number">24/7</div>
                                        <div class="stat-label">Suporte</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="modern-footer">
        <!-- Added animated background pattern -->
        <div class="footer-background">
            <div class="footer-pattern"></div>
            <div class="footer-overlay"></div>
        </div>

        <div class="container py-5 position-relative">
            <div class="row text-white">
                <!-- Coluna 1 - Logo e Descrição -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-brand animate-fade-up">
                        <img width="280" class="footer-logo mb-3" src="{{ asset('img/logo_branca.png') }}" alt="AnyConnect Logo" />
                        <p class="footer-description">
                            Somos uma operadora de telecomunicações licenciada pelo INACOM, oferecendo serviços como
                            telefonia móvel virtual, internet, datacenter, telefonia PSTN, redes privadas, IPTV e
                            streaming.
                        </p>
                        <!-- Added certification badges -->
                        <div class="certification-badges mt-3">
                            <span class="badge-cert">INACOM</span>
                            <span class="badge-cert">ISO 27001</span>
                        </div>
                    </div>
                </div>

                <!-- Coluna 2 - Informações de Contato -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-section animate-fade-up" style="animation-delay: 0.1s;">
                        <h5 class="footer-title">
                            <i class="fas fa-info-circle me-2"></i>
                            Informação
                        </h5>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <i class="fas fa-map-marker-alt footer-icon"></i>
                                <span>Belas Business Park, Ed. Bengo, 3º andar, Apt 305.</span>
                            </li>
                            <li class="footer-item">
                                <i class="fas fa-phone footer-icon"></i>
                                <a href="tel:+244950555010">(+244) 950 555 010</a>
                            </li>
                            <li class="footer-item">
                                <i class="fas fa-envelope footer-icon"></i>
                                <a href="mailto:comercial@anyconnect.co.ao">comercial@anyconnect.co.ao</a>
                            </li>
                            <li class="footer-item">
                                <i class="fas fa-headset footer-icon"></i>
                                <a href="mailto:suporte@anyconnect.co.ao">suporte@anyconnect.co.ao</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Coluna 3 - Links Úteis -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-section animate-fade-up" style="animation-delay: 0.2s;">
                        <h5 class="footer-title">
                            <i class="fas fa-link me-2"></i>
                            Links Úteis
                        </h5>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="{{ route('navigation.about') }}" class="footer-link">
                                    <i class="fas fa-chevron-right footer-icon"></i>
                                    <span>Sobre Nós</span>
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="{{ route('navigation.organigrama') }}" class="footer-link">
                                    <i class="fas fa-chevron-right footer-icon"></i>
                                    <span>Organigrama</span>
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="{{ route('navigation.services') }}" class="footer-link">
                                    <i class="fas fa-chevron-right footer-icon"></i>
                                    <span>Serviços</span>
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="{{ route('navigation.projects') }}" class="footer-link">
                                    <i class="fas fa-chevron-right footer-icon"></i>
                                    <span>Contactos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Coluna 4 - Redes Sociais -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section animate-fade-up" style="animation-delay: 0.3s;">
                        <h5 class="footer-title">
                            <i class="fas fa-share-alt me-2"></i>
                            Siga-nos
                        </h5>
                        <div class="social-links">
                            <a href="https://www.facebook.com/AnyConnectTelecom" target="_blank"
                                class="social-link facebook" data-tooltip="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/anyconnecttelecom/" target="_blank"
                                class="social-link instagram" data-tooltip="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/anyconnectangola" target="_blank"
                                class="social-link linkedin" data-tooltip="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>

                        <!-- Added newsletter signup -->
                        <div class="newsletter-mini mt-4">
                            <h6 class="newsletter-title">Newsletter</h6>
                            <div class="newsletter-form">
                                <input type="email" class="newsletter-input" placeholder="Seu email">
                                <button class="newsletter-btn-footer">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Added footer bottom section -->
            <div class="footer-bottom mt-5 pt-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright">
                            © 2024 AnyConnect. Todos os direitos reservados.
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="footer-links-bottom">
                            <a href="#" class="footer-link-bottom">Política de Privacidade</a>
                            <a href="#" class="footer-link-bottom">Termos de Uso</a>
                            <a href="#" class="footer-link-bottom">Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sobreNosTrigger = document.getElementById('sobre-nos-trigger');
            const sobreNosMenu = document.getElementById('sobre-nos-menu');
            const comunicacaoTrigger = document.getElementById('comunicacao-trigger');
            const comunicacaoMenu = document.getElementById('comunicacao-menu');
            const servicosTrigger = document.getElementById('servicos-trigger');
            const servicosMenu = document.getElementById('servicos-menu');
            const overlay = document.getElementById('overlay');
            let activeMenu = null;
            let hideTimeout = null;

            function showMenu(menu, trigger) {
                clearTimeout(hideTimeout);

                // Hide other menus
                if (activeMenu && activeMenu !== menu) {
                    activeMenu.classList.remove('show');
                    // Remove active class from all triggers
                    document.querySelectorAll('.nav-link').forEach(link => {
                        if (link.id && link.id.includes('trigger')) {
                            link.style.backgroundColor = '';
                            link.style.color = '';
                        }
                    });
                }

                menu.classList.add('show');
                overlay.classList.add('show');
                activeMenu = menu;

                // Add active styling to trigger
                trigger.style.backgroundColor = 'rgba(166, 255, 77, 0.1)';
                trigger.style.color = '#a6ff4d';
            }

            function hideMenu() {
                hideTimeout = setTimeout(() => {
                    if (activeMenu) {
                        activeMenu.classList.remove('show');
                        overlay.classList.remove('show');

                        // Remove active styling from all triggers
                        document.querySelectorAll('.nav-link').forEach(link => {
                            if (link.id && link.id.includes('trigger')) {
                                link.style.backgroundColor = '';
                                link.style.color = '';
                            }
                        });

                        activeMenu = null;
                    }
                }, 150);
            }

            function cancelHide() {
                clearTimeout(hideTimeout);
            }

            // Sobre Nós menu events
            sobreNosTrigger.addEventListener('mouseenter', () => showMenu(sobreNosMenu, sobreNosTrigger));
            sobreNosTrigger.addEventListener('mouseleave', hideMenu);
            sobreNosMenu.addEventListener('mouseenter', cancelHide);
            sobreNosMenu.addEventListener('mouseleave', hideMenu);

            // Comunicação menu events
            comunicacaoTrigger.addEventListener('mouseenter', () => showMenu(comunicacaoMenu, comunicacaoTrigger));
            comunicacaoTrigger.addEventListener('mouseleave', hideMenu);
            comunicacaoMenu.addEventListener('mouseenter', cancelHide);
            comunicacaoMenu.addEventListener('mouseleave', hideMenu);

            // Serviços menu events
            servicosTrigger.addEventListener('mouseenter', () => showMenu(servicosMenu, servicosTrigger));
            servicosTrigger.addEventListener('mouseleave', hideMenu);
            servicosMenu.addEventListener('mouseenter', cancelHide);
            servicosMenu.addEventListener('mouseleave', hideMenu);

            // Overlay click to close
            overlay.addEventListener('click', () => {
                if (activeMenu) {
                    activeMenu.classList.remove('show');
                    overlay.classList.remove('show');
                    document.querySelectorAll('.nav-link').forEach(link => {
                        if (link.id && link.id.includes('trigger')) {
                            link.style.backgroundColor = '';
                            link.style.color = '';
                        }
                    });
                    activeMenu = null;
                }
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.menu-content') &&
                    !e.target.closest('[id$="-trigger"]')) {
                    if (activeMenu) {
                        activeMenu.classList.remove('show');
                        overlay.classList.remove('show');
                        document.querySelectorAll('.nav-link').forEach(link => {
                            if (link.id && link.id.includes('trigger')) {
                                link.style.backgroundColor = '';
                                link.style.color = '';
                            }
                        });
                        activeMenu = null;
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const sobreNosTrigger = document.getElementById('sobreNosTrigger');
            const sobreNosMenu = document.getElementById('sobreNosMenu');
            const comunicacaoTrigger = document.getElementById('comunicacaoTrigger');
            const comunicacaoMenu = document.getElementById('comunicacaoMenu');
            const servicosTrigger = document.getElementById('servicosTrigger');
            const servicosMenu = document.getElementById('servicosMenu');
            const menuOverlay = document.getElementById('menuOverlay');

            let activeMenu = null;
            let hideTimeout = null;

            // Show menu function
            function showMenu(menu, trigger) {
                clearTimeout(hideTimeout);

                // Hide other menus
                document.querySelectorAll('.simple-menu-content, .services-menu-content').forEach(m => {
                    if (m !== menu) m.classList.remove('show');
                });

                menu.classList.add('show');
                menuOverlay.classList.add('active');
                activeMenu = menu;

                // Add visual feedback
                trigger.style.background = 'rgba(166, 255, 77, 0.08)';
                trigger.style.color = '#a6ff4d';
            }

            // Hide menu function
            function hideMenu() {
                hideTimeout = setTimeout(() => {
                    if (activeMenu) {
                        activeMenu.classList.remove('show');
                        menuOverlay.classList.remove('active');

                        // Remove visual feedback
                        document.querySelectorAll('[id$="Trigger"]').forEach(trigger => {
                            trigger.style.background = '';
                            trigger.style.color = '';
                        });

                        activeMenu = null;
                    }
                }, 150);
            }

            // Cancel hide function
            function cancelHide() {
                clearTimeout(hideTimeout);
            }

            // Sobre Nós Events
            if (sobreNosTrigger && sobreNosMenu) {
                sobreNosTrigger.addEventListener('mouseenter', () => showMenu(sobreNosMenu, sobreNosTrigger));
                sobreNosTrigger.addEventListener('mouseleave', hideMenu);
                sobreNosMenu.addEventListener('mouseenter', cancelHide);
                sobreNosMenu.addEventListener('mouseleave', hideMenu);
            }

            // Comunicação Events
            if (comunicacaoTrigger && comunicacaoMenu) {
                comunicacaoTrigger.addEventListener('mouseenter', () => showMenu(comunicacaoMenu,
                    comunicacaoTrigger));
                comunicacaoTrigger.addEventListener('mouseleave', hideMenu);
                comunicacaoMenu.addEventListener('mouseenter', cancelHide);
                comunicacaoMenu.addEventListener('mouseleave', hideMenu);
            }

            // Serviços Events
            if (servicosTrigger && servicosMenu) {
                servicosTrigger.addEventListener('mouseenter', () => showMenu(servicosMenu, servicosTrigger));
                servicosTrigger.addEventListener('mouseleave', hideMenu);
                servicosMenu.addEventListener('mouseenter', cancelHide);
                servicosMenu.addEventListener('mouseleave', hideMenu);
            }

            // Close on overlay click
            menuOverlay.addEventListener('click', () => {
                if (activeMenu) {
                    activeMenu.classList.remove('show');
                    menuOverlay.classList.remove('active');
                    document.querySelectorAll('[id$="Trigger"]').forEach(trigger => {
                        trigger.style.background = '';
                        trigger.style.color = '';
                    });
                    activeMenu = null;
                }
            });

            // Close on outside click
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.simple-menu-content') &&
                    !e.target.closest('.services-menu-content') &&
                    !e.target.closest('[id$="Trigger"]')) {
                    if (activeMenu) {
                        activeMenu.classList.remove('show');
                        menuOverlay.classList.remove('active');
                        document.querySelectorAll('[id$="Trigger"]').forEach(trigger => {
                            trigger.style.background = '';
                            trigger.style.color = '';
                        });
                        activeMenu = null;
                    }
                }
            });
        });
    </script>

    <script>
        $('.partners-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            dots: true,
            arrows: false,
            responsive: [{
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
                },
            ],
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Animate Js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
     <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69d622447fe6da1c32f57b6a/1jlm7bnbn';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
