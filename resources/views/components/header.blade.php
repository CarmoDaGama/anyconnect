@once
    <link rel="stylesheet" href="{{ asset('assets/css/components/header.css') }}?v={{ config('app.version', '1.0') }}" />
@endonce

@php
    $categorias = $categorias ?? collect();

    if ($categorias->isEmpty()) {
        $categorias = \Illuminate\Support\Facades\DB::table('categorias')
            ->orderBy('id')
            ->get()
            ->map(function ($categoria) {
                $categoria->servicos = \Illuminate\Support\Facades\DB::table('servicos')
                    ->join('categoria_servico', 'servicos.id', '=', 'categoria_servico.servico_id')
                    ->where('categoria_servico.categoria_id', $categoria->id)
                    ->select('servicos.id', 'servicos.slug', 'servicos.title')
                    ->orderBy('servicos.title')
                    ->get();

                return $categoria;
            });
    }
@endphp

<header class="site-header" role="banner">
    <nav class="nav" aria-label="Navegação principal">
        <div class="nav__container">

            {{-- Logo --}}
            <a class="nav__brand" href="/" aria-label="AnyConnect — Página inicial">
                <img src="{{ asset('img/logo-anyconnect.svg') }}" alt="AnyConnect" class="nav__logo" width="150"
                    height="40" loading="eager">
            </a>

            {{-- Links principais --}}
            <ul class="nav__list" role="list" id="nav-list">
                <li class="nav__item">
                    <a class="nav__link nav__link--active" href="/" aria-current="page">Início</a>
                </li>

                {{-- Dropdown: Sobre Nós --}}
                <li class="nav__item nav__item--dropdown">
                    <button class="nav__link nav__trigger" aria-expanded="false" aria-haspopup="true"
                        aria-controls="dropdown-sobre" id="trigger-sobre" type="button">
                        Sobre Nós
                        <span class="nav__chevron" aria-hidden="true"></span>
                    </button>
                    <ul class="nav__dropdown" id="dropdown-sobre" role="list" aria-labelledby="trigger-sobre">
                        <li>
                            <a class="nav__dropdown-item" href="{{ route('navigation.about') }}">Quem Somos</a>
                        </li>
                        <li>
                            <a class="nav__dropdown-item" href="{{ route('navigation.organigrama') }}">Organigrama</a>
                        </li>
                    </ul>
                </li>

                {{-- Dropdown: Comunicação --}}
                <li class="nav__item nav__item--dropdown">
                    <button class="nav__link nav__trigger" aria-expanded="false" aria-haspopup="true"
                        aria-controls="dropdown-comunicacao" id="trigger-comunicacao" type="button">
                        Comunicação
                        <span class="nav__chevron" aria-hidden="true"></span>
                    </button>
                    <ul class="nav__dropdown" id="dropdown-comunicacao" role="list"
                        aria-labelledby="trigger-comunicacao">
                        <li>
                            <a class="nav__dropdown-item" href="{{ route('navigation.noticias') }}">Notícias</a>
                        </li>
                        <li>
                            <a class="nav__dropdown-item" href="{{ route('navigation.imprensa') }}">Imprensa</a>
                        </li>
                    </ul>
                </li>

                {{-- Dropdown: Serviços (dinâmico) --}}
                <li class="nav__item nav__item--dropdown">
                    <button class="nav__link nav__trigger" aria-expanded="false" aria-haspopup="true"
                        aria-controls="dropdown-servicos" id="trigger-servicos" type="button">
                        Serviços
                        <span class="nav__chevron" aria-hidden="true"></span>
                    </button>
                    <ul class="nav__dropdown nav__dropdown--wide" id="dropdown-servicos" role="list" aria-labelledby="trigger-servicos">
                        @foreach ($categorias as $categoria)
                            <li class="nav__dropdown-group">
                                <span class="nav__dropdown-label">{{ $categoria->nome }}</span>
                                <ul role="list">
                                    @foreach ($categoria->servicos as $servico)
                                        <li>
                                            <a class="nav__dropdown-item" href="{{ route('navigation.services') }}/{{ $servico->slug }}">
                                                <svg class="nav__dropdown-icon" aria-hidden="true" width="6" height="6" viewBox="0 0 6 6">
                                                    <circle cx="3" cy="3" r="3" fill="currentColor" />
                                                </svg>
                                                {{ $servico->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="{{ route('navigation.projects') }}">Projectos</a>
                </li>
            </ul>

            {{-- CTA --}}
            <a class="nav__cta" href="{{ route('navigation.contactos') }}" aria-label="Ir para página de contactos">
                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5">
                    <path
                        d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
                </svg>
                Contactos
            </a>

            {{-- Hamburger --}}
            <button class="nav__hamburger" type="button" aria-expanded="false" aria-controls="nav-list"
                aria-label="Abrir menu de navegação" id="nav-hamburger">
                <span class="nav__hamburger-bar" aria-hidden="true"></span>
                <span class="nav__hamburger-bar" aria-hidden="true"></span>
                <span class="nav__hamburger-bar" aria-hidden="true"></span>
            </button>
        </div>
    </nav>

    <script>
        (function() {
            'use strict';

            const nav = document.querySelector('.nav');
            const hamburger = document.getElementById('nav-hamburger');
            const navList = document.getElementById('nav-list');
            const triggers = document.querySelectorAll('.nav__trigger');

            if (!nav) return;

            function openDropdown(trigger) {
                const dropdown = document.getElementById(trigger.getAttribute('aria-controls'));
                if (!dropdown) return;

                trigger.setAttribute('aria-expanded', 'true');
                dropdown.classList.add('is-open');
            }

            function closeDropdown(trigger) {
                const dropdown = document.getElementById(trigger.getAttribute('aria-controls'));
                if (!dropdown) return;

                trigger.setAttribute('aria-expanded', 'false');
                dropdown.classList.remove('is-open');
            }

            function closeAllDropdowns(exceptTrigger = null) {
                triggers.forEach(function(t) {
                    if (t !== exceptTrigger) {
                        closeDropdown(t);
                    }
                });
            }

            function isMobile() {
                return window.matchMedia('(max-width: 991px)').matches;
            }

            triggers.forEach(function(trigger) {
                trigger.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const isOpen = trigger.getAttribute('aria-expanded') === 'true';

                    closeAllDropdowns(trigger);

                    if (isOpen) {
                        closeDropdown(trigger);
                    } else {
                        openDropdown(trigger);
                    }
                });
            });

            triggers.forEach(function(trigger) {
                const parent = trigger.closest('.nav__item--dropdown');
                if (!parent) return;

                let hoverTimer = null;

                parent.addEventListener('mouseenter', function() {
                    if (isMobile()) return;
                    clearTimeout(hoverTimer);
                    closeAllDropdowns(trigger);
                    openDropdown(trigger);
                });

                parent.addEventListener('mouseleave', function() {
                    if (isMobile()) return;
                    hoverTimer = setTimeout(function() {
                        closeDropdown(trigger);
                    }, 120);
                });
            });

            nav.addEventListener('keydown', function(e) {
                const target = e.target;

                // Escape — fecha tudo
                if (e.key === 'Escape') {
                    const openTrigger = Array.from(triggers).find(
                        t => t.getAttribute('aria-expanded') === 'true'
                    );
                    if (openTrigger) {
                        closeDropdown(openTrigger);
                        openTrigger.focus();
                    } else if (!isMobile() || navList.classList.contains('is-open')) {
                        closeMenuMobile();
                    }
                    return;
                }

                if (e.key === 'Tab') {
                    setTimeout(function() {
                        const active = document.activeElement;
                        const insideNav = nav.contains(active);
                        if (!insideNav) {
                            closeAllDropdowns();
                        }
                    }, 0);
                }

                if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                    const dropdown = target.closest('.nav__dropdown');
                    if (!dropdown) return;

                    e.preventDefault();
                    const items = Array.from(dropdown.querySelectorAll('.nav__dropdown-item'));
                    const idx = items.indexOf(target);
                    const next = e.key === 'ArrowDown' ?
                        items[idx + 1] || items[0] :
                        items[idx - 1] || items[items.length - 1];

                    next && next.focus();
                }
            });

            document.addEventListener('click', function(e) {
                if (!nav.contains(e.target)) {
                    closeAllDropdowns();

                    if (isMobile()) {
                        closeMenuMobile();
                    }
                }
            });

            function openMenuMobile() {
                navList.classList.add('is-open');
                hamburger.setAttribute('aria-expanded', 'true');
                hamburger.setAttribute('aria-label', 'Fechar menu de navegação');
            }

            function closeMenuMobile() {
                navList.classList.remove('is-open');
                hamburger.setAttribute('aria-expanded', 'false');
                hamburger.setAttribute('aria-label', 'Abrir menu de navegação');
                closeAllDropdowns();
            }

            hamburger && hamburger.addEventListener('click', function() {
                const isOpen = navList.classList.contains('is-open');
                isOpen ? closeMenuMobile() : openMenuMobile();
            });

            window.addEventListener('resize', function() {
                if (!isMobile()) {
                    closeMenuMobile();
                }
            });

            let ticking = false;

            window.addEventListener('scroll', function() {
                if (!ticking) {
                    requestAnimationFrame(function() {
                        if (window.scrollY > 10) {
                            nav.classList.add('is-scrolled');
                        } else {
                            nav.classList.remove('is-scrolled');
                        }
                        ticking = false;
                    });
                    ticking = true;
                }
            }, {
                passive: true
            });
        })();
    </script>
</header>
