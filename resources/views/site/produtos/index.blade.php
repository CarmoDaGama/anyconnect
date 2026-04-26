@extends('site.layouts.default')

@section('styles')
    <style>
        :root {
            --primary-color: #a6ff4d;
            --primary-gradient: linear-gradient(135deg, #a6ff4d 0%, #002852 100%);
            --secondary-color: #002852;
            --text-color: #333;
            --light-bg: #f8fafc;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --card-hover-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            --border-radius: 16px;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .background-container {
            background: linear-gradient(135deg, rgba(166, 255, 77, 0.1) 0%, rgba(0, 40, 82, 0.05) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            background: var(--light-bg);
            border-radius: var(--border-radius);
            padding: 4rem 2rem;
            margin: 2rem 0;
            box-shadow: var(--card-shadow);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .section-title {
            text-align: center;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: var(--text-color);
            margin-bottom: 1rem;
            position: relative;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        .subtitle {
            color: #4b4b4b;
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 3rem;
            text-align: center;
        }

        .service-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            border: none;
            height: 100%;
            position: relative;
            cursor: pointer;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-gradient);
            transform: scaleX(0);
            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--card-hover-shadow);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: var(--transition);
        }

        .service-card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--text-color);
            margin-bottom: 0.75rem;
        }

        .card-text {
            color: #4b4b4b;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .card-link {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
        }

        .card-link:hover {
            color: #002852;
            transform: translateX(5px);
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .hero-text {
            flex: 1;
            min-width: 300px;
        }

        .hero-title {
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 800;
            color: var(--text-color);
            margin-bottom: 1rem;
        }

        .hero-description {
            color: #4b4b4b;
            line-height: 1.7;
            font-size: 1.1rem;
        }

        .hero-image {
            flex: 1;
            text-align: center;
            min-width: 300px;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 30px rgba(166, 255, 77, 0.2));
        }

        .breadcrumb-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .breadcrumb-line {
            width: 4px;
            height: 60px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }

        .breadcrumb-content h3 {
            font-weight: 800;
            color: var(--text-color);
            margin: 0;
            font-size: 1.8rem;
        }

        .breadcrumb-content p {
            color: #4b4b4b;
            margin: 0.5rem 0 0 0;
        }

        .cta-button {
            background: var(--primary-gradient);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(166, 255, 77, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(166, 255, 77, 0.4);
            color: white;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .tag-line {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 2rem 1rem;
            }
            
            .hero-content {
                flex-direction: column;
                text-align: center;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }

        /* Animações */
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        .slide-up {
            animation: slideUp 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(30px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Header -->
    <div data-aos="zoom-in" data-aos-duration="1000" class="container-fluid background-container">
        <div class="container py-5">
            <div class="breadcrumb-section">
                <div class="breadcrumb-line"></div>
                <div class="breadcrumb-content">
                    <h3>Serviços</h3>
                    <p>Início > Serviços</p>
                </div>
            </div>
            
            <div class="d-flex justify-content-end">
                <a href="{{ route('navigation.about') }}" class="cta-button">
                    Sobre Nós <i class="far fa-lightbulb"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="container my-5">
        <div class="hero-section fade-in">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="tag-line">
                        <img src="{{ asset('svg/line.svg') }}" alt="" width="20">
                        <span>Serviços</span>
                    </div>
                    <h2 class="hero-title">Ligamos-te ao futuro</h2>
                    <p class="hero-description">
                        Com as nossas soluções inovadoras em telecomunicações, estamos prontos para conectar você ao futuro digital. Por meio de tecnologias avançadas e uma infraestrutura segura, garantimos a melhor experiência em comunicações e conectividade para o seu negócio.
                    </p>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('img/world-image.svg') }}" alt="Conectividade Global" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="container my-5 slide-up">
        <div class="section-title">Nossos Serviços</div>
        <p class="subtitle">
            Com foco em inovação, segurança e eficiência, garantimos uma experiência única e confiável, apoiando o crescimento e o desenvolvimento dos negócios com tecnologias avançadas.
        </p>

        <div class="services-grid">
            @foreach ($services as $item)
                <div class="service-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <a href="{{ route('servico.show', $item->slug) }}" class="text-decoration-none">
                        <img src="{{ asset('storage/'.$item->cover) }}" class="card-img-top" alt="{{ $item->title }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{!! str()->limit($item->content, 120) !!}</p>
                        <a href="{{ route('servico.show', $item->slug) }}" class="card-link">
                            Ver mais <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection