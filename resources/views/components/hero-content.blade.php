@once
    <link rel="stylesheet" href="{{ asset('assets/css/components/hero-content.css') }}" />
@endonce

<section class="hero-carousel" aria-label="Destaques da AnyConnect">
    <div id="anyconnectHeroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6500" data-bs-pause="false">
        <div class="carousel-indicators hero-carousel__indicators">
            <button type="button" data-bs-target="#anyconnectHeroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#anyconnectHeroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#anyconnectHeroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide">
                    <img class="hero-slide__bg" src="{{ asset('img/conectividade.jpg') }}" alt="Conectividade empresarial" loading="eager">
                    <div class="hero-slide__overlay"></div>
                    <div class="container-xl hero-slide__content">
                        <span class="hero-pill">Internet e Redes Empresariais</span>
                        <h1 class="hero-title">Conectividade para empresas que nao podem parar.</h1>
                        <p class="hero-sub">Links dedicados, MPLS e VPN com monitorizacao proactiva para manter operacoes sempre disponiveis.</p>
                        <div class="hero-actions">
                            <a class="btn-primary-ac" href="{{ route('navigation.services') }}">Conheca os Servicos</a>
                            <a class="btn-ghost-ac" href="{{ route('navigation.contactos') }}">Falar com Especialista</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-slide">
                    <img class="hero-slide__bg" src="{{ asset('img/datacenter.jpg') }}" alt="Infraestrutura de datacenter" loading="lazy">
                    <div class="hero-slide__overlay"></div>
                    <div class="container-xl hero-slide__content">
                        <span class="hero-pill">Data Center e Cloud</span>
                        <h2 class="hero-title">Infraestrutura segura para escalar com confianca.</h2>
                        <p class="hero-sub">Colocation, hosting e multicloud com suporte local 24/7 para ambientes criticos.</p>
                        <div class="hero-actions">
                            <a class="btn-primary-ac" href="{{ route('navigation.services') }}">Ver Solucoes</a>
                            <a class="btn-ghost-ac" href="{{ route('navigation.projects') }}">Ver Projectos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-slide">
                    <img class="hero-slide__bg" src="{{ asset('img/telefonia.jpg') }}" alt="Comunicacao integrada" loading="lazy">
                    <div class="hero-slide__overlay"></div>
                    <div class="container-xl hero-slide__content">
                        <span class="hero-pill">Comunicacao Integrada</span>
                        <h2 class="hero-title">Tecnologia que aproxima equipas, clientes e resultados.</h2>
                        <p class="hero-sub">Solucoes de voz e dados para melhorar experiencia, produtividade e alcance da sua empresa.</p>
                        <div class="hero-actions">
                            <a class="btn-primary-ac" href="{{ route('navigation.contactos') }}">Solicitar Proposta</a>
                            <a class="btn-ghost-ac" href="{{ route('navigation.about') }}">Sobre a AnyConnect</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev hero-carousel__control" type="button" data-bs-target="#anyconnectHeroCarousel" data-bs-slide="prev" aria-label="Slide anterior">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next hero-carousel__control" type="button" data-bs-target="#anyconnectHeroCarousel" data-bs-slide="next" aria-label="Proximo slide">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>
