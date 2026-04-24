@extends('site.layouts.default')

@section('content')
    <div data-aos="zoom-in" data-aos-duration="1000" class="banner" style="background-image: url({{ asset('img/bg-pages.svg') }});">
        <div class="overlay"></div>
        <div class="content">
            <div class="efeito">
                <div style="margin-left: 1px;">
                    <h3>Quem Somos</h3>
                    <p class="mt-3">Início > Sobre Nós </p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div></div>
                <a href="{{ route('navigation.services') }}" class="text-center">
                    Produtos e Serviços
                    <i style="ml-2" class="far fa-lightbulb"></i>
                </a>
            </div>
        </div>
    </div>

    <section class="quem-somos">
        <img src="{{ asset('img/image-about-us.svg') }}" />
        <div>
            <h1>Quem Somos?</h1>
            <p>
                Somos uma operadora de telecomunicações licenciada pelo
                INACOM, oferecendo serviços como telefonia móvel virtual, internet, datacenter, telefonia PSTN, redes
                privadas, IPTV e streaming. Com infraestrutura de fibra óptica, LTE, satélite e vídeo-on-demand,
                garantimos conectividade segura. Nosso Data Center fornece serviços como colocação, hospedagem em nuvem,
                VoIP e VPN-MPLS, desenvolvidos por engenheiros qualificados. Trabalhamos 24/7 com uma equipe técnica
                especializada, dedicada a tornar as comunicações empresariais mais eficientes, atendendo às demandas do
                mercado em Angola e no mundo, com inovação e compromisso.
            </p>
            <div class="options">
                <span>
                    <i class="fa-solid fa-wifi"></i>
                    Conectividade
                </span>
                <span>
                    <i class="fa-solid fa-lightbulb"></i>
                    Inovação
                </span>
                <span>
                    <i class="fa-solid fa-microchip"></i>
                    Tecnologia
                </span>
                <span>
                    <i class="fa-solid fa-arrows-to-circle"></i>
                    Expansão
                </span>
            </div>

        </div>
    </section>

    <div class="container py-5">
        <div class="row gx-4 d-flex justify-content-center align-items-center text-center">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                data-aos-duration="2000">
                <div class="p-3" style="box-shadow: 0px 10px 15px 8px rgba(242, 242, 242, 1); border-radius: 10px;">
                    <img src="{{ asset('svg/Goal_one.svg') }}" alt class="mb-3 mr-1">
                    <p>Prover a comunicação de forma inteligente e simples e
                        fornecer serviços de alto valor agregado e com
                        excelência no relacionamento com os clientes e
                        parceiros.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                data-aos-duration="2500">
                <div class="p-3" style="box-shadow: 0px 10px 15px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <img src="{{ asset('svg/Eye_one.svg') }}" alt class=" mb-3">
                    <p>Alcançar marcos históricos de inovação constante
                        através das nossas soluções tecnológicas e serviços
                        para que os nossos parceiros superem positivamente
                        as expectativas dos clientes ano após ano.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                data-aos-duration="3000">
                <div class="p-3" style="box-shadow: 0px 10px 15px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <img src="{{ asset('svg/valores_one.svg') }}" alt class="mb-3">
                    <p>Fomentar a colaboração e trabalho em equipe,
                        valorizando a diversidade de ideias e experiências
                        para alcançar objetivos comuns.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <!-- Imagem principal (CEO Message) -->
            <div class="col-lg-8 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                data-aos-duration="2000">
                <img class="img-fluid" src="{{ asset('img/ceo-message.svg') }}" alt="Mensagem do CEO">
            </div>
            <!-- Imagem secundária (Max Image) -->
            <div class="col-lg-4 col-md-6 col-sm-12 text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                data-aos-duration="2300">
                <img class="img-fluid" src="{{ asset('img/max-image.svg') }}" alt="Imagem adicional">
            </div>
        </div>
    </div>

    <div class="data-center">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
            <h1>Nosso Data Center</h1>
            <p>
                Nosso Data Center é projetado para oferecer alta
                eficiência, segurança e escalabilidade. Com uma infraestrutura robusta e moderna, garantimos o
                armazenamento seguro e o processamento eficiente dos dados.
                Nosso ambiente é preparado para suportar grandes volumes de informações, com capacidade para atender às
                necessidades dos mais variados negócios. A localização estratégica permite acesso rápido e seguro aos
                dados, proporcionando a melhor experiência possível para nossos clientes.
                Além disso, trabalhamos com as melhores práticas de segurança, assegurando que seus dados estejam sempre
                protegidos contra ameaças internas e externas.
            </p>
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
            <img class="img-fluid" src="{{ asset('img/datacenter-image.svg') }}" alt="imagem do data cebter" />
        </div>
    </div>

    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        <div class="promocoes">
            <h2 class="text-center">Receba Promoções</h2>
            <p class="text-center">Participe das nossas promoções exclusivas e esteja sempre atualizado com as melhores
                ofertas.</p>
            <form>
                <input type="email" placeholder="Insira seu melhor e-mail">
                <button class="btn">Subscrever</button>
            </form>
        </div>
    </div>
@endsection
