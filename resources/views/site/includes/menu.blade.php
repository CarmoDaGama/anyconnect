{{-- resources/views/site/includes/menu.blade.php --}}
<style>


    /* Modern navbar with glassmorphism */
    .navbar-modern {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 25px;
        margin: 20px 0;
        padding: 15px 30px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1050;
    }

    .navbar-modern:hover {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .logo-modern {
        transition: transform 0.3s ease;
    }

    .logo-modern:hover {
        transform: scale(1.05);
    }

    .nav-link-modern {
        color: #333 !important;
        font-weight: 500;
        margin: 0 10px;
        padding: 8px 16px !important;
        border-radius: 20px;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-link-modern:hover,
    .nav-link-modern.active {
        color: #a6ff4d !important;
        background: rgba(166, 255, 77, 0.1);
        transform: translateY(-2px);
    }

    /* Added hover dropdown styles for Serviços and Sobre Nós */
    .hover-dropdown {
        position: relative;
    }

    .hover-dropdown .hover-menu {
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        pointer-events: none;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 280px;
        margin-top: 5px;
    }

    .hover-dropdown:hover .hover-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        pointer-events: all;
    }

    .hover-menu .dropdown-header {
        color: #a6ff4d !important;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 0.75rem 1rem 0.25rem;
        border-bottom: 1px solid rgba(166, 255, 77, 0.2);
        margin-bottom: 0.25rem;
    }

    .hover-menu .dropdown-item {
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 0.25rem 0.5rem;
        display: flex;
        align-items: center;
    }

    .hover-menu .dropdown-item:hover {
        background: rgba(166, 255, 77, 0.1);
        color: #a6ff4d;
        transform: translateX(5px);
    }

    .hover-menu .dropdown-item i {
        width: 20px;
        color: #a6ff4d;
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .hover-menu .dropdown-item:hover i {
        opacity: 1;
        transform: scale(1.1);
    }

    .hover-menu .dropdown-divider {
        margin: 0.5rem 1rem;
        border-color: rgba(166, 255, 77, 0.2);
    }

    .dropdown-modern {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        z-index: 1060;
    }

    .btn-contact-modern {
        background: linear-gradient(135deg, #a6ff4d, #002852);
        color: white;
        border: none;
        border-radius: 25px;
        padding: 12px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(166, 255, 77, 0.3);
    }

    .btn-contact-modern:hover {
        background: linear-gradient(135deg, #002852, #002852);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(166, 255, 77, 0.4);
        color: white;
    }

       @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .hero-stats {
            flex-direction: column;
            gap: 1rem;
        }

        .services-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .service-panel {
            padding: 2rem;
            width: 95%;
        }

        .navbar-modern {
            margin: 10px;
            padding: 10px 20px;
        }

        /* Mobile responsive for hover menus */
        .hover-dropdown .hover-menu {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            pointer-events: all;
            display: none;
            min-width: auto;
            margin-top: 0;
        }

        .hover-dropdown:hover .hover-menu {
            display: block;
        }
    }

    @media (max-width: 576px) {
        .content-modern {
            padding: 0 1rem;
        }

        .hero-title {
            font-size: 2rem;
        }

        .service-card {
            padding: 1.5rem;
        }
    }

    .navbar-toggler-modern {
        border: none;
        padding: 4px 8px;
        background: rgba(166, 255, 77, 0.1);
        border-radius: 8px;
        z-index: 1055;
    }

    .navbar-toggler-modern:focus {
        box-shadow: none;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* news letter  */
</style>

<div class="container-xxl">

    <nav class="navbar navbar-expand-lg mt-4 navbar-anyconnect" style="display: none;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img width="150" src="{{ asset('img/logo-anyconnect.svg') }}" alt="AnyConnect Logo">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Início</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link {{ request()->routeIs('navigation.about') || request()->routeIs('navigation.organigrama') ? 'active' : '' }}"
                            href="#" id="sobreNosTrigger">Sobre Nós</a>

                        <!-- About Menu Content -->
                        <div class="simple-menu-content" id="sobreNosMenu">
                            <div class="simple-menu-items">
                                <a href="{{ route('navigation.about') }}" class="simple-menu-item">
                                    <i class="fas fa-users"></i>Quem Somos
                                </a>
                                <a href="{{ route('navigation.organigrama') }}" class="simple-menu-item">
                                    <i class="fas fa-sitemap"></i>Organigrama
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link {{ request()->routeIs('navigation.noticias') || request()->routeIs('navigation.imprensa') || request()->routeIs('imprensa.show') || request()->routeIs('noticia.show') ? 'active' : '' }}"
                            href="#" id="comunicacaoTrigger">Comunicação</a>

                        <!-- Communication Menu Content -->
                        <div class="simple-menu-content" id="comunicacaoMenu">
                            <div class="simple-menu-items">
                                <a href="{{ route('navigation.noticias') }}" class="simple-menu-item">
                                    <i class="fas fa-newspaper"></i>Notícias
                                </a>
                                <a href="{{ route('navigation.imprensa') }}" class="simple-menu-item">
                                    <i class="fas fa-microphone"></i>Imprensa
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item position-relative">
                        <a class="nav-link {{ request()->routeIs('navigation.services') ? 'active' : '' }}"
                            href="#" id="servicosTrigger">Serviços</a>

                        <div class="services-menu-content" id="servicosMenu">
                            <div class="services-grid">
                                @foreach($categorias as $categoria)
                                <div class="service-category-card">
                                    <h6 class="service-category-title">
                                        <i class="fas fa-folder"></i> {{ $categoria->nome }}
                                    </h6>
                                    <ul class="service-items-list">
                                        @foreach($categoria->servicos as $servico)
                                        <li>
                                            <a href="{{ route('navigation.services') }}#{{ $servico->slug }}">
                                                {{ $servico->title }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('navigation.projects') ? 'active' : '' }}"
                            href="{{ route('navigation.projects') }}">Projectos</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Button -->
            <div class="d-flex">
                <a class="contact-btn-anyconnect" href="{{ route('navigation.contactos') }}">Contactos</a>
            </div>
        </div>
    </nav>
    <!-- Modern navbar with glassmorphism effect -->
    <nav class="navbar navbar-expand-lg navbar-modern">
        <div class="container-fluid">
             <a class="navbar-brand" href="/">
                <img width="150" src="{{ asset('img/logo-anyconnect.svg') }}" alt="AnyConnect Logo">
            </a>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-modern active" href="/">Início</a>
                    </li>
                    <!-- Added hover popover for Sobre Nós -->
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link nav-link-modern dropdown-toggle" href="#" id="sobreNosDropdown" role="button">
                            Sobre Nós
                        </a>
                        <ul class="dropdown-menu dropdown-modern hover-menu" aria-labelledby="sobreNosDropdown">
                            <li><a class="dropdown-item" href="{{ route('navigation.about') }}">Quem Somos</a></li>
                            <li><a class="dropdown-item" href="{{ route('navigation.organigrama') }}">Organigrama</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-modern dropdown-toggle" href="#" id="comunicacaoDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Comunicação
                        </a>
                        <ul class="dropdown-menu dropdown-modern" aria-labelledby="comunicacaoDropdown">
                            <li><a class="dropdown-item" href="{{ route('navigation.noticias') }}">Notícia</a></li>
                            <li><a class="dropdown-item" href="{{ route('navigation.imprensa') }}">Imprensa</a></li>
                        </ul>
                    </li>
                    <!-- Added hover popover for Serviços -->
                    <!-- <li class="nav-item dropdown hover-dropdown">
                                <a class="nav-link nav-link-modern dropdown-toggle" href="{{ route('navigation.services') }}" id="servicosDropdown" role="button">
                                    Serviços
                                </a>
                                <ul class="dropdown-menu dropdown-modern hover-menu" aria-labelledby="servicosDropdown">
                                    <li class="dropdown-header">Conectividade</li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-globe me-2"></i>Internet</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-route me-2"></i>IP Transit</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-network-wired me-2"></i>MPLS Level 2 e 3</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-shield-alt me-2"></i>VPN</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="dropdown-header">Datacenter</li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-cloud me-2"></i>Multiclouds</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-server me-2"></i>Colocation & Hosting</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-mobile-alt me-2"></i></a></li>
                                </ul>
                            </li> -->
                    <li class="nav-item dropdown hover-dropdown">
                        <a class="nav-link nav-link-modern dropdown-toggle" href="{{ route('navigation.services') }}" id="servicosDropdown" role="button">
                            Serviços
                        </a>

                        <ul class="dropdown-menu dropdown-modern hover-menu" aria-labelledby="servicosDropdown">
                            @foreach($categorias as $categoria)
                            <li class="dropdown-header">{{ $categoria->nome }}</li>

                            @foreach($categoria->servicos as $servico)
                            <li>
                                <a class="dropdown-item" href="{{ route('navigation.services') }}/{{ $servico->slug }}">
                                    {{-- aqui podes personalizar o ícone de cada serviço se tiver na tabela --}}
                                    <i class="fas fa-circle me-2"></i>{{ $servico->title }}
                                </a>
                            </li>
                            @endforeach

                            {{-- divisor entre categorias --}}
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @endforeach
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link nav-link-modern" href="{{ route('navigation.projects') }}">Projectos</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex">
                <a class="btn btn-contact-modern" href="{{ route('navigation.contactos') }}">
                    <i class="fas fa-phone me-2"></i>Contactos
                </a>
            </div>

            <button class="navbar-toggler navbar-toggler-modern" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</div>

<!-- Menu Overlay -->
<div class="menu-overlay" id="menuOverlay"></div>