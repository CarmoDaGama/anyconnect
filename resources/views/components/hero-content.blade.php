@once
    <link rel="stylesheet" href="{{ asset('assets/css/components/hero-content.css') }}" />
@endonce

<div class="hero-wrap">
    <div class="grid-overlay"></div>
    <div class="glow glow-1"></div>
    <div class="glow glow-2"></div>

    <!-- Hero -->
    <section class="hero-section">
        <div class="container-xl text-center">
            <span class="badge-pill">
                <span class="badge-dot"></span>
                Soluções tecnológicas avançadas
            </span>

            <h1 class="hero-title">
                Ligamos o Mundo <br />ao <span class="accent">Futuro</span>
            </h1>

            <p class="hero-sub mx-auto">
                Infraestrutura robusta e conectividade inteligente para levar a sua empresa ao próximo nível.
            </p>

            <div class="d-flex justify-content-center btn-group gap-4">
                <a class="btn-primary-ac" href="{{ route('navigation.services') }}">Conheça os Serviços</a>
                <a class="btn-ghost-ac" href="{{ route('navigation.contactos') }}">Fale Connosco</a>
            </div>

            <!-- Stats -->
            <div class="row justify-content-center">
                <div class="col-10 col-md-7">
                    <div class="stats-bar">
                        <div class="row g-0">
                            <div class="col stat-col">
                                <div class="stat-num">99.9%</div>
                                <div class="stat-label mt-1">Uptime</div>
                            </div>
                            <div class="col stat-col">
                                <div class="stat-num">24/7</div>
                                <div class="stat-label mt-1">Suporte</div>
                            </div>
                            <div class="col stat-col">
                                <div class="stat-num">1000+</div>
                                <div class="stat-label mt-1">Clientes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
