@extends('site.layouts.default')

@section('styles')
    <style>
        /* modal */

        /* Estilo da Modal */
        .modal-content {
            border: none;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            /* Sombra elegante */
            background: linear-gradient(135deg, #ffffff, #f8f9fa);
            /* Gradiente sutil */
            overflow: hidden;
        }

        .modal-header {
            border-bottom: none;
            /* Remove a linha de separação */
            background: #87C145;
            /* Cabeçalho com cor moderna */
            color: #fff;
            text-align: center;
        }

        .modal-header h5 {
            flex-grow: 1;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .btn-close {
            filter: brightness(0) invert(1);
            /* Botão branco no fundo colorido */
        }

        .modal-body {
            text-align: center;
            padding: 2rem;
        }

        .modal-body img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }

        .modal-body img:hover {
            transform: scale(1.05);
            /* Zoom suave ao passar o mouse */
        }

        .modal-body p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        .modal-footer {
            border-top: none;
            /* Remove a linha de separação */
            padding: 1rem 2rem;
            justify-content: center;
        }

        .modal-footer button {
            background: #87C145;
            border: none;
            color: #fff;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .modal-footer button:hover {
            background: #87C145;
            /* Tom mais escuro no hover */
        }

        /* end modal */

        .projects-grid {
            column-count: 3;
            /* Número de colunas */
            column-gap: 1rem;
            /* Espaçamento entre colunas */
        }

        .project-item {
            margin-bottom: 1rem;
            /* Espaçamento entre os itens */
            break-inside: avoid;
            /* Evita quebras estranhas */
        }

        .project-item img {
            width: 100%;
            border-radius: 3px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .project-item img:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .projects-grid {
                column-count: 2;
                /* Ajuste para telas menores */
            }
        }

        @media (max-width: 576px) {
            .projects-grid {
                column-count: 1;
                /* Ajuste para telas muito pequenas */
            }
        }
    </style>
@endsection

@section('content')
    <div data-aos="zoom-in" data-aos-duration="1000" class="banner" style="background-image: url(img/bg-pages.svg);">
        <div class="overlay"></div>
        <div class="content">
            <div class="efeito">
                <div style="margin-left: 1px;">
                    <h3>Projectos</h3>
                    <p class="mt-3">Início > Projectos</p>
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

    <section class="container" style="margin-top: 100px; margin-bottom: 150px;">
        <h1 class="text-center">Nossos <span style="color: #87C145;">Projectos</span></h1>
        <p class="text-center text-muted">Desenvolvemos projetos inovadores em telecomunicações, focando em soluções seguras
            e eficientes para atender às necessidades de nossos clientes. Trabalhamos com foco em resultados, ajudando
            empresas a alcançar seus objetivos com tecnologia de ponta.</p>

        <!-- Grade Assimétrica -->
        <div class="projects-grid " style="margin-top: 50px;">
            <!-- Itens do Projeto -->
            @forelse ($projectos as $item)
                <div class="project-item">
                    <img src="{{ asset('storage/' . $item->image) }}" data-bs-toggle="modal" data-bs-target="#projectModal"
                        data-description="{!! $item->description !!}">
                </div>
            @empty

                <div class="project-item">
                    <p>Nenhum projecto encontrado</p>
                </div>
            @endforelse

        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h6 class="modal-title" id="projectModalLabel">Detalhes do Projeto</h6>
                    <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body text-center">
                    <img id="modalImage" class="img-fluid rounded mb-3" alt="Detalhe do Projeto">
                    <p id="modalDescription"></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Adiciona funcionalidade para exibir detalhes dinamicamente
        document.querySelectorAll('.project-item img').forEach((img) => {
            img.addEventListener('click', function() {
                const modalImage = document.getElementById('modalImage');
                const modalDescription = document.getElementById('modalDescription');
                const description = this.getAttribute('data-description');

                modalImage.src = this.src; // Define a imagem na modal
                modalDescription.textContent = description; // Define a descrição
            });
        });
    </script>
@endsection
